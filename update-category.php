<?php 
include ("./include/connection.php");
$ctgid=$_GET['ctgid'];
$sql="SELECT * FROM `category-rec` WHERE `ctgid`='$ctgid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['sub'])){
    $ctgname=strtolower(mysqli_real_escape_string($conn,$_POST['ctgname']));
    $descrip=mysqli_real_escape_string($conn,$_POST['descrip']);
    $date=date ("m-d-y");
    $usql="UPDATE `category-rec` SET `ctgname`='$ctgname', `descrip`='$descrip' , `date`='$date' WHERE `ctgid`='$ctgid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
      header("Refresh:0, url=./view-category.php");
        echo "<script>alert ('category has been updated')</script>";
        
      }
      else{
        echo "<script>alert ('category has not been updated')</script>";
      }
}

include ("./include/header.php");
include ("./include/sidebar.php");


?>

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form method="post">
                    <div class="card-header">
                    
                      <h4>Update Category</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-category.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="ctgname" required="" value="<?php echo $fet['ctgname']; ?>">
                      </div>
                     
                      <div class="form-group mb-0">
                        <label>Category Description</label>
                        <textarea class="form-control" required="" name="descrip" ><?php echo $fet['descrip'] ;?></textarea>
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