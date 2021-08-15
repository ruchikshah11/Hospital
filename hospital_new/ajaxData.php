<?php
//Include database configuration file
include('config.php');



if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
	
    //Get all City data
    $query = mysqli_query($con,"SELECT * FROM doctor_table WHERE uid = '".$_POST['country_id']."' ORDER BY uid ASC");
    
    //Count total number of rows
    $rowCount = mysqli_num_rows($query);
    
    //Display City list
    if($rowCount > 0){
        while($row = mysqli_fetch_array($query)){ 
            echo '<p>Time is : '.$row['D_Time_From'].' To '.$row['D_Time_To'].' <br> Available Days is : '.$row['D_Avail_Day'].'</p>';
        }
    }else{
        echo '';
    }
}

?>