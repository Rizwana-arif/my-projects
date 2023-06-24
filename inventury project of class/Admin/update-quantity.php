<?php 
include ("./include/connection.php");
$quaid=$_GET['quaid'];
$sql="SELECT * FROM `quantity-rec` WHERE `quaid`='$quaid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['sub'])){
    $quaname=strtolower(mysqli_real_escape_string($conn,$_POST['quaname']));
    $quadescrip=mysqli_real_escape_string($conn,$_POST['quadescrip']);
    $quadate=date ("m-d-y");
    $usql="UPDATE `quantity-rec` SET `quaname`='$quaname', `quadescrip`='$quadescrip' , `quadate`='$quadate' WHERE `quaid`='$quaid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo "<script>alert ('quantity has been updated')</script>";
        header("Refresh:0, url=./view-quantity.php");
      }
      else{
        echo "<script>alert ('quantity has not been updated')</script>";
      }
}
include ("./include/header.php");
include ("./include/sidebar.php");



?>
<style>
  .btn{
    margin-left : auto;
  }
  </style>
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form method="post">
                    <div class="card-header">
                    
                      <h4>Update Quantity</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-quantity.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quaname" required="" value="<?php echo $fet['quaname']; ?>">
                      </div>
                     
                      <div class="form-group mb-0">
                        <label>Quantity Description</label>
                        <textarea class="form-control" required="" name="quadescrip" ><?php echo $fet['quadescrip'] ;?></textarea>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" name="sub" >Update</button>
                    </div>
                  </form>
                </div>
</div>
</div>
</div>
</section>
</div>

<?php 
include ("./include/footer.php");
?>