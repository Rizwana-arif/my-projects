<?php

include ("./include/connection.php");
$del=$_GET['uroleid'];
$sql="DELETE FROM `user-role-rec` WHERE `uroleid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./view-user-role.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>