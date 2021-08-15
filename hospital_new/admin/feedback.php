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
                    <h3 class="text-themecolor">FeedBack</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">FeedBack</li>
                        <li class="breadcrumb-item active"> FeedBack</li>
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
                                <h4 class="card-title">FeedBack List</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
		
										
										<thead>
											<tr>
							<th>Sr no</th>
							<th>P_id</th>
							<th>p_name</th>
							<th>Created_Date</th>
							<th>Subject	</th>
							<th>message</th>
							<th>Approve</th>
							
					  </tr>
										</thead>
						<tbody>
										<?php
										
							$no=0;
							$select=mysqli_query($con,"SELECT * FROM `feedback_table`");
							while($row=mysqli_fetch_array($select))
							{
							$no=$no+1;
							$pid=$row['User_id'];
							$selectabc=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$pid'");
							$rowabc=mysqli_fetch_array($selectabc);
						?>
	  
						<tr>
							<td><?php echo $no ;?></td>
							<td><?php echo $rowabc['uid'];?></td>
							<td><?php echo $rowabc['fname'];?></td>
							<td><?php echo $row['Created_Date'];?></td>
							<td><?php echo $row['Subject'];?></td>
							<td><?php echo $row['Feed_description'];?></td>
							<td>
							<?php 
							
							  if($row['status']=="0")
								{
						 
							?>
							<a href="approvef.php?id=<?php echo $row['Feed_id']; ?>" class="btn btn-block btn-info">Approve</button></a>
							
							
							<?php } ?>
							
								
							 <?php 
							 if($row['status']=="1")
							 { 
							 
							 ?>
							 
							 <a href="disapprovef.php?id=<?php echo $row['Feed_id']; ?>" class="btn btn-block btn-warning">Disapprove</button></a>
							
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