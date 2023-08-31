<?php
include ("../include/connection.php");
$subid=mysqli_real_escape_string($conn,$_POST['subid']);
$sql="SELECT * FROM `sub-category-rec` sb INNER JOIN `category-rec` c ON sb.catname=c.ctgid  WHERE `subid`='$subid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);

    $catname=mysqli_real_escape_string($conn,$_POST['catname']);
    $subname=strtolower(mysqli_real_escape_string($conn,$_POST['subname']));
    $subdescrip=mysqli_real_escape_string($conn,$_POST['subdescrip']);
    $subdate=date ("m-d-y");
    $usql="UPDATE `sub-category-rec` SET `catname`='$catname' , `subname`='$subname', `subdescrip`='$subdescrip' , `subdate`='$subdate' WHERE `subid`='$subid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo 1;
      }
      else{
        echo 2;
      }

?>