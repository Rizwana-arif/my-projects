<?php 
include ("./include/connection.php");
$supid=$_GET['supid'];
$sql="SELECT * FROM `supplier-rec` WHERE `supid`='$supid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);

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
                      <h4>Update Supplier</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-supplier.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Supplier Name</label>
                        <input type="text" class="form-control" name="supname" required="" value="<?php echo $fet['supname']; ?>">
                        <input type="hidden" class="form-control" name="supid" required="" value="<?php echo $fet['supid']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Supplier Email</label>
                        <input type="email" class="form-control" name="supemail" required="" value="<?php echo $fet['supemail']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Supplier Number</label>
                        <input type="text" class="form-control" name="supnum" required="" value="<?php echo $fet['supnum']; ?>">
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
             url:"./ajax/supplier-update.php",
             method:"POST",
             contentType:false,
             processData:false,
             data:myData,
             success:function(val){
              // alert(val);
                     if(val==1){
                       alert("Supplier has been updated");
                       $("form").trigger("reset");
                   window.location="./view-supplier.php";

                     }else
                     {
                      alert("Supplier has not been updated");
                     }
             }  
          
          });
       });


  });
</script>
<?php 
include ("./include/footer.php");
?>