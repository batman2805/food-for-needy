<?php
include('connect.php');
$id=$_GET['id'];
$qry="delete from donor_detail where donor_id='$id'";
mysqli_query($conn,$qry) or die(mysqli_error());
header('location:donor_display.php');
?>