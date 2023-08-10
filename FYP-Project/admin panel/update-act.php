<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
 $actid=$_GET['actid'];
$usql="SELECT * FROM `act-rec` WHERE `actid`='$actid'";
$urun=mysqli_query($conn,$usql);
$ufet=mysqli_fetch_assoc($urun);
if(isset($_POST['update'])){
    
    $act=mysqli_real_escape_string($conn,$_POST['act']);
   
    $upsql="UPDATE `act-rec` SET `act`='$act' WHERE `actid`='$actid'";
    $uprun=mysqli_query($conn,$upsql);
    if ($uprun){
      header("Refresh:0, url=./add-act.php");
        echo "<script>alert ('Act Detail has been updated')</script>";
        
      }
      else{
        echo "<script>alert ('Act Detail has not been updated')</script>";
      }
}
include ('./include/header.php');
include ('./include/sidebar.php');
?>




<div class="container-fluid pt-4 px-4 ">
        <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4 d-flex justify-content-center text-success">Update Act Detail</h4>
            <form  method="post" >
                <div class="mb-3 col-lg-4">
                    <label class="form-label" for="casetype">Act</label>
                    <input type="text" class="form-control" id="act" name="act" value="<?php echo $ufet['act']; ?>"/>
                </div>
                </div>
                    <button type="submit" class="btn btn-primary bg-success" name="update">Update </button>
                </div>
            </form>
        </div>
</div>

<?php include ('./include/footer.php'); ?>