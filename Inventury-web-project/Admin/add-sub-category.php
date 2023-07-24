<?php
include ("./include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}
if(isset($_POST['sub'])){
    $catname=mysqli_real_escape_string($conn,$_POST['catname']);
  $subname=strtolower(mysqli_real_escape_string($conn,$_POST['subname']));
$subdescrip=mysqli_real_escape_string($conn,$_POST['subdescrip']);
$subdate=date ("m-d-y");
$s="SELECT * FROM `sub-category-rec` WHERE `catname`='$catname' and `subname`='$subname'";
$r=mysqli_query($conn,$s);
if(mysqli_num_rows($r)>0){
  echo "<script>alert ('SubCategory already exist')</script>";
}
else{
  $sql="INSERT INTO `sub-category-rec` (`catname`,`subname`,`subdescrip`,`subdate`) VALUES ('$catname','$subname','$subdescrip','$subdate')";
  $run=mysqli_query($conn,$sql);
  if ($run){

    echo "<script>alert ('SubCategory has been inserted')</script>";
    header("refresh:0, url=./add-sub-category.php");
  }
  else{
    echo "<script>alert ('SubCategory has not been inserted')</script>";
  }
}
}
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
                  <form method="post">
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
                      <button class="btn btn-primary" name="sub">Submit</button>
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




<?php 
include ("./include/footer.php");
?>