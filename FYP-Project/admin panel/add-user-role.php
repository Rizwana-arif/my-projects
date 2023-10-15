<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
$lawyer=$_SESSION['lawyer_email'];
if(isset($_POST['sub'])){
    $uname=mysqli_real_escape_string($conn,$_POST['uname']);
    $uemail=mysqli_real_escape_string($conn,$_POST['uemail']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $cpass=mysqli_real_escape_string($conn,$_POST['cpass']);
    $urole=mysqli_real_escape_string($conn,$_POST['urole']);
    $lawyeremail=$lawyer;
    $estatus="team";
    $urole_date=date("m-d-y");
    if($password==$cpass){
      $sql="INSERT INTO `user-role-rec` (`uname`,`uemail`,`password`,`cpass`,`urole`,`lawyeremail`,`estatus`,`urole_date`) VALUES ('$uname','$uemail','$password','$cpass','$urole','$lawyeremail','$estatus','$urole_date')";
      $run=mysqli_query($conn,$sql);
      if($run){
          header ("location:./view-user-role.php");
          echo ("<script> alert ('Successfully! User Role has been added') </script>");
      }
      else{
          echo ("<script> alert ('Failed to add user role.') </script>");
      }
    }else{
      echo ("<script> alert ('Password and confirm password is not same') </script>");

    }
  
}
include ('./include/header.php');
include ('./include/sidebar.php');
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
  top: 75%;
  right: 10%; /* Adjust the distance from the right as needed */
  transform: translateY(-50%);
  cursor: pointer;
}
#togglePassword2  {
  position: absolute;
  top: 75%;
  right: 10%; /* Adjust the distance from the right as needed */
  transform: translateY(-50%);
  cursor: pointer;
}
.car{
  width: 60%;
  margin-top: 3%;
}
 </style>
</head>
<body>
<div class="container-fluid car pt-4 px-4 ">
    <div class="bg-light rounded h-100 p-4">
        <h4 class="mb-4 d-flex justify-content-center text-dark">Add Role</h4>
        <form  method="post" enctype="multipart/form-data">
            <div class="row g-4 ">
                <div class="mb-3 col-lg-12 ">
                    <label class="form-label" for="role">User Name</label>
                    <input type="text" class="form-control" id="uname" name="uname" oninput="checkname()"/>
                    <span id="nerror" style="color:red;font-size:15px"></span>
                </div>
                <div class="mb-3 col-lg-12 ">
                    <label class="form-label" for="role">Email</label>
                    <input type="text" class="form-control" id="uemail" name="uemail" oninput="checkemail()"/>
                    <span id="eerror" style="color:red;font-size:15px"></span>
                </div>
                <div class="mb-3 col-lg-12 ">
                    <label class="form-label" for="role">Password</label>
                    <input type="password" class="form-control" id="password" name="password" oninput="checkpass()"/>
                    <i class="fa-regular fa-eye" id="togglePassword"></i>
                    <span id="perror" style="color:red;font-size:15px"></span>
                </div>
                <div class="mb-3 col-lg-12 ">
                    <label class="form-label" for="role">Confirm Password</label>
                    <input type="password" class="form-control" id="cpass" name="cpass" oninput="checkcpass()"/>
                    <i class="fa-regular fa-eye" id="togglePassword2"></i>
                    <span id="cerror" style="color:red;font-size:15px"></span>
                </div>
                <div class="mb-3 col-lg-12">
                      <label  class="form-label">Select Access</label>
                      <select class="form-select mb-3" aria-label="Default select example" name="urole" id="urole">
                      <option selected>Select Access</option>
                      <?php
                      $rsql="SELECT * FROM `role-add-bylawyer` WHERE `lawyern`='$lawyer'";
                      $rrun=mysqli_query($conn,$rsql);
                      while($fet=mysqli_fetch_assoc($rrun)){
                      ?>
                       <option value="<?php echo $fet['lroleid']; ?>"><?php echo $fet['role']; ?><opyion>
                        <?php } ?>
                      </select>
                     </div>
                <button type="submit" class="btn btn-dark bg-dark" name="sub">Add User Role</button>
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
<?php 
include ('./include/footer.php');
?>