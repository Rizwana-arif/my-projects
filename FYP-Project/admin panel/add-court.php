<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $pname=mysqli_real_escape_string($conn,$_POST['pname']);
    $dname=mysqli_real_escape_string($conn,$_POST['dname']);
    $tname=mysqli_real_escape_string($conn,$_POST['tname']);
    $court=mysqli_real_escape_string($conn,$_POST['court']);
    $sql="INSERT INTO `court-rec` (`pname`,`dname`,`tname`,`court`) VALUES ('$pname','$dname','$tname','$court')";
    $run=mysqli_query($conn,$sql);
    if($run){
        header ("location:./add-court.php");
        echo ("<script> alert ('Court detail has been inserted') </script>");
    }
    else{
        echo ("<script> alert ('Court detail has not been inserted') </script>");
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
    <title>Add Court</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
.card{
    width: 90%;
    margin-left: 50px;
    margin-top:30px;
   
}
    </style>
</head>
<body>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Court Detail</h5>
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
                                <select class="form-select" id="pname"
                                    aria-label="Floating label select example" name="pname">
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
                                <select class="form-select" id="dname"
                                    aria-label="Floating label select example" name="dname">
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
                                <select class="form-select" id="tname"
                                    aria-label="Floating label select example" name="tname">
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
                                <input type="text" class="form-control" id="court"
                                   name="court" oninput="checkcourt()">
                                   <span id="error" style="color:red;font-size:10px"></span>
                                <label for="floatingPassword">Court</label>
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
        <button type="submit" class="btn btn-dark" name="sub">Add Court</button>
      </div>
      </div>
    
     
    </div>
</form>
  </div>
</div>

<script>
  function checkcourt(){
         var court=document.querySelector("#court").value;
         var courtRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!courtRegex.test(court)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#court").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#court").style.border="gray solid 2px";
      }
    }
    
</script>

<div class="wrapper">


<!--end header -->
<!--start page wrapper -->
<div class="page-wrapper">

    <!--end breadcrumb-->

   
    <div class="card">
        <div class="card-body">
             <div class="row">
                <div class="col-6">
                <h3>Record of Tehsil</h3>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="margin-left: 30%;background-color: #000;color: #ddd;"><i
                class="fa fa-user-plus"></i>
                Add Tehsil
                </button>
                </div>
          
             </div>
            <div class="table-responsive">
            
                <table id="example2" class="table table-striped table-bordered border-3 ">
                <thead>
    <tr>
        <th>Sr No.</th>
        <th>Province</th>
        <th>District</th>
        <th>Tehsil</th>
        <th>Action</th>
    </tr>
</thead>

                <tbody>
                <?php
$ssql="SELECT * FROM `court-rec` c INNER JOIN `province-rec` p ON c.pname=p.pid INNER JOIN `district-rec` d ON c.dname=d.did INNER JOIN `tehsil-rec` t ON c.tname=t.tid ";
$run=mysqli_query($conn,$ssql);
while($cfet=mysqli_fetch_assoc($run)){
?>
                  

<tr>
   <td><?php echo $cfet['courtid'] ; ?></td>
   <td><?php echo $cfet['province'] ; ?></td>
   <td><?php echo $cfet['district'] ; ?></td>
   <td><?php echo $cfet['tehsil'] ; ?></td>
   <td><?php echo $cfet['court'] ; ?></td>
   <td class="text-right">
   <a class="btn btn-sm btn-success" title="Update" href="./update-court.php?courtid=<?php echo $cfet['courtid']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
     <a class="btn btn-sm btn-danger" title="Delete" href="./delete-court.php?courtid=<?php echo $cfet['courtid']; ?>"><i class="fa-solid fa-trash"></i></a>
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
</html>
<?php 
include ('./include/footer.php');
?>