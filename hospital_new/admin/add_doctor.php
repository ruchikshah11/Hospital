<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php 
error_reporting(0);
?>
<?php 
if(isset($_POST['submit'])){
	
	
	//admin
	$D_name = $_POST['D_name'];
	$D_contact = $_POST['D_contact'];
	$D_experience = $_POST['D_experience'];
	$D_degree = $_POST['D_degree'];
	$D_Avail_Day = implode(",",$_POST['D_Avail_Day']);
	$D_Time_From = $_POST['D_Time_From'];
	$D_Time_To = $_POST['D_Time_To'];
	
	

	//user
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$mobile = $_POST['mobile'];
	$DOB = $_POST['DOB'];
	$Address = $_POST['Address'];
	$City = $_POST['City'];
	$State = $_POST['State'];
	$Country = $_POST['Country'];
	$Zipcode = $_POST['Zipcode'];
	$Gender = $_POST['Gender'];
	$User_type = "doctor";
	$Created_date = date('Y-m-d h:i:sa');
	$P_blood_group = $_POST['P_blood_group'];
	$role="doctor";
	
//	echo "<script>alert('dfgd');</script>";
	
	$select=mysqli_query($con,"SELECT * FROM `user` WHERE email='$email'");
	$count=mysqli_num_rows($select);
	if($count > 0)
	{
	   echo "<alert>'This email alredy exist!'</alert>";
	 //  $msg="<p class='alert alert-danger alert-rounded'>This email already exist ! </p>";
	}
	else
	{
		
	$name=$_FILES['img']['name'];
	$tmp_name=$_FILES['img']['tmp_name'];
			
	move_uploaded_file($tmp_name,"himg/".$name);
	
	$insertu=mysqli_query($con,"INSERT INTO `user`(`fname`, `mname`, `lname`, `email`,`password`,`mobile`,`DOB`,`Address`,`City`,`State`,`Country`,`Zipcode`,`Gender`,`User_type`,`Created_date`,`img`,`role`,`P_blood_group`) VALUES ('$fname','$mname','$lname','$email','$password','$mobile','$DOB','$Address','$City','$State','$Country','$Zipcode','$Gender','doctor','$Created_date','$name','$role','$P_blood_group')");
	

	
	
	$user=mysqli_insert_id($con);
		
	$insert=mysqli_query($con,"INSERT INTO `doctor_table`(`D_name`, `D_contact`, `D_experience`, `D_degree`,`D_Avail_Day`,`D_Time_From`,`D_Time_To`,`uid`) VALUES ('$D_name','$D_contact','$D_experience','$D_degree','$D_Avail_Day','$D_Time_From','$D_Time_To','$user')");
	
	
	
	
	$insertp=mysqli_query($con,"INSERT INTO `patient_table`(`P_blood_group`,`P_id`) VALUES ('$P_blood_group','$user')");
	
	
	
	
	if($insert)
	{
		$msg="<p class='alert alert-success alert-rounded'>Successfully Added ! </p>";
	}
	else
	{
		echo "not done!";
	}
	
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
                    <h3 class="text-themecolor">Add Doctor Info </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Doctor Info</li>
                        <li class="breadcrumb-item active">Add Doctor Info</li>
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
                                <h4 class="card-title"><b>*Add Doctor Info*</b></h4>
								<?php echo $msg; ?>
                                <form class="m-t-40" novalidate method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Doctor Name:</label>
												<input type="text" id="firstName" class="form-control" placeholder="Doctor Name" name="D_name" 
												value="<?php echo $row['D_name'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Doctor Contact No:</label>
												<input type="text" id="firstName" class="form-control" placeholder="Doctor Contact No" name="D_contact"
												pattern="^[6-9][0-9]{9}$" value="<?php echo $row['D_contact'];?>" required maxlength="10" data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Doctor Experience:</label>
															<select name="D_experience" class="form-control" required>
								<option value="5 Years" <?php if($row['D_experience']=="5 Years") echo "selected='selected'"; ?>>5 Years</option>
								<option value="7 Years" <?php if($row['D_experience']=="7 Years") echo "selected='selected'"; ?>>7 Years</option>
								<option value="9 Years" <?php if($row['D_experience']=="9 Years") echo "selected='selected'"; ?>>9 Years</option>
								<option value="10 Years" <?php if($row['D_experience']=="10 Years") echo "selected='selected'"; ?>>10 Years</option>
								<option value="15 Years" <?php if($row['D_experience']=="15 Years") echo "selected='selected'"; ?>>15 Years</option>
								<option value="More than 20 Years" <?php if($row['D_experience']=="More than 20 Yeares") echo "selected='selected'"; ?>>More than 20 Yeares
								</option>
								
								
							</select>
												
												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Doctor Degree:</label>
												<input type="text" id="Doctor Degree" class="form-control" placeholder="Doctor Degree" name="D_degree" 
												value="<?php echo $row['D_degree'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
										
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											<label class="control-label">Doctor Avail Day:</label>
												<div class="demo-checkbox">
													<input type="checkbox" id="md_checkbox_21" name="D_Avail_Day[]" class="filled-in chk-col-red" 
                                                    value="Monday">
													<label for="md_checkbox_21">Monday</label>
													<input type="checkbox" id="md_checkbox_22" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Tuesday">
													<label for="md_checkbox_22">Tuesday</label>
													<input type="checkbox" id="md_checkbox_23" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Wednesday">
													<label for="md_checkbox_23">Wednesday</label>
													<input type="checkbox" id="md_checkbox_24" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Thursday">
													<label for="md_checkbox_24">Thursday</label>
													<input type="checkbox" id="md_checkbox_25" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Friday">
													<label for="md_checkbox_25">Friday</label>
													<input type="checkbox" id="md_checkbox_26" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Saturday">
													<label for="md_checkbox_26">Saturday</label>
													<input type="checkbox" id="md_checkbox_27" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Sunday">
													<label for="md_checkbox_27">Sunday</label>
												</div>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">D_Time_From:</label>
												<input type="time" id="D_Time_From" class="form-control" placeholder="D_Time_From" name="D_Time_From" 
												value="<?php echo $row['D_Time_From'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">D_Time_To:</label>
												<input type="time" id="D_Time_To" class="form-control" placeholder="D_Time_To" name="D_Time_To" 
												value="<?php echo $row['D_Time_To'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
										
									</div>
									
									<h4 class="card-title"><b>*Add Doctor Info*</b></h4>
									    
										<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Dr. first Name:</label>
												<input type="text" id="firstName" class="form-control" placeholder="first Name" name="fname" 
												value="<?php echo $row['fname'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Dr. middle Name:</label>
												<input type="text" id="firstName" class="form-control" placeholder="middle Name" name="mname" 
												 value="<?php echo $row['mname'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Dr. last Name:</label>
												<input type="text" id="firstName" class="form-control" placeholder="last Name" name="lname" 
												value="<?php echo $row['lname'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
									</div>
									<div class="row">
									<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Dr. blood group:</label>
												
												<select name="P_blood_group" class="form-control" required>
								<option value="A+" <?php if($row['P_blood_group']=="A+") echo "selected='selected'"; ?>>A+</option>
								<option value="A-" <?php if($row['P_blood_group']=="A-") echo "selected='selected'"; ?>>A-</option>
								<option value="O+" <?php if($row['P_blood_group']=="O+") echo "selected='selected'"; ?>>O+</option>
								<option value="O-" <?php if($row['P_blood_group']=="O-") echo "selected='selected'"; ?>>O-</option>
								<option value="B+" <?php if($row['P_blood_group']=="B+") echo "selected='selected'"; ?>>B+</option>
								<option value="B-" <?php if($row['P_blood_group']=="B-") echo "selected='selected'"; ?>>B-</option>
								<option value="AB+" <?php if($row['P_blood_group']=="AB+") echo "selected='selected'"; ?>>AB+</option>
								<option value="AB-" <?php if($row['P_blood_group']=="AB-") echo "selected='selected'"; ?>>AB-</option>
								
							</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Dr. Email-id:</label>
												<input type="email" id="Doctor Email-id" class="form-control" placeholder="Email-id" name="email" 
												value="<?php echo $row['email'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Password:</label>
												<input type="password" id="Doctor Email-id" class="form-control" placeholder="password" name="password" 
												value="<?php echo $row['password'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Dr.Mobile Number:</label>
												<input type="text" id="firstName" class="form-control" placeholder="Mobile Number" name="mobile" 
												value="<?php echo $row['mobile'];?>" pattern="[0-9]{10}" title="Allowed Only Number" required maxlength="10" data-validation-required-message="This field is required">
											</div>
										</div>
									
									
									    <div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Date Of Birth:</label>
												<input type="date" id="firstName" class="form-control" placeholder="Date Of Birth" name="DOB" 
												value="<?php echo $row['DOB'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
                                    </div>
									<div class="row">
											<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Address:</label>
												<textarea type="text" rows="5" id="firstName" class="form-control" placeholder="Address" name="Address"  
												value="<?php echo $row['Address'];?>" required data-validation-required-message="This field is required"></textarea>
											</div>
										</div>
									
										
									<div class="form-group">
										<label>City</label>
										<select name="City" class="form-control" required>
											<option value="Ahmedabad" <?php if($row['City']=="Ahmedabad") echo "selected='selected'"; ?>>Ahmedabad</option>
											<option value="Rajkot" <?php if($row['City']=="Rajkot") echo "selected='selected'"; ?>>Rajkot</option>
											<option value="Surat" <?php if($row['City']=="Surat") echo "selected='selected'"; ?>>Surat</option>
											<option value="Baroda" <?php if($row['City']=="Baroda") echo "selected='selected'"; ?>>Baroda</option>
										</select>
									</div>
										
								</div>
								<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Zipcode:</label>
												<input type="text" id="firstName" maxlength="6" class="form-control" placeholder="Zipcode" name="Zipcode" 
												value="<?php echo $row['Zipcode'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-4">
												<div class="form-group">
													<label>Gender:</label>
													
													
													<div class="demo-radio-button">
														<input  type="radio" name="Gender"  id="radio_7" class="radio-col-red" value="Male">
														<label for="radio_7">Male</label>
														<input  type="radio" name="Gender"  id="radio_8" class="radio-col-red" value="Female">
														<label for="radio_8">Female</label>
													</div>
											</div>
                  
										</div>
									
									
									
									
									     
										 <div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Image:</label>
												<input type="file" id="firstName" class="form-control"  name="img" required data-validation-required-message="This field is required">
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
