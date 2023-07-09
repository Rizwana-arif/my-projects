<?php
include ("./include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}
if(isset($_POST['sub'])){
  $ctgname=strtolower(mysqli_real_escape_string($conn,$_POST['ctgname']));
$descrip=mysqli_real_escape_string($conn,$_POST['descrip']);
$date=date ("m-d-y");
$s="SELECT * FROM `category-rec` WHERE `ctgname`='$ctgname'";
$r=mysqli_query($conn,$s);
if(mysqli_num_rows($r)>0){
  echo "<script>alert ('category already exist')</script>";
}
else{
  $sql="INSERT INTO `category-rec` (`ctgname`,`descrip`,`date`) VALUES ('$ctgname','$descrip','$date')";
  $run=mysqli_query($conn,$sql);
  if ($run){
    echo "<script>alert ('category has been inserted')</script>";
  }
  else{
    echo "<script>alert ('category has not been inserted')</script>";
  }
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
                      <h4>Add Category</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-category.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="ctgname" required="">
                      </div>
                     
                      <div class="form-group mb-0">
                        <label>Category Description</label>
                        <textarea class="form-control" required="" name="descrip"></textarea>
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