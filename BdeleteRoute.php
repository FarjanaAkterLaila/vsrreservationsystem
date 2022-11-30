<?php

include 'Bconnection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `route` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Route Deleted!!!');
    window.location.href='BadminDash.php';
    </script>");

?>
