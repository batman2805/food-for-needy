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
include('backend/connect.php');
                                                    $id=$_SESSION['donor_id'];
                                                     $qry="select * from donor_detail where  donor_id='".$id."'";
                                                    $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                                    $row=mysqli_fetch_array($result);
                                                    
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
<form class="form-contact" method="post" >
<label class="col-lg-3 col-form-label" for="val-username">Donor name
 <span class="text-danger"></span>
   </label>
<div class="row">
<div class="col-6">
<div class="form-group">
<input class="form-control valid" name="donor_name" id="name" type="text"  placeholder="Enter Donor name" required="true"value="<?php echo $row['donor_name']; ?>">
</div>
</div>

<div class="col-sm-8">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Donor email
 <span class="text-danger"></span>
   </label>
   <input class="form-control valid" name="donor_email_id" id="name" type="text" placeholder="Enter Donor email" required="true"value="<?php echo $row['donor_email_id']; ?>">
</div>
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Donor contact
 <span class="text-danger"></span>
  </label>
   <input class="form-control valid" name="donor_contact" id="name" type="text"  placeholder="" required="true" value="<?php echo $row['donor_contact']; ?>">

</div>
</div>
</div>
<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn"name="submit">Update</button>
</div>
</form>
</div>
                                                   <?php
                                                if(isset($_POST['submit']))
                                                {
                                                
                                                    
                                                        $qry="update donor_detail set donor_name='".$_POST['donor_name']."',donor_email='".$_POST['donor_email_id']."',donor_contact='".$_POST['donor_contact']."' where donor_id='$id'";
                                                        mysqli_query($conn,$qry);
                                                        echo "successfully updated";
                                                    
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