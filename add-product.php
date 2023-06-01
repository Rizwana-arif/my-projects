<?php

include ("./include/connection.php");
if(isset($_POST['sub'])){
    $pctg=mysqli_real_escape_string($conn,$_POST['pctg']);
    $psubctg=strtolower(mysqli_real_escape_string($conn,$_POST['psubctg']));
    $psupname=mysqli_real_escape_string($conn,$_POST['psupname']);
    $pcode=mysqli_real_escape_string($conn,$_POST['pcode']);
    $pname=mysqli_real_escape_string($conn,$_POST['pname']);
    $pdescrip=mysqli_real_escape_string($conn,$_POST['pdescrip']);
    $punit=mysqli_real_escape_string($conn,$_POST['punit']);
    $sprice=mysqli_real_escape_string($conn,$_POST['sprice']);
    $pqua=mysqli_real_escape_string($conn,$_POST['pqua']);
    $pstock=mysqli_real_escape_string($conn,$_POST['pstock']);
    $pfile=$_Files['pfile']['name'];
    $status=mysqli_real_escape_string($conn,$_POST['status']);
    $pdate=date ("m-d-y");

  $sql="INSERT INTO `product-rec` (`pctg`,`psubctg`,`psupname`,`pcode`,`pname`,`pdescrip`,`punit`,`sprice`,`pqua`,`pstock`,`pfile`,`status`,`pdate`) VALUES ('$pctg','$psubctg','$psupname','$pcode','$pname','$pdescrip','$punit','$sprice','$pqua','$pstock','$pfile','$status','$pdate')";
  $run=mysqli_query($conn,$sql);
  if ($run){
    echo "<script>alert ('Product has been inserted')</script>";
  }
  else{
    echo "<script>alert ('product has not been inserted')</script>";
  }
}

include ("./include/header.php");
include ("./include/sidebar.php");
?>
<style>
  .btn{
    margin-left: auto;
    }
   #pfile{
    display : none;
    visibility: none;
    
   }

  </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form method="post" enctype="multipart/form-data">
                    <div class="card-header">
                      <h4>Add Category</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-product.php'">View Product</button>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                    <label>Select Category</label>
                    <select name="pctg" class="form-control ml-0"  >
             <option value="">Select Category type</option>
             <?php 
                  $csql="SELECT * FROM `category-rec`";
                  $crun=mysqli_query($conn,$csql);
                  while($cfet=mysqli_fetch_assoc($crun)){
                    ?>
                 <option value="<?php echo $cfet['ctgid'] ?>"><?php echo $cfet['ctgname']; ?></option>
                    <?php
                  }
              ?>
        </select>
        </div>
        <div class="form-group">
        <label>Select SubCategory</label>
        <select name="psubctg" class="form-control ml-0" >
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
        <label>Select Supplier</label>
        <select name="psupname" class="form-control ml-0" >
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
                        <input type="text" class="form-control" name="sprice" required="">
                      </div>
                      <div class="form-group">
                      <label>Choose Quantity</label>
                      <select name="pqua" class="form-control ml-0" >
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
                        <label>Select Picture</label><br>
                        <label for="pfile"><i class="fa-solid fa-cloud-arrow-up" style="font-size: 55px; border: 1px solid black; padding: 5px; cursor: pointer;"></i></label>
                        <input type="file" multiple name="pfile[]" required="" id="pfile">
                        
                      </div>
                      <!-- <div class="form-group"> -->
                      <label>Online</label>
                         <input type="checkbox" name="status" required="">
                         
                      <!-- </div> -->
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