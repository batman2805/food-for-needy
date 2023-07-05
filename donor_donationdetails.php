<?php
ob_start();
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
  if($did == '')
    header('location:donor_login.php');
include('backend/connect.php');

?>

<main>

<div class="slider-area">
<div class="slider-height2 slider-bg2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-5 col-lg-6 col-md-8">
<div class="hero-caption hero-caption2">
<h2>Donor Donation Details</h2>
</div>
</div>
</div>
</div>
</div>
</div>

<section class="contact-section">
<div class="container">

<div class="row">

<div class="col-lg-12">
<form class="form-contact" method="post" enctype="multipart/form-data">
<label class="col-lg-3 col-form-label" for="val-username">Food Type
 <span class="text-danger"></span>
   </label>
   <select data-required="true" class="form-control" name="food_type"required="true">
                        <option value="Veg">Veg</option>
                        <option value="Non-Veg">Non-Veg</option>
  </select>
</div>

<div class="col-sm-12">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Food Details
 <span class="text-danger"></span>
   </label>
   <textarea class="form-control valid" name="food_details" placeholder="Enter your food details" required="true"></textarea>
</div>
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Picture Photo
 <span class="text-danger"></span>
   </label>
   <input class="form-control valid" name="food_pic" id="name" type="file" required="true">
</div>
<div class="col-sm-8">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Quantity 
 <span class="text-danger"></span>
  </label>
   <input class="form-control valid" name="quantity_per_person" id="name" type="text"  placeholder="Enter your quantity per person" required="true">

</div>
</div>
</div>

<div class="col-sm-8">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Donation Date
 <span class="text-danger"></span>
   </label>
  <input class="form-control valid"  name="donation_date" id="name" type="date" min="<?php echo date('Y-m-d');?>" placeholder="Enter your donation date"required="true">
</div>
</div>
<div class="col-sm-8">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Donors Address
 <span class="text-danger"></span>
   </label>
   <textarea class="form-control valid" name="donors_address" placeholder="Enter your address" required="true"></textarea>
</div>
</div>




<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn" name="submit">Send</button>
</div>
</form>
</div>
<?php
                                                    if(isset($_POST['submit']))
                                                    { $target="picture/";
                                                      $target1=$target.basename($_FILES['food_pic']['name']);
                                                      move_uploaded_file($_FILES['food_pic']['tmp_name'],$target1);
                                                      $img=basename($_FILES['food_pic']['name']);

                                                         $date=date('d-m-Y');
                                                         $qry="insert into donor_donation_detail values('','".$_SESSION['donor_id']."','".$_POST['food_type']."','".$_POST['food_details']."','".$_POST['quantity_per_person']."','".$_POST['donation_date']."','".$_POST['donors_address']."','0','$img')";
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
ob_flush();
?>