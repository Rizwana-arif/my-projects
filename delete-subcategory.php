<?php
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/connection.php");
$del=$_GET['subid'];
$sql="DELETE FROM `sub-category-rec` WHERE `subid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("Location:./view-sub-category.php");
}
include ("./include/footer.php");
?>