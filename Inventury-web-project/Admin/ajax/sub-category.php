<?php 
include ("../include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}

    $catname=mysqli_real_escape_string($conn,$_POST['catname']);
  $subname=strtolower(mysqli_real_escape_string($conn,$_POST['subname']));
$subdescrip=mysqli_real_escape_string($conn,$_POST['subdescrip']);
$subdate=date ("m-d-y");
$s="SELECT * FROM `sub-category-rec` WHERE `catname`='$catname' and `subname`='$subname'";
$r=mysqli_query($conn,$s);
if(mysqli_num_rows($r)>0){
  echo "<script>alert ('SubCategory already exist')</script>";
}
else{
  $sql="INSERT INTO `sub-category-rec` (`catname`,`subname`,`subdescrip`,`subdate`) VALUES ('$catname','$subname','$subdescrip','$subdate')";
  $run=mysqli_query($conn,$sql);
  if ($run){

    echo 1;
   
  }
  else{
    echo 2;
  }
}

?>