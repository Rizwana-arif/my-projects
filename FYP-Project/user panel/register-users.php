<?php
include ('./include/connection.php');
// session_start();
// if(empty($_SESSION['email']) && empty($_SESSION['cemail']) && empty($_SESSION['uemail'])){
//     header("location:../admin panel/login.php");
// }
if(isset($_POST['sub'])){
    $first_Name=mysqli_real_escape_string($conn,$_POST['first_Name']);
    $last_Name=mysqli_real_escape_string($conn,$_POST['last_Name']);
    $user_Email=mysqli_real_escape_string($conn,$_POST['user_Email']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
    $contact_number=mysqli_real_escape_string($conn,$_POST['contact_number']);
	@$image=$_FILES['image']['name'];
    $full_address=mysqli_real_escape_string($conn,$_POST['full_address']);
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $zip_code=mysqli_real_escape_string($conn,$_POST['zip_code']);
    $agree=mysqli_real_escape_string($conn,$_POST['agree']);   
	$estatus="user";
	$assign_lawyer="";
    $a=strtolower(pathinfo($image,PATHINFO_EXTENSION));
    $arr=array("jpg" , "jpeg" ,"png");
    if(in_array($a,$arr)){
        $rand=rand(10000,999999);
        $pic=$image."." .$rand. ".".$a;
        $sql="INSERT INTO `users-rec` (`first_Name`,`last_Name`,`user_Email`,`password`,`contact_number`,`image`,`full_address`,`city`,`zip_code`,`agree`,`estatus`,`assign_lawyer`) VALUES ('$first_Name','$last_Name','$user_Email','$password','$contact_number','$pic','$full_address','$city','$zip_code','$agree','$estatus','$assign_lawyer')";
        $run=mysqli_query($conn,$sql);
        if($run){
            move_uploaded_file($_FILES['image']['tmp_name'],"../admin panel/data/user-img/".$pic);
            echo "<script type= 'text/javascript'>MySucessFn();</script>";
            header("Refresh:0, url=./register-users.php");
        }
        else{
			echo "<script type= 'text/javascript'>MyCheckFn();</script>";
        }
    }else{
        echo "<script>alert('Image is invalid')</script>";

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
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
		<title>Log In here</title>
		<style>
  .has-error .help-block {
  color: red;
}
section{
    margin-top: 3%;
}
  </style>
		
	</head>
	<body>
		
		<section class="registerform">
			<div class="container bg-light">
				<div class="row">
					<div class="col-md-6 mt-5">
						<h1>Hello !!! <i class="fas fa-hand-paper"></i></h1></br></br></br>
						<h3>Register here to find suitable lawyers <i class="fas fa-hand-point-right"></i></h3>
					</div>
					<div class="col-md-6 mt-5">
						<form  method="POST" enctype="multipart/form-data" id="validateForm">
							
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="fname">First Name</label>
									<input type="text" class="form-control" name="first_Name"  id="first_Name" placeholder="first name">
								</div>
								<div class="form-group col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" class="form-control" name="last_Name"  id="last_Name" placeholder="last name">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="user_Email" id="user_Email" placeholder="email address">
								</div>
								<div class="form-group col-md-6">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Password">
								</div>
							</div>
							
							<div class="form-group">
								<label for="num">Contact Number</label>
								<input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="contact number">
							</div>
							<div class="form-group">
								<label for="num">Image</label>
								<input type="file" class="form-control" name="image" id="image"   >
							</div>
							
							<div class="form-row"><label for="edu"><small>Put Your address here </small></label></div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="address">Full Address</label>
									<input type="text" class="form-control" name="full_address" id="full_address" placeholder="full address">
								</div>
								<div class="form-group col-md-3">
									<label for="city">City</label>
									<select id="city" name="city" class="form-control">
										<option  selected>Choose...</option>
										<option >Faisalabad</option>
										<option >Gujrat</option>
										<option >Lahore</option>
										<option >Islamabad</option>
										<option >Karachi</option>
										<option >Sialkot</option>
										<option >Gujranwala</option>
										<option >Peshawar</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="zip">Zip code</label>
									<input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="zip code">
								</div>
							</div>
							
							
							<div class="form-group">
								<div class="form-check">
									
									<input id="accept" name="agree" type="checkbox" value="y" /><strong>I Agree with terms & conditions </strong>
								</div>
							</div>
							<input name="sub" type="submit" class="btn btn-block btn-dark"  value="Register" />
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
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				first_Name: {
					validators: {
						stringLength: {
							min: 3,
							message: 'Please Enter your First name with minimum 3 letters length',
						},
						notEmpty: {
							message: 'Please Enter your First name'
						}
					}
					},
					last_Name: {
						validators: {
							stringLength: {
								min: 3,
								message: 'Please Enter your Last name with minimum 3 letters length',
							},
							notEmpty: {
								message: 'Please Enter your Last name'
							}
						}
					},
					user_Email: {
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
            					message: 'Please enter your password'
       						 },
        				stringLength: {
           					 min: 8, // Minimum length requirement
           					 message: 'Your password must be at least 8 characters long'
        					},
        				regexp: {
           					 regexp: /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/,
            				message: 'Your password must contain at least one uppercase letter, one lowercase letter, one number, and one special character'
        					},
       					 // Add additional validators as needed, such as history checks or 2FA enforcement
    					}
					},
					contact_number: {
						validators: {
							stringLength: {
								min: 11,
								max:11,
								message: 'Contract Number Must be 11 Digit',
							},
							numeric: {
								message: 'The phone no must be a number'
							},
							notEmpty: {
								message: 'Please Enter your phone number'
							}
						}
					},
					image: {
						validators: {
							notEmpty: {
								message: 'Please Upload Your Image'
							}
						}
					},
					full_address: {
						validators: {
							notEmpty: {
								message: 'Please Upload Your Image'
							}
						}
					},
					zip_code: {
						validators: {
							stringLength: {
								min: 4,
								max:4,
								message: 'Zip Code Must be 4 Digit',
							},
							numeric: {
								message: 'Zip Code must be a number'
							},
							notEmpty: {
								message: 'Please Enter Zip Code'
							}
						}
					},
					city: {
						validators: {
							notEmpty: {
								message: 'Choose your user City'
							}
						}
					},
					agree: {
						validators: {
							notEmpty: {
								message: 'Please Check Terms & Conditions is required'
							}
						}
					},
				}
			});
				function MySucessFn(){
			swal({
				title: "Dera User...Your Registration Sucessfully Complete! Please Check Your Email",
				text: "",
				type: "success",
				
				showConfirmButton: true,
			},
			// window.load = function(){
			// 	window.location='./index.php';
			// });
			);
		}
		function MyCheckFn(){
			swal({
				title: "Sorry User!! This Email already exists..Please Fill up the form again",
				text: "",
				type: "warning",
				
				showConfirmButton: true,
			},
			// window.load = function(){
			// 	window.location='./register-users.php';
			// });
			);
		}
			
		</script>
		
	</body>
</html>

<?php include ('./include/footer.php'); ?>