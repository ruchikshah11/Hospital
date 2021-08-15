

		
		<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="images/<?php echo $rowad['company_logo']; ?>" alt="user" />
                        <!-- this is blinking heartbit-->
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5><?php echo $rowad['user_nm']; ?></h5>
						
                        <a href="profile" class="" data-toggle="tooltip" title="Profile"><i class="mdi mdi-settings"></i></a>
						
                        <a href="logout" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
						
						<li><a class=" waves-effect waves-dark" href="index" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Main Page </span></a>
                        </li>
						
						<li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Patients</span></a>
                            <ul aria-expanded="false" class="collapse">
									<li><a href="client_list.php">List Of Patients </a></li>
                            </ul>
                        </li>
						<li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Doctor</span></a>
                            <ul aria-expanded="false" class="collapse">
									<li><a href="add_doctor.php">Add Doctor </a></li>
									<li><a href="doctor_list.php">List Of Doctor </a></li>
                            </ul>
                        </li>
						
						<li>
						<a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Treatment</span></a>
                            <ul aria-expanded="false" class="collapse">
									<li><a href="treatment.php">Add Treatment </a></li>
                            </ul>
                        </li>
						<li>
						<a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Appoitment list</span></a>
                            <ul aria-expanded="false" class="collapse">
									<li><a href="appoint.php">Appoitment</a></li>
                            </ul>
                        </li>
						
						<li>
						<a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Appoitment Report</span></a>
                            <ul aria-expanded="false" class="collapse">
									<li><a href="report.php">Appoitment Report</a></li>
                            </ul>
                        </li>
						
						<li>
						<a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Feedback</span></a>
                            <ul aria-expanded="false" class="collapse">
									<li><a href="feedback.php">Feedback</a></li>
                            </ul>
                        </li>
						
					 </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
		
	