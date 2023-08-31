<?php 
include ("./include/connection.php");
$subid=$_GET['subid'];
$sql="SELECT * FROM `sub-category-rec` sb INNER JOIN `category-rec` c ON sb.catname=c.ctgid  WHERE `subid`='$subid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
include ("./include/header.php");
include ("./include/sidebar.php");



?>

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form id="data">
                    <div class="card-header">
                    
                      <h4>Add SubCategory</h4>
                      
                    </div>
                    <div class="card-body">
                    <input type="hidden" class="form-control" name="subid"  value="<?php echo $fet['subid']; ?>">
                      <label>Category</label>
                    <select name="catname" value="" class="form-control mb-3" >
                    <option value="<?php echo $fet['ctgid'] ?>"><?php echo $fet['ctgname']; ?></option>
                    <?php 
                       $subsql="SELECT * FROM `category-rec`";
                        $subrun=mysqli_query($conn,$subsql);
                        while($subfet=mysqli_fetch_assoc($subrun)){
                    ?>
                    <option value="<?php echo $subfet['ctgid'] ?>"><?php echo $subfet['ctgname']; ?></option>
                    <?php
                        }
                    ?>
                     </select>
                      <div class="form-group">
                        <label>SubCategory Name</label>
                        <input type="text" class="form-control" name="subname" required="" value="<?php echo $fet['subname']; ?>">
                      </div>
                     
                      <div class="form-group mb-0">
                        <label>Category Description</label>
                        <textarea class="form-control" required="" name="subdescrip" ><?php echo $fet['subdescrip'] ;?></textarea>
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
             url:"./ajax/sub-category-update.php",
             method:"POST",
             contentType:false,
             processData:false,
             data:myData,
             success:function(val){
              // alert(val);
                     if(val==1){
                       alert("Subcategory has been updated");
                       $("form").trigger("reset");
                   window.location="./view-sub-category.php";

                     }else
                     {
                      alert("Subcategory has not been updated");
                     }
             }  
          
          });
       });


  });
</script>
<?php 
include ("./include/footer.php");
?>