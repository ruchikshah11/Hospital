<?php include('header.php');

$id=$_SESSION['myid'];
$select=mysqli_query($con,"SELECT * FROM `doctor_table` WHERE uid='$id'");
$row=mysqli_fetch_array($select);


if(isset($_POST['submit']))
{
	$D_name = $_POST['D_name'];
	$D_contact = $_POST['D_contact'];
	$D_experience = $_POST['D_experience'];
	$D_degree = $_POST['D_degree'];
	$D_Avail_Day = implode(",",$_POST['D_Avail_Day']);
	$D_Time_From = $_POST['D_Time_From'];
	$D_Time_To = $_POST['D_Time_To'];
	
	
	$id=$_SESSION['myid'];

	
	
	
	$insert=mysqli_query($con,"UPDATE `doctor_table` SET `D_name`='$D_name',`D_contact`='$D_contact',`D_experience`='$D_experience',`D_degree`='$D_degree',`D_Avail_Day`='$D_Avail_Day',`D_Time_From`='$D_Time_From',`D_Time_To`='$D_Time_To' WHERE uid='$id'");
	if($insert)
	{
		echo"<script>window.location.href='dprofile.php'</script>";
	}
	else
	{
		echo"wrong";
	}
}

if(isset($_POST['profile']))
{
	if($_FILES['img']['name'])
	{
		
	$name=$_FILES['img']['name'];
	$tmp_name=$_FILES['img']['tmp_name'];
	
	move_uploaded_file($tmp_name,"admin/himg/".$name);
	}
	else
	{
		$name=$row['img'];
	}
	$id=$_SESSION['myid'];
	
	$insert=mysqli_query($con,"UPDATE `user` SET `img`='$name' WHERE uid='$id'");
	
	if($insert)
	{
		echo"<script>alert('Successfully Updated');</script>";
		echo"<script>window.location.href='dprofile.php'</script>";
	}
	else
	{
		echo"wrong";
	}
}

if(isset($_POST['change']))
{
	$password=$_POST['password'];
	$npassword=$_POST['npassword'];
	$cpassword=$_POST['cpassword'];
	$md=md5($_POST['npassword']);
	$id=$_SESSION['myid'];
	
	$id=$_SESSION['myid'];
	$selectc=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$id'");
	$rowc=mysqli_fetch_array($selectc);
	
	if(md5($password)==$rowc['password'])
	{
		if($npassword==$cpassword)
		{
			$insert=mysqli_query($con,"UPDATE `user` SET `password`='$md' WHERE uid='$id'");
	
			if($insert)
			{
				echo"<script>alert('Successfully Updated');</script>";
				echo"<script>window.location.href='dprofile.php'</script>";
			}
			else
			{
				echo"wrong";
			}
		}
		else
		{
			echo"<script>alert('New password & Confirm Not Match');</script>";
			echo"<script>window.location.href='dprofile.php'</script>";
		}
	}
	else
	{
		echo"<script>alert('Wrong Old Password');</script>";
		echo"<script>window.location.href='dprofile.php'</script>";
	}
	
	
}

if(isset($_POST['report']))
{
	
	$P_id=$_POST['P_id'];
	$Report_details=$_POST['Report_details'];
	$Attachment_type=$_FILES['Attachment_type']['name'];
	$tmp_name=$_FILES['Attachment_type']['tmp_name'];
	
	move_uploaded_file($tmp_name,"image/".$Attachment_type);
	$date=date('Y-m-d h:i:sa');
	
	
	$user=$_SESSION['myid'];
	
	
	
	$insertf=mysqli_query($con,"INSERT INTO `report_table`(`Report_details`,`Report_Date`,`P_id`,`D_id`) VALUES ('$Report_details','$date','$P_id','$user')");
	
	$report_table=mysqli_insert_id($con);
	
	$inserta=mysqli_query($con,"INSERT INTO `attachment_table`(`D_id`,`Attachment_type`,`Created_Date`,`P_id`,`Report_id`) VALUES ('$user','$Attachment_type','$date','$P_id','$report_table')");

	
	
	if($insertf)
	{
		echo"yes";
	}
	else
	{
		echo"wrong";
	}
}

if(isset($_POST['pre']))
{
	
	
	
	$Attachment=$_FILES['Attachment']['name'];
	$tmp_namea=$_FILES['Attachment']['tmp_name'];
	
	move_uploaded_file($tmp_namea,"image/".$Attachment);
	
	$details=$_POST['details'];
	
	
	$user=$_POST['P_id'];
	
	
	
	$insertp=mysqli_query($con,"INSERT INTO `prescription_table`(`Attachment`,`details`,`P_id`) VALUES ('$Attachment','$details','$user')");
	

	if($insertp)
	{
		echo"yes";
	}
	else
	{
		echo"wrong";
	}
}


 ?>
    
    <!-- Content -->
    <div class="main-content">

        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <span>Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="content departments">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-header text-center">
                            <h3 class="header-title">Profile Details</h3>
							<div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="row department-row">
                    <div class="col-sm-4">
                       <div class="doctor text-center">
                            <a href="doctor-details.php">
							       
								    
								<?php 
								
								$selectim=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$id'");
							    $rowim=mysqli_fetch_array($selectim);
							   
                                ?>
								<img src="admin/himg/<?php echo $rowim['img']; ?>" alt="Dr. Pamela Curtis" class="img-circle" width="150" height="150">
								<?php
	                                     $selectd=mysqli_query($con,"SELECT distinct(P_id) FROM `doctor_table` WHERE WHERE uid='$D_id'");
		                                 $rowd=mysqli_fetch_array($selectd);
		                                 
											 
							     ?>
								<div class="doctors-name"><?php echo $row['D_name']; ?></div>
                                <div class="doctors-position"><?php echo $row['D_degree']; ?></div>		
                                
                            </a>
                        </div>
					</div>
					<div class="col-md-8">
						<ul class="nav nav-pills">
						<li class="active"><a data-toggle="pill" href="#home">Doctor Info</a></li>
						<li><a data-toggle="pill" href="#menu1">Image</a></li>
						<li><a data-toggle="pill" href="#menu2">Change Password</a></li>
						<li><a data-toggle="pill" href="#menu4">Appointment Details</a></li>
						
					  </ul>
					  
					  <div class="tab-content">
						<div id="home" class="tab-pane fade in active">
						  <form method="POST">
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
												value="<?php echo $row['D_contact'];?>" required data-validation-required-message="This field is required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Doctor Experience:</label>
												<input type="text" id="firstName" class="form-control" placeholder="Experience" name="D_experience" 
												value="<?php echo $row['D_experience'];?>" required data-validation-required-message="This field is required">
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
									
									<?php
	                                   $chk=explode(",",$row['D_Avail_Day']);
                                	?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											<label class="control-label">Doctor Avail Day:</label>
												<div class="demo-checkbox">
													<input type="checkbox" id="md_checkbox_21" name="D_Avail_Day[]" class="filled-in chk-col-red" 
                                                    value="Monday" <?php if(in_array("Monday",$chk)) echo "checked='checked'"; ?> >
													<label for="md_checkbox_21">Monday</label>
													
													<input type="checkbox" id="md_checkbox_22" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Tuesday" <?php if(in_array("Tuesday",$chk)) echo "checked='checked'"; ?> >
													<label for="md_checkbox_22">Tuesday</label>
													
													<input type="checkbox" id="md_checkbox_23" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Wednesday" <?php if(in_array("Wednesday",$chk)) echo "checked='checked'"; ?> >
													<label for="md_checkbox_23">Wednesday</label>
													
													<input type="checkbox" id="md_checkbox_24" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Thursday" <?php if(in_array("Thursday",$chk)) echo "checked='checked'"; ?> >
													<label for="md_checkbox_24">Thursday</label>
													
													<input type="checkbox" id="md_checkbox_25" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Friday" <?php if(in_array("Friday",$chk)) echo "checked='checked'"; ?> >
													<label for="md_checkbox_25">Friday</label>
													
													<input type="checkbox" id="md_checkbox_26" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Saturday" <?php if(in_array("Saturday",$chk)) echo "checked='checked'"; ?> >
													<label for="md_checkbox_26">Saturday</label>
													
													<input type="checkbox" id="md_checkbox_27" name="D_Avail_Day[]"class="filled-in chk-col-red"
													value="Sunday" <?php if(in_array("Sunday",$chk)) echo "checked='checked'"; ?> >
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
						

							  <button type="submit" name="submit" class="btn btn-default">Submit</button>
						 </form>
						</div>
						
						
						<!--img-->
						<div id="menu1" class="tab-pane fade">
						  <form method="POST" enctype="multipart/form-data">
							  <div class="form-group">
								<label for="pwd">Upload:</label>
								<input type="file" name="img" class="form-control" id="pwd">
							  </div>
							  <button type="submit" name="profile" class="btn btn-default">Submit</button>
						 </form>
						</div>
						
						
						<!--change password-->
						<div id="menu2" class="tab-pane fade">
						  <form method="POST">
							  <div class="form-group">
								<label for="email">Old Password:</label>
								<input type="password" class="form-control" name="password" id="email">
							  </div>
							  <div class="form-group">
								<label for="pwd">New Password:</label>
								<input type="password" class="form-control" name="npassword" id="pwd">
							  </div>
							  <div class="form-group">
								<label for="pwd">Confirm Password:</label>
								
								<input type="password" class="form-control" name="cpassword" id="pwd">
							  </div>
							  <button type="submit" name="change" class="btn btn-default">Submit</button>
						 </form>
						</div>
						
						
						<!--appointment-->
						<div id="menu4" class="tab-pane fade">
                        <div class="table-responsive">
                      <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                      <tr>
							<th>Appointment_id</th>
							<th>P_id</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>D_id</th>
							<th>T_id</th>
							<th>Fees_amount</th>
							<th>Created_Date</th>
							<th>message</th>
							<th>time</th>
							<th>Approve</th>
							
					  </tr>
	  
						<?php
						$id=$_SESSION['myid'];
							$select=mysqli_query($con,"SELECT * FROM `appointment_table` WHERE D_id='$id'");
							while($row=mysqli_fetch_array($select))
							{
							    $pid=$row['P_id'];
							    $selectp=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$pid'");
    							$rowp=mysqli_fetch_array($selectp);
						?>
	  
						<tr>
							<td><?php echo $row['Appointment_id'];?></td>
							<td><?php echo $row['P_id'];?></td>
							<td><?php echo $rowp['email'];?></td>
							<td><?php echo $rowp['mobile'];?></td>
							<td><?php echo $row['D_id'];?></td>
							<td><?php echo $row['T_id'];?></td>
							<td><?php echo $row['Fees_amount'];?></td>
							<td><?php echo $row['Created_Date'];?></td>
							<td><?php echo $row['message'];?></td>
							<td><?php echo $row['time'];?></td>
							<td>
							<?php 
							
							  if($row['status']=="0")
								{
						 
							?>
							<a href="approve.php?id=<?php echo $row['Appointment_id']; ?>" class="btn btn-block btn-info">Approve</button></a>
							
							<?php } ?>
							
								
							 <?php 
							 if($row['status']=="1")
							 { 
							 
							 ?>
							 
							 <a href="disapprove.php?id=<?php echo $row['Appointment_id']; ?>" class="btn btn-block btn-info">Disapprove</button></a>
							
							 <?php } ?>
							 
							 
							</td>
							
						</tr>
					<?php } ?>
	  
				</table>
						  </div>
						</div>
						
						<!--report-->
						
						<div id="menu5" class="tab-pane fade">
						  <form method="POST" enctype="multipart/form-data">
							  <div class="form-group">
								<label for="text">Report details</label>
								<input type="text" class="form-control" name="Report_details" id="Report details" placeholder="report name">
							  </div>
							  <div class="form-group">
								<label for="file">patients</label>
								  <select class="select" name="P_id">
										  
										  <?php
	                                     $selectt=mysqli_query($con,"SELECT distinct(P_id) FROM `appointment_table` WHERE status='1'");
		                                 while($rowt=mysqli_fetch_array($selectt))
		                                 {
											 
											 $pid=$rowt['P_id'];
											 $selectp=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$pid'");
											 $rowp=mysqli_fetch_array($selectp);
	                                     ?>
										
                                            <option value="<?php echo $rowt['P_id'];?>"><?php echo $rowt['P_id']." ".$rowp['fname'];?></option>
                                        
										<?php } ?>
										
										</select>
							  </div>
							  <div class="form-group">
								<label for="file">Attachment</label>
								<input type="file" class="form-control" name="Attachment_type" id="Attachment_type">
							  </div>
							  
							  
							  <button type="submit" name="report" class="btn btn-default">Submit</button>
						 </form>
						 
						 </br>
						 
						 <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
						    <tr>
								<th>Report_id</th>
								<th>Patients</th>
								<th>Report_details</th>
								<th>Attachment_type</th>
								<th>Report_Date</th>
							</tr>
							<?php
							$no=0;
							$uid=$_SESSION['myid'];
							    $selecto=mysqli_query($con,"SELECT * FROM `report_table` WHERE D_id='$uid'");
	                            while($rowo=mysqli_fetch_array($selecto))
	                            {
									$no=$no+1;
									
									$pida=$rowo['Report_id'];
									 $selectpa=mysqli_query($con,"SELECT * FROM `attachment_table` WHERE Report_id='$pida'");
									 $rowpa=mysqli_fetch_array($selectpa);
									
									$pid=$rowo['P_id'];
									 $selectp=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$pid'");
									 $rowp=mysqli_fetch_array($selectp);
						    ?>
							<tr>
                               <td><?php echo $no;?></td>
							   <td><?php echo $rowp['fname']; ?></td>
	                           <td><?php echo $rowo['Report_details']; ?></td>
	                           <td><a href="image/<?php echo $rowpa['Attachment_type'];?>" target="_blank"><img src="image/<?php echo $rowpa['Attachment_type'];?>" height="80" width="80"></a></td>
							   <td><?php echo $rowpa['Created_Date']; ?></td>
                            </tr>
	                       <?php  }  ?>
						 
						 
						 </table>
						</div>
						
						<div id="menu6" class="tab-pane fade">
						<form method="POST" enctype="multipart/form-data">
						     
							 <div class="form-group">
								<label for="file">Attachment</label>
								<input type="file" class="form-control" name="Attachment" id="Attachment" placeholder="attach a file">
							  </div>
							  <div class="form-group">
								<label for="file">patients</label>
								  <select class="select" name="P_id">
										  
										  <?php
	                                     $selectt=mysqli_query($con,"SELECT distinct(P_id) FROM `appointment_table` WHERE status='1'");
		                                 while($rowt=mysqli_fetch_array($selectt))
		                                 {
											 
											 $pid=$rowt['P_id'];
											 $selectp=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$pid'");
											 $rowp=mysqli_fetch_array($selectp);
	                                     ?>
										
                                            <option value="<?php echo $rowt['P_id'];?>"><?php echo $rowp['uid']." ".$rowp['fname'];?></option>
                                        
										<?php } ?>
										
										</select>
							  </div>
						
							  <div class="form-group">
								<label for="text">details</label>
								<input type="text" class="form-control" name="details" id="details" placeholder="write some details">
							  </div>
							  
							  
							  
							  
							  <button type="submit" name="pre" class="btn btn-default">Submit</button>
						 </form>
						</div>
						
						<!--payment term-->
						
						<div id="menu7" class="tab-pane fade">
						 
							<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<tr>
							    <th>patients</th>
								<th>Fees_status</th>
							
							</tr>
							
						<?php
						$id=$_SESSION['myid'];
							$selectfe=mysqli_query($con,"SELECT * FROM `fees_table` WHERE did='$id'");
							while($rowfe=mysqli_fetch_array($selectfe))
							{
						?>
	  
						<tr>
							<td><?php echo $rowfe['patient_id'];?></td>
							
							<td>
							<?php 
							
							  if($rowfe['Fees_status']=="0")
								{
						 
							?>
							<a href="pending.php?id=<?php echo $rowfe['fid']; ?>" class="btn btn-block btn-info">Fees Pending</button></a>
							
							<?php } ?>
							
							
							<?php 
							
							  if($rowfe['Fees_status']=="1")
								{
						 
							?>
							<a href="#" class="btn btn-block btn-info">Fees Paid</button></a>
							
							<?php } ?>
							</td>
							
						</tr>
					
                         <?php } ?>
					
							</table>
					    </div>						
						
					  </div>
					</div>
                </div>
                
            </div>
        </section>
       
    </div>
<?php include('footer.php'); ?>