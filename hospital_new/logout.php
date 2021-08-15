<?php
$con=mysqli_connect("localhost","root","","hospital");
session_start();

session_destroy();

echo"<script>window.location.href='login.php'</script>";
?>