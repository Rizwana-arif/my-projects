<?php 
include ("./include/connection.php");
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
$uroleid=$_GET['uroleid'];
$lawyer=$_SESSION['email'];
$sql="SELECT * FROM `user-role-rec` ur INNER JOIN `role-add-bylawyer` ra ON ur.urole=ra.lroleid  WHERE `uroleid`='$uroleid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['update'])){
    $uname=mysqli_real_escape_string($conn,$_POST['uname']);
    $uemail=mysqli_real_escape_string($conn,$_POST['uemail']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $cpass=mysqli_real_escape_string($conn,$_POST['cpass']);
    $urole=mysqli_real_escape_string($conn,$_POST['urole']);
    $lawyeremail=$lawyer;
    $estatus="team";
   if($password==$cpass){
    $usql="UPDATE `user-role-rec` SET `uname`='$uname' , `uemail`='$uemail' , `password`='$password', `cpass`='$cpass' ,`urole`='$urole' ,`lawyeremail`='$lawyeremail' ,`estatus`='$estatus' WHERE `uroleid`='$uroleid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo "<script>alert ('Successfully! User Role has been updated')</script>";
        header("Refresh:0, url=./view-user-role.php");
      }
      else{
        echo "<script>alert ('Failed! User Role has not been updated')</script>";
      }
    }
}
include ("./include/header.php");
include ("./include/sidebar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Role</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <style>
       #togglePassword  {
  position: absolute;
  top: 49%;
  right: 550px; /* Adjust the distance from the right as needed */
  transform: translateY(-50%);
  cursor: pointer;
}
#togglePassword2  {
  position: absolute;
  top: 61.5%;
  right: 550px; /* Adjust the distance from the right as needed */
  transform: translateY(-50%);
  cursor: pointer;
}
 </style>
</head>
<body>
<div class="container-fluid pt-4 px-4 ">
    <div class="bg-light rounded h-100 p-4 w-50 ml-30">
        <h4 class="mb-4 d-flex justify-content-center text-success">Add Role</h4>
        <form  method="post" enctype="multipart/form-data">
            <div class="row g-4 ">
                <div class="mb-3 col-lg-12 ">
                    <label class="form-label" for="role">User Name</label>
                    <input type="text" class="form-control" id="uname" name="uname" oninput="checkname()"
                    value="<?php echo $fet['uname']; ?>"/>
                    <span id="nerror" style="color:red;font-size:15px"></span>
                </div>
                <div class="mb-3 col-lg-12 ">
                    <label class="form-label" for="role">Email</label>
                    <input type="text" class="form-control" id="uemail" name="uemail" oninput="checkemail()"
                    value="<?php echo $fet['uemail']; ?>"/>
                    <span id="eerror" style="color:red;font-size:15px"></span>
                </div>
                <div class="mb-3 col-lg-12 ">
                    <label class="form-label" for="role">Password</label>
                    <input type="password" class="form-control" id="password" name="password" oninput="checkpass()" value="<?php echo $fet['password']; ?>"/>
                    <i class="fa-regular fa-eye" id="togglePassword"></i>
                    <span id="perror" style="color:red;font-size:15px"></span>
                </div>
                <div class="mb-3 col-lg-12 ">
                    <label class="form-label" for="role">Confirm Password</label>
                    <input type="password" class="form-control" id="cpass" name="cpass" oninput="checkcpass()"
                    value="<?php echo $fet['cpass']; ?>"/>
                    <i class="fa-regular fa-eye" id="togglePassword2"></i>
                    <span id="cerror" style="color:red;font-size:15px"></span>
                </div>
                <div class="mb-3 col-lg-12">
                      <label  class="form-label">Select Access</label>
                      <select class="form-select mb-3" aria-label="Default select example" name="urole" id="urole">
                      <option value="<?php echo $fet['lroleid']; ?>"><?php echo $fet['role']; ?><opyion>
                      <?php
                      $rsql="SELECT * FROM `role-add-bylawyer` WHERE `lawyern`='$lawyer'";
                      $rrun=mysqli_query($conn,$rsql);
                      while($rfet=mysqli_fetch_assoc($rrun)){
                      ?>
                       <option value="<?php echo $rfet['lroleid']; ?>"><?php echo $rfet['role']; ?><opyion>
                        <?php } ?>
                      </select>
                     </div>
                <button type="submit" class="btn btn-primary bg-success" name="update">Add User Role</button>
            </div>
        </form>
    </div>
</div>
<script>
  function checkname(){
         var name=document.querySelector("#uname").value;
         var nameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!nameRegex.test(name)) {
           document.querySelector("#nerror").innerHTML="Write Alphabets Only";
           document.querySelector("#uname").style.border="red solid 1px";
        
      }else{
        document.querySelector("#nerror").innerHTML="";
        document.querySelector("#uname").style.border="gray solid 2px";
      }
    }
    function checkemail(){
         var email=document.querySelector("#uemail").value;
         var emailRegex =/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
         if (!emailRegex.test(email)) {
           document.querySelector("#eerror").innerHTML="Invalid Format";
           document.querySelector("#email").style.border="red solid 1px";
        
      }else{
        document.querySelector("#eerror").innerHTML="";
        document.querySelector("#email").style.border="gray solid 2px";
      }
    }
    function checkpass(){
         var pass=document.querySelector("#password").value;
         var passRegex =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,}$/;
         if (!passRegex.test(pass)) {
           document.querySelector("#perror").innerHTML="Write Alphabets Only";
           document.querySelector("#password").style.border="red solid 1px";
        
      }else{
        document.querySelector("#perror").innerHTML="";
        document.querySelector("#password").style.border="gray solid 2px";
      }
    }
    function checkcpass(){
         var cpass=document.querySelector("#cpass").value;
         var cpassRegex =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,}$/;
         if (!cpassRegex.test(cpass)) {
           document.querySelector("#cerror").innerHTML="Write Alphabets Only";
           document.querySelector("#cpass").style.border="red solid 1px";
        
      }else{
        document.querySelector("#cerror").innerHTML="";
        document.querySelector("#cpass").style.border="gray solid 2px";
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
document.getElementById("togglePassword2").addEventListener("click", function() {
  var passwordField = document.getElementById("cpass");
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

<?php include ('./include/footer.php'); ?>