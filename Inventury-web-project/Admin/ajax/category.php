<?php
include ("../include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}

  $ctgname=strtolower(mysqli_real_escape_string($conn,$_POST['ctgname']));
$descrip=mysqli_real_escape_string($conn,$_POST['descrip']);
$date=date ("m-d-y");
$s="SELECT * FROM `category-rec` WHERE `ctgname`='$ctgname'";
$r=mysqli_query($conn,$s);
if(mysqli_num_rows($r)>0){
  echo 1;
}
else{
  $sql="INSERT INTO `category-rec` (`ctgname`,`descrip`,`date`) VALUES ('$ctgname','$descrip','$date')";
  $run=mysqli_query($conn,$sql);
  if ($run){
    echo 2 ;
  }
  else{
    echo 3;
  }
}



?>