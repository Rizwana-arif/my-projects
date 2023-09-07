<?php 
include ("./include/connection.php");
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
$pstationid=$_GET['pstationid'];
$sql="SELECT * FROM `pstation-rec` c INNER JOIN `province-rec` p ON c.proname=p.pid INNER JOIN `district-rec` d ON c.disname=d.did INNER JOIN `tehsil-rec` t ON c.tehname=t.tid WHERE `pstationid`='$pstationid'";
$run=mysqli_query($conn,$sql);
$vfet=mysqli_fetch_assoc($run);
if(isset($_POST['update'])){
    $proname=mysqli_real_escape_string($conn,$_POST['proname']);
    $disname=mysqli_real_escape_string($conn,$_POST['disname']);
    $tehname=mysqli_real_escape_string($conn,$_POST['tehname']);
    $pstation=mysqli_real_escape_string($conn,$_POST['pstation']);
   
    $usql="UPDATE `pstation-rec` SET `proname`='$proname' , `disname`='$disname' , `tehname`='$tehname', `pstation`='$pstation' WHERE `pstationid`='$pstationid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo "<script>alert ('Police Station detail has been updated')</script>";
        header("Refresh:0, url=./add-pstation.php");
      }
      else{
        echo "<script>alert ('Police Station detail has not been updated')</script>";
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
            <h4 class="mb-4 d-flex justify-content-center text-dark">Update Police Station</h4>
            <form  method="post" >
            <div class="form-group">
                        <label class="form-label">Province</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="proname">
                        <option value="<?php echo $vfet['pid'] ?>"><?php echo $vfet['province']; ?></option>
                    <?php 
                       $psql="SELECT * FROM `province-rec`";
                        $prun=mysqli_query($conn,$psql);
                        while($pfet=mysqli_fetch_assoc($prun)){
                    ?>
                    <option value="<?php echo $pfet['pid'] ?>"><?php echo $pfet['province']; ?></option>
                    <?php
                        }
                    ?>
                        </select>
            </div>
                    <div class="form-group">
                        <label class="form-label">District</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="disname">
                        <option value="<?php echo $vfet['did'] ?>"><?php echo $vfet['district']; ?></option>
                    <?php 
                       $dsql="SELECT * FROM `district-rec`";
                        $drun=mysqli_query($conn,$dsql);
                        while($dfet=mysqli_fetch_assoc($drun)){
                    ?>
                    <option value="<?php echo $dfet['did'] ?>"><?php echo $dfet['district']; ?></option>
                    <?php
                        }
                    ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tehsil</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="tehname">
                        <option value="<?php echo $vfet['tid'] ?>"><?php echo $vfet['tehsil']; ?></option>
                    <?php 
                       $tsql="SELECT * FROM `tehsil-rec`";
                        $trun=mysqli_query($conn,$tsql);
                        while($tfet=mysqli_fetch_assoc($trun)){
                    ?>
                    <option value="<?php echo $tfet['tid'] ?>"><?php echo $tfet['tehsil']; ?></option>
                    <?php
                        }
                    ?>
                        </select>
                    </div>
                <div class="form-group">
                    <label class="form-label" for="csubctg">Police Station</label>
                    <input type="text" class="form-control" id="pstation" name="pstation" value="<?php echo $vfet['pstation']; ?>"/>
                </div>
                </div class="form-group">
                    <button type="submit" class="btn btn-primary bg-dark w-100" name="update">Update </button>
                </div>
            </form>
        </div>
</div>

<?php include ('./include/footer.php'); ?>