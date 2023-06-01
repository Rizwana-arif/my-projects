<?php

include ("./include/connection.php");
$del=$_GET['quaid'];
$sql="DELETE FROM `quantity-rec` WHERE `quaid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("Refresh:0 ,url=./view-quantity.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>