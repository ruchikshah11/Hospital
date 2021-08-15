<title>Appointment Details </title>
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
                    <h3 class="text-themecolor">Today Report</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Report</li>
                        <li class="breadcrumb-item active">Today Report</li>
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
                                <h4 class="card-title">Find Report List</h4>
								 <form method="POST">
									<div class="form-group">
                                        <label>Choose the Date</label>
                                        <div class="cal-icon">
                                            <input type="date" name="Created_Date" class="form-control" />
                                        </div>
                                    </div>
									 <div class="form-group">
                                        <label>Choose the Doctor</label>
                                        <select  name="D_id"  class="form-control" >
										
										<?php
	                                     $select=mysqli_query($con,"SELECT * FROM `doctor_table`");
		                                 while($row=mysqli_fetch_array($select))
		                                 {
	                                     ?> 
										
                                            <option value="<?php echo $row['uid'];?>"><?php echo $row['D_name'];?></option>
                                           
                                        
										<?php } ?>
                                      </select>										
                                    </div>
									
									
                                    <div class="form-group text-center m-b-0">
                                        <input type="submit" name="submit" class="btn btn-primary account-btn" value="Submit" />
                                    </div>
                                </form>
							</div>
						</div>
					</div>
				</div>
				
				
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
							<th>P_name</th>
							<th>D_name</th>
							<th>T_name</th>
							<th>Created_Date</th>
							<th>message</th>
							<th>time</th>
							<th>Approve</th>
							
					  </tr>
										</thead>
						<tbody>
										<?php
										
if(isset($_POST['submit']))
{
	
	$Created_Date=$_POST['Created_Date'];
	$D_id=$_POST['D_id'];
	
	$select=mysqli_query($con,"SELECT * FROM `appointment_table` WHERE Created_Date='$Created_Date' AND D_id='$D_id'");
}
else
{
							$select=mysqli_query($con,"SELECT * FROM `appointment_table`");
}
							while($row=mysqli_fetch_array($select))
							{
								
								
							$did=$row['D_id'];
							$selecta=mysqli_query($con,"SELECT * FROM `doctor_table` WHERE uid='$did'");
							$rowa=mysqli_fetch_array($selecta);
							
							$tid=$row['T_id'];
							$selectab=mysqli_query($con,"SELECT * FROM `treatment_table` WHERE T_id='$tid'");
							$rowab=mysqli_fetch_array($selectab);
							
							$pid=$row['P_id'];
							$selectabc=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$pid'");
							$rowabc=mysqli_fetch_array($selectabc);
						?>
	  
						<tr>
							<td><?php echo $row['Appointment_id'];?></td>
							<td><?php echo $rowabc['uid'];?></td>
							<td><?php echo $rowabc['fname'];?></td>
							<td><?php echo $rowa['D_name'];?></td>
							<td><?php echo $rowab['T_name'];?></td>
							<td><?php echo $row['Created_Date'];?></td>
							<td><?php echo $row['message'];?></td>
							<td><?php echo $row['time'];?></td>
							<td>
							<?php 
							
							  if($row['status']=="0")
								{
						 
							?>
							<a href="approve.php?id=<?php echo $row['Appointment_id']; ?>" class="btn btn-block btn-info">Approve</button></a>
							
							
							<?php } ?>
							
								
							 <?php 
							 if($row['status']=="1")
							 { 
							 
							 ?>
							 
							 <a href="disapprove.php?id=<?php echo $row['Appointment_id']; ?>" class="btn btn-block btn-warning">Disapprove</button></a>
							
							 <?php } ?>
							 
							 
							</td>
							
							
							
						</tr>
					<?php } ?>
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