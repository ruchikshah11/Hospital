<?php include('header.php'); ?>
    

    <!-- Content -->
    <div class="main-content">

        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <span>Our Doctors</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-header text-center">
                            <h3 class="header-title">Our Orthopedist Lists</h3>
							<div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="row doctors-list">
					
					<?php
					$select=mysqli_query($con,"SELECT * FROM `doctor_table`");
					while($row=mysqli_fetch_array($select))
					{
						$id=$row['uid'];
						$selectim=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$id'");
						$rowim=mysqli_fetch_array($selectim);
					?>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="doctor-list">
                            <div class="doctor-inner">
                                <img class="img-responsive" alt="" src="admin/himg/<?php echo $rowim['img']; ?>">
                                <div class="doctor-details">
                                    <div class="doctor-info">
                                        <h4 class="doctor-name"><a><?php echo $row['D_name']; ?></a></h4>
                                        <p><span class="depart"><?php echo $row['D_degree']; ?></span></p>
                                        <h5 class="doctor-name"><a>Time : <?php echo $row['D_Time_From']; ?> To <?php echo $row['D_Time_To']; ?></a></h5>
                                        <h5 class="doctor-name"><a>Day : <?php echo $row['D_Avail_Day']; ?></a></h5>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <a href="#" class="btn btn-primary load-more">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>