<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $proname=mysqli_real_escape_string($conn,$_POST['proname']);
    $disname=mysqli_real_escape_string($conn,$_POST['disname']);
    $tehname=mysqli_real_escape_string($conn,$_POST['tehname']);
    $pstation=mysqli_real_escape_string($conn,$_POST['pstation']);
    $sql="INSERT INTO `pstation-rec` (`proname`,`disname`,`tehname`,`pstation`) VALUES ('$proname','$disname','$tehname','$pstation')";
    $run=mysqli_query($conn,$sql);
    if($run){
        header ("location:./add-pstation.php");
        echo ("<script> alert ('Police Station has been inserted') </script>");
    }
    else{
        echo ("<script> alert ('Police Station has not been inserted') </script>");
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
    <title>Add Police Station</title>
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
        <h5 class="modal-title" id="exampleModalLabel">Police Station Detail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
      
                        <div class="bg-light rounded h-100 p-4">
                            <!-- <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div> -->
                            <div class="form-floating mb-3">
                                <select class="form-select" id="proname"
                                    aria-label="Floating label select example" name="proname">
                                    <option selected>Open this select menu</option>
                                    <?php 
                  $tsql="SELECT * FROM `province-rec`";
                  $trun=mysqli_query($conn,$tsql);
                  while($tfet=mysqli_fetch_assoc($trun)){
                    ?>
                 <option value="<?php echo $tfet['pid'] ?>"><?php echo $tfet['province']; ?></option>
                    <?php
                  }
              ?>
                                </select>
                                <label for="ctype">Province Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="disname"
                                    aria-label="Floating label select example" name="disname">
                                    <option selected>Open this select menu</option>
                                    <?php 
                  $csql="SELECT * FROM `district-rec`";
                  $crun=mysqli_query($conn,$csql);
                  while($cfet=mysqli_fetch_assoc($crun)){
                    ?>
                 <option value="<?php echo $cfet['did'] ?>"><?php echo $cfet['district']; ?></option>
                    <?php
                  }
              ?>
                                </select>
                                <label for="cctg">District Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="tehname"
                                    aria-label="Floating label select example" name="tehname">
                                    <option selected>Open this select menu</option>
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
                                <label for="cctg">Tehsil Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="pstation"
                                   name="pstation" oninput="checkpstation()">
                                   <span id="error" style="color:red;font-size:10px"></span>
                                <label for="floatingPassword">Police Station</label>
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
        <button type="submit" class="btn btn-primary" name="sub">Add Police Station</button>
      </div>
      </div>
    
     
    </div>
</form>
  </div>
</div>

<script>
  function checkpstation(){
         var pstation=document.querySelector("#pstation").value;
         var pstationRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!pstationRegex.test(pstation)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#pstation").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#pstation").style.border="gray solid 2px";
      }
    }
    
</script>

<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <div class="card-header">
                            <h6>View Court</h6>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Police Station Detail
</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.No</th>
                                            <th scope="col">Province</th>
                                            <th >District</th>
                                            <th>Tehsil</th>
                                            <th>Police Station</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                                        $ssql="SELECT * FROM `pstation-rec` c INNER JOIN `province-rec` p ON c.proname=p.pid INNER JOIN `district-rec` d ON c.disname=d.did INNER JOIN `tehsil-rec` t ON c.tehname=t.tid ";
                                        $srun=mysqli_query($conn,$ssql);
                                        while($fet=mysqli_fetch_assoc($srun)){
                                    ?>
                                        <tr>
                                            <th><?php echo $fet['pstationid']; ?></th>
                                            <td><?php echo $fet['province']; ?></td>
                                            <td><?php echo $fet['district']; ?></td>
                                            <td><?php echo $fet['tehsil']; ?></td>
                                            <td><?php echo $fet['pstation']; ?></td>
                                            <td>
                                        <div class="dropdown">
                                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>

                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="./update-pstation.php?pstationid=<?php echo $fet['pstationid']; ?>">Edit</a></li>
                                            <li><a class="dropdown-item" href="./delete-pstation.php?pstationid=<?php echo $fet['pstationid']; ?>">Delete</a></li>
                                            
                                        </ul>
                                        </div>

                                        </td>
                                        </tr>
                                       <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</body>
</html>
<?php 
include ('./include/footer.php');
?>