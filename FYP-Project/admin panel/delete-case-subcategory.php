<?php

include ("./include/connection.php");
$del=$_GET['csubid'];
$sql="DELETE FROM `case-subcategory` WHERE `csubid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./add-case-subcategory.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>