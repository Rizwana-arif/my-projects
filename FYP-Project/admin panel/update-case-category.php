<?php 
include ("./include/connection.php");
$cctgid=$_GET['cctgid'];
$sql="SELECT * FROM `case-category` cc INNER JOIN `case-type` ct ON cc.caset=ct.caseid  WHERE `cctgid`='$cctgid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['update'])){
    $caset=mysqli_real_escape_string($conn,$_POST['caset']);
    $casectg=mysqli_real_escape_string($conn,$_POST['casectg']);
   
    $usql="UPDATE `case-category` SET `caset`='$caset' , `casectg`='$casectg'  WHERE `cctgid`='$cctgid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo "<script>alert ('case-category has been updated')</script>";
        header("Refresh:0, url=./add-case-category.php");
      }
      else{
        echo "<script>alert ('case-category has not been updated')</script>";
      }
}
include ("./include/header.php");
include ("./include/sidebar.php");
?>

<div class="container-fluid pt-4 px-4 ">
        <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4 d-flex justify-content-center text-success">Update Case Category</h4>
            <form  method="post" >
            <div class="mb-3 col-lg-4">
                        <label class="form-label">Case Type</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="caset">
                        <option value="<?php echo $fet['caseid'] ?>"><?php echo $fet['casetype']; ?></option>
                    <?php 
                       $csql="SELECT * FROM `case-type`";
                        $crun=mysqli_query($conn,$csql);
                        while($cfet=mysqli_fetch_assoc($crun)){
                    ?>
                    <option value="<?php echo $cfet['caseid'] ?>"><?php echo $cfet['casetype']; ?></option>
                    <?php
                        }
                    ?>
                        </select>
                    </div>
                <div class="mb-3 col-lg-4">
                    <label class="form-label" for="casectg">Case category</label>
                    <input type="text" class="form-control" id="casectg" name="casectg" value="<?php echo $fet['casectg']; ?>"/>
                </div>
                </div>
                    <button type="submit" class="btn btn-primary bg-success" name="update">Update </button>
                </div>
            </form>
        </div>
</div>

<?php include ('./include/footer.php'); ?>