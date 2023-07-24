<?php
include ('./include/connection.php');
session_start();
if(isset($_POST['login'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  $sql="SELECT * FROM `clients-rec` WHERE `cemail`='$email' AND `cpass`='$password'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
$lclientid=$fet['clientid'];
if(mysqli_num_rows($run)==1){
    if($fet['estatus']=="client" ){
      $_SESSION['cemail']=$email;
    //   $id=$_SESSION['cemail'];
      $_SESSION['clientid']=$clientid;
      $_SESSION['estatus']="client";
      header("location:./index.php");
    }
    } else{
     $lsql="SELECT * FROM `lawyers-rec` WHERE `email`='$email' AND `password`='$password'";
    $lrun=mysqli_query($conn,$lsql);
    $lfet=mysqli_fetch_assoc($lrun);
    if(mysqli_num_rows($lrun)==1){
        if($lfet['estatus']=="lawyer" ){
          $_SESSION['email']=$email;
          $_SESSION['lawyerid'];
      $_SESSION['estatus']="lawyer";
          header("location:./index.php");
        }
}else {
    echo "<script> alert ('Invalid Details')</script>";
}
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="img/favicon.ico" rel="icon">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    #error{
        color : red;
        font-size: 10px;
    }
    #togglePassword {
  position: absolute;
  top: 47%;
  right: 95px; /* Adjust the distance from the right as needed */
  transform: translateY(-50%);
  cursor: pointer;
}

</style>
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form method="post">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            
                            <h3>Login</h3>
                        </div>
                        <div class="form-floating mb-3">
                        <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" oninput="checkemail()">
                            <span id="error"></span>

                         <div class="form-floating mb-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" oninput="checkpassword()">
                        <i class="fa-regular fa-eye" id="togglePassword"></i>
                        <span id="perror" style="color:red;font-size:10px"></span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-4">
                            
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="login">Login</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p>
                    </div>
</form>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
<script>
     function checkemail(){
         var email=document.querySelector("#email").value;
         var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
         if (!emailRegex.test(email)) {
           document.querySelector("#error").innerHTML="Must Add @ and .com";
           document.querySelector("#email").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#email").style.border="gray solid 2px";
      }
    }
    function checkpassword(){
         var password=document.querySelector("#password").value;
         var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,}$/;
         if (!passwordRegex.test(password)) {
           document.querySelector("#perror").innerHTML="Only 8 characters with no. and alphabets";
           document.querySelector("#password").style.border="red solid 1px";
        
      }else{
        document.querySelector("#perror").innerHTML="";
        document.querySelector("#password").style.border="gray solid 2px";
      }
    }
    document.getElementById("togglePassword").addEventListener("click", function() {
  var passwordField = document.getElementById("password");
  if (passwordField.type === "password") {
    passwordField.type = "text";
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password";
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  }
});

</script>
</body>
</html>


