<?php include('header.php'); 


 if(isset($_POST['feedback']))
{
	$Subject=$_POST['Subject'];
	$Feed_description=$_POST['Feed_description'];
	
	$user=$_SESSION['myid'];
	$date=date('Y-m-d');
	$Created_date=date('Y-m-d h:i:sa');
	$insertf=mysqli_query($con,"INSERT INTO `feedback_table`(`Subject`, `Feed_description`, `User_id`,`Feed_Date`,`Created_date`) VALUES ('$Subject','$Feed_description','$user','$date','$Created_date')");

	
	if($insertf)
	{
		echo"yes";
	}
	else
	{
		echo"wrong";
	}
}
?>
<?php include('sidebar.php'); ?>
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <span>Feedback</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		

		
<section class="content">
            <div class="container">
			   <form method="POST" class="text-center">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-header text-center">
                            <h3 class="header-title">Feedback Details</h3>
							<div class="line"></div>
                        </div>
                    </div>
                </div>
                  <div class="row">
                        <div class="col-md-4 text-center">
                            </div>
						<div class="col-md-4 text-center">
                            <label><h4>Subject:</h4></label>
							<select name="Subject" class="form-control" required>
								<option value="Admin" <?php if($row['Subject']=="Admin") echo "selected='selected'"; ?>>Admin</option>
								<option value="Doctor" <?php if($row['Subject']=="Doctor") echo "selected='selected'"; ?>>Doctor</option>
								<option value="Service" <?php if($row['Subject']=="Service") echo "selected='selected'"; ?>>Service</option>
								<option value="Hospital" <?php if($row['Subject']=="Hospital") echo "selected='selected'"; ?>>Hospital</option>
							</select>
                        </div>
				  </div>
                 <div class="row">
					<div class="col-md-4 text-center">
                            </div>
					<div class="col-md-4 text-center">
                            <label><h4>Feed_description:</h4></label>
                            <textarea  name="Feed_description" rows="4" class="form-control"required ><?php echo $row['Feed_description']; ?></textarea>
							</div>
                  </div>


               <button type="submit" name="feedback" class="btn btn-info">Submit</button>
           </form>			   
         </div>
</section>

<?php include('footer.php'); ?>

