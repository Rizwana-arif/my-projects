<?php 
include ('./include/connection.php');
$lawyerid=$_GET['lawyerid'];
$sql="SELECT * FROM `lawyer-rec` where `lawyerid`='$lawyerid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['sub'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $cnic=mysqli_real_escape_string($conn,$_POST['cnic']);
    $phoneno=mysqli_real_escape_string($conn,$_POST['phoneno']);
    $state=mysqli_real_escape_string($conn,$_POST['state']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $exp=mysqli_real_escape_string($conn,$_POST['exp']);
    $expyear=mysqli_real_escape_string($conn,$_POST['expyear']);
    $quali=mysqli_real_escape_string($conn,$_POST['quali']);
    $exparea=mysqli_real_escape_string($conn,$_POST['exparea']);
    @$pfile=$_FILES['pfile']['name'];
    @$idffile=$_FILES['idffile']['name'];
    @$idbfile=$_FILES['idbfile']['name'];
    @$lifile=$_FILES['lifile']['name'];
    @$rfile=$_FILES['rfile']['name'];
    $intro=mysqli_real_escape_string($conn,$_POST['intro']);
    $status=mysqli_real_escape_string($conn,$_POST['status']);
    if(!empty($pfile) && !empty($idffile) && !empty($idbfile) && !empty($lifile) && !empty($rfile)){
        $a=strtolower(pathinfo($pfile,PATHINFO_EXTENSION));
        $a1=strtolower(pathinfo($idffile,PATHINFO_EXTENSION));
        $a2=strtolower(pathinfo($idbfile,PATHINFO_EXTENSION));
        $a3=strtolower(pathinfo($lifile,PATHINFO_EXTENSION));
        $a4=strtolower(pathinfo($rfile,PATHINFO_EXTENSION));
        $arr=array("jpg" , "jpeg" ,"png");
        if(in_array($a,$arr) and in_array($a1,$arr) and in_array($a2,$arr) and in_array($a3,$arr) and in_array($a4,$arr)){
            unlink("./data/profile/".$fet['pfile']);
            unlink("./data/id-card-pics/".$fet['idffile']);
            unlink("./data/id-card-pics/".$fet['idbfile']);
            unlink("./data/license/".$fet['lifile']);
            unlink("./data/resume/".$fet['rfile']);
            $rand=rand(10000,999999);
            $pic=$pfile."." .$rand. ".".$a;
            $idf=$idffile."." .$rand. ".".$a1;
            $idb=$idbfile."." .$rand. ".".$a2;
            $li=$lifile."." .$rand. ".".$a3;
            $rf=$rfile."." .$rand. ".".$a4;
            $sql="UPDATE `lawyer-rec` SET `name`='$name',`email`='$email',`cnic`='$cnic',`phoneno`='$phoneno',`state`='$state',`password`='$password',`exp`='$exp',`expyear`='$expyear',`quali`='$quali',`exparea`='$exparea',`pfile`='$pic',`idffile`='$idf',`idbfile`='$idb',`lifile`='$li',`rfile`='$rf',`intro`='$intro',`status`='$status' WHERE `lawyerid`='$lawyerid'";
            $run=mysqli_query($conn,$sql);
            if($run){
                move_uploaded_file($_FILES['pfile']['tmp_name'],"./data/profile/".$pic);
                move_uploaded_file($_FILES['idffile']['tmp_name'],"./data/id-card-pics/".$idf);
                move_uploaded_file($_FILES['idbfile']['tmp_name'],"./data/id-card-pics/".$idb);
                move_uploaded_file($_FILES['lifile']['tmp_name'],"./data/license/".$li);
                move_uploaded_file($_FILES['rfile']['tmp_name'],"./data/resume/".$rf);
                echo "<script>alert ('Data has been inserted')</script>";
                   header("Refresh:0, url=./disapproved-lawyers.php");
               }else{
                echo "<script>alert ('Data has not been inserted')</script>";
               }
        }else{
            $msg="invalid imgs";
           }
     }else{
        $pic=$fet['pfile'];
        $idf=$fet['idffile'];
        $idb=$fet['idbfile'];
        $li=$fet['lifile'];
        $rf=$fet['rfile'];
        $sql="UPDATE `lawyer-rec` SET `name`='$name',`email`='$email',`cnic`='$cnic',`phoneno`='$phoneno',`state`='$state',`password`='$password',`exp`='$exp',`expyear`='$expyear',`quali`='$quali',`exparea`='$exparea',`pfile`='$pic',`idffile`='$idf',`idbfile`='$idb',`lifile`='$li',`rfile`='$rf',`intro`='$intro',`status`='$status' WHERE `lawyerid`='$lawyerid'";
            $run=mysqli_query($conn,$sql);
        if($run){
            echo "<script>alert ('Data has been inserted')</script>";
                   header("Refresh:0, url=./disapproved-lawyers.php");
        }else{
            echo "<script>alert ('Data has not been inserted')</script>";
          }
     }
}
include ('./include/header.php');
?>