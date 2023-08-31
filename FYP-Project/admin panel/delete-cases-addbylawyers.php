<?php

include ("./include/connection.php");
session_start();
if( empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
$del=$_GET['case_id'];
$sql="DELETE FROM `add-case-bylawyers` WHERE `case_id`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./view-cases-addbylawyer.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>