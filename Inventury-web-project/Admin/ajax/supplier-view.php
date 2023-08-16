<?php
include ("../include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}

$sql="SELECT * FROM `supplier-rec`";
$run=mysqli_query($conn,$sql);
while ($fet=mysqli_fetch_assoc($run)){
?>
<tr>
    <td><?php echo $fet['supid'] ;?></td>
    <td><?php echo $fet['supname'] ;?></td>
    <td><?php echo $fet['supemail'] ;?></td>
    <td><?php echo $fet['supnum'] ;?></td>
    <td><?php echo $fet['supdate'] ;?></td>
    <td><a  href="./update-supplier.php?supid=<?php echo $fet['supid'] ;?>"><i class="fa-solid fa-file-pen"></i></a></td>
    <td><a  href="./delete-supplier.php?supid=<?php echo $fet['supid'] ;?>"><i class="fa-solid fa-trash"></i></a></td>
    
</tr>
<?php } ?>