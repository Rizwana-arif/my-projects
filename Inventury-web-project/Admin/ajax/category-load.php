<?php 
include ("../include/connection.php");
$category_id=$_POST['type'];
$subsql="SELECT * FROM `category-rec` WHERE `ctgid`='$category_id'";
$subrun=mysqli_query($conn,$subsql);
while($subfet=mysqli_fetch_assoc($subrun)){
  ?>
<option value="<?php echo $subfet['ctgid'] ?>"><?php echo $subfet['ctgname']; ?></option>
  <?php
}

?>