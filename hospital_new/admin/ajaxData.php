<?php
//Include database configuration file
include('config.php');

if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
	
    $query = mysqli_query($con,"SELECT * FROM route WHERE city_id = '".$_POST['country_id']."' ORDER BY route_nm ASC");
    
    $rowCount = mysqli_num_rows($query);
    
    if($rowCount > 0){
        echo '<option value="">-----Choose Route-----</option>';
        while($row = mysqli_fetch_array($query)){ 
            echo '<option value="'.$row['id'].'">'.$row['route_nm'].'</option>';
        }
    }else{
        echo '<option value="">Route not available</option>';
    }
}

?>