<?php 
include ("../include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}
$sql="SELECT * FROM `category-rec`";
$run=mysqli_query($conn,$sql);
while ($fet=mysqli_fetch_assoc($run)){
?>
<tr>
<td><?php echo $fet['ctgid'] ;?></td>
<td><?php echo $fet['ctgname'] ;?></td>
<td><?php echo $fet['descrip'] ;?></td>
<td><?php echo $fet['date'] ;?></td>
<td><a  href="./update-category.php?ctgid=<?php echo $fet['ctgid'] ;?>"><i class="fa-solid fa-file-pen"></i></a></td>
<td><a  href="./delete-category.php?ctgid=<?php echo $fet['ctgid'] ;?>"><i class="fa-solid fa-trash"></i></a></td>

</tr>
<?php } ?>
