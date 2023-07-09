<?php

include ("./include/connection.php");
$del=$_GET['caseid'];
$sql="DELETE FROM `case-type` WHERE `caseid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./add-cases.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>