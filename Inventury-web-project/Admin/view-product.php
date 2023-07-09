<?php 

include ("./include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
.btn{
  margin-left: auto;
}
i{
  color : black;
  font-size : 25px;
}
i:hover{
  color : red;
  cursor : pointer;
  }
.fa-file-pen:hover{
  color : blue;
  cursor : pointer;
}
  </style>

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>View category</h4>
                    <button class="btn btn-primary" onclick="location.href='./add-product.php'">Add Product</button>

                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Category Name</th>
                            <th>SubCategory Name</th>
                            <th>Supplier Name</th>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Description </th>
                            <th>Unit Price</th>
                            <th>Sale Price</th>
                            <th>Quantity</th>
                            <th>Stock</th>
                            <th>Picture</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                          </tr>
                        </thead>
                        <?php 
                          $sql="SELECT * FROM `product-rec` p INNER JOIN `category-rec` c ON p.pctg=c.ctgid INNER JOIN `sub-category-rec` sub ON p.psubctg=sub.subid INNER JOIN `supplier-rec` sup ON p.psupname=sup.supid INNER JOIN `quantity-rec` q ON p.pqua=q.quaid";
                          $run=mysqli_query($conn,$sql);
                          while ($fet=mysqli_fetch_assoc($run)){
                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $fet['ctgname'] ;?></td>
                            <td><?php echo $fet['subname'] ;?></td>
                            <td><?php echo $fet['supname'] ;?></td>
                            <td><?php echo $fet['pcode'] ;?></td>
                            <td><?php echo $fet['pname'] ;?></td>
                            <td><?php echo $fet['pdescrip'] ;?></td>
                            <td><?php echo $fet['punit'] ;?></td>
                            <td><?php echo $fet['sprice'] ;?></td>
                            <td><?php echo $fet['quaname'] ;?></td>
                            <td><?php echo $fet['pstock'] ;?></td>
                            
                            <td>
                            <?php
                    $pic=unserialize($fet['pfile']);
                    foreach($pic as $p){
                        ?>
                        <img width="50" height="50" src="<?php echo "./product-imgs/" . $p ; ?>" />
                        <?php
                    }
                    ?>
                            </td>
                            <td><?php echo $fet['status'] ;?></td>
                            <td><?php echo $fet['pdate'] ;?></td>
                            <td><a  href="./update-product.php?pid=<?php echo $fet['pid'] ;?>"><i class="fa-solid fa-file-pen"></i></a></td>
                            <td><a  href="./delete-product.php?pid=<?php echo $fet['pid'] ;?>"><i class="fa-solid fa-trash"></i></a></td>
                            
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
        </section>
</div>


 <?php 
                          
include ("./include/footer.php");
 ?>