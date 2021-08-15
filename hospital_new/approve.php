<?php include('config.php');
error_reporting(0);
session_start();
  
  $id=$_GET['id'];
	
	$update=mysqli_query($con,"UPDATE appointment_table SET status = '1'  WHERE Appointment_id='$id'");
	
	if($update)
	{
		echo "<script>window.location.href='dprofile.php'</script>";
	}
    else
	{
		echo"error!";
	}
  
 ?>