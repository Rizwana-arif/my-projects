<?php
include ('./include/connection.php'); 
 $del=$_GET['lawyerid'];
$sql="SELECT `profile_image` , `bar_license` FROM `lawyers-rec` WHERE `lawyerid`='$del'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
  //$pic=unserialize($fet['spic']);
  //foreach($pic as $p){
   // unlink("./pics/".$p);
  //}
unlink("./data/lawyer-image/".$fet['profile_image']);
unlink("./data/bar-license/".$fet['bar_license']);
 $dsql="DELETE FROM `lawyers-rec` WHERE `lawyerid`='$del'";
 $run=mysqli_query($conn,$dsql);
 if($run){
  echo ("<script> alert ('Successfully ! record has been deleted') </script>");

      header("Location:./index.php");
 }



?>