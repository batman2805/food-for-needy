<?php
include('head.php');
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
<h2>Needer registration</h2>
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
<label class="col-lg-3 col-form-label" for="val-username">Needer name
 <span class="text-danger"></span>
   </label>
<div class="row">
<div class="col-6">
<div class="form-group">
<input class="form-control valid" name="needer_name" id="name" type="text"  placeholder="Enter Donor name"required="true">
</div>
</div>

<div class="col-sm-8">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Needer email
 <span class="text-danger"></span>
   </label>
   <input class="form-control valid" name="needer_email_id" id="name" type="text" placeholder="Enter Needer email"required="true">
</div>
</div>
<div class="col-sm-8">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Needer address
 <span class="text-danger"></span>
   </label>
   <textarea class="form-control valid" name="address" id="name" placeholder="Enter Your address"required="true"></textarea>
</div>
</div>
</div>


<div class="col-sm-12">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Needer contact
 <span class="text-danger"></span>
  </label>
   <input class="form-control valid" name="needer_contact" id="name" type="text"  placeholder=""required="true">

</div>
</div>
</div>

<div class="col-sm-8">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Needer password
 <span class="text-danger"></span>
   </label>

<input class="form-control valid" name="needer_password" id="email" type="password" placeholder="********"required="true">
</div>
</div>


<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn" name="submit">Send</button>
</div>
</form>
</div>
<?php
                                                    if(isset($_POST['submit']))
                                                    { 
                                                         $date=date('d-m-Y');
                                                         $qry="insert into needer_detail values('','".$_POST['needer_name']."','".$_POST['needer_email_id']."','".$_POST['needer_password']."','".$_POST['needer_contact']."','$date','0','".$_POST['address']."')";
                                                         mysqli_query($conn,$qry) or die(mysqli_error());
                                                         echo"Sucessfullyy Registered";
                                                    }
                                                  ?> 

</div>
</div>
</section>

</main>
<?php
include('footer.php');
?>