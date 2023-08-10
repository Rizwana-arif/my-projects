<?php 
include ('./include/connection.php');
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
 $FAQid=$_GET['FAQid'];
$usql="SELECT * FROM `FAQs-rec` WHERE `FAQid`='$FAQid'";
$urun=mysqli_query($conn,$usql);
$ufet=mysqli_fetch_assoc($urun);
if(isset($_POST['update'])){
    
    $que=mysqli_real_escape_string($conn,$_POST['que']);
    $ans=mysqli_real_escape_string($conn,$_POST['ans']);
    $date=date("d/m/y");
   
    $upsql="UPDATE `FAQs-rec` SET `que`='$que' , `ans`='$ans' , `date`='$date' WHERE `FAQid`='$FAQid'";
    $uprun=mysqli_query($conn,$upsql);
    if ($uprun){
      header("Refresh:0, url=./FAQs.php");
        echo "<script>alert ('Successfully! Updated a question with ans.')</script>";
        
      }
      else{
        echo "<script>alert ('Failed! not updated.There is an error.')</script>";
      }
}
include ('./include/header.php');
include ('./include/sidebar.php');

?>




<div class="container-fluid pt-4 px-4 ">
        <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4 d-flex justify-content-center text-success">Update FAQs</h4>
            <form  method="post" >
                <div class="mb-3 col-lg-4">
                    <label class="form-label" for="que">Question</label>
                    <input type="text" class="form-control" id="que" name="que" value="<?php echo $ufet['que']; ?>"/>
                </div>
                <div class="mb-3 col-lg-4">
                    <label for="ans">Answer of the question</label>
                    <textarea class="form-control" aria-label="With textarea" name="ans" id="ans"><?php echo $ufet['ans'] ; ?></textarea>
                </div>
                </div>
                    <button type="submit" class="btn btn-primary bg-success" name="update">Update </button>
                </div>
            </form>
        </div>
</div>

<?php include ('./include/footer.php'); ?>