<?php include('config.php');
error_reporting(0);
session_start();
  
       $id=$_GET['id'];
	
	$delete=mysqli_query($con,"UPDATE `feedback_table` SET status='0' WHERE Feed_id='$id'");
	
	if($delete)
	{
		echo "<script>window.location.href='feedback.php'</script>";
	}
	else
	{
		echo"wrong";
	}
?>