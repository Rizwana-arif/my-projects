<?php
include ('./include/connection.php'); 
 $del=$_GET['clientid'];
$sql="SELECT `img` FROM `clients-rec` WHERE `clientid`='$del'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
  //$pic=unserialize($fet['spic']);
  //foreach($pic as $p){
   // unlink("./pics/".$p);
  //}
unlink(".user panel/data/client-img/".$fet['img']);
 $dsql="DELETE FROM `clients-rec` WHERE `clientid`='$del'";
 $run=mysqli_query($conn,$dsql);
 if($run){

      header("Location:./clients-rec.php");
 }



?>