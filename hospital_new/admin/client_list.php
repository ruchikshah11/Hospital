<?php include('header.php');
 ?>
<?php include('sidebar.php'); 
error_reporting(0);
?>
<style>
.btn-success {
    color: #fff !important;
    background-color: #28a745;
    border-color: #28a745;
}
.btn-danger {
    color: #fff !important;
    
}
</style>
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right suidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Patient List</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:vouid(0)">Home</a></li>
                        <li class="breadcrumb-item">Patients</li>
                        <li class="breadcrumb-item active">Patient List</li>
                    </ol>
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right suidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluuid  -->
            <!-- ============================================================== -->
            <div class="container-fluuid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Patient List</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" wuidth="100%">
										<thead>
											<tr>
												<th>Sr.No</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Contact No.</th>
												<th>Email</th>
												<th>Action</th>
												
											</tr>
										</thead>
									

										<?php
if(isset($_POST['update']))
{
	
	$uuid=$_POST['uuid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$uid=$_POST['uid'];
	

	$update=mysqli_query($con,"update user set `fname`='$fname',`lname`='$lname',`mobile`='$mobile',`email`='$email' where uid='$uid'");
	
	echo"<script>alert('Successfully Update');</script>";
}
?>
										
										<tbody>
											<?php
												$no=0;
												$result=mysqli_query($con,"select * from user WHERE role!='doctor' ORDER BY uid DESC");
												while($contact=mysqli_fetch_array($result))
												{
												$no=$no+1;
												
												?>
											<tr>
												<td class="center"><?php echo $no;?></td>
												<td class="center"><?php echo $contact['fname'];?></td>
												<td class="center"><?php echo $contact['lname'];?></td>
												<td class="center"><?php echo $contact['mobile'];?></td>
												<td class="center"><?php echo $contact['email'];?></td>
												
												<td class="center">
												
												<button class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $contact['uid'];?>"><i class="fa fa-trash-o"></i> Delete</button>
												
												</td>
												</tr>
		 <!-- sample modal content -->
                                <div class="modal fade bs-example-modal-lg" id="edit<?php echo $contact['uid'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-huidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                         <div class="modal-header">
        <h4 class="modal-title">Update Profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
                                            <div class="modal-body">
			<form method="POST">
				  <div class="form-group">
					<label for="name">First Name</label>
					<input type="text" name="fname" class="form-control" uid="name" value="<?php echo $contact['fname'];?>">
					<input type="huidden" name="uid" class="form-control" uid="name" value="<?php echo $contact['uid'];?>">
				  </div>
				  <div class="form-group">
					<label for="name">Last Name</label>
					<input type="text" name="lname" class="form-control" uid="name" value="<?php echo $contact['lname'];?>">
				  </div>
				 <div class="form-group">
					<label for="cno">Contact No.</label>
					<input type="text" name="mobile" class="form-control" uid="contact_no" value="<?php echo $contact['mobile'];?>">
				  </div>
				 <div class="form-group">
					<label for="cno">Email</label>
					<input type="text" name="email" class="form-control" uid="email" value="<?php echo $contact['email'];?>">
				  </div>
				 
				  
				  <button type="submit" name="update" class="btn btn-primary">Submit</button>
				</form>
				</div>
				<!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
                                           
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
								
<div class="modal fade bs-example-modal-lg" id="delete<?php echo $contact['uid'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-huidden="true" style="display: none;">
 <div class="modal-dialog modal-lg">
 
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Warning..!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
			<h3>Are you sure you want to delete??</h3>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="delete.php?id=<?php echo $contact['uid'];?>&client=client" class="btn btn-success">Yes</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
      </div>

    </div>
  </div>
</div>



											<?php
													}
												?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluuid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
			
			<script src="jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#city').on('change',function(){
				var countryuid = $(this).val();
				if(countryuid){
					$.ajax({
						type:'POST',
						url:'ajaxData.php',
						data:'country_uid='+countryuid,
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