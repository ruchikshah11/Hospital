<?php include('config.php');
error_reporting(0);
session_start();
  
       $id=$_GET['id'];
	
	$delete=mysqli_query($con,"DELETE FROM `appointment_table` WHERE Appointment_id='$id'");
	
	if($delete)
	{
		echo "<script>window.location.href='appoint.php'</script>";
	}
	else
	{
		echo"wrong";
	}
?>