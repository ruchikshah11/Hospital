<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php 
error_reporting(0);
?>
<?php 
if(isset($_post['submit'])){
	
	$name = $_post['name'];
	$email_id = $_post['email_id'];
	$contact_no = $_post['contact_no'];
	$city = $_post['city'];
	$route = $_post['route'];
		
	$insert=mysqli_query($con,"insert into `add_client`(`name`, `contact_no`, `email_id`, `city`, `route`) values ('$name','$contact_no','$email_id','$city','$route')");
	
	if($insert)
	{
		$msg="<p class='alert alert-success alert-rounded'>successfully added ! </p>";
	}
	
}

?>

        <!-- page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">add client info </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">home</a></li>
                        <li class="breadcrumb-item">client info</li>
                        <li class="breadcrumb-item active">add client info</li>
                    </ol>
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- end bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- start page content -->
                <!-- ============================================================== -->
				
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">add client info</h4>
								<?php echo $msg; ?>
                                <form class="m-t-40" novalidate method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">client name</label>
												<input type="text" id="firstname" class="form-control" placeholder="client name" name="name" required data-validation-required-message="this field is required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">client contact no</label>
												<input type="text" id="firstname" class="form-control" placeholder="client contact no" name="contact_no" required data-validation-required-message="this field is required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">price</label>
												<input type="text" id="firstname" class="form-control" placeholder="price" name="email_id" required data-validation-required-message="this field is required">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">city</label>
												<select name="city" id="city" class="form-control">
													<option value="">select city</option>
													<?php
													$select=mysqli_query($con,"select * from `city`");
													while($row=mysqli_fetch_array($select))
													{
													?>
													<option value="<?php echo $row['id']; ?>"><?php echo $row['city_nm']; ?></option>
													<?php }?>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">route</label>
												<select name="route" id="route" class="form-control">
													
													
												</select>
											</div>
										</div>
									</div>
                                    <div class="text-xs-right">
                                        <button type="submit" name="submit" class="btn btn-info">submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- ============================================================== -->
            <!-- end container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
		<script src="jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#city').on('change',function(){
				var countryid = $(this).val();
				if(countryid){
					$.ajax({
						type:'post',
						url:'ajaxdata.php',
						data:'country_id='+countryid,
						success:function(html){
							$('#route').html(html);
						}
					}); 
				}else{
					$('#route').html('<option value="">-----choose city first-----</option>');
				}
			});
			
		});
		</script>
		
         <?php include('footer.php'); ?>
