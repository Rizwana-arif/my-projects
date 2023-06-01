<?php 
include ("./include/connection.php");
$pid=$_GET['pid'];
$sql="SELECT * FROM `product-rec` p INNER JOIN `category-rec` c ON p.pctg=c.ctgid INNER JOIN `sub-category-rec` sub ON p.psubctg=sub.subid INNER JOIN `supplier-rec` sup ON p.psupname=sup.supid INNER JOIN `quantity-rec` q ON p.pqua=q.quaid";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
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
    @$pfile=$_FILES['pfile']['name'];
    $status=mysqli_real_escape_string($conn,$_POST['status']);
    $pdate=date ("m-d-y");
    if(!empty($pfile[0])){
        foreach($pfile as $p){
            $a=strtolower(pathinfo($p,PATHINFO_EXTENSION));
            $arr=array("png","jpg","jpeg");
            if(in_array($a,$arr)){
                $mymsg="right";
            }else{
                $mymsg="invalid";
               }
        }
        if($mymsg=="right"){
            $dpic=unserialize($fet['pfile']);
            foreach($dpic as $key=>$p){
                unlink("./product-imgs/".$p);
             }
        }
        if($mymsg=="right"){
    
            $pi=serialize($pfile);
         $sql="UPDATE `product-rec` SET `pctg`='$pctg',`psubctg`='$psubctg',`psupname`='$psupname',`pcode`='$pcode',`pname`='$pname',`pdescrip`='$pdescrip',`punit`='$punit',`sprice`='$sprice',`pqua`='$pqua',`pstock`='$pstock',`pfile`='$pi',`status`='$status' WHERE `pid`='$pid'";
    
             $run=mysqli_query($conn,$sql);
             if($run){
              foreach($pfile as $key=>$p){
                 move_uploaded_file($_FILES['pfile']['tmp_name'][$key],"./product-imgs/".$p);
              }
              echo "<script>alert ('Data has been updated')</script>";
                 header("Refresh:0, url=./view-product.php");
             }else{
                echo "<script>alert ('Data has not been updated')</script>";
             }
    
         }else{
             $msg="Your imgs is not right";
         }
     }
     else{
        $pi=$fet['pfile'];
        $sql="UPDATE `product-rec` SET `pctg`='$pctg',`psubctg`='$psubctg',`psupname`='$psupname',`pcode`='$pcode',`pname`='$pname',`pdescrip`='$pdescrip',`punit`='$punit',`sprice`='$sprice',`pqua`='$pqua',`pstock`='$pstock',`pfile`='$pi',`status`='$status' WHERE `pid`='$pid'";
        $run=mysqli_query($conn,$sql);
        if($run){
            echo "<script>alert ('Data has been updated but You don't updated your images')</script>";
                 header("Refresh:0, url=./view-product.php");
        }else{
            echo "<script>alert ('Data has not been updated')</script>";
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
             <option value="<?php echo $fet['ctgid'] ?>"><?php echo $fet['ctgname']; ?></option>
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
        <option value="<?php echo $fet['subid'] ?>"><?php echo $fet['subname']; ?></option>
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
        <option value="<?php echo $fet['supid'] ?>"><?php echo $fet['supname']; ?></option>
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
                        <input type="number" class="form-control" name="pcode" required="" value="<?php echo $fet['pcode'] ?>">
                      </div>
                      <div class="form-group">
                        <label>product Name</label>
                        <input type="text" class="form-control" name="pname" required=""
                        value="<?php echo $fet['pname'] ?>">
                      </div>
                      <div class="form-group mb-0">
                        <label>Product Description</label>
                        <textarea class="form-control" required="" name="pdescrip">
                        <?php echo $fet['pdescrip'] ?>
                        </textarea>
                      </div>
                      <div class="form-group">
                        <label>product unit price</label>
                        <input type="text" class="form-control" name="punit" required=""
                        value="<?php echo $fet['punit'] ?>">
                      </div>
                      <div class="form-group">
                        <label>product Sale Price</label>
                        <input type="text" class="form-control" name="sprice" required=""
                        value="<?php echo $fet['sprice'] ?>">
                      </div>
                      <div class="form-group">
                      <label>Choose Quantity</label>
                      <select name="pqua" class="form-control ml-0" >
                      <option value="<?php echo $fet['quaid'] ?>"><?php echo $fet['quaname']; ?></option>
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
                        <input type="text" class="form-control" name="pstock" required=""
                        value="<?php echo $fet['pstock'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Select Picture</label><br>
                        <label for="pfile"><i class="fa-solid fa-cloud-arrow-up" style="font-size: 55px; border: 1px solid black; padding: 5px; cursor: pointer;"></i></label>
                        <input type="file" multiple name="pfile[]" required="" id="pfile">
                        
                      </div>
                      <?php
  if($fet['status']=="online"){
    $m="Online";
  }else{
   $m="Offline";
  }
                      ?>
                      <!-- <div class="form-group"> -->
                      <input type="checkbox" name="status" required=""value="<?php echo @$m; ?>" >
                      <label>Online</label>
                      <!-- </div> -->
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" name="sub">update</button>
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