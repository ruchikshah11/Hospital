<?php include('header.php'); 

if(isset($_POST['submit']))
{
	
	
	$date=$_POST['date'];
	
	$user=$_SESSION['myid'];
	$did=$_GET['did'];
	$amount= "250";
	$status= "0";
	$pending= "0";
	
	
	$insertff=mysqli_query($con,"INSERT INTO `fees_table`(`patient_id`,`Fees_paid`,`date`,`Fees_status`,`Fees_pending`,`did`) VALUES ('$user','$amount','$date','$status','$pending','$did')");
	
	if($insertff)
	{
		echo"done";
	}
	else
	{
		echo"wrong";
	}
}


?>
    <!-- Mobile Header -->
    <header class="mobile-header">
        <div class="panel-control-left"><a class="toggle-menu" href="#side_menu"><i class="fa fa-bars"></i></a></div>
        <div class="page_title">
            <a href="index.html"><img src="assets/img/logo.png" alt="Logo" class="img-responsive" width="60" height="60"></a>
        </div>
    </header>

    <!-- Mobile Sidebar -->
    <div class="sidebar sidebar-menu" id="side_menu">
        <div class="sidebar-inner slimscroll">
            <a id="close_menu" href="#"><i class="fa fa-close"></i></a>
            <ul class="mobile-menu-wrapper" style="display: block;">
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="index.html">Home</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="about-us.html">About Us</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="departments.html">Departments</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="services.html">Services</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="doctors.html">Doctors</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="#">Blog <i class="fa fa-chevron-down menu-toggle"></i></a>
                    </div>
                    <ul class="mobile-submenu-wrapper" style="display: none;">
                        <li><a href="blog.html">Right Sidebar</a></li>
                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                        <li><a href="blog-full-width.html">Full Width</a></li>
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="contact-us.html">Contact Us</a>
                    </div>
                </li>
                <li class="active">
                    <div class="mobile-menu-item clearfix">
                        <a href="appointment.html">Appointment</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="login.html">Login</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="register.html">Register</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="forgot-password.html">Forgot Password</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="404.html">404</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content account-content">
        <div class="content">
            <div class="container">
                <div class="account-box">
                    <div class="appointment">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#clinic-consultation" data-toggle="tab" aria-expanded="false"><span>Payment</span></a>
                            </li>
                           
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="clinic-consultation">
                                <form method="POST">
                                    <div class="form-group">
                                        <label>Account Number</label>
                                        <input type="text" name="" class="form-control" maxlength="16"  placeholder="write your account number"/>
                                    </div>
                                    
									<div class="form-group">
                                        <label>Expire Date</label>
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control"  placeholder= "MM/YY" />
                                        </div>
                                    </div>
									 <div class="form-group">
                                        <label class="m-b-20">CVV</label>
                                        <input type="text" name="" class="form-control"  placeholder="write your CVV"/>
                                        
                                    </div>
									  
									
									
                                    <div class="form-group text-center m-b-0">
                                        <input type="submit" name="submit" class="btn btn-primary account-btn" value="Submit" />
                                    </div>
                                </form>
                            </div>
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>