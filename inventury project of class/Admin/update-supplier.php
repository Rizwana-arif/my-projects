<?php 
include ("./include/connection.php");
$supid=$_GET['supid'];
$sql="SELECT * FROM `supplier-rec` WHERE `supid`='$supid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['sub'])){
    $supname=strtolower(mysqli_real_escape_string($conn,$_POST['supname']));
    $supemail=mysqli_real_escape_string($conn,$_POST['supemail']);
    $supnum=mysqli_real_escape_string($conn,$_POST['supnum']);
    $supdate=date ("m-d-y");
    $usql="UPDATE `supplier-rec` SET `supname`='$supname', `supemail`='$supemail' ,`supnum`='$supnum', `supdate`='$supdate' WHERE `supid`='$supid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo "<script>alert ('Supplier has been updated')</script>";
        header("Refresh:2, url=./view-supplier.php");
      }
      else{
        echo "<script>alert ('Supplier has not been updated')</script>";
      }
}
include ("./include/header.php");
include ("./include/sidebar.php");



?>

<style>
  .btn{
    margin-left: auto;
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
                      <h4>Update Supplier</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-supplier.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Supplier Name</label>
                        <input type="text" class="form-control" name="supname" required="" value="<?php echo $fet['supname']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Supplier Email</label>
                        <input type="email" class="form-control" name="supemail" required="" value="<?php echo $fet['supemail']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Supplier Number</label>
                        <input type="text" class="form-control" name="supnum" required="" value="<?php echo $fet['supnum']; ?>">
                      </div>
                      
                      
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" name="sub">Update</button>
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