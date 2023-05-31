<?php 
$conn=mysqli_connect("localhost","root","","classproject");
if($conn){
    echo "connected";
}else{
    echo "not connected";
}
?>