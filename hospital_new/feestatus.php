<?php include('config.php');
error_reporting(0);
session_start();
  
  $id=$_GET['id'];
	
	$update=mysqli_query($con,"UPDATE fees_table SET Fees_status = '1'  WHERE fid='$id'");
	
	if($update)
	{
		echo "<script>window.location.href='dprofile.php'</script>";
	}
    else
	{
		echo"error!";
	}
  
 ?>