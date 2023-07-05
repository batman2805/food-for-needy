<?php
ob_start();
echo $id=$_GET['id'];
require_once('connect.php');
echo $st=$_GET['st'];
if($st=='0')
{
	mysqli_query($conn,"Update needer_detail SET needer_status='1' WHERE needer_id='$id'") or die(mysqli_error());
}
else
{
	mysqli_query($conn,"Update needer_detail SET needer_status='0' WHERE needer_id='$id'") or die(mysqli_error());
}

header('location:needer_display.php');
ob_flush();
?>