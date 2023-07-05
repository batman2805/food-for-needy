<?php
include('backend/connect.php');
// session_start();
$nid = $_SESSION['needer_id'];
?>
<header>
<div class="header-area header-transparent">
<div class="main-header ">
<div class="header-bottom  header-sticky">
<div class="container-fluid">
<div class="d-flex align-items-center justify-content-between flex-wrap position-relative">

<div class="left-side d-flex align-items-center">
<div class="logo">
<a href="index.html"><img src="assets/img/logo/xlogo.png.pagespeed.ic.qu0u-WkiMe.png" alt=""></a>
</div>

<div class="main-menu d-none d-lg-block">
<nav>
<ul id="navigation">
<li><a href="index.php">Home</a></li>
<li><a href="cards.php">Donations</a>
<li><a href="needer_feedback.php">Feedback</a></li>
<li><a href="needy_booking.php">My Booking </a></li>
<li><a>My Profile </a>
<ul class="submenu">
<li><a href="needer_edit.php">Edit Profile</a></li>
<li><a href="needer_change_password.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>
</li>
</ul>
</nav>
</div>
</div>
<?php

    $qry="Select needer_name from needer_detail where needer_id = ".$nid;
                                                        
                                                        $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                                    $row=mysqli_fetch_array($result);
                                                    
    
?>
                                                    
<div class="header-right-btn f-right  ml-15">
<a href="#" class="header-btn2 d-none d-xxl-inline-block">Hy,needer : <span> <?php echo $row['needer_name']; ?></span></a>
</div>

<div class="col-12">
<div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>
<body>