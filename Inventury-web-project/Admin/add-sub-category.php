<?php
include ("./include/connection.php");

include ("./include/header.php");
include ("./include/sidebar.php");

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
                  <form id="data">
                    <div class="card-header">
                      <h4>Add Category</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-sub-category.php'">View</button>
                    </div>
                    
             
                    <div class="card-body">
                      <div class="form-group">
                    <label>Select Category Name</label>
                    <select name="catname" class="form-control ml-0">
                    
             <option value="">Select Category type</option>
             <?php 
                  $subsql="SELECT * FROM `category-rec`";
                  $subrun=mysqli_query($conn,$subsql);
                  while($subfet=mysqli_fetch_assoc($subrun)){
                    ?>
                 <option value="<?php echo $subfet['ctgid'] ?>"><?php echo $subfet['ctgname']; ?></option>
                    <?php
                  }
              ?>
        </select></div>
                      <div class="form-group">
                        <label>SubCategory Name</label>
                        <input type="text" class="form-control" name="subname" id="subname" required="" oninput="checkname()">
                        <span id="error" style="color:red;font-size:10px"></span>
                      </div>
                     
                      <div class="form-group mb-0">
                        <label>Category Description</label>
                        <textarea class="form-control" required="" name="subdescrip"></textarea>
                      </div>
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
   function checkname(){
         var subname=document.querySelector("#subname").value;
         var subnameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!subnameRegex.test(subname)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#subname").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#subname").style.border="gray solid 2px";
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
             url:"./ajax/sub-category.php",
             method:"POST",
             contentType:false,
             processData:false,
             data:myData,
             success:function(val){
            
                     if(val==1){
                       alert("SubCategory has been inserted");
                       $("form").trigger("reset");
                     }else{
                      alert("SubCategory has not been inserted");
                     }
             }
          });
       });
  });
</script>


<?php 
include ("./include/footer.php");
?>