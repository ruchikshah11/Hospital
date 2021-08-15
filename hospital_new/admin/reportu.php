<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php 
error_reporting(0);
?>
<?php 

    $id=$_GET['id'];
	$selectru=mysqli_query($con,"SELECT * FROM `attachment_table` WHERE Attachment_id='$id'");
	$rowru=mysqli_fetch_array($selectru);
	
	$id1=$rowru['Report_id'];
	$selectra=mysqli_query($con,"SELECT * FROM `report_table` WHERE Report_id='$id1'");
	$rowra=mysqli_fetch_array($selectra);
	

if(isset($_POST['report']))
{
	$Report_details = $_POST['Report_details'];
	
	if($_FILES['Attachment_type']['name'])
	{
	$Attachment_type = $_FILES['Attachment_type']['name'];
	$tmp_name = $_FILES['Attachment_type']['tmp_name'];
	
	move_uploaded_file($tmp_name,"admin\file".$Attachment_type);
	}
	else
	{
		$Attachment_type=$rowu['Attachment_type'];
	}
	
	$insertra=mysqli_query($con,"UPDATE `report_table` SET `Report_details`='$Report_details' WHERE Report_id='$id1'");
	
	$insertru=mysqli_query($con,"UPDATE `attachment_table` SET `Attachment_type`='$Attachment_type' WHERE Attachment_id='$id'");
	
	if($insertru)
	{
		echo"<script>window.location.href='Reportlist.php'</script>";
	}
	else
	{
		echo"wrong";
	}
}


?>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Appoitment Details </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Report Info</li>
                        <li class="breadcrumb-item active">Add Report Info</li>
                        <li class="breadcrumb-item active">Report List</li>
                    </ol>
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
				
				<form method="POST" >
							  <div class="form-group">
								<label for="text">Report details</label>
								<input type="text" class="form-control" name="Report_details" id="Report details" value="<?php echo $rowra['Report_details'];?> ">
							  </div>
							  <div class="form-group">
								<label for="file">patients</label>
								  <select class="select" name="P_id">
										  
										  <?php
	                                     $selectt=mysqli_query($con,"SELECT distinct(P_id) FROM `appointment_table` WHERE status='1'");
		                                 while($rowt=mysqli_fetch_array($selectt))
		                                 {
											 
											 $pid=$rowt['P_id'];
											 $selectp=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$pid'");
											 $rowp=mysqli_fetch_array($selectp);
	                                     ?>
										
                                            <option value="<?php echo $rowt['P_id'];?>"><?php echo $rowp['fname'];?></option>
                                        
										<?php } ?>
										
										</select>
							  </div>
							  <div class="form-group">
								<label for="file">Attachment</label>
								<input type="file" class="form-control" name="Attachment_type" id="Attachment_type">
							  </div>
							  
							  
							  <button type="submit" name="report" class="btn btn-default">Submit</button>
						 </form>
				
				
              </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
		<script src="jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#city').on('change',function(){
				var countryID = $(this).val();
				if(countryID){
					$.ajax({
						type:'POST',
						url:'ajaxData.php',
						data:'country_id='+countryID,
						success:function(html){
							$('#route').html(html);
						}
					}); 
				}else{
					$('#route').html('<option value="">-----Choose City First-----</option>');
				}
			});
			
		});
		</script>
		
         <?php include('footer.php'); ?>
