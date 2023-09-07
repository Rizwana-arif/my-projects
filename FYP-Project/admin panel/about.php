<?php 
   require_once './phpqrcode/qrlib.php';
   $value='./img/';
   $qrcode=$value.time().".png";
   $rnd=rand(10000,90000);
   QRcode::png($rnd,$qrcode,'H',4,4);

   echo "<img src='".$qrcode."'>";
?>