<?php
include('connect.php');
$id=$_GET['id'];
$qry="delete from needer_detail where needer_id='$id'";
mysqli_query($conn,$qry) or die(mysqli_error());
header('location:needer_display.php');
?>