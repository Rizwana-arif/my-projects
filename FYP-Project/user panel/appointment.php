<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['cemail'])){
    header("location:./login.php");
}
$appoin=$_SESSION['cemail'];
$sql="SELECT * FROM `clients-rec` where `cemail`='$appoin'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['sub'])){
    $clname=mysqli_real_escape_string($conn,$_POST['clname']);
    $clcnic=mysqli_real_escape_string($conn,$_POST['clcnic']);
    $clgen=mysqli_real_escape_string($conn,$_POST['clgen']);
    $clmob=mysqli_real_escape_string($conn,$_POST['clmob']);
    $clrefn=mysqli_real_escape_string($conn,$_POST['clrefn']);
    $clrefno=mysqli_real_escape_string($conn,$_POST['clrefno']);
    $clemail=mysqli_real_escape_string($conn,$_POST['clemail']);
    $clstate=mysqli_real_escape_string($conn,$_POST['clstate']);
    $cldis=mysqli_real_escape_string($conn,$_POST['cldis']);
    $cladd=mysqli_real_escape_string($conn,$_POST['cladd']);
    $cldes=mysqli_real_escape_string($conn,$_POST['cldes']);
    $casecat=mysqli_real_escape_string($conn,$_POST['casecat']);
    $clawyer=mysqli_real_escape_string($conn,$_POST['clawyer']);
    $sta="request";
    $asql="INSERT INTO `appointment-rec` (`clname` , `clcnic`,`clgen` ,`clmob`,`clrefn`,`clrefno`,`clemail`,`clstate`,`cldis`,`cladd`,`cldes`,`casecat`,`clawyer`,`sta`) VALUES ('$clname','$clcnic','$clgen','$clmob','$clrefn','$clrefno','$clemail','$clstate','$cldis','$cladd','$cldes','$casecat','$clawyer','$sta') ";
    $arun=mysqli_query($conn,$asql);
    if($arun){
        echo "<script>alert('Appointment Request has been sent')</script>";
        header("Refresh:0, url=./index.php");
    }else{
        echo "<script>alert('Appointment Request has not been sent')</script>";
    }
}
include ('./include/header.php');
?>
<body>
    <div class="container-fluid pt-4 px-4 ">
        
          
                <div class="bg-light rounded h-100 p-4">
                    <h4 class="mb-4 d-flex justify-content-center text-success">Register Clients</h4>
                    <form  method="post">
            <div class="row g-4 ">
                        <div class="mb-3 col-lg-4">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="clname" name="clname" value="<?php echo $fet['cname']; ?>" readonly/>
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="cnic" class="form-label">CNIC</label>
                            <input type="number" class="form-control" id="clcnic" name="clcnic" value="<?php echo $fet['ccnic']; ?>" readonly/>
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label  class="form-label">Gender</label>
                            <select class="form-select mb-3 form-control" aria-label="Default select example" name="clgen" readonly>
                            <?php 
       if($fet['gender']=="male"){
         $m="selected";
       }else{
        $f="selected";
       }
    ?>
                                <option value="" disabled selected>Gender</option>
                        <option value="male"<?php echo @$m; ?>> Male</option>
                        <option value="female" <?php echo @$f; ?> >Female</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="phoneno" class="form-label">Mobile No.</label>
                            <input type="number" class="form-control" id="clmob" name="clmob"
                            value="<?php echo $fet['mobno']; ?>" readonly>
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="phoneno" class="form-label">Referance Name</label>
                            <input type="text" class="form-control" id="clrefn" name="clrefn"
                            value="<?php echo $fet['refname']; ?>" readonly/>
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="phoneno" class="form-label">Refrence No.</label>
                            <input type="number" class="form-control" id="clrefno" name="clrefno"
                            value="<?php echo $fet['refno']; ?>" readonly />
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="clemail" name="clemail"
                                aria-describedby="emailHelp" value="<?php echo $fet['cemail']; ?>" readonly/>
                        </div>
                        <!-- <div class="mb-3 col-lg-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="number" class="form-control" id="cpass" name="cpass" />
                       </div> -->
                        <div class="mb-3 col-lg-4">
                      
                            <label  class="form-label">State</label>
                            <select class="form-select mb-3 form-control" aria-label="Default select example" name="clstate">
                                <option ></option>
                                <option >Jaranwala</option>
                                <option >nshataabad</option>
                                <option >shah kout</option>
                            </select>
                           
                        </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label">District</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="cldis">
                                <option selected>Choose district</option>
                                <option >FSD</option>
                                <option >LHR</option>
                                <option >Sargodha</option>
                                <option >Gujranwala</option>
                            </select>
                    </div>
                    <div class="mb-3 col-lg-4">
                            <label class="form-label" for="password">Address</label>
                            <input type="text" class="form-control" id="cladd" name="cladd" value="<?php echo $fet['cadd']; ?>" readonly/>
                       </div>
                        <div class="mb-3 col-lg-4">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" aria-label="With textarea" name="cldes" value="write few words about case" readonly><?php echo $fet['des']; ?></textarea>
                        </div>
                        <div class="mb-3 col-lg-4">
                        <label class="form-label">Select Case Category</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="casecat">
                                <option selected>Choose Case Category</option>
                                <?php 
                                $ssql="SELECT * FROM `case-type`";
                                $srun=mysqli_query($conn,$ssql);
                                while($sfet=mysqli_fetch_assoc($srun)){
                                    ?>
                                <option value="<?php echo $sfet['caseid'] ?>"><?php echo $sfet['casetype']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label">Choose Lawyer</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="clawyer">
                                <option selected>Choose Lawyer</option>
                                <?php 
                                $lsql="SELECT * FROM `lawyers-rec` where `status`='approved'";
                                $lrun=mysqli_query($conn,$lsql);
                                while($lfet=mysqli_fetch_assoc($lrun)){
                                    ?>
                                <option value="<?php echo $lfet['lawyerid'] ?>"><?php echo $lfet['name']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                    </div>
                        <button type="submit" class="btn btn-primary bg-success form-control" name="sub">Sends Request</button>
                        </div>
                    </form>
                
            
            </div>
    </div>
</body>
<?php include ('./include/footer.php'); ?>