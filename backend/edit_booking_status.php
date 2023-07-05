<?php
ob_start();
echo $id=$_GET['id'];
require_once('connect.php');
echo $st=$_GET['st'];
if($st=='0')
{
	mysqli_query($conn,"Update needer_booking_details SET booking_status='1' WHERE needer_booking_id='$id'") or die(mysqli_error());
}
else
{
	mysqli_query($conn,"Update needer_booking_details SET booking_status='0' WHERE needer_booking_id='$id'") or die(mysqli_error());
}

header('location:needy_booking_display.php');
ob_flush();
?>