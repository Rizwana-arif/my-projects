<?php

include ("./include/connection.php");
$del=$_GET['pid'];
$sql="DELETE FROM `province-rec` WHERE `pid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./province.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>