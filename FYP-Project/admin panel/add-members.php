<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $prov=mysqli_real_escape_string($conn,$_POST['prov']);
    $dist=mysqli_real_escape_string($conn,$_POST['dist']);
    $dist=mysqli_real_escape_string($conn,$_POST['dist']);
    $tehs=mysqli_real_escape_string($conn,$_POST['tehs']);
    $role=mysqli_real_escape_string($conn,$_POST['role']);
    $mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
    $memail=mysqli_real_escape_string($conn,$_POST['memail']);
    $addr=mysqli_real_escape_string($conn,$_POST['addr']);
     $sql="INSERT INTO `members-rec` (`fname`,`prov`,`dist`,`tehs`,`role`,`mobile`,`memail`,`addr`) VALUES ('$fname','$prov','$dist','$tehs','$role','$mobile','$memail','$addr')";
    $run=mysqli_query($conn,$sql);
    if($run){
        header ("location:./add-members.php");
        echo ("<script> alert ('Successfully ! Members has been added') </script>");
    }
    else{
        echo ("<script> alert ('Failed ! Members has not been added') </script>");
    }
}
include ('./include/header.php');
include ('./include/sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Members</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
</head>
<body>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Members</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
      
                        <div class="bg-light rounded h-100 p-4">
                        <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="fname"
                                   name="fname" oninput="checkname()">
                                   <span id="nerror" style="color:red;font-size:10px"></span>

                                <label for="csubctg">Full Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="prov"
                                    aria-label="Floating label select example" name="prov">
                                    <option selected>Select Province</option>
                                    <?php 
                                    $psql="SELECT * FROM `province-rec`";
                                    $prun=mysqli_query($conn,$psql);
                                    while($pfet=mysqli_fetch_assoc($prun)){
                                        ?>
                                    <option value="<?php echo $pfet['pid'] ?>"><?php echo $pfet['province']; ?></option>
                                        <?php
                                    }
                                ?>
                                </select>
                                <label for="prov">Province</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="dist"
                                    aria-label="Floating label select example" name="dist">
                                    <option selected>Select District</option>
                                    <?php 
                                    $dsql="SELECT * FROM `district-rec`";
                                    $drun=mysqli_query($conn,$dsql);
                                    while($dfet=mysqli_fetch_assoc($drun)){
                                        ?>
                                    <option value="<?php echo $dfet['did'] ?>"><?php echo $dfet['district']; ?></option>
                                        <?php
                                    }
                                ?>
                                </select>
                                <label for="dist">District</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="tehs"
                                    aria-label="Floating label select example" name="tehs">
                                    <option selected>Select Tehsil</option>
                                    <?php 
                                    $tsql="SELECT * FROM `tehsil-rec`";
                                    $trun=mysqli_query($conn,$tsql);
                                    while($tfet=mysqli_fetch_assoc($trun)){
                                        ?>
                                    <option value="<?php echo $tfet['tid'] ?>"><?php echo $tfet['tehsil']; ?></option>
                                        <?php
                                    }
                                ?>
                                </select>
                                <label for="cctg">Tehsil</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="role"
                                    aria-label="Floating label select example" name="role">
                                    <option selected>Select Role</option>
                                    <?php 
                                    $rsql="SELECT * FROM `role-rec`";
                                    $rrun=mysqli_query($conn,$rsql);
                                    while($rfet=mysqli_fetch_assoc($rrun)){
                                        ?>
                                    <option value="<?php echo $rfet['roleid'] ?>"><?php echo $rfet['rolen']; ?></option>
                                        <?php
                                    }
                                ?>
                                </select>
                                <label for="cctg">Role Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="mobile"
                                   name="mobile" oninput="checkcase()">
                                   <span id="error" style="color:red;font-size:10px"></span>

                                <label for="mobile">Mobile No.</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="memail"
                                   name="memail" oninput="checkcase()">
                                   <span id="error" style="color:red;font-size:10px"></span>

                                <label for="memail">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="addr"
                                   name="addr" oninput="checkcase()">
                                   <span id="error" style="color:red;font-size:10px"></span>

                                <label for="addr">Address</label>
                            </div>
                            <!-- <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelect">Works with selects</label>
                            </div> -->
                           
                        </div>
                        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-dark" name="sub">Add Members</button>
      </div>
      </div>
    
     
    </div>
</form>
  </div>
</div>

<script>
//   function checkcase(){
//          var csubctg=document.querySelector("#csubctg").value;
//          var csubctgRegex =/^[A-Za-z\s'-]{1,50}$/;
//          if (!csubctgRegex.test(csubctg)) {
//            document.querySelector("#error").innerHTML="Write Alphabets Only";
//            document.querySelector("#csubctg").style.border="red solid 1px";
        
//       }else{
//         document.querySelector("#error").innerHTML="";
//         document.querySelector("#csubctg").style.border="gray solid 2px";
//       }
//     }
    
</script>

<body>
    <!--wrapper-->
    <div class="wrapper">


        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">

            <!--end breadcrumb-->

           
            <div class="card">
                <div class="card-body">
                     <div class="row">
                        <div class="col-6">
                        <h3>List of Role</h3>
                        </div>
                        <div class="col-6">
                        <a class="btn btn-sm " href="./add-lawyers.php" style="margin-left: 62%;        background-color: #000;color: #ddd;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                        class="fa fa-user-plus"></i>Add New</a>
                        </div>
                        <!-- <div class="card-header">
                            <h6>View Role Details</h6>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Role
</button> -->
                            </div>
                  
                     </div>
                    <div class="table-responsive">
                    
                        <table id="example2" class="table table-striped table-bordered border-3">
                        <thead>
            <tr>
            <th scope="col">Sr.No</th>
                                            <th scope="col">Full Name</th>
                                            <th >Province</th>
                                            <th>District</th>
                                            <th>Tehsil</th>
                                            <th>Role</th>
                                            <th>Mobile no.</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th scope="col">Action</th>
            </tr>
        </thead>
       
                        <tbody>
                        <?php
       $ssql="SELECT * FROM `members-rec` mr INNER JOIN `province-rec` pr ON mr.prov=pr.pid INNER JOIN `district-rec` dr ON mr.dist=dr.did INNER JOIN `tehsil-rec` tr ON mr.tehs=tr.tid INNER JOIN `role-rec` rr ON mr.role=rr.roleid";
        $run=mysqli_query($conn,$ssql);
        while($fet=mysqli_fetch_assoc($run)){
        ?>
                          
       
       <tr>
       <th><?php echo $fet['mid']; ?></th>
                                            <td><?php echo $fet['fname']; ?></td>
                                            <td><?php echo $fet['prov']; ?></td>
                                            <td><?php echo $fet['dist']; ?></td>
                                            <td><?php echo $fet['tehs']; ?></td>
                                            <td><?php echo $fet['role']; ?></td>
                                            <td><?php echo $fet['mobile']; ?></td>
                                            <td><?php echo $fet['memail']; ?></td>
                                            <td><?php echo $fet['addr']; ?></td>

           
           <td class="text-right">
           <a class="btn btn-sm btn-success" href="./update-members.php?mid=<?php echo $fet['mid']; ?>"><i class="fa fa-edit"></i>Edit</a>
            <a class="btn btn-sm btn-danger" href="./delete-members.php?mid=<?php echo $fet['mid']; ?>"><i class="fa-solid fa-trash"></i></a>
           </td>
          </tr>
      
          <?php } ?>
               </tbody>
                     </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
</body>
<?php 
include ('./include/footer.php');
?>