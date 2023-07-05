<?php
include('connect.php');
$id=$_GET['id'];
$qry="delete from setting_users where user_id='$id'";
mysqli_query($conn,$qry) or die(mysqli_error());
header('location:user_display.php');
?>