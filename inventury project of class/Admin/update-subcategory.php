<?php 
include ("./include/connection.php");
$subid=$_GET['subid'];
$sql="SELECT * FROM `sub-category-rec` sb INNER JOIN `category-rec` c ON sb.catname=c.ctgid  WHERE `subid`='$subid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['sub'])){
    $catname=mysqli_real_escape_string($conn,$_POST['catname']);
    $subname=strtolower(mysqli_real_escape_string($conn,$_POST['subname']));
    $subdescrip=mysqli_real_escape_string($conn,$_POST['subdescrip']);
    $subdate=date ("m-d-y");
    $usql="UPDATE `sub-category-rec` SET `catname`='$catname' , `subname`='$subname', `subdescrip`='$subdescrip' , `subdate`='$subdate' WHERE `subid`='$subid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo "<script>alert ('Subcategory has been updated')</script>";
        header("Refresh:0, url=./view-sub-category.php");
      }
      else{
        echo "<script>alert ('Subcategory has not been updated')</script>";
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
                    
                      <h4>Add SubCategory</h4>
                      
                    </div>
                    <div class="card-body">
                      <label>Category</label>
                    <select name="catname" value="" class="form-control mb-3" >
                    <option value="<?php echo $fet['ctgid'] ?>"><?php echo $fet['ctgname']; ?></option>
                    <?php 
                       $subsql="SELECT * FROM `category-rec`";
                        $subrun=mysqli_query($conn,$subsql);
                        while($subfet=mysqli_fetch_assoc($subrun)){
                    ?>
                    <option value="<?php echo $subfet['ctgid'] ?>"><?php echo $subfet['ctgname']; ?></option>
                    <?php
                        }
                    ?>
                     </select>
                      <div class="form-group">
                        <label>SubCategory Name</label>
                        <input type="text" class="form-control" name="subname" required="" value="<?php echo $fet['subname']; ?>">
                      </div>
                     
                      <div class="form-group mb-0">
                        <label>Category Description</label>
                        <textarea class="form-control" required="" name="subdescrip" ><?php echo $fet['subdescrip'] ;?></textarea>
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