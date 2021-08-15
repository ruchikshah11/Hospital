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
                    <h3 class="text-themecolor">Book List</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Book</li>
                        <li class="breadcrumb-item active">Book List</li>
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
                                <h4 class="card-title">All Book List</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Sr.No</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Contact No.</th>
												<th>Bootel Type</th>
												<th>No Of Bottel</th>
												<th>Address</th>
												<th>Date</th>
												
											</tr>
										</thead>
									

									
										
										<tbody>
											<?php
												$no=0;
												$result=mysqli_query($con,"select * from book ORDER BY id DESC");
												while($contact=mysqli_fetch_array($result))
												{
												$no=$no+1;
												
												
												
												?>
											<tr>
												<td class="center"><?php echo $no;?></td>
												<td class="center"><?php echo $contact['fname'];?></td>
												<td class="center"><?php echo $contact['lname'];?></td>
												<td class="center"><?php echo $contact['phone'];?></td>
												<td class="center"><?php echo $contact['type'];?></td>
												<td class="center"><?php echo $contact['bottel'];?></td>
												<td class="center"><?php echo $contact['address'];?></td>
												<td class="center"><?php echo $contact['date'];?></td>
												</tr>
		
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
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
			
			
 <?php include('footer.php'); ?>