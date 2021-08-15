<?php include('../config.php');
error_reporting(0);


if($_REQUEST['client'])
{
 $id=$_GET['id'];
 
 $delete = mysqli_query($con,"delete from user where uid='$id' ");
 
 if($delete)
 {
	 echo"<script>alert('Successfully Delete');</script>";
	 echo "<script> window.location.href='client_list.php'</script>";
 }
}

 ?>
 
