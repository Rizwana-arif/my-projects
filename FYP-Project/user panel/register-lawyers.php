<?php 
include ('./include/connection.php');
// session_start();
// if(empty($_SESSION['email']) && empty($_SESSION['cemail']) && empty($_SESSION['uemail'])){
//     header("location:../admin panel/login.php");
// }
if(isset($_POST['post'])){
	$random=rand(99999,999999);
	$reg_id="LAW-" . $random; 
    $first_Name=mysqli_real_escape_string($conn,$_POST['first_Name']);
    $last_Name=mysqli_real_escape_string($conn,$_POST['last_Name']);
    $contact_number=mysqli_real_escape_string($conn,$_POST['contact_number']);
    $cnic=mysqli_real_escape_string($conn,$_POST['cnic']);
    $lawyer_email=mysqli_real_escape_string($conn,$_POST['lawyer_email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $profile_image=$_FILES['profile_image']['name'];
    $bar_license=$_FILES['bar_license']['name'];
    $university_college=mysqli_real_escape_string($conn,$_POST['university_college']);
    $degree=mysqli_real_escape_string($conn,$_POST['degree']);
    $passing_year=mysqli_real_escape_string($conn,$_POST['passing_year']);
    $full_address=mysqli_real_escape_string($conn,$_POST['full_address']);
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $zip_code=mysqli_real_escape_string($conn,$_POST['zip_code']);
    $practice_Length=mysqli_real_escape_string($conn,$_POST['practice_Length']);
    $case_handle=$_POST['case_handle'];
    $speciality=mysqli_real_escape_string($conn,$_POST['speciality']);
    $about=mysqli_real_escape_string($conn,$_POST['about']);
    $agree=mysqli_real_escape_string($conn,$_POST['agree']);
    $estatus="lawyer";
    $status="disapproved";
    $case_handle_arr=serialize($case_handle);
    $a=strtolower(pathinfo($profile_image,PATHINFO_EXTENSION));
    $a1=strtolower(pathinfo($bar_license,PATHINFO_EXTENSION));
    $arr=array("jpg" , "jpeg" ,"png");
    if(in_array($a,$arr) and in_array($a1,$arr)){
        $rand=rand(10000,999999);
        $pic=$profile_image."." .$rand. ".".$a;
        $idf=$bar_license."." .$rand. ".".$a1;
        $sql="INSERT INTO `lawyers-rec`(`reg_id`,`first_Name`,`last_Name`,`contact_number`, `cnic`,`lawyer_email`,`password`,`profile_image`,`bar_license`,`university_college`,`degree`,`passing_year`,`full_address`,`city`,`zip_code`,`practice_Length`,`case_handle`,`speciality`,`about`,`agree`,`estatus`,`status`) VALUES ('$reg_id','$first_Name','$last_Name','$contact_number','$cnic','$lawyer_email','$password','$pic','$idf','$university_college','$degree','$passing_year','$full_address','$city','$zip_code','$practice_Length','$case_handle_arr','$speciality','$about','$agree','$estatus','$status')";
        $run=mysqli_query($conn,$sql);
        if($run){

            move_uploaded_file($_FILES['profile_image']['tmp_name'],"../admin panel/data/lawyer-image/".$pic);
            move_uploaded_file($_FILES['bar_license']['tmp_name'],"../admin panel/data/bar-license/".$idf);

            echo "<script>alert('Data has been inserted')</script>";
            header("Refresh:0, url=./register-lawyers.php");
        }
        else{
            $msg= "Your data has not been inserted";
        }
    }
    else{
        $msg="invalid img";
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
						<h1>Hello Lawyer <i class="fas fa-user-tie"></i> !!</h1></br></br>
						<h2>please register your self here <i class="fas fa-hand-point-right"></i></h2>
					</div>
					<div class="col-md-6">
						<form   method="post" enctype="multipart/form-data"  id="validateForm">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="fname">First Name</label>
									<input type="text" class="form-control" id="first_Name" name="first_Name" placeholder="first name">
								</div>
								<div class="form-group col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" class="form-control" id="lname" name="last_Name" placeholder="last name">
								</div>
							</div>
                            <div class="form-row">
								<div class="form-group col-md-6">
                                    <label for="num">Contact Number</label>
								    <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="contact number">
								</div>
								<div class="form-group col-md-6">
									<label for="lname">CNIC</label>
									<input type="text" class="form-control" id="cnic" name="cnic" placeholder="CNIC">
								</div>
							</div>
                            <div class="form-row">
								<div class="form-group col-md-6">
                                    <label for="email">Email</label>
								    <input type="email" class="form-control" id="lawyer_email" name="lawyer_email" placeholder="email address">
								</div>
								<div class="form-group col-md-6">
									<label for="lname">Password</label>
									<input type="password" class="form-control" id="lname" name="password" placeholder="Generate Password">
								</div>
							</div>
							<div class="form-group">
								
							</div>
                            <div class="form-row">
								<div class="form-group col-md-6">
                                    <label for="num">Profile Image</label>
								    <input type="file" class="form-control" name="profile_image" id="image" >
								</div>
								<div class="form-group col-md-6">
                                    <label for="num">bar_License</label>
								    <input type="file" class="form-control" name="bar_license" id="image" >
								</div>
							</div>
							
							<div class="form-row"><label for="edu"><small>Put Your Last Education</small></label></div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="institute">University / College Name</label>
									<input type="text" class="form-control" id="institute" name="university_college" placeholder="Institute name">
								</div>
								<div class="form-group col-md-3">
									<label for="degree">Degree</label>
									<select id="degree" name="degree" class="form-control">
										<option value=" " selected>Choose...</option>
										<option value="LLB">LLB</option>
										<option value="LLM">LLM</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="pyear">Passing Year</label>
									<select id="passing_year" name="passing_year" class="form-control">
										<option value=" " selected>Choose...</option>
										<option >2000</option>
										<option >2001</option>
										<option >2002</option>
										<option >2003</option>
										<option >2004</option>
										<option >2005</option>
										<option >2006</option>
										<option >2007</option>
										<option >2008</option>
										<option >2009</option>
										<option >2010</option>
										<option >2011</option>
										<option >2012</option>
										<option >2013</option>
										<option >2014</option>
										<option >2015</option>
										<option >2016</option>
										<option >2017</option>
										<option >2018</option>
										<option >2019</option>
										<option >2020</option>
										<option >2021</option>
										<option >2022</option>
										<option >2023</option>
									</select>
								</div>
							</div>
							<div class="form-row"><label for="edu"><small>Put Your chamber Location </small></label></div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="address">Full Address</label>
									<input type="text" class="form-control" id="address" name="full_address" placeholder="full address">
								</div>
								<div class="form-group col-md-3">
									<label for="city">City</label>
									<select id="city" name="city" class="form-control">
										<option lected>Choose...</option>
										<option >Faisalabad</option>
										<option >Lahore</option>
										<option >Peshawar</option>
										<option >Karachi</option>
										<option >Islamabad</option>
										<option >Sargodha</option>
										<option >Rawalpindi</option>
										<option >Gujranwala</option>
								</select>
								</div>
								<div class="form-group col-md-3">
									<label for="zip">Zip code</label>
									<input type="text" class="form-control" id="zip" name="zip_code" placeholder="zip code">
								</div>
							</div>
							<div class="form-group">
								<label for="practise">Length of practice</label>
								<select id="practise" name="practice_Length" class="form-control">
									<option value=" " selected>Choose...</option>
									<option >1-5 years</option>
									<option >6-10 years</option>
									<option >11-15 years</option>
									<option >16-20 years</option>
									<option >Most Senior</option>
								</select>
							</div>
							<div class="form-group">
								<!--a lawyer can choose 5 category at max-->
								<label for="speciality">Types of case handle</label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Criminal matter" id="crime">
									<label class="form-check-label" for="crime">
										Criminal matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Civil matter" id="civil">
									<label class="form-check-label" for="civil">
										Civil matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Writ Jurisdiction" id="civil">
									<label class="form-check-label" for="civil">
										Writ Jurisdiction
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Company law" id="com">
									<label class="form-check-label" for="com">
										Company law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Contract law" id="con">
									<label class="form-check-label"  for="con">
										Contract law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Commercial matter" id="comm">
									<label class="form-check-label" for="comm">
										Commercial matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]" value="Construction law" id="cons">
									<label class="form-check-label" for="cons">
										Construction law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]" value="Information Technology" id="it">
									<label class="form-check-label"  for="it">
										Information Technology
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Family Law" id="fam">
									<label class="form-check-label" for="fam">
										Family Law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Religious Matter" id="rel">
									<label class="form-check-label"  for="rel">
										Religious Matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Investment Matter" id="inv">
									<label class="form-check-label" for="inv">
										Investment Matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]" value="Labour Law" id="lab">
									<label class="form-check-label" for="lab">
										Labour Law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Property Law" id="prop">
									<label class="form-check-label" value="Labour Law" for="prop">
										Property Law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Taxation Matter" id="tax">
									<label class="form-check-label"  for="tax">
										Taxation Matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Others" id="oth">
									<label class="form-check-label"  for="oth">
										Others
									</label>
								</div>
							</div>
							<div class="form-group">
								<label for="practise">My Speciality</label>
								<select id="practise" name="speciality" class="form-control">
									<option value=" " selected>Choose...</option>
									<option >Criminal law</option>
									<option >Civil law</option>
									<option >Writ Jurisdiction</option>
									<option >Company law</option>
									<option >Contract law</option>
									<option >Commercial law</option>
									<option >Construction law</option>
									<option >IT law</option>
									<option >Family law</option>
									<option >Religious law</option>
									<option >Investment law</option>
									<option >Labour law</option>
									<option >Property law</option>
									<option >Taxation law</option>

								</select>
							</div>
                            <div class="form-group w-100">
								<textarea name="about" id="about" placeholder="introduce yourself"></textarea>
							</div>
							<div class="form-group">
								<div class="form-check">

									<input id="accept" name="agree" type="checkbox" value="y" /><strong>I Agree with terms & conditions </strong>
								</div>
							</div>
							<input name="post" type="submit" class="btn btn-block btn-dark" value="Register" />
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
					lawyer_email: {
						validators: {
							notEmpty: {
								message: 'Please Enter your email address'
							},
							emailAddress: {
								message: 'Please Enter a valid email address'
							}
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
					profile_image: {
						validators: {
							notEmpty: {
								message: 'Please Upload Your Image'
							}
						}
					},
                    bar_license: {
						validators: {
							notEmpty: {
								message: 'Please Upload Your Image'
							}
						}
					},
					university_College: {
						validators: {
							notEmpty: {
								message: 'Please Enter Your University or College'
							}
						}
					},
					degree: {
						validators: {
							notEmpty: {
								message: 'Choose your Degree'
							}
						}
					},
					passing_year: {
						validators: {
							notEmpty: {
								message: 'Choose Passing Year'
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
					practice_Length: {
						validators: {
							notEmpty: {
								message: 'Choose your Practise Length'
							}
						}
					},
					'case_handle[]': {
						validators: {
							notEmpty: {
								message: 'Please Select Types of case handle'
							}
						}
					},
					speciality: {
						validators: {
							notEmpty: {
								message: 'Choose your Speciality'
							}
						}
					},
				}
			});

		</script>

	</body>
</html>

    <!-- Form End -->
    

    <?php include ('./include/footer.php'); ?>