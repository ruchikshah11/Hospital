<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php 
error_reporting(0);
?>
<?php 
if(isset($_POST['submit'])){
	
	$password = md5($_POST['password']);
	$new_password = $_POST['new_password'];
	$cnew_password = $_POST['cnew_password'];
	
	$id=$_SESSION['id'];
	$select2 = mysqli_query($con,"SELECT * FROM `admin` WHERE id='$id'");
	$row = mysqli_fetch_array($select2);
	$datapass=$row['password'];
	
	if($password == $datapass)
	{
		if($new_password == $cnew_password)
		{
			$mypass=md5($new_password);
			mysqli_query($con,"UPDATE `admin` SET `password`='$mypass' WHERE id='$id'");
			$msg="<p class='alert alert-success alert-rounded'>Successfully Changed! </p>";
		}
		else
		{
			$msg="<p class='alert alert-danger alert-rounded'>Confirm Password and New Password Not Match! </p>";
		}
	}
	else
	{
		$msg="<p class='alert alert-danger alert-rounded'>Enter Correct Old Password! </p>";
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
                    <h3 class="text-themecolor">Change Password </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Profile</li>
                        <li class="breadcrumb-item active">Change Password</li>
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
                                <h4 class="card-title">Change Password</h4>
								<?php echo $msg; ?>
								
                                <form class="m-t-40" novalidate method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label">Old Password</label>
											<input type="password" id="firstName" class="form-control" placeholder="Old Password" name="password" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label">New Password</label>
											<input type="password" id="firstName" class="form-control" placeholder="New Password" name="new_password" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label">Confirm New Password</label>
											<input type="password" id="firstName" class="form-control" placeholder="Confirm New Password" name="cnew_password" required data-validation-required-message="This field is required">
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

         <?php include('footer.php'); ?>
