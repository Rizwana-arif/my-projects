<?php
include ('./include/connection.php'); 
 $del=$_GET['userid'];
$sql="SELECT `image` FROM `users-rec` WHERE `userid`='$del'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
  //$pic=unserialize($fet['spic']);
  //foreach($pic as $p){
   // unlink("./pics/".$p);
  //}
unlink("./data/user-img/".$fet['image']);
 $dsql="DELETE FROM `users-rec` WHERE `userid`='$del'";
 $run=mysqli_query($conn,$dsql);
 if($run){
  echo ("<script> alert ('Successfully ! record has been deleted') </script>");

      header("Location:./users-rec-view.php");
 }



?>