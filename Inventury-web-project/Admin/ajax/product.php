<?php

include ("../include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}

    $pctg=mysqli_real_escape_string($conn,$_POST['pctg']);
    $psubctg=strtolower(mysqli_real_escape_string($conn,$_POST['psubctg']));
    $psupname=mysqli_real_escape_string($conn,$_POST['psupname']);
    $pcode=mysqli_real_escape_string($conn,$_POST['pcode']);
    $pname=mysqli_real_escape_string($conn,$_POST['pname']);
    $pdescrip=mysqli_real_escape_string($conn,$_POST['pdescrip']);
    $punit=mysqli_real_escape_string($conn,$_POST['punit']);
    $sprice=mysqli_real_escape_string($conn,$_POST['sprice']);
    $pqua=mysqli_real_escape_string($conn,$_POST['pqua']);
    $pstock=mysqli_real_escape_string($conn,$_POST['pstock']);
    $pfile=$_FILES['pfile']['name'];
    $status=mysqli_real_escape_string($conn,$_POST['status']);
    if($status==""){
           $status="offline";
        }
    $pdate=date ("m-d-y");
$ctgsql="SELECT * FROM `product-rec` WHERE `pctg`='$pctg' and `pname`='$pname'";
$ctgrun=mysqli_query($conn,$ctgsql);
// if (empty($pctg) || ($psubctg) || write all these in this sequence to check whether a field is empty then show msg plz fill this){
//   echo "<script>Alert ('Plz fill out all')</script>";
// }
if(mysqli_num_rows($ctgrun)>0){
  echo 1;
}
else {
  $subsql="SELECT * FROM `product-rec` WHERE `psubctg`='$psubctg' and `pname`='$pname'";
  $subrun=mysqli_query($conn,$subsql);
  if(mysqli_num_rows($subrun)>0){
    echo 2;
  }
  else{
    $supsql="SELECT * FROM `product-rec` WHERE `psupname`='$psupname' and `pname`='$pname'";
    $suprun=mysqli_query($conn,$supsql);
    if(mysqli_num_rows($suprun)>0){
      echo 3;
    }
      else{
      $psql="SELECT * FROM `product-rec` WHERE `pcode`='$pcode'";
      $prun=mysqli_query($conn,$psql);
      if(mysqli_num_rows($prun)>0){
        echo 4;
      }
     


      
      else{
        $parr=array();
        foreach($pfile as $p){
          $a=strtolower(pathinfo($p,PATHINFO_EXTENSION));
          $arr=array("png","jpg","jpeg");
          if(in_array($a,$arr)){
            $newname=rand(10000,100000);
            $newp=$newname . "." . $a;
            $parr[]=$newp;
            $msg="right";
            
          }
          else{
            $msg="invalid";
           
          }
        }
        if($msg=="right"){
          $pi=serialize($parr);
          $sql="INSERT INTO `product-rec` (`pctg`,`psubctg`,`psupname`,`pcode`,`pname`,`pdescrip`,`punit`,`sprice`,`pqua`,`pstock`,`pfile`,`status`,`pdate`) VALUES ('$pctg','$psubctg','$psupname','$pcode','$pname','$pdescrip','$punit','$sprice','$pqua','$pstock','$pi','$status','$pdate')";
          $run=mysqli_query($conn,$sql);
          if($run){
            foreach($parr as $key=>$p){
              move_uploaded_file($_FILES['pfile']['tmp_name'][$key],"../product-imgs/" . $p);
          }echo 5;
           }
           else{
           echo 6;
           }
        }
    
    
  }
      }
    }
  }
  

?>