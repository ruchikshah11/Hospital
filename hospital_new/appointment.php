<?php include('header.php'); 

if(isset($_POST['submit']))
{
	
	$Created_Date=$_POST['Created_Date'];
	$message=$_POST['message'];
	$time=$_POST['time'];
	$D_id=$_POST['D_id'];
	$T_id=$_POST['T_id'];
	
	
	$user=$_SESSION['myid'];
	$amount= "250";
	
	$selectd=mysqli_query($con,"SELECT * FROM `doctor_table` WHERE uid='$D_id'");
	$rowd=mysqli_fetch_array($selectd);
	
	$D_Time_From=$rowd['D_Time_From'];
	$D_Time_To=$rowd['D_Time_To'];
	
	$acount=$rowd['acount'];
	
	$tcount=$acount+1;
	
	$ttcount=mysqli_query($con,"UPDATE `doctor_table` SET `acount`='$tcount' WHERE uid='$D_id'");
	
	$D_Avail_Day=explode(",",$rowd['D_Avail_Day']);
	$day=strftime("%A",strtotime($Created_Date));
	//echo"<script>alert('".$acount."')</script>";
	
	if($acount < 20)
	{
	if(in_array($day,$D_Avail_Day))
	{
	
	if($time > $D_Time_From && $time < $D_Time_To)
	{
	$insertf=mysqli_query($con,"INSERT INTO `appointment_table`(`P_id`,`D_id`,`T_id`,`Fees_amount`,`Created_Date`,`message`,`time`) VALUES ('$user','$D_id','$T_id','$amount','$Created_Date','$message','$time')");
	
	if($insertf)
	{
		//echo"<script>window.location.href='fees.php?did=$D_id'</script>";
		echo"<script>alert('Successfully Submitted')</script>";
	}
	else
	{
		echo"wrong";
	}	
	}
	else
	{
	echo"<script>alert('Doctor Not Available On Its Time...')</script>";
	}
	}
	else
	{
		echo"<script>alert('Doctor Not Available On This Day...')</script>";
	}
	}
	else
	{
		echo"<script>alert('20 Patient Booked Try Tommorow...')</script>";
	}
}


?>
<style>
span.select2.select2-container.select2-container--default.select2-container--below.select2-container--focus {
    display: none;
}
span.select2.select2-container.select2-container--default {
    display: none !important;
}
</style>
    <div class="main-content account-content">
        <div class="content">
            <div class="container">
                <div class="account-box">
                    <div class="appointment">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#clinic-consultation" data-toggle="tab" aria-expanded="false"><span>Clinic Consultation</span></a>
                            </li>
                           
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="clinic-consultation">
                                <form method="POST">
									<div class="form-group">
                                        <label>Select the Treatment Name</label>
                                        <select class="select" name="T_id" required>
										  
										  <?php
	                                     $selectt=mysqli_query($con,"SELECT * FROM `treatment_table`");
										 while($rowt=mysqli_fetch_array($selectt))
		                                 {
	                                     ?>
										
                                            <option value="<?php echo $rowt['T_id'];?>"><?php echo $rowt['T_name'];?></option>
                                        
										<?php } ?>
										
										</select>
										
                                    </div>
									<div class="form-group" >
                                        <label>Choose the Doctor</label>
                                        <select id="country" class="select" name="D_id" required>
										<option value="">Select Doctor</option>
										<?php
	                                     $select=mysqli_query($con,"SELECT * FROM `doctor_table`");
		                                 while($row=mysqli_fetch_array($select))
		                                 {
	                                     ?> 
                                            <option value="<?php echo $row['uid'];?>"><?php echo $row['D_name'];?></option>
										<?php } ?>
                                      </select>										
                                    </div>
									
									<div id="city" style="font-weight:bold;font-size:16px;">
										
									</div>
									
									<div class="form-group">
                                        <label>Choose the Date</label>
                                        <div class="cal-icon">
                                            <input type="date" name="Created_Date" class="form-control"  value="<?php echo date('Y'); ?>-<?php echo date('m'); ?>-<?php echo date('d'); ?>"
       min="<?php echo date('Y'); ?>-<?php echo date('m'); ?>-<?php echo date('d'); ?>" max="<?php echo date('Y'); ?>-<?php echo date('m'); ?>-31" required />
                                        </div>
                                    </div>
									 <div class="form-group">
                                        <label class="m-b-20">Choose your Convenient Time</label>
                                        <input type="time" name="time" class="form-control" required />
                                        
                                    </div>
									  
									 
									<div class="form-group">
                                        <label>Message (optional)</label>
                                        <textarea class="form-control" name="message" ></textarea>
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

<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('Select Doctor');
        }
    });
    
});
</script>	
	
<?php include('footer.php'); ?>