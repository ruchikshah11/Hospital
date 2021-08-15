<?php include('config.php');
error_reporting(0);
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Doctor's Appointment Corner</title>
    <link rel="shortcut icon" type="image/x-icon" href="newproject_1_original.jpeg">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 pull-left">
                        <div class="logo">
                            <a href="index.php"><img alt="Logo" src="newproject_1_original.jpeg" width="56" height="50"></a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="navbar-collapse collapse" id="navbar">
                            <ul class="nav navbar-nav main-nav pull-right navbar-right">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="departments.php">Services</a></li>
                                <li><a href="doctors.php">Doctors</a></li>
                                
                                <li><a href="contact-us.php">Contact Us</a></li>
                                
								
                                
                                <li class="dropdown">
									<?php
									if($_SESSION['email']=="")
									{
									?>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
									<?php } else { ?>
									<a class="dropdown-toggle" data-toggle="dropdown"><?php 
									$ida=$_SESSION['myid'];
									$selecta=mysqli_query($con,"SELECT * FROM user WHERE uid='$ida'");
									$rowa=mysqli_fetch_array($selecta);
									echo $rowa['fname']; ?></a>
									<?php } ?>
                                    <ul class="dropdown-menu">
									<?php
										if($_SESSION['email']=="")
										{
										?>
										 <li><a href="login.php">Login</a></li>	
										 <li><a href="register.php">Register</a></li>
                                         										 
										<?php 
										}
										else
										{
											?>
										
										<?php
										$ida=$_SESSION['myid'];
										$selecta=mysqli_query($con,"SELECT * FROM user WHERE uid='$ida'");
										$rowa=mysqli_fetch_array($selecta);
										
										//echo"<script>alert('".$rowa['role']."')</script>";
										if($rowa['role']=="doctor")
										{
										?>
                                        <li><a href="dprofile.php">Dprofile</a></li>
										<?php } else { ?>
										<li><a class="btn btn-primary appoint-btn" href="appointment.php">Appointment</a></li>
                                        <li><a href="profile.php">profile</a></li>
                                        <li><a href="Feedback.php">Feedback</a></li>
										<?php } ?>
										
                                        <li><a href="logout.php">logout</a></li>
										<?php } ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Header -->
    <header class="mobile-header">
        <div class="panel-control-left"><a class="toggle-menu" href="#side_menu"><i class="fa fa-bars"></i></a></div>
        <div class="page_title">
            <a href="index.php"><img src="newproject_1_original.jpg" alt="Logo" class="img-responsive" width="60" height="60"></a>
        </div>
    </header>

    <!-- Mobile Sidebar -->
    <div class="sidebar sidebar-menu" id="side_menu">
        <div class="sidebar-inner slimscroll">
            <a id="close_menu" href="#"><i class="fa fa-close"></i></a>
            <ul class="mobile-menu-wrapper" style="display: block;">
                <li class="active">
                    <div class="mobile-menu-item clearfix">
                        <a href="index.php">Home</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="about-us.php">About Us</a>
                    </div>
                </li>
               
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="departments.php">Services</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="doctors.php">Doctors</a>
                    </div>
                </li>
               
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="contact-us.php">Contact Us</a>
                    </div>
                </li>
                <?php
				if($_SESSION['email']=="")
				{
				?>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="login.php">Login</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="register.php">Register</a>
                    </div>
                </li>
                <?php } else {
                $ida=$_SESSION['myid'];
				$selecta=mysqli_query($con,"SELECT * FROM user WHERE uid='$ida'");
				$rowa=mysqli_fetch_array($selecta);
				
				//echo"<script>alert('".$rowa['role']."')</script>";
				if($rowa['role']=="doctor")
				{
                ?>
                 <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="dprofile.php">Profile</a>
                    </div>
                </li>
                <?php } else { ?>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="profile.php">Profile</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="appointment.php">Appointment</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="Feedback.php">Feedback</a>
                    </div>
                </li>
                <?php } ?>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="logout.php">Logout</a>
                    </div>
                </li>
                <?php } ?>
               
            </ul>
        </div>
    </div>