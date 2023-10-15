<!---------------------------------- today User Counting--------------------------- -->
<?php 
include ('./include/connection.php');
@$mylawyer=$_SESSION['lawyerid'];
@$myuser=$_SESSION['userid'];

$user=0;
$usql="SELECT * FROM `users-rec`";
 $urun=mysqli_query($conn,$usql);
 while($ufet=mysqli_fetch_assoc($urun)){
$udate=(explode("-" ,$ufet['user_date']));
$date=date("d");
if($date==$udate['1']){
  $user++;
  }
 }
// //---------------------------------  Monthly User Counting----------------------------------------

$muser=0;
$ussql="SELECT * FROM `users-rec`";
 $usrun=mysqli_query($conn,$ussql);
 while($usfet=mysqli_fetch_assoc($usrun)){
$usdate=(explode("-" ,$usfet['user_date']));
$date=date("m");
if($date==$usdate['0']){
 $muser++;
  }
 }
 // //---------------------------------  Yearly User Counting----------------------------------------

$yuser=0;
$ysql="SELECT * FROM `users-rec`";
 $yrun=mysqli_query($conn,$ysql);
 while($yfet=mysqli_fetch_assoc($yrun)){
$ydate=(explode("-" ,$yfet['user_date']));
$date=date("y");
if($date==$ydate['2']){
 $yuser++;
  }
 }
 
//----------------------------- Today Lawyer Counting----------------------------------------------------
$tolaw=0; 
$tlaw="SELECT * FROM `lawyers-rec`";
 $trun=mysqli_query($conn,$tlaw);
while($tfet=mysqli_fetch_assoc($trun)){
$d=(explode("-" ,$tfet['reg_date']));
$date=date("d");
if($date==$d['1']){
    $tolaw++;
}
}        
//----------------------------- Month lawyer Counting----------------------------------------------------
$mnlaw=0; 
$tlaw="SELECT * FROM `lawyers-rec`";
 $trun=mysqli_query($conn,$tlaw);
while($tfet=mysqli_fetch_assoc($trun)){
$d=(explode("-" ,$tfet['reg_date']));
$date=date("m");
if($date==$d['0']){
    $mnlaw++;
}
}  
//----------------------------- Yearly lawyer Counting----------------------------------------------------
$ylaw=0; 
$ylsql="SELECT * FROM `lawyers-rec`";
 $ytrun=mysqli_query($conn,$ylsql);
while($ytfet=mysqli_fetch_assoc($ytrun)){
$d=(explode("-" ,$ytfet['reg_date']));
$date=date("y");
if($date==$d['2']){
    $ylaw++;
}
}                                     
// //----------------------------- Today Staff Counting----------------------------------------------------

// $tost=0; 
// $patsql="SELECT * FROM `staff` st INNER JOIN `designation` de ON st.`sdesi`=de.`desiid`"; $patrun=mysqli_query($conn,$patsql);
//  while($stfet=mysqli_fetch_assoc($patrun)){
// $pdate=(explode("-" ,$stfet['sdate']));
// $date=date("d");
// if($date==$pdate['2']){
												
//  $tost++;                                                 
// }
//  }											
//  //----------------------------- Month Staff Counting----------------------------------------------------

// $mnst=0; 
// $patsql="SELECT * FROM `staff` st INNER JOIN `designation` de ON st.`sdesi`=de.`desiid`"; $patrun=mysqli_query($conn,$patsql);
//  while($stfet=mysqli_fetch_assoc($patrun)){
// $pdate=(explode("-" ,$stfet['sdate']));
// $date=date("m");
// if($date==$pdate['1']){
												
//  $mnst++;                                                 
// }
//  }											
//  //----------------------------- Today Appointments Approved------------------------------------------
   $toap=0;                                     
   $apsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid";
 $aprun=mysqli_query($conn,$apsql);
 while($fet=mysqli_fetch_assoc($aprun)){
   $apdate=(explode("-" ,$fet['appoin_date']));
// 		 echo "<pre>";
//   print_r($pdate);
//  echo "</pre>";

   $date=date("d");

   if($date==$apdate['1'] and $fet['statuss']=="accept"){
      $toap++; 
    		                                       
									
   }
}                                    
//  //----------------------------- Today Appointments Rejected------------------------------------------

$rjap=0;
$rjsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid";
$rjrun=mysqli_query($conn,$rjsql);
while($fet=mysqli_fetch_assoc($rjrun)){
  $rjdate=(explode("-" ,$fet['appoin_date']));
$date=date("d");
if($date==$rjdate['1'] and $fet['statuss']=="reject"){
      $rjap++;
  }
}
//----------------------------- Today Appointments Pending------------------------------------------

$pndap=0;
$pndsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid";
$pndrun=mysqli_query($conn,$pndsql);
while($fet=mysqli_fetch_assoc($pndrun)){
  $pdate=(explode("-" ,$fet['appoin_date']));
$date=date("d");
if($date==$pdate['1'] and $fet['statuss']=="pending" and $fet['statuss']=="unaccepted"){
      $pndap++;
  }
}

// //----------------------------- Monthly Appointments Approved------------------------------------------

$moap=0;                                     
$mosql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid";
$morun=mysqli_query($conn,$mosql);
while($mofet=mysqli_fetch_assoc($morun)){
$modate=(explode("-" ,$mofet['appoin_date']));
$date=date("m");
if($date==$modate['0'] and $mofet['statuss']=="accept"){
   $moap++; 
  }
} 
									 
// //----------------------------- Monthly Appointments rejected------------------------------------------
$mrjap=0;
$mrjsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid";
$mrjrun=mysqli_query($conn,$mrjsql);
while($mrjfet=mysqli_fetch_assoc($mrjrun)){
  $mrjdate=(explode("-" ,$mrjfet['appoin_date']));
$date=date("m");
if($date==$mrjdate['0'] and $mrjfet['statuss']=="reject"){
      $mrjap++;
  }
} 
// //----------------------------- Monthly Appointments Pending------------------------------------------
$mpndap=0;
$mpndsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid";
$mpndrun=mysqli_query($conn,$mpndsql);
while($mpfet=mysqli_fetch_assoc($mpndrun)){
  $mpdate=(explode("-" ,$mpfet['appoin_date']));
$date=date("m");
if($date==$mpdate['0'] and $mpfet['statuss']=="pending" and $mpfet['statuss']=="unaccepted"){
      $mpndap++;
  }
} 
// //----------------------------- Yearly Appointments Approved------------------------------------------

$yeap=0;                                     
$yesql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid";
$yerun=mysqli_query($conn,$yesql);
while($yefet=mysqli_fetch_assoc($yerun)){
$yedate=(explode("-" ,$yefet['appoin_date']));
$date=date("y");
if($date==$yedate['2'] and $yefet['statuss']=="accept"){
   $yeap++; 
  }
} 
									 
// //----------------------------- Yearly Appointments rejected------------------------------------------
$yrjap=0;
$yrjsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid";
$yrjrun=mysqli_query($conn,$yrjsql);
while($yrjfet=mysqli_fetch_assoc($yrjrun)){
  $yrjdate=(explode("-" ,$yrjfet['appoin_date']));
$date=date("y");
if($date==$yrjdate['2'] and $yrjfet['statuss']=="reject"){
      $yrjap++;
  }
} 
// //----------------------------- Yearly Appointments Pending------------------------------------------
$ypndap=0;
$ypndsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid";
$ypndrun=mysqli_query($conn,$ypndsql);
while($ypfet=mysqli_fetch_assoc($ypndrun)){
  $ypdate=(explode("-" ,$ypfet['appoin_date']));
$date=date("y");
if($date==$ypdate['1'] and $ypfet['statuss']=="pending" and $ypfet['statuss']=="unaccepted"){
      $ypndap++;
  }
} 
// //----------------------------- admin case details------------------------------------------

$wcase=0;
$pcase=0;
$lcase=0;
$wcsql="SELECT * FROM `add-case-bylawyers` ac INNER JOIN `users-rec` cr ON  ac.client_name=cr.userid INNER JOIN `lawyers-rec` l ON ac.l_name=l.lawyerid INNER JOIN `province-rec` pr ON ac.pro=pr.pid INNER JOIN `district-rec` dr ON ac.dis=dr.did INNER JOIN `tehsil-rec` tr ON ac.teh=tr.tid INNER JOIN `court-rec` cor ON ac.court=cor.courtid INNER JOIN `case-type` ct ON ac.caset=ct.caseid INNER JOIN `case-category` cc ON ac.ccat=cc.cctgid INNER JOIN `case-subcategory` cs ON ac.csub=cs.csubid";
$wcrun=mysqli_query($conn,$wcsql);
while($wcfet=mysqli_fetch_assoc($wcrun)){

if($wcfet['case_condition']=="Wining"){
$wcase++;
   }


if($wcfet['case_condition']=="Processing"){
  $pcase++;
     }

     if($wcfet['case_condition']=="Losing"){
      $lcase++;
         }
        }

//----------------------------- lawyer cases detail------------------------------------------

$lwcase=0;
$lpcase=0;
$llcase=0;
$lwcsql="SELECT * FROM `add-case-bylawyers` ac INNER JOIN `users-rec` cr ON  ac.client_name=cr.userid INNER JOIN `lawyers-rec` l ON ac.l_name=l.lawyerid INNER JOIN `province-rec` pr ON ac.pro=pr.pid INNER JOIN `district-rec` dr ON ac.dis=dr.did INNER JOIN `tehsil-rec` tr ON ac.teh=tr.tid INNER JOIN `court-rec` cor ON ac.court=cor.courtid INNER JOIN `case-type` ct ON ac.caset=ct.caseid INNER JOIN `case-category` cc ON ac.ccat=cc.cctgid INNER JOIN `case-subcategory` cs ON ac.csub=cs.csubid WHERE `l_name`='$mylawyer'";
$lwcrun=mysqli_query($conn,$lwcsql);
while($lwcfet=mysqli_fetch_assoc($lwcrun)){

if($lwcfet['case_condition']=="Wining"){
$lwcase++;
   }


if($lwcfet['case_condition']=="Processing"){
  $lpcase++;
     }

     if($lwcfet['case_condition']=="Losing"){
      $llcase++;
         }
        }
 //----------------------------- user cases detail------------------------------------------

$uwcase=0;
$upcase=0;
$ulcase=0;
$uwcsql="SELECT * FROM `add-case-bylawyers` ac INNER JOIN `users-rec` cr ON  ac.client_name=cr.userid INNER JOIN `lawyers-rec` l ON ac.l_name=l.lawyerid INNER JOIN `province-rec` pr ON ac.pro=pr.pid INNER JOIN `district-rec` dr ON ac.dis=dr.did INNER JOIN `tehsil-rec` tr ON ac.teh=tr.tid INNER JOIN `court-rec` cor ON ac.court=cor.courtid INNER JOIN `case-type` ct ON ac.caset=ct.caseid INNER JOIN `case-category` cc ON ac.ccat=cc.cctgid INNER JOIN `case-subcategory` cs ON ac.csub=cs.csubid WHERE `client_name`='$myuser'";
$uwcrun=mysqli_query($conn,$uwcsql);
while($uwcfet=mysqli_fetch_assoc($uwcrun)){

if($uwcfet['case_condition']=="Wining"){
$uwcase++;
   }


if($uwcfet['case_condition']=="Processing"){
  $upcase++;
     }

     if($uwcfet['case_condition']=="Losing"){
      $ulcase++;
         }
        }       

//----------------------------- Today Uploaded reports------------------------------------------

// $rep=0;
// $tsql="SELECT * FROM `pattest`";
// $trun=mysqli_query($conn,$tsql);
// while($tfet=mysqli_fetch_assoc($trun)){
// $pdate=(explode("-" ,$tfet['tdate']));
// $date=date("d");
// if($date==$pdate['2'] and $tfet['repstatus']=="Uploaded"){
// $rep++;
//    }
// }

//----------------------------- Month Uploaded Reports------------------------------------------

// $mrep=0;
// $tsql="SELECT * FROM `pattest`";
// $trun=mysqli_query($conn,$tsql);
// while($tfet=mysqli_fetch_assoc($trun)){
// $pdate=(explode("-" ,$tfet['tdate']));
// $date=date("m");
// if($date==$pdate['1'] and $tfet['repstatus']=="Uploaded"){
// $mrep++;
//    }
// }

//----------------------------- today online appointments------------------------------------------

// $mnbaz=0; 
// $tdoc="SELECT * FROM `onlineappoint` WHERE `oastatus`='Pending'";
//  $trun=mysqli_query($conn,$tdoc);
// while($tfet=mysqli_fetch_assoc($trun)){
// $d=(explode("-" ,$tfet['odefaultdate']));
// $date=date("d");
// if($date==$d['2']){
//     $mnbaz++;
// }
// } 									

//----------------------------- Monthly online appointments------------------------------------------

// $mapp=0; 
// $app="SELECT * FROM `onlineappoint`";
//  $apprun=mysqli_query($conn,$app);
// while($tfet=mysqli_fetch_assoc($apprun)){
// $d=(explode("-" ,$tfet['odefaultdate']));
// $date=date("m");
// if($date==$d['1']){
//     $mapp++;
// }
// } 
// ..............................lawyer records........................................
//  //----------------------------- Today Appointments Approved------------------------------------------
$ltoap=0;                                     
$lapsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid WHERE `lawyer_name`='$mylawyer'";
$laprun=mysqli_query($conn,$lapsql);
while($fet=mysqli_fetch_assoc($laprun)){
$lapdate=(explode("-" ,$fet['appoin_date']));
// 		 echo "<pre>";
//   print_r($pdate);
//  echo "</pre>";

$date=date("d");

if($date==$lapdate['1'] and $fet['statuss']=="accept"){
   $ltoap++; 
                                            
               
}
}                                    
//  //----------------------------- Today Appointments Rejected------------------------------------------

$lrjap=0;
$lrjsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid WHERE `lawyer_name`='$mylawyer' ";
$lrjrun=mysqli_query($conn,$lrjsql);
while($fet=mysqli_fetch_assoc($lrjrun)){
$lrjdate=(explode("-" ,$fet['appoin_date']));
$date=date("d");
if($date==$lrjdate['1'] and $fet['statuss']=="reject"){
   $lrjap++;
}
}
//----------------------------- Today Appointments Pending------------------------------------------

$lpndap=0;
$lpndsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid WHERE `lawyer_name`='$mylawyer'";
$lpndrun=mysqli_query($conn,$lpndsql);
while($fet=mysqli_fetch_assoc($lpndrun)){
$lpdate=(explode("-" ,$fet['appoin_date']));
$date=date("d");
if($date==$lpdate['1'] and $fet['statuss']=="pending" and $fet['statuss']=="unaccepted"){
   $lpndap++;
}
}

// //----------------------------- Monthly Appointments Approved------------------------------------------

$lmoap=0;                                     
$lmosql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid WHERE `lawyer_name`='$mylawyer'";
$lmorun=mysqli_query($conn,$lmosql);
while($lmofet=mysqli_fetch_assoc($lmorun)){
$lmodate=(explode("-" ,$lmofet['appoin_date']));
$date=date("m");
if($date==$lmodate['0'] and $lmofet['statuss']=="accept"){
$lmoap++; 
}
} 
                
// //----------------------------- Monthly Appointments rejected------------------------------------------
$lmrjap=0;
$lmrjsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid";
$lmrjrun=mysqli_query($conn,$lmrjsql);
while($lmrjfet=mysqli_fetch_assoc($lmrjrun)){
$lmrjdate=(explode("-" ,$lmrjfet['appoin_date']));
$date=date("m");
if($date==$lmrjdate['0'] and $lmrjfet['statuss']=="reject"){
   $lmrjap++;
}
} 
// //----------------------------- Monthly Appointments Pending------------------------------------------
$lmpndap=0;
$lmpndsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid WHERE `lawyer_name`='$mylawyer'";
$lmpndrun=mysqli_query($conn,$lmpndsql);
while($lmpfet=mysqli_fetch_assoc($lmpndrun)){
$lmpdate=(explode("-" ,$lmpfet['appoin_date']));
$date=date("m");
if($date==$lmpdate['0'] and $lmpfet['statuss']=="pending" and $lmpfet['statuss']=="unaccepted"){
   $lmpndap++;
}
} 
// //----------------------------- Yearly Appointments Approved------------------------------------------

$lyeap=0;                                     
$lyesql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid WHERE `lawyer_name`='$mylawyer'";
$lyerun=mysqli_query($conn,$lyesql);
while($lyefet=mysqli_fetch_assoc($lyerun)){
$lyedate=(explode("-" ,$lyefet['appoin_date']));
$date=date("y");
if($date==$lyedate['2'] and $lyefet['statuss']=="accept"){
$lyeap++; 
}
} 
                
// //----------------------------- Yearly Appointments rejected------------------------------------------
$lyrjap=0;
$lyrjsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid WHERE `lawyer_name`='$mylawyer'";
$lyrjrun=mysqli_query($conn,$lyrjsql);
while($lyrjfet=mysqli_fetch_assoc($lyrjrun)){
$lyrjdate=(explode("-" ,$lyrjfet['appoin_date']));
$date=date("y");
if($date==$lyrjdate['2'] and $lyrjfet['statuss']=="reject"){
   $lyrjap++;
}
} 
// //----------------------------- Yearly Appointments Pending------------------------------------------
$lypndap=0;
$lypndsql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid WHERE `lawyer_name`='$mylawyer'";
$lypndrun=mysqli_query($conn,$lypndsql);
while($lypfet=mysqli_fetch_assoc($lypndrun)){
$lypdate=(explode("-" ,$lypfet['appoin_date']));
$date=date("y");
if($date==$lypdate['1'] and $lypfet['statuss']=="pending" and $lypfet['statuss']=="unaccepted"){
   $lypndap++;
}
} 									
	?>
