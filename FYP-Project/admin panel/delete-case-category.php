<?php

include ("./include/connection.php");
$del=$_GET['cctgid'];
$sql="DELETE FROM `case-category` WHERE `cctgid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./add-case-category.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>