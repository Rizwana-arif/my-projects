<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
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
                        <h1 class="m-0 text-secondary"><span class="fa fa-user-tie"></span> List of Lawyers</h1>
                  </div>
                  <!-- /.col -->
                 
                  <a class="btn btn-sm elevation-2" href="./add-lawyers.php" style="margin-top: 20px;margin-left: 10px;background-color: #000;color: #ddd;"><i
                        class="fa fa-user-plus"></i>
                     Add New</a>
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
                <th>Image</th>
                <th>ID</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Contact_Number</th>
                <th>CNIC</th>
                <th>Email</th>
                <th>Password</th>
                <th>Bar Lisence</th>
                <th>University_College</th>
                <th>Degree</th>
                <th>Passing_Year</th>
                <th>Address</th>
                <th>City</th>
                <th>Zip_Code</th>
                <th>Practice_Length</th>
                <th>Case_Handle</th>
                <th>Speciality</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php 
        $sql="SELECT * FROM `lawyers-rec` WHERE `status`='approved'";
        $run=mysqli_query($conn,$sql);
        while($fet=mysqli_fetch_assoc($run)){
        ?>
        <tbody>
       
            <tr>
            <td><img width=50px height=50px src="<?php echo "./data/lawyer-image/" . $fet['profile_image']; ?> "/></td>
                <td><?php echo $fet['lawyerid'] ; ?></td>
                <td><?php echo $fet['first_Name'] ; ?></td>
                <td><?php echo $fet['last_Name'] ; ?></td>
                <td><?php echo $fet['contact_number'] ; ?></td>
                <td><?php echo $fet['cnic'] ; ?></td>
                <td><?php echo $fet['lawyer_email'] ; ?></td>
                <td><?php echo $fet['password'] ; ?></td>
                <td><img width=50px height=50px src="<?php echo "./data/bar-license/" . $fet['bar_license']; ?> "/></td>
                <td><?php echo $fet['university_college'] ; ?></td>
                <td><?php echo $fet['degree'] ; ?></td>
                <td><?php echo $fet['passing_year'] ; ?></td>
                <td><?php echo $fet['full_address'] ; ?></td>
                <td><?php echo $fet['city'] ; ?></td>
                <td><?php echo $fet['zip_code'] ; ?></td>
                <td><?php echo $fet['practice_Length'] ; ?></td>
                <td>
                <?php
                                        $arr=unserialize($fet['case_handle']);
                                        foreach($arr as $arol){
                                          echo $arol . " , ";
                                           
                                         }
                                         ?> 
                </td>

                <td><?php echo $fet['speciality'] ; ?></td>
                <td><?php echo $fet['status'] ; ?></td>

                
                <td class="text-right">

                              <a class="btn btn-sm btn-success" href="./update-disapprove-lawyer.php?lawyerid=<?php echo $fet['lawyerid']; ?>"><i class="fa fa-edit"></i> DisApprove</a>
                    <a class="btn btn-sm btn-danger" href="./remove-lawyer.php?lawyerid=<?php echo $fet['lawyerid']; ?>" data-toggle="modal" data-target="#delete"><i
                                    class="fa fa-trash-alt"></i> delete</a>
                </td>
               









           
            </tr>
           
           
        </tbody>
        <?php } ?>
    </table>
</div>
</div>
</div>
<div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
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
   </div>

<?php include ('./include/footer.php'); ?>
