<?php
ob_start();
echo $id=$_GET['id'];
require_once('connect.php');
echo $st=$_GET['st'];
if($st=='0')
{
	mysqli_query($conn,"Update donor_donation_detail SET donation_status='1' WHERE donation_detail_id='$id'") or die(mysqli_error());
}
else
{
	mysqli_query($conn,"Update donor_donation_detail SET donation_status='0' WHERE donation_detail_id='$id'") or die(mysqli_error());
}

header('location:donor_donation_display.php');
ob_flush();
?>