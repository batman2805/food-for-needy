<?php
include('connect.php');
$id=$_GET['id'];
$qry="delete from setting_cities where city_id='$id'";
mysqli_query($conn,$qry) or die(mysqli_error());
header('location:city_display.php');
?>