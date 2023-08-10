<?php

include ("./include/connection.php");
$del=$_GET['roleid'];
$sql="DELETE FROM `role-rec` WHERE `roleid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./add-role.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>