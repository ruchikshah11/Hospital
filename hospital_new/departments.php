<?php include('header.php'); ?>
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
                <li class="active">
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
                <li>
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

    <!-- Content -->
    <div class="main-content">

        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <span>Services</span>
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
                            <h3 class="header-title">Services Summary Details</h3>
							<div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="row department-row">
                    <div class="col-sm-3">
                        <div class="dept-box">
                            <div class="dept-img">
                                <a><img width="67" height="80" alt="Dentists" src="orthopedics.png"></a>
                            </div>
                            <h4><a>Knee </a></h4>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="dept-box">
                            <div class="dept-img">
                                <a><img width="63" height="80" alt="Neurology" src="orthopedic-leg.png"></a>
                            </div>
                            <h4><a>orthopedic-leg</a></h4>
                            <p></p>
                        </div>
                    </div>
                   
                    <div class="col-sm-3">
                        <div class="dept-box">
                            <div class="dept-img">
                                <a><img width="40" height="80" alt="Orthopedics" src="logooo/shoulder.jpg"></a>
                            </div>
                            <h4><a>Shoulder And Elbow</a></h4>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="dept-box">
                            <div class="dept-img">
                                <a><img width="76" height="80" alt="Cancer Department" src="logooo/images.jpg"></a>
                            </div>
                            <h4><a>Hand and Upper Extremity</a></h4>
                            <p></p>
                        </div>
                    </div>
                   
                </div>
				<div class="row department-row">
                    
                <div class="row">
                    <div class="col-xs-12">
                        <div class="see-all m-t-0">
                            <a href="javascript:void(0);" class="btn btn-primary see-all-btn">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section meet-doctors">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-header text-center">
                            <h3 class="header-title">Meet our Doctors</h3>
							<div class="line"></div>
                            <p>
                                "Some People Don't Believe In Heros, But They Haven't Met My Doctors"
                            </p>
                        </div>
                    </div>
                </div>
                <div id="our_doctor" class="owl-carousel text-center">
                    <?php
					$select=mysqli_query($con,"SELECT * FROM `doctor_table`");
					while($row=mysqli_fetch_array($select))
					{
						$id=$row['uid'];
						$selectim=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$id'");
						$rowim=mysqli_fetch_array($selectim);
					?>
                    <div class="item">
                        <div class="doctor text-center">
                            <a href="doctor-details.html">
                                <img src="admin/himg/<?php echo $rowim['img']; ?>" alt="Dr. Albert Sandoval" class="img-circle" width="150" height="150">
                                <div class="doctors-name"><?php echo $rowim['D_name']; ?></div>
                                <div class="doctors-position"><?php echo $rowim['D_degree']; ?></div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="see-all">
                            <a class="btn btn-primary see-all-btn">See all Doctors</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php include('footer.php'); ?>