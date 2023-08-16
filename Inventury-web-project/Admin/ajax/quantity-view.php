<?php 
include ("../include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}
$sql="SELECT * FROM `quantity-rec`";
 $run=mysqli_query($conn,$sql);
 while ($fet=mysqli_fetch_assoc($run)){
?>
<tr>
    <td><?php echo $fet['quaid'] ;?></td>
    <td><?php echo $fet['quaname'] ;?></td>
    <td><?php echo $fet['quadescrip'] ;?></td>
    <td><?php echo $fet['quadate'] ;?></td>
    <td><a  href="./update-quantity.php?quaid=<?php echo $fet['quaid'] ;?>"><i class="fa-solid fa-file-pen"></i></a></td>
    <td><a  href="./delete-quantity.php?quaid=<?php echo $fet['quaid'] ;?>"><i class="fa-solid fa-trash"></i></a></td>

</tr>
<?php } ?>