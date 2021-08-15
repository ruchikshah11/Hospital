<?php
	function sendsms($number, $message_body, $return = '0') {
	$username = "mahasukh280202@gmail.com";
	$hash = "cba97d9c31a94b0b8e93cb47f2ba7f44baa69e4aec12717d8107fb48afe614fa";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "910000000000"; // A single number or a comma-seperated list of numbers
	$message = "";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message_body."&sender=".$sender."&numbers=".$number."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	}
	
	sendsms('9510890837','hi test');
	
?>