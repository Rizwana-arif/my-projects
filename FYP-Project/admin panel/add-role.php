<?php 
include ('./include/connection.php');
session_start();
if( empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $rolen=mysqli_real_escape_string($conn,$_POST['rolen']);
    $descrip=mysqli_real_escape_string($conn,$_POST['descrip']);
    $sql="INSERT INTO `role-rec` (`rolen`,`descrip`) VALUES ('$rolen','$descrip')";
    $run=mysqli_query($conn,$sql);
    if($run){
        header ("location:./add-role.php");
        echo ("<script> alert ('Successfully ! Assigned a role.') </script>");
    }
    else{
                echo ("<script> alert ('Failed !Not Assigned a role.') </script>");
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
    <title>Add Role</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
</head>
<body>
<!-- Modal for Add cases -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Role</h5>
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
                                <input type="text" class="form-control" id="rolen"
                                   name="rolen" oninput="checkrole()" >
                                   <span id="error" style="color:red;font-size:10px"></span>
                                <label for="rolen">Role Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="descrip"
                                   name="descrip" oninput="checkdesc()" >
                                   <span id="derror" style="color:red;font-size:10px"></span>
                                <label for="descrip">Role Description</label>
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
        <button type="submit" class="btn btn-dark" name="sub">Add Role</button>
      </div>
      </div>
    
     
    </div>
</form>
  </div>
</div>
<script>
  function checkrole(){
         var c=document.querySelector("#rolen").value;
         var cRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!cRegex.test(c)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#rolen").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#rolen").style.border="gray solid 2px";
      }
    }
     function checkdesc(){
         var d=document.querySelector("#descrip").value;
         var dRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!cRegex.test(d)) {
           document.querySelector("#derror").innerHTML="Write Alphabets Only";
           document.querySelector("#descrip").style.border="red solid 1px";
        
      }else{
        document.querySelector("#derror").innerHTML="";
        document.querySelector("#descrip").style.border="gray solid 2px";
      }
    }
    
</script>
 <!-- Modal end of add cases -->

<!-- start table of case -->
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
                                            <th scope="col">Role Name</th>
                                            <th scope="col">Role Description</th>
                                            <th scope="col">Action</th>
            </tr>
        </thead>
       
                        <tbody>
                        <?php
       $ssql="SELECT * FROM `role-rec` ";
        $run=mysqli_query($conn,$ssql);
        while($fet=mysqli_fetch_assoc($run)){
        ?>
                          
       
       <tr>
       <th><?php echo $fet['roleid']; ?></th>
                                            <td><?php echo $fet['rolen']; ?></td>
                                            <td><?php echo $fet['descrip']; ?></td>

           
           <td class="text-right">
           <a class="btn btn-sm btn-success" href="./update-role.php?roleid=<?php echo $fet['roleid']; ?>"><i class="fa fa-edit"></i>Edit</a>
            <a class="btn btn-sm btn-danger" href="./delete-role.php?roleid=<?php echo $fet['roleid']; ?>"><i class="fa-solid fa-trash"></i></a>
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