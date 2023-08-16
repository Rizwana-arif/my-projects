

<?php
include ("./include/connection.php");
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
                      <h4>Add Product</h4>
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
                        <input type="number" class="form-control" name="pcode" id="pcode" required="" oninput="checkpcode()">
                        <span id="perror" style="color:red;font-size:10px"></span>
                      </div>
                      <div class="form-group">
                        <label>product Name</label>
                        <input type="text" class="form-control" name="pname" id="pname" required="" oninput="checkpname()">
                        <span id="pnerror" style="color:red;font-size:10px"></span>
                      </div>
                      <div class="form-group mb-0">
                        <label>Product Description</label>
                        <textarea class="form-control" required="" name="pdescrip">
                        </textarea>
                      </div>
                      <div class="form-group">
                        <label>product Cost price</label>
                        <input type="number" class="form-control" name="punit" required="" id="punit" oninput="checkpcprice()">
                        <span id="cperror" style="color:red;font-size:10px"></span>
                      </div>
                      <div class="form-group">
                        <label>product Sale Price</label>
                        <input type="number" class="form-control" name="sprice" required="" id="sprice" oninput="checkpsprice()">
                        <span id="sperror" style="color:red;font-size:10px"></span>
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
                        <input type="number" class="form-control" name="pstock" id="pstock" required="" oninput="checkpstock()">
                        <span id="pserror" style="color:red;font-size:10px"></span>
                      </div>
                      <div class="form-group">
                        <label>Select Picture</label><br>
                        <label for="pfile"><i class="fa-solid fa-cloud-arrow-up" style="font-size: 55px; border: 1px solid black; padding: 5px; cursor: pointer;"></i></label>
                        <input type="file" multiple name="pfile[]" id="pfile">
                        
                      </div>
                      <!-- <div class="form-group"> -->
                      <input type="checkbox" name="status" value="online"/>Online
                      <!-- </div> -->
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" name="sub" id="sub">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
         </div>
</section>
</div>
 <script>               
  function checkpcode(){
         var pcode=document.querySelector("#pcode").value;
         var pcodeRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!pcodeRegex.test(pcode)) {
           document.querySelector("#perror").innerHTML="Write Alphabets Only";
           document.querySelector("#pcode").style.border="red solid 1px";
        
      }else{
        document.querySelector("#perror").innerHTML="";
        document.querySelector("#pcode").style.border="gray solid 2px";
      }
    }
    function checkpname(){
         var pname=document.querySelector("#pname").value;
         var pnameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!pnameRegex.test(pname)) {
           document.querySelector("#pnerror").innerHTML="Write Alphabets Only";
           document.querySelector("#pname").style.border="red solid 1px";
        
      }else{
        document.querySelector("#pnerror").innerHTML="";
        document.querySelector("#pname").style.border="gray solid 2px";
      }
    }
    function checkpcprice(){
         var pcprice=document.querySelector("#punit").value;
         var pcpriceRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!pcpriceRegex.test(pcprice)) {
           document.querySelector("#cperror").innerHTML="Write Alphabets Only";
           document.querySelector("#punit").style.border="red solid 1px";
        
      }else{
        document.querySelector("#cperror").innerHTML="";
        document.querySelector("#punit").style.border="gray solid 2px";
      }
    }
    function checkpsprice(){
         var psprice=document.querySelector("#sprice").value;
         var pspriceRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!pspriceRegex.test(psprice)) {
           document.querySelector("#sperror").innerHTML="Write Alphabets Only";
           document.querySelector("#sprice").style.border="red solid 1px";
        
      }else{
        document.querySelector("#sperror").innerHTML="";
        document.querySelector("#sprice").style.border="gray solid 2px";
      }
    }
    function checkpstock(){
         var pstock=document.querySelector("#pstock").value;
         var pstockRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!pstockRegex.test(pstock)) {
           document.querySelector("#pserror").innerHTML="Write Alphabets Only";
           document.querySelector("#pstock").style.border="red solid 1px";
        
      }else{
        document.querySelector("#pserror").innerHTML="";
        document.querySelector("#pstock").style.border="gray solid 2px";
      }
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    $(document).ready(function(){
         $("#sub").on("click",(e)=>{
              e.preventDefault();
            var myData=new FormData(data);
           
            $.ajax({
               url:"./ajax/product.php",
               method:"POST",
               contentType:false,
               processData:false,
               data:myData,
               success:function(val){
              
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