<?php

include ("./include/connection.php");
$del=$_GET['supid'];
$sql="DELETE FROM `supplier-rec` WHERE `supid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0 , url=./view-supplier.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");

?>