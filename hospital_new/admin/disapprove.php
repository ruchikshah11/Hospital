<?php include('config.php');
error_reporting(0);
session_start();
  
       $reason=$_POST['reason'];
	 $id=$_POST['apid'];
	$delete=mysqli_query($con,"UPDATE `appointment_table` SET status='2',reason='$reason' WHERE Appointment_id='$id'");
	
	if($delete)
	{
		echo "<script>window.location.href='appoint.php'</script>";
	}
	else
	{
		echo"wrong";
	}
?>