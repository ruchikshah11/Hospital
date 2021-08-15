<?php include('header.php'); 

if(isset($_POST['register']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$mobile=$_POST['mobile'];
	$Created_date=date('Y-m-d h:i:sa');
	$insert=mysqli_query($con,"INSERT INTO `user` (`fname`,`lname`,`email`,`password`,`mobile`,`Created_date`) VALUES ('$fname','$lname','$email','$password','$mobile','$Created_date')");
	
	$lastid=mysqli_insert_id($con);
	
	$insert=mysqli_query($con,"INSERT INTO `patient_table` (`P_id`) VALUES ('$lastid')");
	
	if($insert)
	{
		$msg="Successfully Register";
		echo"<script>window.location.href='login.php'</script>";
	}
	else
	{
		$msg="Something Wrong";
	}
}
?>
    <div class="main-content account-content">
        <div class="content">
            <div class="container">
                <div class="account-box">
                    <form class="form-signin" method="POST">
                        <div class="account-title">
                            <h3>Register</h3>
							<?php if($msg)
							{
							?>
								<div class="alert alert-success">
									<?php echo $msg; ?>
								</div>
							<?php }
							?>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text"  name="lname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email"  name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password"  name="password" class="form-control" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text"  name="mobile" class="form-control" pattern="^[6-9][0-9]{9}$" title="Allowed Only Number" required maxlength="10" required>
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox" required> I have read and agree the Terms & Conditions
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" name="register" type="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="login.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>