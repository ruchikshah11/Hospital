<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="card-group">
				<div class="row">
					<div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class=""><?php $result = mysqli_query($con,"SELECT * FROM user WHERE User_type=''"); 
echo $row = mysqli_num_rows($result); 
 ?></h3>
									<h6 class="card-subtitle">Total Patient</h6>
									<h6 class="card-subtitle"><a href="client_list.php">View</a></h6></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
					<div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="canvas" style="background-color:#333;width: 100%;"></canvas></div>
                            </div>
                        </div>
                    </div>
                    </div>
					
					<div class="col-4">
					<div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class=""><?php 
									$date=date('Y-m-d');
									$result = mysqli_query($con,"SELECT * FROM user WHERE User_type='doctor'"); 
echo $row = mysqli_num_rows($result); ?>
                                    <h6 class="card-subtitle">Today Doctor</h6>
									<h6 class="card-subtitle"><a href="doctor_list.php">View</a></h6>
									</div>
                            </div>
                        </div>
                    </div>
                    </div>
					
					
				 
				
				
                </div>
				
				<div class="row">
					<div class="col-12">
					<div class="card">
                        <div class="card-body">
						<div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" wuidth="100%">
										<thead>
											<tr>
												<th>Sr.No</th>
												<th>Dr  Name</th>
												<th>Available Days</th>
												<th>Time</th>
											</tr>
										</thead>
										
										<tbody>
											<?php
												$no=0;
												$result=mysqli_query($con,"select * from doctor_table ORDER BY D_id DESC");
												while($contact=mysqli_fetch_array($result))
												{
												$no=$no+1;
												
												?>
											<tr>
												<td class="center"><?php echo $no;?></td>
												<td class="center"><?php echo $contact['D_name'];?></td>
												<td class="center"><?php echo $contact['D_Avail_Day'];?></td>
												<td class="center"><?php echo $contact['D_Time_From']." To ".$contact['D_Time_To'];?></td>

												</tr>
	 


											<?php
													}
												?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                </div>
					</div>
				</div>
				
                </div>
                
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
			<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>	
		<?php include('footer.php'); ?>