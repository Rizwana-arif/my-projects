<?php 
include ('./include/connection.php');
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
 $caseid=$_GET['caseid'];
$usql="SELECT * FROM `case-type` WHERE `caseid`='$caseid'";
$urun=mysqli_query($conn,$usql);
$ufet=mysqli_fetch_assoc($urun);
if(isset($_POST['update'])){
    
    $casetype=mysqli_real_escape_string($conn,$_POST['casetype']);
   
    $upsql="UPDATE `case-type` SET `casetype`='$casetype' WHERE `caseid`='$caseid'";
    $uprun=mysqli_query($conn,$upsql);
    if ($uprun){
      header("Refresh:0, url=./add-cases.php");
        echo "<script>alert ('cases has been updated')</script>";
        
      }
      else{
        echo "<script>alert ('cases has not been updated')</script>";
      }
}
include ('./include/header.php');
include ('./include/sidebar.php');
?>

<style>
.car{
    width: 40%;
    margin-top : 10%;
}
    </style>


<div class="container-fluid car pt-4 px-4 ">
        <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4 d-flex justify-content-center text-dark">Update Case</h4>
            <form  method="post" >
                <div class="form-group">
                    <label class="form-label" for="casetype">Case Type</label>
                    <input type="text" class="form-control" id="casetype" name="casetype" value="<?php echo $ufet['casetype']; ?>"/>
                    
                </div>
                <div class="form-group mt-4 ">
                <button type="submit" class="btn btn-primary bg-dark w-100" name="update">Update </button>
                </div>
            </form>
        </div>
</div>

<?php include ('./include/footer.php'); ?>