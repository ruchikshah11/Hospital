<?php include('header.php'); 

if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	
	$select=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$email' AND password='$password'");
	
	$count=mysqli_num_rows($select);
	if($count > 0)
	{
		$row=mysqli_fetch_array($select);
		
		if($row['role']=="doctor")
		{
		$_SESSION['myid']=$row['uid'];
		$_SESSION['email']=$row['email'];
		
		if($_POST["remember_me"]=='1')
		{
			echo"<script>alert('doctor');</script>";
		setcookie ("user_login",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
		//COOKIES for password
		setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
		}
		
		echo"<script>alert('Successfully Login');</script>";
		echo"<script>window.location.href='dprofile.php'</script>";
		}
		else
		{
			$_SESSION['myid']=$row['uid'];
			$_SESSION['email']=$row['email'];
		
		if($_POST["remember_me"]=='1')
		{
			echo"<script>alert('user');</script>";
		setcookie ("user_login",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
		//COOKIES for password
		setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
		}
		
		echo"<script>alert('Successfully Login');</script>";
		echo"<script>window.location.href='profile.php'</script>";
		}
	}
	else
	{
		$msg="Email & Password Wrong";
	}
}
?>
    <div class="main-content account-content">
        <div class="content">
            <div class="container">
                <div class="account-box">
                    <form class="form-signin" method="POST">
                        <div class="account-title">
                            <h3>Login</h3>
							<?php if($msg)
							{
							?>
								<div class="alert alert-danger">
									<?php echo $msg; ?>
								</div>
							<?php }
							?>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password"  value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>" class="form-control"required>
                        </div>
						<div class="form-group">
                            <label>Remember</label>
                            <input type="checkbox" name="remember_me" value='1' <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?>>
                        </div>
                        <div class="form-group text-right">
                            <a href="forgot-password.php">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" name="login" type="submit">Login</button>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="register.php">Register Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

 <?php include('footer.php'); ?>