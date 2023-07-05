<?php
include('head.php');
session_start();
$nid=isset($_SESSION['needer_id']) ? $_SESSION['needer_id'] : '';
$did=isset($_SESSION['donor_id']) ? $_SESSION['donor_id'] : '';
if($nid <> '')
    include('needer_header.php');
else if($did <> '')
    include('donor_header.php');
else
    include('header.php');
include('backend/connect.php')
?>

<main>

<div class="slider-area position-relative">
<div class="slider-active">

<div class="single-slider slider-height slider-bg1 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-10">
<div class="hero-caption">
<h1 data-animation="fadeInUp" data-delay=".2s">Dude, Let's Give Some Food!</h1>
<p data-animation="fadeInUp" data-delay=".4s">" No One Has Ever Become Poor From Giving"</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="about-area1 section-bg pt-60 pb-60">
<div class="container">
<div class="row align-items-center">
<div class="col-xxl-6 col-xl-5 col-lg-6 col-md-8">

<div class="about-img about-img1  ">
<img src="assets/img/gallery/xabout1.jpg.pagespeed.ic.Vut_DjmPZO.jpg" alt="">
</div>
</div>
<div class="offset-xl-1 col-xxl-4 col-xl-6 col-lg-6 col-md-9">
<div class="about-caption about-caption1">

<div class="section-tittle mb-25">
<h2>WE HAVE THE POWER TO END WORLD HUNGER</h2>
<p class="mb-30">Donation is an act of kindness that can not be done by anybody or everybody.only a few people in this world have a good hearts who can give some part of their income for a good cause.</p>
</div>
<div class="double-btn d-flex flex-wrap">
</div>
</div>
</div>
</div>
</div>
</section>




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
</div>
<?php
    }
?>
</div>
</div>
</div>


</main>
<?php
$nid=isset($_SESSION['needer_id']) ? $_SESSION['needer_id'] : '';
$did=isset($_SESSION['donor_id']) ? $_SESSION['donor_id'] : '';
if($nid <> '')
    include('needer_footer.php');
else if($did <> '')
    include('donor_footer.php');
else

include('footer.php');
?>
