<?php 
include ("./include/connection.php");
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
$courtid=$_GET['courtid'];
$sql="SELECT * FROM `court-rec` c INNER JOIN `province-rec` p ON c.pname=p.pid INNER JOIN `district-rec` d ON c.dname=d.did INNER JOIN `tehsil-rec` t ON c.tname=t.tid WHERE `courtid`='$courtid'";
$run=mysqli_query($conn,$sql);
$cfet=mysqli_fetch_assoc($run);
if(isset($_POST['update'])){
    $pname=mysqli_real_escape_string($conn,$_POST['pname']);
    $dname=mysqli_real_escape_string($conn,$_POST['dname']);
    $tname=mysqli_real_escape_string($conn,$_POST['tname']);
    $court=mysqli_real_escape_string($conn,$_POST['court']);
   
    $usql="UPDATE `court-rec` SET `pname`='$pname' , `dname`='$dname' , `tname`='$tname', `court`='$court' WHERE `courtid`='$courtid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo "<script>alert ('court detail has been updated')</script>";
        header("Refresh:0, url=./add-court.php");
      }
      else{
        echo "<script>alert ('court detail has not been updated')</script>";
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
            <h4 class="mb-4 d-flex justify-content-center text-dark">Update Case Category</h4>
            <form  method="post" >
            <div class="form-group">
                        <label class="form-label">Province</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="pname">
                        <option value="<?php echo $cfet['pid'] ?>"><?php echo $cfet['province']; ?></option>
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
                        <select class="form-select mb-3" aria-label="Default select example" name="dname">
                        <option value="<?php echo $cfet['did'] ?>"><?php echo $cfet['district']; ?></option>
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
                        <select class="form-select mb-3" aria-label="Default select example" name="tname">
                        <option value="<?php echo $cfet['tid'] ?>"><?php echo $cfet['tehsil']; ?></option>
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
                    <label class="form-label" for="csubctg">Court</label>
                    <input type="text" class="form-control" id="court" name="court" value="<?php echo $cfet['court']; ?>"/>
                </div>
                </div>
                    <button type="submit" class="btn btn-secondary bg-dark w-100" name="update">Update </button>
                </div>
            </form>
        </div>
</div>

<?php include ('./include/footer.php'); ?>