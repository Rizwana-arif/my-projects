<?php
include ('./include/connection.php');
session_start();
if(isset($_POST['login'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  $sql="SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(mysqli_num_rows($run)==1 && $fet['estatus']=="admin"){
	$password=$fet['password'];
      $_SESSION['email']=$email;
	  $_SESSION['password']=$password;
      $_SESSION['estatus']="admin";
      header("location:./index.php");
    }
  else{
      $lsql="SELECT * FROM `lawyers-rec` WHERE `lawyer_email`='$email' AND `password`='$password' ";
     $lrun=mysqli_query($conn,$lsql);
     $lfet=mysqli_fetch_assoc($lrun);
    
     if(mysqli_num_rows($lrun)==1 && $lfet['estatus']=="lawyer" ){
          $lawyerid=$lfet['lawyerid'];
		  $password=$lfet['password'];
		  $reg_id=$lfet['reg_id'];
           $_SESSION['lawyer_email']=$email;
         $_SESSION['estatus']="lawyer";
		 $_SESSION['profile_image']=$image;
		//  $_SESSION['first_Name']=$name;
         $_SESSION['lawyerid']=$lawyerid;
		 $_SESSION['password']=$password;
           header("location:./index.php");
         }
        else{
                $sql="SELECT * FROM `users-rec` WHERE `user_Email`='$email' AND `password`='$password'";
                $run=mysqli_query($conn,$sql);
                $fet=mysqli_fetch_assoc($run);
                
                if(mysqli_num_rows($run)==1 && $fet['estatus']=="user" ){
					$password=$fet['password'];
                      $_SESSION['user_Email']=$email;
                      $userid=$fet['userid'];
					  $u_name=$fet['first_name'];
					  $image=$fet['image'];
                    //   $id=$_SESSION['cemail'];
					$_SESSION['password']=$password;
                      $_SESSION['userid']=$userid;
					  $_SESSION['first_name']=$u_name;
					  $_SESSION['image']=$image;
                      $_SESSION['estatus']="user";
                      header("location:../user panel/index.php");
                    }else{
                      $usql="SELECT * FROM `user-role-rec` WHERE `uemail`='$email' AND `password`='$password'";
                      $urun=mysqli_query($conn,$usql);
                      $ufet=mysqli_fetch_assoc($urun);
                      @$teamid=$ufet['uroleid'];
                      if(mysqli_num_rows($urun)==1 && $ufet['estatus']=="team" ){
                        $teamid=$ufet['uroleid'];
                        $_SESSION['uroleid']=$teamid;
                        $_SESSION['estatus']="team";
                      $_SESSION['uemail']=$email; 
                      $_SESSION['uroleid']=$teamid;
                      header("location:./index.php");
                    }
         else {
          echo "
          <div style='margin-left:30%; margin-right:30% ; margin-top:2%'>
            <div class='alert alert-danger alert-dismissible'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              Sorry User ...<strong>Wrong!</strong> Email or Password.
            </div>
          </div>";
      }
}

}
}
  }


?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style2.css">
		<link rel="stylesheet" href="css/media.css">
		<title>Log In here</title>
<style>
  .has-error .help-block {
  color: red;
}
  </style>

	</head>
	<body>
	
		<section class="registerform">
		
      
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						
            <img src="../user panel/img/faqs.jpg" width="500px" height="500px" alt="Image">
					</div>
					<div class="col-md-6">
						<form  method="POST"  id="validateForm">
              <h2>Hello !!! <i class="fas fa-hand-paper"></i></h2><hr/>
						<h4>Login here to find suitable lawyers or User Request <i class="fas fa-hand-point-right"></i></h4>
    </br></br></br>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter your Valid Email address">
							</div>
							<div class="form-group">
								<label for="num">Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Enter your  Valid Password">
							</div>

							<input name="login" type="submit" class="btn btn-block btn-dark" value="Login" />
							<!--after signup redirect user dashboard page-->
						</form>
					</div>
				</div>
			</div>
		</section>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

		<script>
			$('#validateForm').bootstrapValidator({
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					email: {
						validators: {
							notEmpty: {
								message: 'Please Enter your email address'
							},
							emailAddress: {
								message: 'Please Enter a valid email address'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'Please Enter Your Password'
							}
						}
					},
				}
			});

		</script>

	</body>
</html>
