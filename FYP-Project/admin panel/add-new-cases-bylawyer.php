<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
$lawyer=$_SESSION['lawyerid'];
if(isset($_POST['sub'])){
    $lawyerid=$lawyer;
    $clientn=mysqli_real_escape_string($conn,$_POST['clientn']);
    $ccnic=mysqli_real_escape_string($conn,$_POST['ccnic']);
    $cmobno=mysqli_real_escape_string($conn,$_POST['cmobno']);
    $pname=mysqli_real_escape_string($conn,$_POST['pname']);
    $aname=mysqli_real_escape_string($conn,$_POST['aname']);
    $rname=mysqli_real_escape_string($conn,$_POST['rname']);
    $arname=mysqli_real_escape_string($conn,$_POST['arname']);
    $pro=mysqli_real_escape_string($conn,$_POST['pro']);
    $dis=mysqli_real_escape_string($conn,$_POST['dis']);
    $teh=mysqli_real_escape_string($conn,$_POST['teh']);
    $court=mysqli_real_escape_string($conn,$_POST['court']);
    $jname=mysqli_real_escape_string($conn,$_POST['jname']);
    $caset=mysqli_real_escape_string($conn,$_POST['caset']);
    $ccat=mysqli_real_escape_string($conn,$_POST['ccat']);
    $csub=mysqli_real_escape_string($conn,$_POST['csub']);
    $cno=mysqli_real_escape_string($conn,$_POST['cno']);
    $cdate=mysqli_real_escape_string($conn,$_POST['cdate']);
    $refno=mysqli_real_escape_string($conn,$_POST['refno']);
    $rdate=mysqli_real_escape_string($conn,$_POST['rdate']);
    $pstation=mysqli_real_escape_string($conn,$_POST['pstation']);
    $fno=mysqli_real_escape_string($conn,$_POST['fno']);
    $fdate=mysqli_real_escape_string($conn,$_POST['fdate']);
    $fnum=mysqli_real_escape_string($conn,$_POST['fnum']);
    $fidate=mysqli_real_escape_string($conn,$_POST['fidate']);
    $atype=mysqli_real_escape_string($conn,$_POST['atype']);
    $us=mysqli_real_escape_string($conn,$_POST['us']);
    $ldate=mysqli_real_escape_string($conn,$_POST['ldate']);
    $ndate=mysqli_real_escape_string($conn,$_POST['ndate']);
    $ph=mysqli_real_escape_string($conn,$_POST['ph']);
    $sql="INSERT INTO `add-case-bylawyers` (`lawyerid`,`clientn` , `ccnic` , `cmobno` , `pname` ,`aname` , `rname`,`arname`,`pro`,`dis`,`teh`,`court`,`jname`,`caset`,`ccat`,`csub`,`cno`,`cdate`,`refno`,`rdate`,`pstation`,`fno`,`fdate`,`fnum`,`fidate`,`atype`,`us`,`ldate`,`ndate`,`ph`) VALUES ('$lawyerid','$clientn','$ccnic','$cmobno','$pname','$aname','$rname','$arname','$pro','$dis','$teh','$court','$jname','$caset','$ccat','$csub','$cno','$cdate','$refno','$rdate','$pstation','$fno','$fdate','$fnum','$fidate','$atype','$us','$ldate','$ndate','$ph')";
    $run=mysqli_query($conn,$sql);
    if($run){
         echo "<script> alert ('Successfully ! Case has been added....') </script>";
         header ("Refresh:120,url=./view-cases-addbylawyer.php");
    }
    else{
        echo "<script> alert ('Failed ! Case has not been added....') </script>";
    }

}
include ('./include/header.php');
include ('./include/sidebar.php'); 
?>
<body>
    <div class="container-fluid pt-4 px-4 ">
        
          
                <div class="bg-light rounded h-100 p-4 w-75">
                    <h4 class="mb-4 d-flex justify-content-center text-success">Add New Cases</h4>
                    <form  method="post">
            <div class="row g-4 ">
                    <div class="mb-3 col-lg-4">
                        <label class="form-label">clients name</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="clientn">
                                <option ></option>
                                <?php 
                                $nsql="SELECT * FROM `appointment-rec` where `clawyer`='$lawyer'";
                                $nrun=mysqli_query($conn,$nsql);
                                while($nfet=mysqli_fetch_assoc($nrun)){
                                    ?>
                                 <option selected value="<?php echo $nfet['appoinid'] ?>"><?php echo $nfet['clname']; ?></option>

                               
                            <?php
                                }
                            ?>
                            </select>
                    </div>
                  <div class="mb-3 col-lg-4">
                      
                      <label  class="form-label">Client cnic</label>
                      <select class="form-select mb-3 form-control" aria-label="Default select example" name="ccnic">
                        <?php 
                        $csql="SELECT * FROM `appointment-rec` where `clawyer`='$lawyer'";
                        $crun=mysqli_query($conn,$csql);
                        while($cfet=mysqli_fetch_assoc($crun)){
                        ?>
                        <option selected value="<?php echo $cfet['appoinid'] ?>"><?php echo $cfet['clcnic']; ?></option>

                          <?php } ?>
                      </select>
                     
                  </div>
                  <div class="mb-3 col-lg-4">
                      
                      <label  class="form-label">Client Mobile No.</label>
                      <select class="form-select mb-3 form-control" aria-label="Default select example" name="cmobno">
                      <?php 
                        $csql="SELECT * FROM `appointment-rec` where `clawyer`='$lawyer'";
                        $crun=mysqli_query($conn,$csql);
                        while($cfet=mysqli_fetch_assoc($crun)){
                        ?>
                         <option selected value="<?php echo $cfet['appoinid'] ?>"><?php echo $cfet['clmob']; ?></option>

                          <?php } ?>
                      </select>
                     
                  </div>
                  <h1 align="center">Case Information</h1>
                  <h3 align="center">Party Information</h3>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label" for="pname">Petitioner Name</label>
                            <input type="text" class="form-control" id="pname" name="pname" oninput="checkname()" />
                        <span id="perror" style="color:red;font-size:10px"></span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="cnic" class="form-label">Advocate Name</label>
                            <input type="text" class="form-control" id="aname" name="aname" placeholder="Petitioner Advocate" oninput="checkadvocate()">
                        <span id="aerror" style="color:red;font-size:10px"></span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="cnic" class="form-label">Respondent Name</label>
                            <input type="text" class="form-control" id="rname" name="rname" oninput="checkres()">
                        <span id="rerror" style="color:red;font-size:10px"></span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phoneno" class="form-label">Advocate Name</label>
                            <input type="text" class="form-control" id="arname" name="arname" placeholder="Respondent Advocate" oninput="checkresasdv()">
                        <span id="aderror" style="color:red;font-size:10px"></span>
                        </div>
                    <h3 align="center">Area</h3>
                        <div class="mb-3 col-lg-4">
                        <label class="form-label">Province</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="pro">
                               
                                <?php 
                                $psql="SELECT * FROM `province-rec`";
                                $prun=mysqli_query($conn,$psql);
                                while($pfet=mysqli_fetch_assoc($prun)){
                                    ?>
                                <option selected value="<?php echo $pfet['pid'] ?>"><?php echo $pfet['province']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-4">
                        <label class="form-label">District</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="dis">
                                
                                <?php 
                                $dsql="SELECT * FROM `district-rec`";
                                $drun=mysqli_query($conn,$dsql);
                                while($dfet=mysqli_fetch_assoc($drun)){
                                    ?>
                                <option selected value="<?php echo $dfet['did'] ?>"><?php echo $dfet['district']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-4">
                        <label class="form-label">Tehsil</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="teh">
                                
                                <?php 
                                $tsql="SELECT * FROM `tehsil-rec`";
                                $trun=mysqli_query($conn,$tsql);
                                while($tfet=mysqli_fetch_assoc($trun)){
                                    ?>
                                <option selected value="<?php echo $tfet['tid'] ?>"><?php echo $tfet['tehsil']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                    <h3 align="center">Court</h3>
                        <div class="mb-3 col-lg-4">
                        <label class="form-label">Court Name</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="court">
                                
                                <?php 
                                $cosql="SELECT * FROM `court-rec`";
                                $corun=mysqli_query($conn,$cosql);
                                while($cofet=mysqli_fetch_assoc($corun)){
                                    ?>
                                <option selected value="<?php echo $cofet['courtid'] ?>"><?php echo $cofet['court']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="cnic" class="form-label">Judge</label>
                            <input type="text" class="form-control" id="jname" name="jname" oninput="checkjudge()">
                        </div>
                    <h3 align="center">Case</h3>
                        <div class="mb-3 col-lg-4">
                        <label class="form-label">Case Type</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="caset">
                                
                                <?php 
                                $casql="SELECT * FROM `case-type`";
                                $carun=mysqli_query($conn,$casql);
                                while($cafet=mysqli_fetch_assoc($carun)){
                                    ?>
                                <option selected value="<?php echo $cafet['caseid'] ?>"><?php echo $cafet['casetype']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-4">
                        <label class="form-label">Case Category</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="ccat">
                                
                                <?php 
                                $ccsql="SELECT * FROM `case-category`";
                                $ccrun=mysqli_query($conn,$ccsql);
                                while($ccfet=mysqli_fetch_assoc($ccrun)){
                                    ?>
                                <option selected value="<?php echo $ccfet['cctgid'] ?>"><?php echo $ccfet['casectg']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-4">
                        <label class="form-label">Case SubCategory</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="csub">
                                
                                <?php 
                                $cssql="SELECT * FROM `case-subcategory`";
                                $csrun=mysqli_query($conn,$cssql);
                                while($csfet=mysqli_fetch_assoc($csrun)){
                                    ?>
                                <option selected value="<?php echo $csfet['csubid'] ?>"><?php echo $csfet['csubctg']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phoneno" class="form-label">Case Number</label>
                            <input type="number" class="form-control" id="cno" name="cno" oninput="checkcaseno()">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phoneno" class="form-label">Case Date</label>
                            <input type="date" class="form-control" id="cdate" name="cdate" >
                        </div>
                    <h3 align="center">Registeration</h3>
                        <div class="mb-3 col-lg-6">
                            <label for="phoneno" class="form-label">CNR/Refrence Number</label>
                            <input type="number" class="form-control" id="refno" name="refno" oninput="checkrefno()">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label" for="password">Registeration Date</label>
                            <input type="date" class="form-control" id="rdate" name="rdate" />
                       </div>
                    <h3 align="center">FIR Number</h3>
                        <div class="mb-3 col-lg-4">
                      
                            <label  class="form-label">Police Station</label>
                            <select class="form-select mb-3 form-control" aria-label="Default select example" name="pstation">
                                
                                <option selected>Jaranwala</option>
                                <option >nshataabad</option>
                                <option >shah kout</option>
                            </select>
                           
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label class="form-label" for="password">FIR Number</label>
                            <input type="number" class="form-control" id="fno" name="fno" oninput="checkfirno()"/>
                       </div>
                       <div class="mb-3 col-lg-4">
                            <label class="form-label" for="password">FIR Date</label>
                            <input type="date" class="form-control" id="fdate" name="fdate" />
                       </div>
                    <h3 align="center">Filling Number</h3>
                       <div class="mb-3 col-lg-6">
                            <label class="form-label" for="fnum">File Number</label>
                            <input type="number" class="form-control" id="fnum" name="fnum" oninput="checkfnumber()"/>
                       </div>
                       <div class="mb-3 col-lg-6">
                            <label class="form-label" for="password">File Date</label>
                            <input type="date" class="form-control" id="fidate" name="fidate" />
                       </div>
                    <h3 align="center" >ACT</h3>
                        <div class="mb-3 col-lg-6">
                        <label class="form-label">Act Type</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="atype">
                                <option selected >FSD</option>
                                <option >LHR</option>
                                <option >Sargodha</option>
                                <option >Gujranwala</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label" for="password">Under Section</label>
                            <input type="text" class="form-control" id="us" name="us" oninput="checksection()"/>
                       </div>
                    <h3 align="center">Case Hearing</h3>
                       <div class="mb-3 col-lg-4">
                            <label class="form-label" for="password">Last Date</label>
                            <input type="date" class="form-control" id="ldate" name="ldate" />
                       </div>
                       <div class="mb-3 col-lg-4">
                            <label class="form-label" for="password">Next Date</label>
                            <input type="date" class="form-control" id="ndate" name="ndate" />
                       </div>
                       <div class="mb-3 col-lg-4">
                            <label class="form-label" for="password">Purpose Of Hearing</label>
                            <input type="text" class="form-control" id="ph" name="ph" oninput="checkhearing()"/>
                       </div>
                        <button type="submit" class="btn btn-primary bg-success form-control" name="sub">Add Case </button>
                        </div>
                    </form>
                
            
            </div>
    </div>
</body>
<script>
  function checkname(){
         var name=document.querySelector("#name").value;
         var nameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!nameRegex.test(name)) {
           document.querySelector("#nerror").innerHTML="Write Alphabets Only";
           document.querySelector("#name").style.border="red solid 1px";
        
      }else{
        document.querySelector("#nerror").innerHTML="";
        document.querySelector("#name").style.border="gray solid 2px";
      }
    }
    function checkadvocate(){
         var name=document.querySelector("#name").value;
         var nameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!nameRegex.test(name)) {
           document.querySelector("#nerror").innerHTML="Write Alphabets Only";
           document.querySelector("#name").style.border="red solid 1px";
        
      }else{
        document.querySelector("#nerror").innerHTML="";
        document.querySelector("#name").style.border="gray solid 2px";
      }
    }
</script>
<?php include ('./include/footer.php'); ?>
