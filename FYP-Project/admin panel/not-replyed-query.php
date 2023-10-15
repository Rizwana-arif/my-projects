<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['email'])){
    header("location:./login.php");
} 

include ('./include/header.php');
include ('./include/sidebar.php');
?>
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
                        <h3>List of Queries</h3>
                        </div>
                        <!-- <div class="col-6">
                        <a class="btn btn-sm " href="./add-lawyers.php" style="margin-left: 62%;        background-color: #000;color: #ddd;"><i
                        class="fa fa-user-plus"></i>Add New</a>
                        </div> -->
                  
                     </div>
                    <div class="table-responsive">
                    
                        <table id="example2" class="table table-striped table-bordered border-3">
                        <thead>
                                    <tr>
                                        <th >Name</th>
                                        <th >Email</th>
                                        <th >Mobile No</th>
                                      
                                        
                                        <th >Status</th>
                                        <th >Date</th>
                                        <th>Action</th>
                                    </tr>
                         </thead>
       
                        <tbody>
                        <?php
                            $sql="SELECT * FROM `query-rec` where `status`='not replyed'";
                             $run=mysqli_query($conn,$sql);
                            while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          
       
                         <tr>
                         <td><?php echo $fet['name'] ;?></td>
                                        <td><?php echo $fet['email'] ;?></td>
                                        <td><?php echo $fet['mobno'] ;?></td>
                                        
                                        <td><?php echo $fet['status'] ;?></td>
                                       <td><?php echo $fet['query_date'] ;?></td>

           
                        <td class="text-right">

                         <a class="btn btn-sm btn-success" title="Reply" href="./query-reply-form.php?queryid=<?php echo $fet['queryid']; ?>"><i class="fa-solid fa-reply"></i></a>
                         <a class="btn btn-sm btn-secondary" title="View" href="./view-query.php?queryid=<?php echo $fet['queryid']; ?>"><i class="fa-solid fa-eye"></i></a>
                         <a class="btn btn-sm btn-danger" title="Delete" href="./delete-query.php?queryid=<?php echo $fet['queryid']; ?>"><i class="fa-solid fa-trash"></i></a>
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
<?php include ('./include/footer.php');  ?>