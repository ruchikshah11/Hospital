<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php 
error_reporting(0);
?>
<?php 


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
				<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
						    <tr>
								<th>Report_id</th>
								<th>Patient name</th>
								<th>Report_details</th>
								<th>Attachment_type</th>
								<th>Report_Date</th>
								<th>Delete</th>
								<th>Update</th>
							</tr>
							<?php
							
							    $selecto=mysqli_query($con,"
								SELECT attachment_table.Attachment_type,attachment_table.Attachment_id,attachment_table.P_id,attachment_table.Created_Date, report_table.Report_details,
                                report_table.Report_id FROM report_table
                                INNER JOIN attachment_table
                                ON report_table.D_id=attachment_table.D_id");
	                            while($rowo=mysqli_fetch_array($selecto))
	                            {
									$no=$no+1;
									$pid=$rowo['P_id'];
									 $selectp=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$pid'");
									 $rowp=mysqli_fetch_array($selectp);
						    ?>
							<tr>
                               <td><?php echo $rowo['Report_id']; ?></td>
							   <td><?php echo $rowp['fname']; ?></td>
	                           <td><?php echo $rowo['Report_details']; ?></td>
	                           <td><a href="../image/<?php echo $rowo['Attachment_type'];?>" target="_blank"><img src="../image/<?php echo $rowo['Attachment_type'];?>" height="80" width="80"></a></td>
							   <td><?php echo $rowo['Created_Date']; ?></td>
							   <td>
							
							       <a href="reportd.php?id=<?php echo $rowo['Report_id']; ?>" class="btn btn-block btn-info">Delete</button></a>
							
							   </td>
							   <td>
							
							       <a href="reportu.php?id=<?php echo $rowo['Attachment_id']; ?>" class="btn btn-block btn-info">Update</button></a>
							
							   </td>
                            </tr>
						
							<?php } ?>
				 </table>
				
				
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
