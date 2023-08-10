<?php

include ("./include/connection.php");
$del=$_GET['lroleid'];
$sql="DELETE FROM `role-add-bylawyer` WHERE `lroleid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./view-role-bylawyer.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>