<?php
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/connection.php");
$del=$_GET['supid'];
$sql="DELETE FROM `supplier-rec` WHERE `supid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("Location:./view-supplier.php");
}
include ("./include/footer.php");
?>