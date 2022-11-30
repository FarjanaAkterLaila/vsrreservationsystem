<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "busbooking_vsr";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
else{
	//echo "connected";//
}
?>