<?php 
include ("./include/connection.php");
$tid=$_GET['tid'];
$sql="SELECT * FROM `tehsil-rec` t INNER JOIN `province-rec` p ON t.proname=p.pid INNER JOIN `district-rec` d ON t.disname=d.did WHERE `tid`='$tid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['update'])){
    $proname=mysqli_real_escape_string($conn,$_POST['proname']);
    $disname=mysqli_real_escape_string($conn,$_POST['disname']);
    $tehsil=mysqli_real_escape_string($conn,$_POST['tehsil']);

   
    $usql="UPDATE `tehsil-rec` SET `proname`='$proname' , `disname`='$disname' , `tehsil`='$tehsil' WHERE `tid`='$tid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo "<script>alert ('Tehsil has been updated')</script>";
        header("Refresh:0, url=./tehsil.php");
      }
      else{
        echo "<script>alert ('tehsil has not been updated')</script>";
      }
}
include ("./include/header.php");
include ("./include/sidebar.php");
?>

<div class="container-fluid pt-4 px-4 ">
        <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4 d-flex justify-content-center text-success">Update Tehsil Detail</h4>
            <form  method="post" >
            <div class="mb-3 col-lg-4">
                        <label class="form-label">Province</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="proname">
                        <option value="<?php echo $fet['pid'] ?>"><?php echo $fet['province']; ?></option>
                    <?php 
                       $tsql="SELECT * FROM `province-rec`";
                        $trun=mysqli_query($conn,$tsql);
                        while($tfet=mysqli_fetch_assoc($trun)){
                    ?>
                    <option value="<?php echo $tfet['pid'] ?>"><?php echo $tfet['province']; ?></option>
                    <?php
                        }
                    ?>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label">District</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="disname">
                        <option value="<?php echo $fet['did'] ?>"><?php echo $fet['district']; ?></option>
                    <?php 
                       $csql="SELECT * FROM `district-rec`";
                        $crun=mysqli_query($conn,$csql);
                        while($cfet=mysqli_fetch_assoc($crun)){
                    ?>
                    <option value="<?php echo $cfet['did'] ?>"><?php echo $cfet['district']; ?></option>
                    <?php
                        }
                    ?>
                        </select>
                    </div>
                <div class="mb-3 col-lg-4">
                    <label class="form-label" for="csubctg">Tehsil</label>
                    <input type="text" class="form-control" id="csubctg" name="tehsil" value="<?php echo $fet['tehsil']; ?>"/>
                </div>
                </div>
                    <button type="submit" class="btn btn-primary bg-success" name="update">Update </button>
                </div>
            </form>
        </div>
</div>

<?php include ('./include/footer.php'); ?>