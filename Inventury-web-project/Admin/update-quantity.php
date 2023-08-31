<?php 
include ("./include/connection.php");
$quaid=$_GET['quaid'];
$sql="SELECT * FROM `quantity-rec` WHERE `quaid`='$quaid'";
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
                    
                      <h4>Update Quantity</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-quantity.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quaname" required="" value="<?php echo $fet['quaname']; ?>">
                        <input type="hidden" class="form-control" name="quaid"  value="<?php echo $fet['quaid']; ?>">
                      </div>
                     
                      <div class="form-group mb-0">
                        <label>Quantity Description</label>
                        <textarea class="form-control" required="" name="quadescrip" ><?php echo $fet['quadescrip'] ;?></textarea>
                      </div>
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
             url:"./ajax/quantity-update.php",
             method:"POST",
             contentType:false,
             processData:false,
             data:myData,
             success:function(val){
              // alert(val);
                     if(val==1){
                       alert("Quantity has been updated");
                       $("form").trigger("reset");
                   window.location="./view-quantity.php";

                     }else
                     {
                      alert("Quantity has not been updated");
                     }
             }  
          
          });
       });


  });
</script>
<?php 
include ("./include/footer.php");
?>