<?php
include ('./include/connection.php');
SESSION_START();
if(isset($_POST['login'])){
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  $sql="SELECT * FROM `admin` WHERE `email`='$email' and `password`='$password'";
  $run=mysqli_query($conn,$sql);
  $fet=mysqli_fetch_assoc($run);
  if(mysqli_num_rows($run)==1 && $fet['status']=="admin"){
      $_SESSION['email']=$email;
      header("location:../user panel/index.php");
    }
    else{
      $rsql="SELECT * FROM `users-rec` WHERE `email`='$email' AND `password`='$password'";
      $rrun=mysqli_query($conn,$rsql);
      $fet=mysqli_fetch_assoc($rrun);
      
      if(mysqli_num_rows($rrun)==1 && $fet['status']=="user" ){
          
            echo $_SESSION['email']=$email;
            echo $_SESSION['status']="user";
            header("location:../user panel/index.php");
          }else{
            echo "<script> alert ('Invalid Details')</script>";
        }
    }

}

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    #togglePassword {
  position: absolute;
  top: 60%;
  right: 40px; /* Adjust the distance from the right as needed */
  transform: translateY(-50%);
  cursor: pointer;
}

</style>
<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="./css/app.min.css">
  <link rel="stylesheet" href="./css/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="./css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='./css/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus oninput="checkemail()">
                    <span id="error" style="color:red;font-size:10px"></span>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required oninput="checkpassword()">
                    <i class="fa-regular fa-eye" id="togglePassword"></i>
                    <span id="perror" style="color:red;font-size:10px"></span>

                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                 
                  <div class="d-flex justify-content-between">
                    <div class="form-group w-50">
                      <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="login">
                        Sign In
                      </button>
                    </div>

                  <div class="form-group w-50">
                    <button class="btn btn-primary btn-lg btn-block" tabindex="4"  
                    onclick="location.href='../user panel/register.php'">
                      Sign Up
                    </button>
                   
                  </div>
                </div>
                </form>



                
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.html">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="./js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="./js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="./js/custom.js"></script>
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


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>