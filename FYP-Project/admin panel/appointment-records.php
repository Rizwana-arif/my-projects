<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email'])){
    header("location:./login.php");
} 
$lawyerid=$_SESSION['lawyerid'];
include ('./include/header.php');
include ('./include/sidebar.php');
?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function (){
        new DataTable('#example');
    });
</script>
<style>
    
    #example{
        margin-top : 25px;
        border : 2px solid ;
        border-collapse : collapse;
    }
    </style>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-5 mt-5">
                  <div class="col-sm-6">
                        <h1 class="m-0 text-secondary"><span class="fa fa-user-tie"></span> List of Appointments</h1>
                  </div>
                  <!-- /.col -->
                 
                  <!-- <a class="btn btn-sm elevation-2" href="./add-lawyers.php" style="margin-top: 20px;margin-left: 10px;background-color: #000;color: #ddd;"><i
                        class="fa fa-user-plus"></i>
                     Add New</a> -->
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
            
            <div class="container">
               <div class="card card-info">

               <div class="col-md-12 table-responsive"><br>
                  <table id="example" class="table table-bordered table-hover">

<!-- <table id="example" class="display" style="width:100%"> -->
        <thead>
            <tr>
                <th>ID</th>
                
                <th>Client_Name</th>
                <th>CNIC</th>
                <th>Gender </th>
                <th>Contact_Number</th>
                <th>Ref_Name</th>
                <th>Ref_No</th>
                <th>Email</th>
                <th>State</th>
                <th>District</th>
                <th>Full_Address</th>
                <th>Description</th>
                <th>Case_Category</th>
                <th>Lawyer_Name</th>
                <th>DateTime</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        $sql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid where `statuss`='accept' and `lawyerid`='$lawyerid'";
        $run=mysqli_query($conn,$sql);
        while($fet=mysqli_fetch_assoc($run)){
        ?>
        <tbody>
       
            <tr>
                <td><?php echo $fet['appoinid'] ; ?></td>
                <td><?php echo $fet['client_name'] ; ?></td>
                <td><?php echo $fet['client_cnic'] ; ?></td>
                <td><?php echo $fet['gender'] ; ?></td>
                <td><?php echo $fet['contact_number'] ; ?></td>
                <td><?php echo $fet['Ref_Name'] ; ?></td>
                <td><?php echo $fet['Ref_No'] ; ?></td>
                <td><?php echo $fet['client_email'] ; ?></td>
                <td><?php echo $fet['state'] ; ?></td>
                <td><?php echo $fet['district'] ; ?></td>
                <td><?php echo $fet['full_address'] ; ?></td>
                <td><?php echo $fet['description'] ; ?></td>
                <td><?php echo $fet['case_category'] ; ?></td>
                <td><?php echo $fet['lawyer_name'] ; ?></td>
                <td><?php echo $fet['datetime'] ; ?></td>
                <td><?php echo $fet['statuss'] ; ?></td>

                
                <td class="text-right">

                              <a class="btn btn-sm btn-success" href="./update-appoin-reject.php?appoinid=<?php echo $fet['appoinid']; ?>"><i class="fa fa-edit"></i>Reject</a>
                </td>
               









           
            </tr>
           
           
        </tbody>
        <?php } ?>
    </table>
</div>
</div>
</div>
<!-- <div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body text-center">
               <img src="../asset/img/sent.png" alt="" width="50" height="46">
               <h3>Are you sure want to delete this User?</h3>
               <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <a   class="btn btn-danger">Delete</a>
               </div>
            </div>
         </div>
      </div>
   </div> -->

<?php include ('./include/footer.php'); ?>
