<?php 
include ('./include/connection.php');
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
 $roleid=$_GET['roleid'];
$usql="SELECT * FROM `role-rec` WHERE `roleid`='$roleid'";
$urun=mysqli_query($conn,$usql);
$ufet=mysqli_fetch_assoc($urun);
if(isset($_POST['update'])){
    
    $rolen=mysqli_real_escape_string($conn,$_POST['rolen']);
    $descrip=mysqli_real_escape_string($conn,$_POST['descrip']);
   
    $upsql="UPDATE `role-rec` SET `rolen`='$rolen' , `descrip`='$descrip' WHERE `roleid`='$roleid'";
    $uprun=mysqli_query($conn,$upsql);
    if ($uprun){
      header("Refresh:0, url=./add-role.php");
      echo ("<script> alert ('Successfully ! Updated a role.') </script>");
        
      }
      else{
        echo ("<script> alert ('Failed !Not Updated a role.') </script>");
      }
}
include ('./include/header.php');
include ('./include/sidebar.php');
?>




<div class="container-fluid pt-4 px-4 ">
        <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4 d-flex justify-content-center text-success">Update Assigned Role</h4>
            <form  method="post" >
                <div class="mb-3 col-lg-4">
                    <label class="form-label" for="rolen">Role Name</label>
                    <input type="text" class="form-control" id="rolen" name="rolen" value="<?php echo $ufet['rolen']; ?>"/>
                </div>
                <div class="mb-3 col-lg-4">
                    <label class="form-label" for="casetype">Role Description</label>
                    <input type="text" class="form-control" id="descrip" name="descrip" value="<?php echo $ufet['descrip']; ?>"/>
                </div>
                </div>
                    <button type="submit" class="btn btn-primary bg-success" name="update">Update </button>
                </div>
            </form>
        </div>
</div>

<?php include ('./include/footer.php'); ?>