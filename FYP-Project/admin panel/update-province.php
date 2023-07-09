<?php 
include ('./include/connection.php');
 $pid=$_GET['pid'];
$usql="SELECT * FROM `province-rec` WHERE `pid`='$pid'";
$urun=mysqli_query($conn,$usql);
$ufet=mysqli_fetch_assoc($urun);
if(isset($_POST['update'])){
    
    $province=mysqli_real_escape_string($conn,$_POST['province']);
   
    $upsql="UPDATE `province-rec` SET `province`='$province' WHERE `pid`='$pid'";
    $uprun=mysqli_query($conn,$upsql);
    if ($uprun){
      header("Refresh:0, url=./province.php");
        echo "<script>alert ('province name has been updated')</script>";
        
      }
      else{
        echo "<script>alert ('province name has not been updated')</script>";
      }
}
include ('./include/header.php');
include ('./include/sidebar.php');
?>




<div class="container-fluid pt-4 px-4 ">
        <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4 d-flex justify-content-center text-success">Update Province</h4>
            <form  method="post" >
                <div class="mb-3 col-lg-4">
                    <label class="form-label" for="casetype">Province Name</label>
                    <input type="text" class="form-control" id="province" name="province" value="<?php echo $ufet['province']; ?>"/>
                </div>
                </div>
                    <button type="submit" class="btn btn-primary bg-success" name="update">Update </button>
                </div>
            </form>
        </div>
</div>

<?php include ('./include/footer.php'); ?>