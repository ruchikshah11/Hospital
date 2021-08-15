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
                        <li class="breadcrumb-item">Appoitment List</li>
                        <li class="breadcrumb-item active">Appoitment</li>
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
				<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Today Report List</h4>
                                <div class="table-responsive m-t-40">
				<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                     	<thead>
                      <tr>
							<th>Appointment_id</th>
							<th>P_id</th>
							<th>p_name</th>
							<th>D_id</th>
							<th>D_name</th>
							<th>T_id</th>
							<th>Fees_amount</th>
							<th>Created_Date</th>
							<th>message</th>
							<th>time</th>
							<th>Approve</th>
							<th>Delete</th>
							
					  </tr>
	  	</thead>
	  	<tbody>
						<?php
							$select=mysqli_query($con,"SELECT * FROM `appointment_table`");
							while($row=mysqli_fetch_array($select))
							{
								$id=$row['P_id'];
								$selecta=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$id'");
							    $rowabc=mysqli_fetch_array($selecta);
								
								$ida=$row['D_id'];
								$selectaa=mysqli_query($con,"SELECT * FROM `doctor_table` WHERE uid='$ida'");
							    $rowabca=mysqli_fetch_array($selectaa);
								
								
								
						?>
	  
						<tr>
							<td><?php echo $row['Appointment_id'];?></td>
							<td><?php echo $row['P_id'];?></td>
							<td><?php echo $rowabc['fname'];?></td>
							<td><?php echo $row['D_id'];?></td>
							<td><?php echo $rowabca['D_name'];?></td>
							<td><?php echo $row['T_id'];?></td>
							<td><?php echo $row['Fees_amount'];?></td>
							<td><?php echo $row['Created_Date'];?></td>
							<td><?php echo $row['message'];?></td>
							<td><?php echo $row['time'];?></td>
							<td>
							<?php 
							
							  if($row['status']=="0")
								{
						 
							?>
							
							<a href="#approve<?php echo $row['Appointment_id']; ?>" class="btn btn-block btn-info" data-toggle="modal">Approve</button></a>
							<a href="#disapprove<?php echo $row['Appointment_id']; ?>" class="btn btn-block btn-warning" data-toggle="modal">Disapprove</button></a>
							<?php } else { ?>
							
							 
							 <a href="#disapprove<?php echo $row['Appointment_id']; ?>" class="btn btn-block btn-warning" data-toggle="modal">Disapprove</button></a>
							
							 <?php } ?>
							 
							 
							</td>
							<td>
							
							<a href="appointd.php?id=<?php echo $row['Appointment_id']; ?>" class="btn btn-block btn-info">Delete</button></a>
							
							</td>
							
							<!-- Modal -->
<div id="disapprove<?php echo $row['Appointment_id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Disapprove Reason</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="disapprove.php">
		  <div class="form-group">
			<label for="email">Reason:</label>
			<textarea name="reason" rows="8" class="form-control"></textarea>
			<input type="hidden" name="apid" value="<?php echo $row['Appointment_id']; ?>">
		  </div>
		  
		  <button type="submit" name="submit" class="btn btn-default">Submit</button>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="approve<?php echo $row['Appointment_id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Approve Confrimation</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="approve.php">
		  <div class="form-group">
			<h3>Confrim Approve???</h3>
			<input type="hidden" name="reason" class="form-control">
			<input type="hidden" name="apid" value="<?php echo $row['Appointment_id']; ?>">
		  </div>
		  
		  <button type="submit" name="submit" class="btn btn-success">Yes</button>
		  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
							
						</tr>
					<?php } ?>
	  <tbody>
				</table>
				 </div>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
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
