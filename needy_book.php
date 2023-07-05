<?php
include('connect.php');
$id=$_GET['id'];
$date=date('d-m-Y');
$qry="insert into needer_booking_details values('','".$_POST['donation_detail_id']."','".$_POST['needer_id']."','".$_POST['register_date']."','$date','0')";
mysqli_query($conn,$qry) or die(mysqli_error());
header('location:booking.php');
?>