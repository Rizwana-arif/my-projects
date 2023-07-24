<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['cemail'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $cname=mysqli_real_escape_string($conn,$_POST['cname']);
    $ccnic=mysqli_real_escape_string($conn,$_POST['ccnic']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $mobno=mysqli_real_escape_string($conn,$_POST['mobno']);
    $refname=mysqli_real_escape_string($conn,$_POST['refname']);
    $refno=mysqli_real_escape_string($conn,$_POST['refno']);
    $cemail=mysqli_real_escape_string($conn,$_POST['cemail']);
    $cpass=mysqli_real_escape_string($conn,$_POST['cpass']);
    $state=mysqli_real_escape_string($conn,$_POST['state']);
    $dis=mysqli_real_escape_string($conn,$_POST['dis']);
    $cadd=mysqli_real_escape_string($conn,$_POST['cadd']);
    $des=mysqli_real_escape_string($conn,$_POST['des']);
    $img=$_FILES['img']['name'];
$estatus="client";
$assign_lawyer="";
    $a=strtolower(pathinfo($img,PATHINFO_EXTENSION));
    $arr=array("jpg" , "jpeg" ,"png");
    if(in_array($a,$arr)){
        $rand=rand(10000,999999);
        $pic=$img."." .$rand. ".".$a;
        $sql="INSERT INTO `clients-rec` (`cname`,`ccnic`,`gender`,`mobno`,`refname`,`refno`,`cemail`,`cpass`,`state`,`dis`,`cadd`,`des`,`img`,`estatus`,`assign_lawyer`) VALUES ('$cname','$ccnic','$gender','$mobno','$refname','$refno','$cemail','$cpass','$state','$dis','$cadd','$des','$pic','$estatus','$assign_lawyer')";
        $run=mysqli_query($conn,$sql);
        if($run){
            move_uploaded_file($_FILES['img']['tmp_name'],"./data/client-img/".$pic);
            echo "<script>alert('Data has been inserted')</script>";
            header("Refresh:0, url=./register-clients.php");
        }
        else{
            echo "<script>alert('Data has not been inserted')</script>";
        }
    }else{
        echo "<script>alert('Image is invalid')</script>";

    }
}
include ('./include/header.php');
?>
<body>
    <div class="container-fluid pt-4 px-4 ">
        
          
                <div class="bg-light rounded h-100 p-4">
                    <h4 class="mb-4 d-flex justify-content-center text-success">Register Clients</h4>
                    <form  method="post" enctype="multipart/form-data">
            <div class="row g-4 ">
                        <div class="mb-3 col-lg-4">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="cname" name="cname" />
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="cnic" class="form-label">CNIC</label>
                            <input type="number" class="form-control" id="ccnic" name="ccnic">
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label  class="form-label">Gender</label>
                            <select class="form-select mb-3 form-control" aria-label="Default select example" name="gender">
                                <option selected>Choose Gender</option>
                                <option >Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="phoneno" class="form-label">Mobile No.</label>
                            <input type="number" class="form-control" id="mobno" name="mobno">
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="phoneno" class="form-label">Referance Name</label>
                            <input type="text" class="form-control" id="refname" name="refname">
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="phoneno" class="form-label">Refrence No.</label>
                            <input type="number" class="form-control" id="refno" name="refno">
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="cemail" name="cemail"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="number" class="form-control" id="cpass" name="cpass" />
                       </div>
                        <div class="mb-3 col-lg-4">
                      
                            <label  class="form-label">State</label>
                            <select class="form-select mb-3 form-control" aria-label="Default select example" name="state">
                                <option selected>Choose state</option>
                                <option >Jaranwala</option>
                                <option >nshataabad</option>
                                <option >shah kout</option>
                            </select>
                           
                        </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label">District</label>
                        <select class="form-select mb-3 form-control" aria-label="Default select example" name="dis">
                                <option selected>Choose district</option>
                                <option >FSD</option>
                                <option >LHR</option>
                                <option >Sargodha</option>
                                <option >Gujranwala</option>
                            </select>
                    </div>
                    <div class="mb-3 col-lg-4">
                            <label class="form-label" for="password">Address</label>
                            <input type="text" class="form-control" id="cadd" name="cadd" />
                       </div>
                        <div class="mb-3 col-lg-4">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" aria-label="With textarea" name="des" value="write few words about case"></textarea>
                        </div>
                        <div class="mb-3 col-lg-4">
                                <label for="formFile" class="form-label">Client Image</label>
                                <input class="form-control" type="file" id="formFile" name="img">
                            </div>
                        <button type="submit" class="btn btn-primary bg-success form-control" name="sub">Register </button>
                        </div>
                    </form>
                
            
            </div>
    </div>
</body>
<?php include ('./include/footer.php'); ?>