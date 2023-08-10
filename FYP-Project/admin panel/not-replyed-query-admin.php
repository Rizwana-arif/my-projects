<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
} 

include ('./include/header.php');
include ('./include/sidebar.php');
?>
<style>
    /* #aa{
        background-color: yellow;
        size : 5px;

    }
    #aa:hover{
        background-color: green;
    } */
    </style>
  <div class="container-fluid pt-4 px-4">
                 <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">View Queries</h6>
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th >Name</th>
                                        <th >Email</th>
                                        <th >Mobile No</th>
                                        <th >Query</th>
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
                                        <td><?php echo $fet['query'] ;?></td>
                                        <td><?php echo $fet['status'] ;?></td>
                                       <td><?php echo $fet['date'] ;?></td>
                                        <td>
                                        <a   href="./delete-query.php?queryid=<?php echo $fet['queryid']; ?>" >Delete</a>
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
<?php include ('./include/footer.php');  ?>