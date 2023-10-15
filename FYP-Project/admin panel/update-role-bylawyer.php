<?php 
include ('./include/connection.php');
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email'])){
    header("location:./login.php");
}
$lawyer=$_SESSION['lawyer_email'];
 $lroleid=$_GET['lroleid'];
$usql="SELECT * FROM `role-add-bylawyer` WHERE `lroleid`='$lroleid'";
$urun=mysqli_query($conn,$usql);
$ufet=mysqli_fetch_assoc($urun);
if(isset($_POST['update'])){
    
    $role=mysqli_real_escape_string($conn,$_POST['role']);
    $access_user=mysqli_real_escape_string($conn,$_POST['access_user']);
   if($access_user=="all"){
    $roleacc=array();
   }
   else{
    $roleacc=$_POST['roleacc'];
   }
    
    $lawyern=$lawyer;
    $rolearr=serialize($roleacc);
   
    $upsql="UPDATE `role-add-bylawyer` SET `role`='$role' ,`access_user`='$access_user' , `roleacc`='$rolearr' , `lawyern`='$lawyern' WHERE `lroleid`='$lroleid'";
    $uprun=mysqli_query($conn,$upsql);
    if ($uprun){
      
        echo "<script>alert ('Successfully role has been updated')</script>";
        header("Refresh:0, url=./view-role-bylawyer.php");
      }
      else{
        echo "<script>alert ('Failed ! Role has not been updated')</script>";
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
    <title>Update Role</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <style>
.car{
  width: 40%;
  margin-top: 5%;
}
  </style>
</head>
<body>
<div class="container-fluid car pt-4 px-4 ">
    <div class="bg-light rounded h-100 p-4 ">
        <h4 class="mb-4 d-flex justify-content-center text-dark">Update Role</h4>
        <form  method="post" enctype="multipart/form-data">
            <div class="row g-4 ">
                <div class="mb-3 col-lg-12 ">
                    <label class="form-label" for="role">Role Name</label>
                    <input type="text" class="form-control" id="role" name="role" oninput="checkrole()" 
                    value="<?php echo $ufet['role'] ; ?>"/>
                    <span id="error" style="color:red;font-size:15px"></span>
                </div>
                <div class="mb-3 col-lg-12">
                      
                      <label  class="form-label">Select Access</label>
                      <select class="form-select mb-3" aria-label="Default select example"  name="access_user" id="access_user" onchange="changeselect()">
                      <?php 
                      if($ufet['access_user']=="all"){
                        $m="selected";
                      }else{
                        $f="selected";
                      }
                    ?>
                          <option disabled selected>Select Access</option>
                          <option value="all" <?php echo @$m; ?>>All</option>
                          <option value="custom" <?php echo @$f;   ?> >Custom</option>
                        
                      </select>
                      <?php
                      $darr=unserialize($ufet['roleacc']);
                    
                      if(in_array("cases",$darr) ){
                        $c="checked";
                      }
                        if(in_array("teammember",$darr)){
                          $t="checked";
                        }
                        if(in_array("appointments",$darr)){
                          $ap="checked";
                        }
                        if(in_array("settings",$darr)){
                          $se="checked";
                        }
                      
                      if($ufet['access_user']=="custom"){
                        $b="block";
                      }
                      else{
                        $b="none";
                      }
                      ?>
                      <div id="custom" style="display:<?php echo $b ?>;" >
                            <input type="checkbox" value="cases" <?php echo @$c; ?> name="roleacc[]" />Cases
                            <br>
                            <input type="checkbox" value="teammember" <?php echo @$t; ?> name="roleacc[]" />Team member
                            <br>
                            <input type="checkbox" value="appointments" <?php echo @$ap; ?> name="roleacc[]" />Appointments
                            <br>
                            <input type="checkbox" value="settings" <?php echo @$se; ?> name="roleacc[]" />Settings
                     </div>
                <button type="submit" class="btn btn-primary bg-dark w-100" name="update">Update Role </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
  function checkrole(){
         var c=document.querySelector("#urole").value;
         var cRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!cRegex.test(c)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#role").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#role").style.border="gray solid 2px";
      }
    }
function changeselect(){
    var drop=document.querySelector("#access_user").value;
      if(drop=="all"){
        document.querySelector("#custom").style.display="none";
      }else{
        document.querySelector("#custom").style.display="block";
      }
}
</script>
 
</body>
</html>

<?php include ('./include/footer.php'); ?>