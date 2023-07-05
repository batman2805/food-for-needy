<?php
include('backend/connect.php');
$id=$_GET['id'];
$qry="delete from donor_donation_detail where donation_detail_id='$id'";
mysqli_query($conn,$qry) or die(mysqli_error());
header('location:donor_donation.php');
?>