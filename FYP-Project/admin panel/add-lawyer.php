<?php 
include ('./include/connection.php');
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
    $pfile=$_FILES['pfile']['name'];
    $idffile=$_FILES['idffile']['name'];
    $idbfile=$_FILES['idbfile']['name'];
    $lifile=$_FILES['lifile']['name'];
    $rfile=$_FILES['rfile']['name'];
    $intro=mysqli_real_escape_string($conn,$_POST['intro']);
    $status=mysqli_real_escape_string($conn,$_POST['status']);
    $a=strtolower(pathinfo($pfile,PATHINFO_EXTENSION));
    $a1=strtolower(pathinfo($idffile,PATHINFO_EXTENSION));
    $a2=strtolower(pathinfo($idbfile,PATHINFO_EXTENSION));
    $a3=strtolower(pathinfo($lifile,PATHINFO_EXTENSION));
    $a4=strtolower(pathinfo($rfile,PATHINFO_EXTENSION));
    $arr=array("jpg" , "jpeg" ,"png");
    if(in_array($a,$arr) and in_array($a1,$arr) and in_array($a2,$arr) and in_array($a3,$arr) and in_array($a4,$arr)){
        $rand=rand(10000,999999);
        $pic=$pfile."." .$rand. ".".$a;
        $idf=$idffile."." .$rand. ".".$a1;
        $idb=$idbfile."." .$rand. ".".$a2;
        $li=$lifile."." .$rand. ".".$a3;
        $rf=$rfile."." .$rand. ".".$a4;
        $sql="INSERT INTO `lawyers-rec`(`name`,`email`,`cnic`, `phoneno`,`state`,`password`,`exp`,`expyear`,`quali`,`exparea`,`pfile`,`idffile`,`idbfile`,`lifile`,`rfile`,`intro`,`status`) VALUES ('$name','$email','$cnic','$phoneno','$state','$password','$exp','$expyear','$quali','$exparea','$pic','$idf','$idb','$li','$rf','$intro','$status')";
        $run=mysqli_query($conn,$sql);
        if($run){

            move_uploaded_file($_FILES['pfile']['tmp_name'],"./data/profile/".$pic);
            move_uploaded_file($_FILES['idffile']['tmp_name'],"./data/id-card-pics/".$idf);
            move_uploaded_file($_FILES['idbfile']['tmp_name'],"./data/id-card-pics/".$idb);
            move_uploaded_file($_FILES['lifile']['tmp_name'],"./data/license/".$li);
            move_uploaded_file($_FILES['rfile']['tmp_name'],"./data/resume/".$rf);
            echo "<script>alert ('Data has been inserted')</script>";
        }
        else{
            $msg= "Your data has not been inserted";
        }
    }
    else{
        $msg="invalid img";
    }
}
include ('./include/header.php');
?>
<body>
    <div class="container-fluid pt-4 px-4 ">
        
          
                <div class="bg-light rounded h-100 p-4">
                    <h4 class="mb-4 d-flex justify-content-center text-success">Register Lawyers</h4>
                    <form  method="post" enctype="multipart/form-data">
            <div class="row g-4 ">
                        <div class="mb-3 col-lg-4">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" />
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp">
                            </div>
                    
                        <div class="mb-3 col-lg-4">
                            <label for="cnic" class="form-label">CNIC</label>
                            <input type="number" class="form-control" id="cnic" name="cnic">
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="phoneno" class="form-label">Phone No.</label>
                            <input type="number" class="form-control" id="phoneno" name="phoneno">
                        </div>
                        <div class="mb-3 col-lg-4">
                      
                            <label  class="form-label">State</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="state">
                                <option selected>Choose state</option>
                                <option value="1">Jaranwala</option>
                                <option value="2">nshataabad</option>
                                <option value="3">shah kout</option>
                            </select>
                           
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="number" class="form-control" id="password" name="password" />
                       </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label" for="exp">Experience</label>
                        <input type="text" class="form-control" id="exp" name="exp" />
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label" for="expyear">Experience in year </label>
                        <input type="number" class="form-control" id="expyear" name="expyear" />
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label">Qualification</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="quali">
                        <option selected></option>
                        <option value="1">L.L.B (3years)</option>
                        <option value="2">L.L.B (5years)</option>
                        <option value="3">Barrister</option>
                        <option value="3">L.L.M</option>
                        <option value="3">Barrister</option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label">Area of Expertise</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="exparea">
                                <option selected></option>
                                <option value="1">General Law</option>
                                <option value="2">Family Law</option>
                                <option value="3">Criminal Law</option>
                                <option value="1">Business Law</option>
                                <option value="1">Consumer Law</option>
                                <option value="1">Real State Law</option>
                                <option value="1">Immigration Law</option>
                                <option value="1">Banking Law</option>
                                <option value="1">Traffic Law</option>
                                <option value="1">Tax Law</option>
                                <option value="1">Tax Return Filling</option>
                            </select>
                    </div>
                       
                            <div class="mb-3 col-lg-4">
                                <label for="formFile" class="form-label">Profile Picture</label>
                                <input class="form-control" type="file" id="formFile" name="pfile">
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label for="formFileMultiple" class="form-label">Id Card Front side</label>
                                <input class="form-control" type="file" id="formFileMultiple" name="idffile">
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label for="formFileSm" class="form-label">Id Card Back side</label>
                                <input class="form-control " id="formFileSm" type="file" name="idbfile">
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label for="formFileLg" class="form-label">Bar License/Reg. License</label>
                                <input class="form-control " id="formFileLg" type="file" name="lifile">
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label for="formFileSm" class="form-label">Resume</label>
                                <input class="form-control " id="formFileSm" type="file" name="rfile">
                            </div>
                     
                        <div class="mb-3 col-lg-4">
                            <label class="form-label">About ypurself</label>
                            <textarea class="form-control" aria-label="With textarea" name="intro"></textarea>
                        </div>
                        <div class="mb-3 col-lg-4">
                        <label class="form-label" for="status">Status </label>
                        <input type="text" class="form-control" id="status" name="status" value="Approved" readonly/>
                        </div>
                        <button type="submit" class="btn btn-primary bg-success" name="sub">Register </button>
                        </div>
                    </form>
                
            
            </div>
           
           
            
           

    </div>
    
    <!-- Form End -->

    <?php include ('./include/footer.php'); ?>