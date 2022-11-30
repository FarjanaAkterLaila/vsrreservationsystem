<?php

include 'Tconnection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `train` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:adminDash.php");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Train Deleted!!!');
    window.location.href='TManagesTrains.php';
    </script>");

?>
