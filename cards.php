<?php
ob_start();
include('head.php');

include('backend/connect.php')
?>

<main>

<div class="slider-area">
<div class="slider-height2 slider-bg2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-5 col-lg-6 col-md-8">
<div class="hero-caption hero-caption2">
<h2>Donor Login</h2>
</div>
</div>
</div>
</div>
</div>
</div>

<section class="contact-section">
<div class="container">

<body class="h-100">

<div class="class-offer-area fix">
<div class="container-fluid p-0">
<div class="class-offer-active row">

<?php
    $qry="select * from donor_donation_detail";
    $result=mysqli_query($conn,$qry)or die(mysqli_error());
    while($row=mysqli_fetch_array($result))
    {                                                       
?>
<div class="col-lg-4 col-md-6 col-sm-6">

<div class="properties pb-30">
<div class="properties__card">
<div class="properties__img">
</div>
<div class="properties__caption">
    <img src="picture/<?php echo $row['img_url']; ?>"></br>
<b>Food Type:</b><br><?php echo $row['food_type']; ?>
<p><b>Food Details:</b> </br><?php echo $row['food_details']; ?></p>
<p><b>Total person:</b></br><?php echo $row['quantity_per_person']; ?></p>
<p><b>Donation date:</b></br><?php echo $row['donation_date']; ?></p>
<p><b>Donor Address:</b></br><?php echo $row['donors_address']; ?></p>
</div>
<div class="properties__footer d-flex flex-wrap justify-content-between align-items-center">
<div class="class-day">
</div>
<div class="class-day">
</div>
<div class="class-day">
<a href="booking.php?id=<?php echo $row['donation_detail_id']; ?>" class="btn_01">Book</a>
</div>
</div>
</div>
</div>
</div>
<?php
    }
?>
</div>
</div>
</div>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor\global\global.min.js"></script>
    <script src="js\quixnav-init.js"></script>
    <script src="js\custom.min.js"></script>

</body>
</div>
</section>

</main>
<?php
include('footer.php');
ob_flush();
?>