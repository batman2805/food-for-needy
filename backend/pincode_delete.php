<?php
include('connect.php');
$id=$_GET['id'];
$qry="delete from setting_pincode where pincode_id='$id'";
mysqli_query($conn,$qry) or die(mysqli_error());
header('location:pincode_display.php');
?>