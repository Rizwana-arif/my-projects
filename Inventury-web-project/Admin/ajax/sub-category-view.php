<?php
include ("../include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}
$sql="SELECT * FROM `sub-category-rec` sub INNER JOIN `category-rec` c ON sub.catname=c.ctgid";
$run=mysqli_query($conn,$sql);
while ($fet=mysqli_fetch_assoc($run)){
?>
<tr>
    <td><?php echo $fet['subid'] ;?></td>
    <td><?php echo $fet['ctgname'] ;?></td>
    <td><?php echo $fet['subname'] ;?></td>
    <td><?php echo $fet['subdescrip'] ;?></td>
    <td><?php echo $fet['subdate'] ;?></td>
    <td><a  href="./update-subcategory.php?subid=<?php echo $fet['subid'] ;?>"><i class="fa-solid fa-file-pen"></i></a></td>
    <td><a  href="./delete-subcategory.php?subid=<?php echo $fet['subid'] ;?>"><i class="fa-solid fa-trash"></i></a></td>
    
</tr>
<?php } ?>