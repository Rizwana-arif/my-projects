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
                      <h4>Add Supplier</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-supplier.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Supplier Name</label>
                        <input type="text" class="form-control" name="supname" required="" id="supname" oninput="checkname()">
                        <span id="nerror" style="color:red;font-size:10px"></span>

                      </div>
                      <div class="form-group">
                        <label>Supplier Email</label>
                        <input type="email" class="form-control" name="supemail" id="supemail" required="" oninput="checkemail()">
                        <span id="eerror" style="color:red;font-size:10px"></span>

                      </div>
                      <div class="form-group">
                        <label>Supplier Number</label>
                        <input type="text" class="form-control" name="supnum" id="supnum" required="" oninput=
                        "checknum()">
                        <span id="perror" style="color:red;font-size:10px"></span>

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
         var supname=document.querySelector("#supname").value;
         var supnameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!supnameRegex.test(supname)) {
           document.querySelector("#nerror").innerHTML="Write Alphabets Only";
           document.querySelector("#supname").style.border="red solid 1px";
        
      }else{
        document.querySelector("#nerror").innerHTML="";
        document.querySelector("#supname").style.border="gray solid 2px";
      }
    }
    function checkemail(){
         var supemail=document.querySelector("#supemail").value;
         var supemailRegex =/^[\w.-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/;;
         if (!supemailRegex.test(supemail)) {
           document.querySelector("#eerror").innerHTML="Write Alphabets Only";
           document.querySelector("#supemail").style.border="red solid 1px";
        
      }else{
        document.querySelector("#eerror").innerHTML="";
        document.querySelector("#supemail").style.border="gray solid 2px";
      }
    }
    function checknum(){
         var supnum=document.querySelector("#supnum").value;
         var supnumRegex =/^\+92\d{10}$|^(03\d{9})$|^(9\d{8})$/;
         if (!supnumRegex.test(supnum)) {
           document.querySelector("#perror").innerHTML="Write Alphabets Only";
           document.querySelector("#supnum").style.border="red solid 1px";
        
      }else{
        document.querySelector("#perror").innerHTML="";
        document.querySelector("#supnum").style.border="gray solid 2px";
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
             url:"./ajax/supplier.php",
             method:"POST",
             contentType:false,
             processData:false,
             data:myData,
             success:function(val){
            
                     if(val==1){
                       alert("Supplier Data has been inserted");
                       $("form").trigger("reset");
                     }else{
                      alert("Supplier Data has not been inserted");

                     }
             }
          });
       });
  });
</script>


<?php 
include ("./include/footer.php");
?>