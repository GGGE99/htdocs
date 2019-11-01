<?php 
ob_start(); //Turns on output buffering
session_start();

$timezone = date_default_timezone_set("Europe/Copenhagen");

$con = mysqli_connect("localhost", "fy175jonjfie", "e7dBp?bZC", "social");

if(mysqli_connect_errno()){
	echo "Failed to connect" . mysqli_connect_errno(); 
}

?>