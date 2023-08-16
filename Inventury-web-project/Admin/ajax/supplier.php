<?php
include ("../include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}

  $supname=mysqli_real_escape_string($conn,$_POST['supname']);
$supemail=mysqli_real_escape_string($conn,$_POST['supemail']);
$supnum=mysqli_real_escape_string($conn,$_POST['supnum']);
$supdate=date ("m-d-y");
  $sql="INSERT INTO `supplier-rec` (`supname`,`supemail`,`supnum`,`supdate`) VALUES ('$supname','$supemail','$supnum','$supdate')";
  $run=mysqli_query($conn,$sql);
  if ($run){
    echo 1;
  }
  else{
    echo 2;
  }

?>