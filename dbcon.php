<?php
//Assigne Value To Variable
$con= mysqli_connect('localhost','root','','manage');
//Checkging Connection is Working 
if (!$con) {
	die('Error'.mysqli_error($con));
}
?>