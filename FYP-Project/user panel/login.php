<?php
include ('./include/connection.php');
session_start();
if(isset($_POST['login'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  $sql="SELECT * FROM `clients-rec` WHERE `cemail`='$email' AND `cpass`='$password'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(mysqli_num_rows($run)==1){
    if($fet['estatus']=="client" ){
      $_SESSION['cemail']=$email;
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
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                            
                        </div>
                        <div class="form-floating mb-4">
                        <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            
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

</body>
</html>


