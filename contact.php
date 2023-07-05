<?php
include('head.php');
include('header.php');
?>

<main>

<div class="slider-area">
<div class="slider-height2 slider-bg2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-5 col-lg-6 col-md-8">
<div class="hero-caption hero-caption2">
<h2>Donor Registration</h2>
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
<form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="">
<label class="col-lg-3 col-form-label" for="val-username">Donor name
 <span class="text-danger"></span>
   </label>
<div class="row">
<div class="col-6">
<div class="form-group">
<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter  Donor name">
</div>
</div>

<div class="col-sm-8">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Donor email
 <span class="text-danger"></span>
   </label>

<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter  Donor email">
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Donor contact
 <span class="text-danger"></span>
  </label>
   <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="">

</div>
</div>
</div>

<div class="col-sm-8">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Donor password
 <span class="text-danger"></span>
   </label>

<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="********">
</div>
</div>


<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn">Send</button>
</div>
</form>
</div>

</div>
</div>
</section>

</main>
<?php
include('footer.php');
?>