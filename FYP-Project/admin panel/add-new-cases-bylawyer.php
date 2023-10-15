<?php 
include ('./include/connection.php');
session_start();
if( empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
 $mylawyer=$_SESSION['lawyerid'];
if(isset($_POST['sub'])){
    $l_name=$_SESSION['lawyerid'];
    $case_condition="Processing";
    $client_name=mysqli_real_escape_string($conn,$_POST['client_name']);
    $client_email=mysqli_real_escape_string($conn,$_POST['client_email']);
    $mob_no=mysqli_real_escape_string($conn,$_POST['mob_no']);
    $petitioner_name=mysqli_real_escape_string($conn,$_POST['petitioner_name']);
    $adv_name=mysqli_real_escape_string($conn,$_POST['adv_name']);
    $respondent_name=mysqli_real_escape_string($conn,$_POST['respondent_name']);
    $respondent_adv=mysqli_real_escape_string($conn,$_POST['respondent_adv']);
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
    $case_date=date("m-d-y");
    $sql="INSERT INTO `add-case-bylawyers` (`l_name`,`case_condition`,`client_name` , `client_email` , `mob_no` , `petitioner_name` ,`adv_name` , `respondent_name`,`respondent_adv`,`pro`,`dis`,`teh`,`court`,`jname`,`caset`,`ccat`,`csub`,`cno`,`cdate`,`refno`,`rdate`,`pstation`,`fno`,`fdate`,`fnum`,`fidate`,`atype`,`us`,`ldate`,`ndate`,`ph`,`case_date`) VALUES ('$l_name','$case_condition','$client_name','$client_email','$mob_no','$petitioner_name','$adv_name','$respondent_name','$respondent_adv','$pro','$dis','$teh','$court','$jname','$caset','$ccat','$csub','$cno','$cdate','$refno','$rdate','$pstation','$fno','$fdate','$fnum','$fidate','$atype','$us','$ldate','$ndate','$ph','$case_date')";
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
        
          <div class="row justify-content-center">
                <div class="bg-light rounded h-100 p-4 w-75">
                    <h4 class="mb-4 d-flex justify-content-center text-dark">Add New Cases
                    <a class="btn btn-sm " href="./view-cases-addbylawyer.php" style="margin-left: 50%;        background-color: #000;color: #ddd;"><i
                        class="fa-solid fa-eye"></i>View Cases</a>
                    </h4>
                    <form  method="post">
            <div class="row g-4 ">
          
               
                  <h5 align="center">Client Information</h5>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label">clients name</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="client_name">
                                <option ></option>
                                <?php 
                          
                                $nsql="SELECT * FROM `users-rec` where `assign_lawyer`='$mylawyer'";
                                $nrun=mysqli_query($conn,$nsql);
                                while($nfet=mysqli_fetch_assoc($nrun)){
                                    print_r($nfet);
                                    ?>
                                 <option selected value="<?php echo $nfet['userid'] ?>"><?php echo $nfet['first_name']; ?></option>

                               
                            <?php
                                }
                            ?>
                            </select>
                    </div>
                  <div class="mb-3 col-lg-4">
                      
                      <label  class="form-label">Client Email</label>
                      <select class="form-select mb-3 form-control" aria-label="Default select example" name="client_email">
                        <?php 
                         $csql="SELECT * FROM `users-rec` where `assign_lawyer`='$mylawyer'";
                        $crun=mysqli_query($conn,$csql);
                        while($cfet=mysqli_fetch_assoc($crun)){
                        ?>
                        <option selected value="<?php echo $cfet['userid'] ?>"><?php echo $cfet['user_Email']; ?></option>

                          <?php } ?>
                      </select>
                     
                  </div>
                  <div class="mb-3 col-lg-4">
                      
                      <label  class="form-label">Client Mobile No.</label>
                      <select class="form-select mb-3 form-control" aria-label="Default select example" name="mob_no">
                      <?php 
                        $csql="SELECT * FROM `users-rec` where `assign_lawyer`='$mylawyer'";
                        $crun=mysqli_query($conn,$csql);
                        while($cfet=mysqli_fetch_assoc($crun)){
                        ?>
                         <option selected value="<?php echo $cfet['userid'] ?>"><?php echo $cfet['contact_number']; ?></option>

                          <?php } ?>
                      </select>
                     
                  </div>
                  <h5 align="center">Case Information</h5>
                  <h6 align="center">Party Information</h6>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label" for="pname">Petitioner Name</label>
                            <input type="text" class="form-control" id="petitioner_name" name="petitioner_name" oninput="checkname()" />
                        <span id="perror" style="color:red;font-size:10px"></span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="cnic" class="form-label">Advocate Name</label>
                            <input type="text" class="form-control" id="adv_name" name="adv_name" placeholder="Petitioner Advocate" oninput="checkadvocate()">
                        <span id="aerror" style="color:red;font-size:10px"></span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="cnic" class="form-label">Respondent Name</label>
                            <input type="text" class="form-control" id="respondent_name" name="respondent_name" oninput="checkres()">
                        <span id="rerror" style="color:red;font-size:10px"></span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phoneno" class="form-label">Advocate Name</label>
                            <input type="text" class="form-control" id="respondent_adv" name="respondent_adv" placeholder="Respondent Advocate" oninput="checkresasdv()">
                        <span id="aderror" style="color:red;font-size:10px"></span>
                        </div>
                    <h5 align="center">Area</h5>
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
                    <h5 align="center">Court</h5>
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
                    <h5 align="center">Case</h5>
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
                    <h5 align="center">Registeration</h5>
                        <div class="mb-3 col-lg-6">
                            <label for="phoneno" class="form-label">CNR/Refrence Number</label>
                            <input type="number" class="form-control" id="refno" name="refno" oninput="checkrefno()">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label" for="password">Registeration Date</label>
                            <input type="date" class="form-control" id="rdate" name="rdate" />
                       </div>
                    <h5 align="center">FIR Number</h5>
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
                    <h5 align="center">Filling Number</h5>
                       <div class="mb-3 col-lg-6">
                            <label class="form-label" for="fnum">File Number</label>
                            <input type="number" class="form-control" id="fnum" name="fnum" oninput="checkfnumber()"/>
                       </div>
                       <div class="mb-3 col-lg-6">
                            <label class="form-label" for="password">File Date</label>
                            <input type="date" class="form-control" id="fidate" name="fidate" />
                       </div>
                    <h5 align="center" >ACT</h5>
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
                    <h5 align="center">Case Hearing</h5>
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
                        <button type="submit" class="btn btn-secondary bg-dark form-control" name="sub">Add Case </button>
                        </div>
                    </form>
                
                            </div>
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
