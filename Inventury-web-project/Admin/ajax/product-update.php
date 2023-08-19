<?php
    include ("../include/connection.php");
    $pid=mysqli_real_escape_string($conn,$_POST['pid']);
    $sql="SELECT * FROM `product-rec` p INNER JOIN `category-rec` c ON p.pctg=c.ctgid INNER JOIN `sub-category-rec` sub ON p.psubctg=sub.subid INNER JOIN `supplier-rec` sup ON p.psupname=sup.supid INNER JOIN `quantity-rec` q ON p.pqua=q.quaid WHERE `pid`='$pid'";
    $run=mysqli_query($conn,$sql);
    $fet=mysqli_fetch_assoc($run);
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
    $status=mysqli_real_escape_string($conn,$_POST['status']);
    $pdate=date ("m-d-y");
    @$pfile=$_FILES['pfile']['name'];
    $parr=array();
    if(!empty($pfile[0])){
      foreach($pfile as $p){
            $a=strtolower(pathinfo($p,PATHINFO_EXTENSION));
            $arr=array("png","jpg","jpeg");
            if(in_array($a,$arr)){
              $newname=rand(10000,100000);
              $newp=$newname . "." . $a;
              $parr[]=$newp;
                $mymsg="right";
            }else{
                $mymsg="invalid";
                break;
               }
               
        }
        if($mymsg=="right"){
            $dpic=unserialize($fet['pfile']);
            foreach($dpic as $key=>$p){
                unlink("./product-imgs/".$p);
             }
        }
        if($mymsg=="right"){
    
            $pi=serialize($parr);
         $sql="UPDATE `product-rec` SET `pctg`='$pctg',`psubctg`='$psubctg',`psupname`='$psupname',`pcode`='$pcode',`pname`='$pname',`pdescrip`='$pdescrip',`punit`='$punit',`sprice`='$sprice',`pqua`='$pqua',`pstock`='$pstock',`pfile`='$pi',`status`='$status' WHERE `pid`='$pid'";
    
             $run=mysqli_query($conn,$sql);
             if($run){
              foreach($parr as $key=>$p){
                 move_uploaded_file($_FILES['pfile']['tmp_name'][$key],"../product-imgs/".$p);
              }
              // echo "<script>alert ('Data has been updated')</script>";
               
             }else{
                echo "<script>alert ('Product has been updated')</script>";
             }
    
         }else{
          echo "<script>alert ('Product has been updated also updated images')</script>";
          header("Refresh:0, url=./view-product.php");
         }
     }
     else{
    
        $pi=$fet['pfile'];
        $sql="UPDATE `product-rec` SET `pctg`='$pctg',`psubctg`='$psubctg',`psupname`='$psupname',`pcode`='$pcode',`pname`='$pname',`pdescrip`='$pdescrip',`punit`='$punit',`sprice`='$sprice',`pqua`='$pqua',`pstock`='$pstock',`pfile`='$pi',`status`='$status' WHERE `pid`='$pid'";
        $run=mysqli_query($conn,$sql);
        if($run){
          
          echo "<script>alert ('Product has been updated but U dont updated images')</script>";
            header("Refresh:0, url=./view-product.php"); 
        }else{
            echo "<script>alert ('Product has not been updated')</script>";
          }
     }
?>