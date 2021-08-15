<?php include('header.php');

$id=$_SESSION['myid'];
$select=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$id'");
$row=mysqli_fetch_array($select);

$selectb=mysqli_query($con,"SELECT * FROM `patient_table` WHERE P_id='$id'");
$rowb=mysqli_fetch_array($selectb);




if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$DOB=$_POST['DOB'];
	$Address=$_POST['Address'];
	$P_blood_group=$_POST['P_blood_group'];
	$City=$_POST['City'];
	$State=$_POST['State'];
	$Country=$_POST['Country'];
	$Zipcode=$_POST['Zipcode'];
	$Gender=$_POST['Gender'];
	$User_type=$_POST['User_type'];
	$Created_date=$_POST['Created_date'];
	

	
	
	
	
	$id=$_SESSION['myid'];
	
	
	$insert=mysqli_query($con,"UPDATE `user` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`email`='$email',`mobile`='$mobile',`DOB`='$DOB',`Address`='$Address',`P_blood_group`='$P_blood_group',`City`='$City',`State`='$State',`Country`='$Country',`Zipcode`='$Zipcode',`Gender`='$Gender',`User_type`='$User_type',`Created_date`='$Created_date' WHERE uid='$id'");
	
	$insertb=mysqli_query($con,"UPDATE `patient_table` SET `P_blood_group`='$P_blood_group' WHERE WHERE P_id='$id'");
	
	
	if($insert)
	{
		echo"<script>window.location.href='profile.php'</script>";
	}
	else
	{
		echo"wrong";
	}
}

if(isset($_POST['profile']))
{
	$error = array();
	$accepteble = array
	(
		'image/png',
		'image/jpg',
		'image/jpeg'
		
	);
	
	$img = $_FILES['img']['name'];
	$tmp = $_FILES['img']['tmp_name'];
	$size = $_FILES['img']['size'];
	$type = $_FILES['img']['type'];
	
	if($size >= 100000 || ($size == 0))
	{
		$error[] = "Image Size too large. File must be less than 2mb megabytes.$size";
	}
	
	if(!in_array($type,$accepteble))
	{
		$error[] = "You Can Upload Only JPG AND PNG";
	}
	
	if(count($error) == 0)
	{
		$rnd = mt_rand(1,99999);
		$fnm = "img". $rnd . $img;
		$lfile = str_replace(' ','_',$fnm);
		$r = move_uploaded_file($tmp,'image/'.$lfile);
		$id=$_SESSION['myid'];
		$insert=mysqli_query($con,"UPDATE `user` SET `img`='$lfile' WHERE uid='$id'");

		if($r)
		{ ?>
			<script>
			alert('sucessfully upload');
			</script>
		<?php
		echo"<script>window.location.href='profile.php'</script>";
		}
	}
	else
	{
		foreach($error as $err)
		{
			echo '<script>alert("'.$err.'");</script>';
			echo"<script type='text/javascript'>";	
			echo"window.location = 'profile.php'";
			echo"</script>";
		}
		die();
	}
	

}

if(isset($_POST['change']))
{
	$password=$_POST['password'];
	$npassword=$_POST['npassword'];
	$cpassword=$_POST['cpassword'];
	$md=md5($_POST['npassword']);
	$id=$_SESSION['myid'];
	
	if(md5($password)==$row['password'])
	{
		if($npassword==$cpassword)
		{
			$insert=mysqli_query($con,"UPDATE `user` SET `password`='$md' WHERE uid='$id'");
	
			if($insert)
			{
				echo"<script>alert('Successfully Updated');</script>";
				echo"<script>window.location.href='profile.php'</script>";
			}
			else
			{
				echo"wrong";
			}
		}
		else
		{
			echo"<script>alert('New password & Confirm Not Match');</script>";
			echo"<script>window.location.href='profile.php'</script>";
		}
	}
	else
	{
		echo"<script>alert('Wrong Old Password');</script>";
		echo"<script>window.location.href='profile.php'</script>";
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
                            <a href="">
                                <img src="image/<?php echo $row['img']; ?>" alt="Dr. Pamela Curtis" class="img-circle" width="150" height="150">
                                <div class="doctors-name"></div>
                                <div class="doctors-position"></div>
                            </a>
                        </div>
					</div>
					<div class="col-md-8">
						<ul class="nav nav-pills">
						<li class="active"><a data-toggle="pill" href="#home">Info</a></li>
						<li><a data-toggle="pill" href="#menu1">Image</a></li>
						<li><a data-toggle="pill" href="#menu2">Change Password</a></li>
						<li><a data-toggle="pill" href="#menu4">Feedback Details</a></li>
						<li><a data-toggle="pill" href="#menu5">Appointment Details</a></li>
						
					  </ul>
					  
					  <div class="tab-content">
						<div id="home" class="tab-pane fade in active">
						  <form method="POST">
						                          <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control" required value="<?php echo $row['fname']; ?>">
                        </div>
						                        <div class="form-group">
                            <label>Middle Name</label>
                            <input type="text"  name="mname" class="form-control" required value="<?php echo $row['mname']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text"  name="lname" class="form-control" required value="<?php echo $row['lname']; ?>">
                        </div>
						<div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text"  name="mobile" class="form-control" required value="<?php echo $row['mobile']; ?>" pattern="[0-9].{6,}" title="Only Number Allowed" required maxlength="10" >
                        </div>
						<div class="form-group">
                            <label>DOB</label> 
                            <input type="date"  name="DOB" class="form-control" required value="<?php echo $row['DOB']; ?>">
                        </div>
						<div class="form-group">
                            <label>P_Blood_Group</label>
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
						<div class="form-group">
                            <label>Gender</label>
                            <input type="radio"  name="Gender"  required value="Male" <?php if($row['Gender']=="Male") echo "checked='checked'"; ?>>Male
                        
                            <input type="radio"  name="Gender" required value="Female" <?php if($row['Gender']=="Female") echo "checked='checked'"; ?>>Female
                        </div>
                        
							  <div class="form-group">
								<label for="email">Email address:</label>
								<input type="email" name="email" class="form-control" required id="email" value="<?php echo $row['email']; ?>">
							  </div>
								<div class="form-group">
                            <label>Address</label>
                            <textarea  name="Address" class="form-control" required ><?php echo $row['Address']; ?></textarea>
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
						
						<div class="form-group">
                            <label>Zipcode</label>
                            <input type="text"  name="Zipcode" class="form-control" required value="<?php echo $row['Zipcode']; ?>" required maxlength="6">
                        </div>
						

							  <button type="submit" name="submit" class="btn btn-default">Submit</button>
						 </form>
						</div>
						
						<div id="menu1" class="tab-pane fade">
						  <form method="POST" enctype="multipart/form-data">
							  <div class="form-group">
								<label for="pwd">Upload:</label>
								<input type="file" name="img" class="form-control" id="pwd">
							  </div>
							  <button type="submit" name="profile" class="btn btn-default">Submit</button>
						 </form>
						</div>
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
						<!--prescription-->
						<div id="menu3" class="tab-pane fade">
						  <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<tr>
								<th>Pre_id</th>
								<th>Attachment</th>
								<th>details</th>
							</tr>
	  
						<?php
						$select=mysqli_query($con,"SELECT * FROM `prescription_table` WHERE P_id='$id'");
						while($row=mysqli_fetch_array($select))
						{
						?>
	  
						<tr>
							<td><?php echo $row['Pre_id'];?></td>
							<td><a href="image/<?php echo $row['Attachment'];?>" target="_blank"><img src="image/<?php echo $row['Attachment'];?>" height="80" width="80"></a></td>
							<td><?php echo $row['details'];?></td>
						</tr>
					<?php } ?>
	  
				</table>
						</div>
						<!--feedback-->
						<div id="menu4" class="tab-pane fade">
 
 <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
      <tr>
	    <th>Feed_id</th>
	    <th>Feed_description</th>
	    <th>Feed_Date</th>
	    <th>User_id</th>
	    <th>Subject</th>
	    <th>Created_Date</th>
	    <th>status</th>
	  </tr>
	  
	  <?php
	     $select=mysqli_query($con,"SELECT * FROM `feedback_table` WHERE User_id='$id'");
		 while($row=mysqli_fetch_array($select))
		 {
	  ?>
	  
	  <tr>
	     <td><?php echo $row['Feed_id'];?></td>
	     <td><?php echo $row['Feed_description'];?></td>
	     <td><?php echo $row['Feed_Date'];?></td>
	     <td><?php echo $row['User_id'];?></td>
	     <td><?php echo $row['Subject'];?></td>
	     <td><?php echo $row['Created_Date'];?></td>
	     <td><?php echo $row['status'];?></td>
	  </tr>
		 <?php } ?>
	  
</table>
						  
						</div>
						
						<!--appointment-->
						<div id="menu5" class="tab-pane fade">
                        <div class="table-responsive">
                      <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                      <tr>
							<th>Appointment_id</th>
							<th>P_id</th>
							<th>D_id</th>
							<th>T_id</th>
							<th>Fees_amount</th>
							<th>Created_Date</th>
							<th>message</th>
							<th>time</th>
							<th>Approve</th>
							<th>Reason</th>
					  </tr>
	  
						<?php
							$select=mysqli_query($con,"SELECT * FROM `appointment_table` WHERE P_id='$id'");
							while($row=mysqli_fetch_array($select))
							{
						?>
	  
						<tr>
							<td><?php echo $row['Appointment_id'];?></td>
							<td><?php echo $row['P_id'];?></td>
							<td><?php echo $row['D_id'];?></td>
							<td><?php echo $row['T_id'];?></td>
							<td><?php echo $row['Fees_amount'];?></td>
							<td><?php echo $row['Created_Date'];?></td>
							<td><?php echo $row['message'];?></td>
							<td><?php echo $row['time'];?></td>
						
							<td>
							
								
							 <?php 
							 if($row['status']=="0" || $row['status']=="2")
							 { 
							 
							 ?>
							 
							 <button class="btn btn-block btn-warning">Disapprove</button>
							
							 <?php } ?>
							 
							 <?php 
							 if($row['status']=="1")
							 { 
							 
							 ?>
							 
							 <button class="btn btn-block btn-info">Approve</button>
							
							 <?php } ?>
							</td>
								<td><?php echo $row['reason'];?></td>
						</tr>
					<?php } ?>
	  
				</table>
						 </div> 
						</div>
						
						<!--report-->
					  </div>
					</div>
                </div>
                
            </div>
        </section>
       
    </div>
<?php include('footer.php'); ?>