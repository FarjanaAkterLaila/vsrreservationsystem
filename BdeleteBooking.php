<?php

include 'Bconnection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `booking` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:adminDash.php");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Booking Deleted!!!');
    window.location.href='BBookingManage.php';
    </script>");

?>
