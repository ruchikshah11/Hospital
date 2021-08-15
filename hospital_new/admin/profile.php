<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php 
error_reporting(0);

$id=$_SESSION['id'];
$select2 = mysqli_query($con,"SELECT * FROM `admin` WHERE id='$id'");
$row = mysqli_fetch_array($select2);

	if(isset($_POST['submit'])){
		$company_nm = $_POST['company_nm'];
		$mobile_no = $_POST['mobile_no'];
		$email_id = $_POST['email_id'];
		$user_nm = $_POST['user_nm'];
		
		if($_FILES['company_logo']['tmp_name'])
		{
			$file=$_FILES['company_logo']['name'];
			$type=$_FILES['company_logo']['type'];
			$size=$_FILES['company_logo']['size'];
			$temp=$_FILES['company_logo']['tmp_name'];
			
			$RandomNo = mt_rand(1, 99999);
			$nam='img'.$RandomNo.$file;
			$lfile=str_replace(' ','_',$nam);
		
			move_uploaded_file($temp,"images/".$lfile);
			$save="img/".$lfile;
		}
		else 
		{
			$lfile=$row['company_logo'];
		}
		
		mysqli_query($con,"UPDATE `admin` SET `company_nm`='$company_nm',`company_logo`='$lfile',`mobile_no`='$mobile_no',`email_id`='$email_id',`user_nm`='$user_nm' WHERE id='$id'");
			$msg="<p class='alert alert-success alert-rounded'>Successfully Updated ! </p>";
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
                    <h3 class="text-themecolor">Profile</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
                                <h4 class="card-title">Update Profile</h4>
								<?php echo $msg; ?>
                                <form class="m-t-40" novalidate method="post" enctype="multipart/form-data">
									 <div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Company Name</label>
												<input type="text" id="firstName" class="form-control" placeholder="Enter Company Name" name="company_nm" required data-validation-required-message="This field is required" value="<?php echo $row['company_nm']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Logo</label>
												<input type="file" id="firstName" class="form-control" name="company_logo" required data-validation-required-message="This field is required" >
											</div>
										</div>
                                    </div>
									
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Mobile No</label>
												<input type="text" id="firstName" class="form-control" placeholder="Enter Mobile No" name="mobile_no" required data-validation-required-message="This field is required" value="<?php echo $row['mobile_no']; ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Email Id</label>
												<input type="email" id="firstName" class="form-control" placeholder="Enter Email Id" name="email_id" required data-validation-required-message="This field is required" value="<?php echo $row['email_id']; ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">User Name</label>
												<input type="text" id="firstName" class="form-control" placeholder="Enter User Name" name="user_nm" required data-validation-required-message="This field is required" value="<?php echo $row['user_nm']; ?>">
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
