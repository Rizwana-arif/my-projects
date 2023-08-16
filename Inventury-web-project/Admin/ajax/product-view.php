<?php
include ("../include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}

$sql="SELECT * FROM `product-rec` p INNER JOIN `category-rec` c ON p.pctg=c.ctgid INNER JOIN `sub-category-rec` sub ON p.psubctg=sub.subid INNER JOIN `supplier-rec` sup ON p.psupname=sup.supid INNER JOIN `quantity-rec` q ON p.pqua=q.quaid";
$run=mysqli_query($conn,$sql);
while ($fet=mysqli_fetch_assoc($run)){
?>
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