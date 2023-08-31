<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
$lawyer=$_SESSION['lawyer_email'];
if(isset($_POST['sub'])){
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
    $sql="INSERT INTO `role-add-bylawyer` (`role`,`access_user`,`roleacc`,`lawyern`) VALUES ('$role','$access_user','$rolearr','$lawyern')";
    $run=mysqli_query($conn,$sql);
    if($run){
       
        echo ("<script> alert ('Successfully! Role has been added') </script>");
        // header ("location:./add-role-bylawyer.php");
    }
    else{
        echo ("<script> alert ('Failed to add role.') </script>");
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
 
</head>
<body>
<div class="container-fluid pt-4 px-4 ">
    <div class="bg-light rounded h-100 p-4 w-50">
        <h4 class="mb-4 d-flex justify-content-center text-success">Add Role</h4>
        <form  method="post" enctype="multipart/form-data">
            <div class="row g-4 ">
                <div class="mb-3 col-lg-12 ">
                    <label class="form-label" for="role">Role Name</label>
                    <input type="text" class="form-control" id="role" name="role" oninput="checkrole()"/>
                    <span id="error" style="color:red;font-size:15px"></span>
                </div>
                <div class="mb-3 col-lg-12">
                      
                      <label  class="form-label">Select Access</label>
                      <select class="form-select mb-3" aria-label="Default select example"  name="access_user" id="access_user" onchange="changeselect()">
                          <option selected>Select Access</option>
                          <option value="all">All</option>
                          <option value="custom" >Custom</option>
                        
                      </select>
                      <div id="custom" style="display:none;">
                            <input type="checkbox" value="cases" name="roleacc[]" />Cases
                            <br>
                            <input type="checkbox" value="teammember" name="roleacc[]" />Team member
                            <br>
                            <input type="checkbox" value="appointments" name="roleacc[]" />Appointments
                            <br>
                            <input type="checkbox" value="settings" name="roleacc[]" />Settings
                     </div>
                <button type="submit" class="btn btn-primary bg-success w-100" name="sub">Add Role </button>
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
<?php 
include ('./include/footer.php');
?>