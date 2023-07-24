<?php
include ('./include/connection.php');
session_start();
if(isset($_POST['login'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  $sql="SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(mysqli_num_rows($run)==1){
    if($fet['estatus']=="admin" ){
      $_SESSION['email']=$email;
      $_SESSION['estatus']="admin";
      header("location:./index.php");
    }
    } else{
     $lsql="SELECT * FROM `lawyers-rec` WHERE `email`='$email' AND `password`='$password' ";
    $lrun=mysqli_query($conn,$lsql);
    $lfet=mysqli_fetch_assoc($lrun);
    $lawyerid=$lfet['lawyerid'];
    if(mysqli_num_rows($lrun)==1){
        if($lfet['estatus']=="lawyer" ){
          $_SESSION['email']=$email;
        $_SESSION['estatus']="lawyer";
        $_SESSION['lawyerid']=$lawyerid;
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
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    #error{
        color : red;
        font-size: 10px;
    }
    #togglePassword {
  position: absolute;
  top: 47%;
  right: 40px; /* Adjust the distance from the right as needed */
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
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" oninput="checkemail()">
                            <label for="email">Email address</label>
                            <span id="error"></span>
                        </div>
                        <div class="form-floating mb-4">
                        
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" oninput="checkpassword()">
                        <label for="password">Password</label>
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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
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