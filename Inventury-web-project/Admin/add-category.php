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
                      <h4>Add Category</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-category.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="ctgname" id="ctgname" required="" oninput="checkname()">
                        <span id="error" style="color:red;font-size:10px"></span>
                      </div>
                     
                      <div class="form-group mb-0">
                        <label>Category Description</label>
                        <textarea class="form-control" required="" name="descrip"></textarea>
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
         var ctgname=document.querySelector("#ctgname").value;
         var ctgnameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!ctgnameRegex.test(ctgname)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#ctgname").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#ctgname").style.border="gray solid 2px";
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
               url:"./ajax/category.php",
               method:"POST",
               contentType:false,
               processData:false,
               data:myData,
               success:function(val){
                       if(val==1){
                         alert("category already exist");
                         $("form").trigger("reset");
                         load();
                       }else if(val==2){
                        alert("data has  been inserted");
                       }else{
                        alert("data has not been inserted");
                       }
               }  
            
            });
         });

    //      function load(){
    //                      $.ajax({
    //                      url:"./ajax/singleview.php",
    //                      method:"GET",
    //                      success:function(res){
    //                        $("#view").html(res);
    //                      }
    //                      });
    //                 }

    //                 load();
    });
  </script>
<?php include ("./include/footer.php"); ?>
