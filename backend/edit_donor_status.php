<?php
ob_start();
echo $id=$_GET['id'];
require_once('connect.php');
echo $st=$_GET['st'];
if($st=='0')
{
	mysqli_query($conn,"Update donor_detail SET donor_status='1' WHERE donor_id='$id'") or die(mysqli_error());
}
else
{
	mysqli_query($conn,"Update donor_detail SET donor_status='0' WHERE donor_id='$id'") or die(mysqli_error());
}

header('location:donor_display.php');
ob_flush();
?>