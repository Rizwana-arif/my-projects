<?php

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
                  <form id="data">
                    <div class="card-header">
                      <h4>Add Quantity</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-quantity.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quaname" id="quaname" required="" oninput="checkquaname()">
                        <span id="error" style="color:red;font-size:10px"></span>
                      </div>
                     
                      <div class="form-group mb-0">
                        <label>Quantity Description</label>
                        <textarea class="form-control" required="" name="quadescrip"></textarea>
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
   function checkquaname(){
         var quaname=document.querySelector("#quaname").value;
         var quanameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!quanameRegex.test(quaname)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#quaname").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#quaname").style.border="gray solid 2px";
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
               url:"./ajax/quantity.php",
               method:"POST",
               contentType:false,
               processData:false,
               data:myData,
               success:function(val){
              
                       if(val==1){
                         alert("Quantity has been inserted");
                         $("form").trigger("reset");
                       }else{
                        alert("Quantity has not been inserted");
                       }
               }
            });
         });
    });
  </script>


<?php 
include ("./include/footer.php");
?>