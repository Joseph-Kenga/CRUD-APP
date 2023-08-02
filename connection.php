<?php

$hostname="localhost";
$username="root";
$password="";
$database="front_end";

//connection string
$con=mysqli_connect($hostname,$username,$password,$database);

//check if coonectio is working fine
if (!$con) {
	die(mysqli_error($con));
}

?>