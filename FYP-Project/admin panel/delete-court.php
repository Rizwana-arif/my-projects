<?php

include ("./include/connection.php");
$del=$_GET['courtid'];
$sql="DELETE FROM `court-rec` WHERE `courtid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./add-court.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>