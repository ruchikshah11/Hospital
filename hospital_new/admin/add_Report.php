<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php 
error_reporting(0);
?>
<?php 
if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email_id = $_POST['email_id'];
	$contact_no = $_POST['contact_no'];
	$city = $_POST['city'];
	$route = $_POST['route'];
		
	$insert=mysqli_query($con,"INSERT INTO `add_client`(`name`, `contact_no`, `email_id`, `city`, `route`) VALUES ('$name','$contact_no','$email_id','$city','$route')");
	
	if($insert)
	{
		$msg="<p class='alert alert-success alert-rounded'>Successfully Added ! </p>";
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
                    <h3 class="text-themecolor">Add Report Info </h3>
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
				
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Report Info</h4>
								<?php echo $msg; ?>
                                <form class="m-t-40" novalidate method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label">Report Details</label>
												<input type="file" id="Report Details" class="form-control" placeholder="Report Details" name="Report Details-" required data-validation-required-message="This field is required">
											</div>
										</div>
										
										
									</div>
									
                                    <div class="text-xs-right">
                                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                    </div>
                                </form>
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
