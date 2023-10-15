<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $act=mysqli_real_escape_string($conn,$_POST['act']);
    $sql="INSERT INTO `act-rec` (`act`) VALUES ('$act')";
    $run=mysqli_query($conn,$sql);
    if($run){
        header ("location:./add-act.php");
        echo ("<script> alert ('Act Detail has been inserted') </script>");
    }
    else{
        echo ("<script> alert ('Act Detail has not been inserted') </script>");
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
    <title>Add Act</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
.card{
    width: 60%;
    margin-left: 150px;
   margin-top: 20px;
}
/* .container-fluid{
    display: flex;
    
} */
    </style>
</head>
<body>
<!-- Modal for Add cases -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Act Details</h5>
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
                                <input type="text" class="form-control" id="act"
                                   name="act" oninput="checkact()" >
                                   <span id="error" style="color:red;font-size:10px"></span>
                                <label for="act">Act Detail</label>
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
        <button type="submit" class="btn btn-dark" name="sub">Add Act</button>
      </div>
      </div>
    
     
    </div>
</form>
  </div>
</div>
<script>
  function checkact(){
         var c=document.querySelector("#act").value;
         var cRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!cRegex.test(c)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#act").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#act").style.border="gray solid 2px";
      }
    }
    
</script>
 <!-- Modal end of add cases -->

<!-- start table of case -->
<div class="wrapper">


<!--end header -->
<!--start page wrapper -->
<div class="page-wrapper">

    <!--end breadcrumb-->

   
    <div class="card">
        <div class="card-body">
             <div class="row">
                <div class="col-6">
                <h3>Record of Act</h3>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="margin-left: 30%;background-color: #000;color: #ddd;"><i
                class="fa fa-user-plus"></i>
                Add Act
                </button>
                </div>
          
             </div>
            <div class="table-responsive">
            
                <table id="example2" class="table table-striped table-bordered border-3 ">
                <thead>
    <tr>
        <th>Sr No.</th>
        
        <th>Act</th>
        <th>Action</th>
    </tr>
</thead>

                <tbody>
                <?php
$sql="SELECT * FROM `act-rec` ";
$run=mysqli_query($conn,$sql);
while($fet=mysqli_fetch_assoc($run)){
?>
                  

<tr>
   <td><?php echo $fet['actid'] ; ?></td>
   <td><?php echo $fet['act'] ; ?></td>
   <td class="text-right">
   <a class="btn btn-sm btn-success" title="Update" href="./update-act.php?actid=<?php echo $fet['actid']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
     <a class="btn btn-sm btn-danger" title="Delete" href="./delete-act.php?actid=<?php echo $fet['actid']; ?>"><i class="fa-solid fa-trash"></i></a>
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