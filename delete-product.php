<?php

include ("./include/connection.php");

$del=$_GET['pid'];
$sql="SELECT `pfile` FROM `product-rec` WHERE `pid`='$del'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
$pic=unserialize($fet['pfile']);
foreach($pic as $p){
    unlink("./product-imgs/" . $p);
}
$dsql="DELETE FROM `product-rec` WHERE `pid`='$del'";
$run=mysqli_query($conn,$dsql);
if ($run){
    header("location:./view-product.php");
}

include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");

?>