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
	<?php
if(isset($_POST['update']))
{
	
	$date=$_POST['date'];
	$no_of_bottle=$_POST['no_of_bottle'];
	$id=$_POST['cid'];

	$update=mysqli_query($con,"update add_bottle set `date`='$date',`no_of_bottle`='$no_of_bottle' where a_id='$id'");
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
                    <h3 class="text-themecolor">Today Sales</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Sales</li>
                        <li class="breadcrumb-item active">Today Sales</li>
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
                                <h4 class="card-title">Today Sales List</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
		
										
										<thead>
											<tr>
							
												<th>Sr.no</th>
												<th>Client Name</th>
												<th>Date</th>
												<th>No. Of Bottle</th>
												<th>Action</th>
												</tr>
										</thead>
						<tbody>
											<?php
											$no=0;
											$date=date('Y-m-d');
											//echo"<script>alert('".$date."');</script>";
												$result=mysqli_query($con,"select * from add_bottle WHERE date='$date' ORDER BY c_id DESC");
												while($row=mysqli_fetch_array($result))
												{
													$no=$no+1;
													
													$myid=$row['c_id'];
													$resulta=mysqli_query($con,"select * from add_client WHERE c_id='$myid' ORDER BY c_id DESC");
												    $rowa=mysqli_fetch_array($resulta);
												?>
											<tr>
												<td class="center"><?php echo $no;?></td>
												<td class="center"><?php echo $rowa['name'];?></td>
												<td class="center"><?php echo $row['date'];?></td>
												<td class="center"><?php echo $row['no_of_bottle'];?></td>
												<td class="center">
												<button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $row['a_id'];?>"><i class="fa fa-pencil"></i> Edit</button>
												<button class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $row['a_id'];?>"><i class="fa fa-trash-o"></i> Delete</button>
												</td>
												</tr>
												
												<div class="modal fade bs-example-modal-lg" id="edit<?php echo $row['a_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                         <div class="modal-header">
        <h4 class="modal-title">Update </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
                                            <div class="modal-body">
			<form method="POST">
				  <div class="form-group">
					<label for="name">Date</label>
					<input type="date" name="date" class="form-control" id="date" value="<?php echo $row['date'];?>">
				  </div>
				 <div class="form-group">
					<label for="cno">No of bottle.</label>
					<input type="text" name="no_of_bottle" class="form-control" id="row_no" value="<?php echo $row['no_of_bottle'];?>">
					<input type="hidden" name="cid" class="form-control" id="row_no" value="<?php echo $row['a_id'];?>">
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
								
										<div class="modal fade bs-example-modal-lg" id="delete<?php echo $row['a_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
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
        <a href="delete.php?id=<?php echo $row['a_id'];?>&cid=<?php echo $_GET['id'];?>&bottle=bottle" class="btn btn-success">Yes</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
      </div>

    </div>
  </div>
</div>		

												<?php }?>
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
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
 <?php include('footer.php'); ?>