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
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Monthly Sales</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Sales</li>
                        <li class="breadcrumb-item active">Monthly Sales</li>
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
                                <h4 class="card-title">Monthly Sales List</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
		
										
										<thead>
											<tr>
							
												<th>Sr.no</th>
												<th>No Of Bottle</th>
												<th> Date</th>
												</tr>
										</thead>
						<tbody>
											<?php
											$no=0;
											$id=$_GET['id'];
											
												$result=mysqli_query($con,"select * from add_bottle  where c_id='$id' AND MONTH(date) = MONTH(CURRENT_DATE()) ORDER BY a_id DESC");
												while($row=mysqli_fetch_array($result))
												{
													
													$no=$no+1;
												$cid=$_GET['id'];
												
												$resulta=mysqli_query($con,"select * from add_client WHERE c_id='$cid'");
												$contacta=mysqli_fetch_array($resulta);
												
												?>
											<tr>
												<td class="center"><?php echo $no;?></td>
												<td class="center"><?php echo $row['no_of_bottle'];?></td>
												<td class="center"><?php echo $row['date'];?></td>
											</tr>
												<?php 
												} ?>
												<tr>
												<td  class="text-right"><h4>Total Bottel:  <?php
									$query = mysqli_query($con,"select * from add_bottle  where c_id='$id' AND MONTH(date) = MONTH(CURRENT_DATE()) ORDER BY a_id DESC");
												$qty= 0;
												while ($num = mysqli_fetch_assoc ($query)) {
													
													
													$qty += $num['no_of_bottle'];
												} 
												echo $qty;
											
												?></h4></td>
												<td  class="text-right"><h4>Total Price:  <?php
									$query = mysqli_query($con,"select * from add_bottle  where c_id='$id' AND MONTH(date) = MONTH(CURRENT_DATE()) ORDER BY a_id DESC");
												$qty= 0;
												while ($num = mysqli_fetch_assoc ($query)) {
													
													
													$qty += $num['no_of_bottle'];
												} 
												echo $qty*$contacta['email_id'];
											
												?></h4></td>
												<td></td>
												</tr>
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