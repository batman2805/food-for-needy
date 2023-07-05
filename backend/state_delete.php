<?php
include('connect.php');
$id=$_GET['id'];
$qry="delete from setting_states where state_id='$id'";
mysqli_query($conn,$qry) or die(mysqli_error());
header('location:state_display.php');
?>