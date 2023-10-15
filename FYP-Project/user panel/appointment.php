<?php
include ('./include/connection.php');
session_start();
if( empty($_SESSION['user_Email']) ){
    header("location:../admin panel/login.php");
}
$appoin=$_SESSION['user_Email'];
// $lawyer=$_SESSION['lawyerid'];

$sql="SELECT * FROM `users-rec` where `user_Email`='$appoin'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['sub'])){
    $client_name=mysqli_real_escape_string($conn,$_POST['client_name']);
    $client_cnic=mysqli_real_escape_string($conn,$_POST['client_cnic']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $contact_number=mysqli_real_escape_string($conn,$_POST['contact_number']);
    $Ref_Name=mysqli_real_escape_string($conn,$_POST['Ref_Name']);
    $Ref_No=mysqli_real_escape_string($conn,$_POST['Ref_No']);
    $client_email=mysqli_real_escape_string($conn,$_POST['client_email']);
    $state=mysqli_real_escape_string($conn,$_POST['state']);
    $district=mysqli_real_escape_string($conn,$_POST['district']);
    $full_address=mysqli_real_escape_string($conn,$_POST['full_address']);
    $description=mysqli_real_escape_string($conn,$_POST['description']);
    $case_category=mysqli_real_escape_string($conn,$_POST['case_category']);
    $lawyer_name=mysqli_real_escape_string($conn,$_POST['lawyer_name']);
    $datetime=mysqli_real_escape_string($conn,$_POST['datetime']);
    $statuss="unaccepted";
    $appoin_date=date("m-d-y");
    $ssql="SELECT * FROM `users-rec` WHERE `user_Email`='$client_email' and `assign_lawyer`='$lawyer_name'";
    $srun=mysqli_query($conn,$ssql);
    if(mysqli_num_rows($srun)>0){
		$asql="INSERT INTO `appointment-rec` (`client_name` , `client_cnic`,`gender` ,`contact_number`,`Ref_Name`,`Ref_No`,`client_email`,`state`,`district`,`full_address`,`description`,`case_category`,`lawyer_name`,`datetime`,`statuss`,`appoin_date`) VALUES ('$client_name','$client_cnic','$gender','$contact_number','$Ref_Name','$Ref_No','$client_email','$state','$district','$full_address','$description','$case_category','$lawyer_name','$datetime','$statuss','$appoin_date') ";
		$arun=mysqli_query($conn,$asql);
		if($arun){
			echo "<script>alert('Appointment Request has been sent Plz wait for Confirmation Mail')</script>";
			header("Refresh:0, url=./index.php");
		}else{
			echo "<script>alert('Appointment Request has not been sent')</script>";
		}
    }else{
		$asql="INSERT INTO `appointment-rec` (`client_name` , `client_cnic`,`gender` ,`contact_number`,`Ref_Name`,`Ref_No`,`client_email`,`state`,`district`,`full_address`,`description`,`case_category`,`lawyer_name`,`datetime`,`statuss`,`appoin_date`) VALUES ('$client_name','$client_cnic','$gender','$contact_number','$Ref_Name','$Ref_No','$client_email','$state','$district','$full_address','$description','$case_category','$lawyer_name','$datetime','$statuss','$appoin_date') ";
		$arun=mysqli_query($conn,$asql);
		if($arun){
			echo "<script>alert('Appointment Request has been sent for a lawyer Plz wait for Confirmation Mail')</script>";
			header("Refresh:0, url=./index.php");
		}else{
			echo "<script>alert('U alredy appoint a lawyer plz! change the lawyer')</script>";
			header("Refresh:0, url=./appointment.php");
		}
}
}

include ('./include/header.php');
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
			<div class="container mt-5 badge-light p-3">
				<div class="row">
					<div class="col-md-6">
						<h1>Hello User <i class="fas fa-user-tie"></i> !!</h1></br></br>
						<h2>please Fill This For Send Request Of Appointment <i class="fas fa-hand-point-right"></i></h2>
					</div>
					<div class="col-md-6">
						<form   method="post" enctype="multipart/form-data"  id="validateForm">
							<div class="form-row">
								<div class="form-group col-md-6">
                                <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" value="<?php echo $fet['first_name']; ?>" readonly/>
								</div>
								<div class="form-group col-md-6">
                                <label for="cnic" class="form-label">CNIC</label>
                            <input type="number" class="form-control" id="client_cnic" name="client_cnic" />
								</div>
							</div>
                            <div class="form-row">
								<div class="form-group col-md-6">
                                <label  class="form-label">Gender</label>
                            <select class="form-select mb-3 form-control" aria-label="Default select example" name="gender" >
                         <option value="" disabled selected>Gender</option>
                        <option value="male"> Male</option>
                        <option value="female">Female</option>
                            </select>
								</div>
								<div class="form-group col-md-6">
								<label for="phoneno" class="form-label">Contact Number</label>
                            <input type="number" class="form-control" id="contact_number" name="contact_number"
                            value="<?php echo $fet['contact_number']; ?>" readonly>
								</div>
							</div>
                            <div class="form-row">
								<div class="form-group col-md-6">
                                <label for="phoneno" class="form-label">Referance Name</label>
                            <input type="text" class="form-control" id="Ref_Name" name="Ref_Name"/>
								</div>
								<div class="form-group col-md-6">
                                <label for="phoneno" class="form-label">Refrence No.</label>
                            <input type="number" class="form-control" id="Ref_No" name="Ref_No" />
								</div>
							</div>
							<div class="form-group">
								
							</div>
                            <div class="form-row">
								<div class="form-group col-md-6">
                                <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="client_email" name="client_email"
                                aria-describedby="emailHelp" value="<?php echo $fet['user_Email']; ?>" readonly/>
								</div>
								<div class="form-group col-md-6">
                                <label  class="form-label">State</label>
                            <select class="form-select mb-3 form-control" aria-label="Default select example" name="state">
                                <option ></option>
                                <option >Jaranwala</option>
                                <option >nshataabad</option>
                                <option >shah kout</option>
                            </select>
								</div>
							</div>
							
							<div class="form-row">
								<div class="form-group col-md-6">
                                <label class="form-label">District</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="district">
                                <option selected>Choose district</option>
                                <option >FSD</option>
                                <option >LHR</option>
                                <option >Sargodha</option>
                                <option >Gujranwala</option>
                            </select>
								</div>
								<div class="form-group col-md-6">
                                <label class="form-label" for="password">Address</label>
                            <input type="text" class="form-control" id="full_address" name="full_address" value="<?php echo $fet['full_address']; ?>" readonly/>
								</div>
								<div class="form-group col-md-12">
                                <label class="form-label">Description</label>
                            <textarea class="form-control" aria-label="With textarea" name="description" value="write few words about case" ></textarea>
								</div>
							</div>
                            <div class="form-row">
								<div class="form-group col-md-6">
                                <label class="form-label">Select Case Category</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="case_category">
                                <option selected>Choose Case Category</option>
                                <?php 
                                $ssql="SELECT * FROM `case-type`";
                                $srun=mysqli_query($conn,$ssql);
                                while($sfet=mysqli_fetch_assoc($srun)){
                                    ?>
                                <option value="<?php echo $sfet['caseid'] ?>"><?php echo $sfet['casetype']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
								</div>
							
							<div class="form-group col-md-6">
                            <label class="form-label">Choose Lawyer</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="lawyer_name">
                                <option selected>Choose Lawyer</option>
                                <?php 
                                $lsql="SELECT * FROM `lawyers-rec` where `status`='approved'";
                                $lrun=mysqli_query($conn,$lsql);
                                while($lfet=mysqli_fetch_assoc($lrun)){
                                    ?>
                                <option value="<?php echo $lfet['lawyerid'] ?>"><?php echo $lfet['first_Name']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
							</div>
                            </div>
						<div class="form-group">
                        <label for="datetime" class="form-label">Time for appointment</label>
                            <input type="datetime-local" class="form-control" id="datetime" name="datetime"
                                aria-describedby="emailHelp"/>
                        </div>
							<div class="form-group">
								<div class="form-check">

									<input id="accept" name="agree" type="checkbox" value="y" /><strong>I Agree with terms & conditions </strong>
								</div>
							</div>
							<input name="sub" type="submit" class="btn btn-block btn-dark" value="Sent Request" />
							<!--after signup redirect lawyer dashboard page-->
						</form>
					</div>
				</div>
			</div>
		</section>
		



		<!-- Optional JavaScript -->
		<!-- jQuery -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

		

	</body>
</html>

    <!-- Form End -->
<?php include ('./include/footer.php'); ?>