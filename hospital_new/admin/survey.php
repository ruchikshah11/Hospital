<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php 
error_reporting(0);
?>


        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Report </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Report</li>
                        <li class="breadcrumb-item active">Report</li>
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
                                <h4 class="card-title">Report</h4>
								<?php echo $msg; ?>
								
                                <form class="m-t-40" novalidate method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Piller No</label>
												<input type="text" id="firstName" class="form-control" placeholder="Piller No" name="pillar_no" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">To Piller No</label>
												<input type="text" id="firstName" class="form-control" placeholder="To Piller No" name="to_pillar_no" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Total MT Land</label>
												<input type="text" id="firstName" class="form-control" placeholder="Total MT Land" name="total_mt" required data-validation-required-message="This field is required">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Usebal Space</label>
												<input type="text" id="firstName" class="form-control" placeholder="Usebal Space" name="use_space">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Nearest Location</label>
											<input type="text" id="firstName" class="form-control" placeholder="Nearest Location" name="near_location" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Select Parking Category</label>
												<select name="parking_cat" class="form-control">
													<option value="">Select Parking Category</option>
													<option value="General">General</option>
													<option value="Allocated">Allocated</option>
													<option value="Shop">Shop</option>
													<option value="Hub Town">Hub Town</option>
													<option value="GSRTC Staff">GSRTC Staff</option>
													<option value="Police">Police</option>
												 </select>
											</div>
										</div>
                                    </div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Select Vehicle Type</label>
												<select name="vehicle_type" id="type" class="form-control">
													<option value="">Select Vehicle Type</option>
													<option value="2 Wheeler">2 Wheeler</option>
													<option value="3 Wheeler">3 Wheeler</option>
													<option value="4 Wheeler">4 Wheeler</option>
												 </select>
											</div>
										</div>
										<div class="col-md-4" id="sltype" style='display:none;'>
											<div class="form-group">
											<input type="text"  name="stype_car" value="small car" class="form-control" readonly><input type="text" name="scar_size" Placeholder="park vehicle size" class="form-control">
											<input type="text"  name="btype_car" value="big car" class="form-control" readonly><input type="text" name="bcar_size" Placeholder="park vehicle size" class="form-control">
											</div>
										</div>
										<div class="col-md-4" id="sltypea" style='display:none;'>
											<div class="form-group">
												<label class="control-label">Select Vehicle Position</label>
												<select name="vehicle_pos" class="form-control">
													<option value="">Select Vehicle Type</option>
													<option value="Strate">Strate</option>
													<option value="Reverse">Reverse</option>
													<option value="Cross">Cross</option>
												 </select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Total Park Vehicle</label>
												<input type="text" class="form-control" name="total_park" required data-validation-required-message="This field is required" placeholder="Total Park Vehicle" >
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Remark</label>
												<input type="text"  class="form-control" name="remark"  placeholder="Remark">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Special Remark</label>
												<input type="text"  class="form-control" name="remarks" placeholder="Special Remarks">
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
<script src="jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
    $('#type').on('change', function() {
     
	  if ( this.value == '4 Wheeler')
      {
        $("#sltype").show();
        $("#sltypea").show();
        
      }
      else
      {
		$("#sltype").hide();
		$("#sltypea").hide();
      }
	  
	  
    });
});
</script>
		
         <?php include('footer.php'); ?>
