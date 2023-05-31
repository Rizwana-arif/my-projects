<?php
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/connection.php");
$del=$_GET['ctgid'];
$sql="DELETE FROM `category-rec` WHERE `ctgid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("Location:./view-category.php");
}
include ("./include/footer.php");
?>