<?php
include('backend/connect.php');
$id=$_GET['id'];
$qry="delete from needer_booking_details where needer_booking_id='$id'";
mysqli_query($conn,$qry) or die(mysqli_error());
header('location:needy_booking.php');
?>