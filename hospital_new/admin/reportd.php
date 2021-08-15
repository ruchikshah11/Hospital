<?php include('config.php');
error_reporting(0);
session_start();
  
       $id=$_GET['id'];
	
	$deleter=mysqli_query($con,"DELETE FROM `report_table` WHERE Report_id='$id'");
	
	if($deleter)
	{
		echo "<script>window.location.href='Reportlist.php'</script>";
	}
	else
	{
		echo"wrong";
	}
?>
	