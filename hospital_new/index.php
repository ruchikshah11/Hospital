<?php include('header.php'); ?>
    <div class="main-content">
        <section class="section home-banner row-middle">
            <div class="inner-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <div class="banner-content">
                            <h1>Doctor's Appointment Corner</h1>
                            <p>With a mission to extend World Class healthcare solutions to the community through advances in medical technology, medical research and by adopting best man management practices.</p>
                            <?php
							if($_SESSION['email']=="")
							{
							?>
                            <a title="Consult" class="btn btn-primary consult-btn" href="login.php">Consult</a>
                            <?php } else { ?>
                            <a title="Consult" class="btn btn-primary consult-btn" href="appointment.php">Consult</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section features">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-header text-center">
                            <h3 class="header-title">About Doctor's Appointment Corner</h3>
							<div class="line"></div>
                            <p>With a mission to extend World Class healthcare solutions to the community through advances in medical technology, medical research and by adopting best man management practices.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row feature-row">
                    <div class="col-sm-4">
                        <div class="feature-box">
							<div class="feature-img">
								<img width="60" height="60" alt="Book an Appointment" src="assets/img/icon-01.png">
							</div>
                            <h4>Book an Appointment</h4>
							<p>Book Your Appointment Online By Your Home Or Any Other Place.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature-box">
							<div class="feature-img">
								<img width="60" height="60" alt="Consult with a Doctor" src="assets/img/icon-02.png">
							</div>
                            <h4>Consult with a Doctor</h4>
							<p>Select your Dr. by checking their profile.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature-box">
							<div class="feature-img">
								<img width="60" height="60" alt="Make a family Doctor" src="assets/img/icon-03.png">
							</div>
                            <h4>Make a family Doctor</h4>
							<p>Familiar with the doctors.</p>
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
                            <a href="doctors.html" class="btn btn-primary see-all-btn">See all Doctors</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-header text-center">
                            <h3 class="header-title">Feedback</h3>
							<div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="testimonial_slider" class="owl-carousel text-center">
						<?php
						$select=mysqli_query($con,"SELECT * FROM `feedback_table` WHERE status='1'");
						while($row=mysqli_fetch_array($select))
						{
							$id=$row['User_id'];
							$selectim=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$id'");
							$rowim=mysqli_fetch_array($selectim);
						?>
                            <div class="item">
                                <div class="testimonial-list">
									<div class="testimonial-img">
										<img class="img-responsive" src="image/<?php echo $rowim['img']; ?>" alt="" width="150" height="150">
									</div>
									<div class="testimonial-text">
										<p><?php echo $row['Feed_description']; ?></p>
									</div>
									<div class="testimonial-author">
										<h3 class="testi-user">- <?php echo $rowim['fname']; ?> <?php echo $rowim['lname']; ?></h3>
										<span><?php echo $rowim['City']; ?></span>
									</div>
                                </div>
                            </div>
						<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php include('footer.php'); ?>
