<?php 
include ("./include/connection.php");
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
$did=$_GET['did'];
$sql="SELECT * FROM `district-rec` d INNER JOIN `province-rec` p ON d.pname=p.pid  WHERE `did`='$did'";
$run=mysqli_query($conn,$sql);
$dfet=mysqli_fetch_assoc($run);
if(isset($_POST['update'])){
    $pname=mysqli_real_escape_string($conn,$_POST['pname']);
    $district=mysqli_real_escape_string($conn,$_POST['district']);
   
    $usql="UPDATE `district-rec` SET `pname`='$pname' , `district`='$district'  WHERE `did`='$did'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo "<script>alert ('District has been updated')</script>";
        header("Refresh:0, url=./district.php");
      }
      else{
        echo "<script>alert ('District has not been updated')</script>";
      }
}
include ("./include/header.php");
include ("./include/sidebar.php");
?>
<style>
.car{
    width: 40%;
    margin-top : 5%;
}
</style>
<div class="container-fluid car pt-4 px-4 ">
        <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4 d-flex justify-content-center text-dark">Update District</h4>
            <form  method="post" >
            <div class="form-group">
                        <label class="form-label">Province Name</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="pname">
                        <option value="<?php echo $dfet['pid'] ?>"><?php echo $dfet['province']; ?></option>
                    <?php 
                       $csql="SELECT * FROM `province-rec`";
                        $crun=mysqli_query($conn,$csql);
                        while($cfet=mysqli_fetch_assoc($crun)){
                    ?>
                    <option value="<?php echo $cfet['pid'] ?>"><?php echo $cfet['province']; ?></option>
                    <?php
                        }
                    ?>
                        </select>
                    </div>
                <div class="form-group">
                    <label class="form-label" for="casectg">District</label>
                    <input type="text" class="form-control" id="district" name="district" value="<?php echo $dfet['district']; ?>"/>
                </div>
                </div class="form-group">
                    <button type="submit" class="btn btn-primary bg-dark w-100" name="update">Update </button>
                </div>
            </form>
        </div>
</div>

<?php include ('./include/footer.php'); ?>