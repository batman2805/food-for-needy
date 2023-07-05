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
<h2>Donors Feedback</h2>
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
<label class="col-lg-3 col-form-label" for="val-username">Message
 <span class="text-danger"></span>
   </label>
<div class="row">
<div class="col-6">
<div class="form-group">
<textarea class="form-control valid" name="donor_feedback_message" placeholder="Enter your message" required="true"></textarea>


</div>
</div>
<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn"name="submit">Send</button>
</div>
</form>
</div>
<?php
                                                    if(isset($_POST['submit']))
                                                    {
                                                      $date=date('d-m-y');
                                                      session_start();
                                                      $qry="insert into donors_feedback values('','".$_SESSION['donor_id']."','".$_POST['donor_feedback_message']."','$date')";
                                                      mysqli_query($conn,$qry) or die(mysqli_error());
                                                      echo"insert successfully";
                                        
                                                    }
                                                  ?> 

 
</div>
</div>
</section>

</main>
<?php
include('footer.php');
?>