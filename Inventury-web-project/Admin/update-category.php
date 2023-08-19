<?php 
include ("./include/connection.php");
$ctgid=$_GET['ctgid'];
$sql="SELECT * FROM `category-rec` WHERE `ctgid`='$ctgid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);


include ("./include/header.php");
include ("./include/sidebar.php");


?>
<style>
  .btn{
    margin-left : auto;
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
                    
                      <h4>Update Category</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-category.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="ctgname" required="" value="<?php echo $fet['ctgname']; ?>">
                        <input type="hidden" class="form-control" name="ctgid"  value="<?php echo $fet['ctgid']; ?>">

                      </div>
                     
                      <div class="form-group mb-0">
                        <label>Category Description</label>
                        <textarea class="form-control" required="" name="descrip" ><?php echo $fet['descrip'] ;?></textarea>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" name="sub" id="update" >Update</button>
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
                       alert("category has been updated");
                       $("form").trigger("reset");
                   window.location="./view-category.php";

                     }else
                     {
                      alert("category has not been updated");
                     }
             }  
          
          });
       });


  });
</script>
   
<?php 
include ("./include/footer.php");
?>