<?php
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/connection.php");
if(isset($_POST['sub'])){
    $catname=mysqli_real_escape_string($conn,$_POST['catname']);
  $subname=strtolower(mysqli_real_escape_string($conn,$_POST['subname']));
$subdescrip=mysqli_real_escape_string($conn,$_POST['subdescrip']);
$subdate=date ("m-d-y");
$s="SELECT * FROM `sub-category-rec` WHERE `catname`='$catname' and `subname`='$subname'";
$r=mysqli_query($conn,$s);
if(mysqli_num_rows($r)>0){
  echo "<script>alert ('SubCategory already exist')</script>";
}
else{
  $sql="INSERT INTO `sub-category-rec` (`catname`,`subname`,`subdescrip`,`subdate`) VALUES ('$catname','$subname','$subdescrip','$subdate')";
  $run=mysqli_query($conn,$sql);
  if ($run){
    echo "<script>alert ('SubCategory has been inserted')</script>";
  }
  else{
    echo "<script>alert ('SubCategory has not been inserted')</script>";
  }
}
}
?>
<style>
  .btn{
    margin-left: auto;
    }
    select{
        margin-left : 30px;
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
                      <button class="btn btn-primary" onclick="location.href='./view-sub-category.php'">View</button>
                    </div>
                    <div class="form-group">
                    <select name="catname" >
             <option value="">Select Category type</option>
             <?php 
                  $csql="SELECT * FROM `category-rec`";
                  $crun=mysqli_query($conn,$csql);
                  while($cfet=mysqli_fetch_assoc($crun)){
                    ?>
                 <option value="<?php echo $scfet['ctgid'] ?>"><?php echo $cfet['ctgname']; ?></option>
                    <?php
                  }
              ?>
        </select>
        </div>
        <div class="form-group">
        <select name="subcatname" >
             <option value="">Select SubCategory type</option>
             <?php 
                  $ssql="SELECT * FROM `sub-category-rec`";
                  $srun=mysqli_query($conn,$ssql);
                  while($sfet=mysqli_fetch_assoc($srun)){
                    ?>
                 <option value="<?php echo $sfet['subid'] ?>"><?php echo $sfet['subname']; ?></option>
                    <?php
                  }
              ?>
        </select>
        </div>
        <div class="form-group">
        <select name="supcatname" >
             <option value="">Select Supplier</option>
             <?php 
                  $supsql="SELECT * FROM `supplier-rec`";
                  $suprun=mysqli_query($conn,$supsql);
                  while($supfet=mysqli_fetch_assoc($suprun)){
                    ?>
                 <option value="<?php echo $supfet['supid'] ?>"><?php echo $supfet['supname']; ?></option>
                    <?php
                  }
              ?>
        </select>
        </div>
                    <div class="card-body">
          
                      <div class="form-group">
                        <label>Product Code</label>
                        <input type="text" class="form-control" name="pcode" required="">
                      </div>
                      <div class="form-group">
                        <label>product Name</label>
                        <input type="text" class="form-control" name="pname" required="">
                      </div>
                      <div class="form-group mb-0">
                        <label>Product Description</label>
                        <textarea class="form-control" required="" name="pdescrip"></textarea>
                      </div>
                      <div class="form-group">
                        <label>product unit price</label>
                        <input type="text" class="form-control" name="punit" required="">
                      </div>
                      <div class="form-group">
                        <label>product Sale Price</label>
                        <input type="text" class="form-control" name="psale" required="">
                      </div>
                      <div class="form-group">
                      <select name="catname" >
             <option value="">Select Quantity</option>
             <?php 
                  $qsql="SELECT * FROM `quantity-rec`";
                  $qrun=mysqli_query($conn,$qsql);
                  while($qfet=mysqli_fetch_assoc($qrun)){
                    ?>
                 <option value="<?php echo $qfet['quaid'] ?>"><?php echo $qfet['quaname']; ?></option>
                    <?php
                  }
              ?>
        </select>
                      </div>
                      <div class="form-group">
                        <label>product Stock</label>
                        <input type="text" class="form-control" name="pstock" required="">
                      </div>
                      <div class="form-group">
                        <label>product Pictures</label>
                        <input type="file" class="form-control" name="pfile" required="">
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