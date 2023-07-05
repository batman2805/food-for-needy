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
include('backend/connect.php');
?>

<main>

<div class="slider-area">
<div class="slider-height2 slider-bg2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-5 col-lg-6 col-md-8">
<div class="hero-caption hero-caption2">
<h2>booking</h2>
</div>
</div>
</div>
</div>
</div>
</div>

<section class="contact-section">
<div class="container">

<div class="row">
<div class="col-12">

</div>
<div class="col-lg-8">
<form class="form-contact" method="post" >
<label class="col-lg-3 col-form-label" for="val-username">Delivery date
 <span class="text-danger"></span>
   </label>
<div class="row">
<div class="col-6">
<div class="form-group">
<input class="form-control valid" name="delivery_date" id="name" type="date" min="<?php echo date('Y-m-d');?>"  required="true" >
</div>
</div>


<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn"name="submit">Submit</button>
</div>
</form>
</div>
<?php
                                                    if(isset($_POST['submit']))
                                                    { 
                                                        session_start();
                                                        $id=$_GET['id'];
                                                         $date=date('Y-m-d');
                                                         $deli_date=$_POST['delivery_date'];
                                                         $newDate = date("Y-m-d", strtotime($deli_date));  
                                                         $qry="insert into needer_booking_details values('','".$id."','".$_SESSION['needer_id']."','$newDate','".$date."','0')";
                                                         mysqli_query($conn,$qry) or die(mysqli_error());
                                                         header('location:booking.php');
                                                         echo"insert successfully";
                                                        
                                                    }
                                                  ?> 

</div>
</div>
</section>

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