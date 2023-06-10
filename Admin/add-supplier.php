<?php
include ("./include/connection.php");
if(isset($_POST['sub'])){
  $supname=mysqli_real_escape_string($conn,$_POST['supname']);
$supemail=mysqli_real_escape_string($conn,$_POST['supemail']);
$supnum=mysqli_real_escape_string($conn,$_POST['supnum']);
$supdate=date ("m-d-y");
  $sql="INSERT INTO `supplier-rec` (`supname`,`supemail`,`supnum`,`supdate`) VALUES ('$supname','$supemail','$supnum','$supdate')";
  $run=mysqli_query($conn,$sql);
  if ($run){
    echo "<script>alert ('category has been inserted')</script>";
  }
  else{
    echo "<script>alert ('category has not been inserted')</script>";
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
                      <h4>Add Supplier</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-supplier.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Supplier Name</label>
                        <input type="text" class="form-control" name="supname" required="">
                      </div>
                      <div class="form-group">
                        <label>Supplier Email</label>
                        <input type="email" class="form-control" name="supemail" required="">
                      </div>
                      <div class="form-group">
                        <label>Supplier Number</label>
                        <input type="text" class="form-control" name="supnum" required="">
                      </div>
                      
                      
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" name="sub">Submit</button>
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