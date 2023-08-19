<?php
include ("../include/connection.php");
$ctgid=mysqli_real_escape_string($conn,$_POST['ctgid']);
$sql="SELECT * FROM `category-rec` WHERE `ctgid`='$ctgid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
  $ctgname=strtolower(mysqli_real_escape_string($conn,$_POST['ctgname']));
  $descrip=mysqli_real_escape_string($conn,$_POST['descrip']);
  $date=date ("m-d-y");
  $usql="UPDATE `category-rec` SET `ctgname`='$ctgname', `descrip`='$descrip' , `date`='$date' WHERE `ctgid`='$ctgid'";
  $urun=mysqli_query($conn,$usql);
  if ($urun){
      echo 1;
      
    }
    else{
      echo 2;
    }


?>