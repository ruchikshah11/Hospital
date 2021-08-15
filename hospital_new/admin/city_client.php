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
												<th>Name</th>
												<th>Contact No.</th>
												<th>Bootel Price</th>
												<th>Action</th>
												
											</tr>
										</thead>
									

									
										
										<tbody>
											<?php
												$no=0;
												if($_REQUEST['city']=="ahm")
												{
													$route=$_GET['id'];
													$result=mysqli_query($con,"select * from add_client WHERE city='1' AND route='$route' ORDER BY c_id DESC");
												}
												else
												{
													$route=$_GET['id'];
													$result=mysqli_query($con,"select * from add_client WHERE city='2' AND route='$route' ORDER BY c_id DESC");
												}
												
												while($contact=mysqli_fetch_array($result))
												{
												$no=$no+1;
												
												
												
												?>
											<tr>
												<td class="center"><?php echo $no;?></td>
												<td class="center"><?php echo $contact['name'];?></td>
												<td class="center"><?php echo $contact['contact_no'];?></td>
												<td class="center"><?php echo $contact['email_id'];?></td>
												<td class="center"><a class="btn btn-info" href="listbottle?id=<?php echo $contact['c_id'];?>"><i class="fa fa-info"></i> List Of Bottle</a></td>
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