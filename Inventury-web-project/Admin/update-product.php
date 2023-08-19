<?php 
include ("./include/connection.php");
$pid=$_GET['pid'];
$sql="SELECT * FROM `product-rec` p INNER JOIN `category-rec` c ON p.pctg=c.ctgid INNER JOIN `sub-category-rec` sub ON p.psubctg=sub.subid INNER JOIN `supplier-rec` sup ON p.psupname=sup.supid INNER JOIN `quantity-rec` q ON p.pqua=q.quaid WHERE `pid`='$pid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);

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
                  <form id="data">
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
                        <input type="hidden" class="form-control" name="pid" 
                        value="<?php echo $fet['pid'] ?>">
                      </div>
                      <div class="form-group mb-0">
                        <label>Product Description</label>
                        <textarea class="form-control" required="" name="pdescrip">
                        <?php echo $fet['pdescrip'] ?>
                        </textarea>
                      </div>
                      <div class="form-group">
                        <label>product Cost price</label>
                        <input type="number" class="form-control" name="punit" required=""
                        value="<?php echo $fet['punit'] ?>">
                      </div>
                      <div class="form-group">
                        <label>product Sale Price</label>
                        <input type="number" class="form-control" name="sprice" required=""
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
                        <input type="file" multiple name="pfile[]"  id="pfile">
                        
                      </div>
                      <?php
  if($fet['status']=="online"){
    $m="checked";
  }else{
  //  $m="offline";
  }
                      ?>
                      <!-- <div class="form-group"> -->
                      <input type="checkbox" name="status" <?php echo @$m; ?>  value="online"/>Online
                      <!-- </div> -->
                    </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-primary" name="sub" id="update">Update</button>
                    </div>
                  </form>
                </div>
</div>
</div>
</div>
</section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(document).ready(function(){
       $("#update").on("click",(e)=>{
            e.preventDefault();
          var myData=new FormData(data);
          $.ajax({
             url:"./ajax/category-update.php",
             method:"POST",
             contentType:false,
             processData:false,
             data:myData,
             success:function(val){
              // alert(val);
              if(val==1){
                         alert("Category already exist");
                         $("form").trigger("reset");
                       }else if(val==2){
                        alert("Subcategory alredy exist");
                       }else if(val==3){
                        alert("Supplier  already exist");
                       }else if(val==4){
                        alert("product of this code  already exist");
                       }else if(val==5){
                        alert("Product has  been inserted , Successfully!");
                       }else{
                        alert("Product has not been inserted ! plz try again");
                       }
             }  
          
          });
       });


  });
</script>             





<?php 
include ("./include/footer.php");
?>