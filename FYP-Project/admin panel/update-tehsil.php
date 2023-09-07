<?php 
include ("./include/connection.php");
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
$tid=$_GET['tid'];
$sql="SELECT * FROM `tehsil-rec` t INNER JOIN `province-rec` p ON t.proname=p.pid INNER JOIN `district-rec` d ON t.disname=d.did WHERE `tid`='$tid'";
$run=mysqli_query($conn,$sql);
$tfet=mysqli_fetch_assoc($run);
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
<style>
.car{
    width: 40%;
    margin-top : 5%;
}
</style>
<div class="container-fluid car pt-4 px-4 ">
        <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4 d-flex justify-content-center text-dark">Update Tehsil Detail</h4>
            <form  method="post" >
            <div class="form-group">
                        <label class="form-label">Province</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="proname">
                        <option value="<?php echo $tfet['pid'] ?>"><?php echo $tfet['province']; ?></option>
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
                        <option value="<?php echo $tfet['did'] ?>"><?php echo $tfet['district']; ?></option>
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
                    <label class="form-label" for="csubctg">Tehsil</label>
                    <input type="text" class="form-control" id="csubctg" name="tehsil" value="<?php echo $tfet['tehsil']; ?>"/>
                </div>
                </div class="form-group">
                    <button type="submit" class="btn btn-primary bg-dark w-100" name="update">Update </button>
                </div>
            </form>
        </div>
</div>

<?php include ('./include/footer.php'); ?>