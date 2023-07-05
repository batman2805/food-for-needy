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
                                            $id=$_SESSION['needer_id'];
                                            $qry="select * from needer_detail where  needer_id='".$id."'";
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
<h2>Needer Registration</h2>
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
<form class="form-contact" method="post" novalidate="">
<label class="col-lg-3 col-form-label" for="val-username">Needer name
 <span class="text-danger"></span>
   </label>
<div class="row">
<div class="col-6">
<div class="form-group">
<input class="form-control valid" name="needer_name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter Donor name"value="<?php echo $row['needer_name']; ?>">
</div>
</div>

<div class="col-sm-8">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Needer email
 <span class="text-danger"></span>
   </label>
   <input class="form-control valid" name="needer_email_id" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" placeholder="Enter Donor email"value="<?php echo $row['needer_email_id']; ?>">
</div>
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username"> Needer_contact
 <span class="text-danger"></span>
  </label>
   <input class="form-control valid" name="needer_contact" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your contact'" placeholder="" value="<?php echo $row['needer_contact']; ?>">

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
                                                
                                                    
                                                        $qry1="update needer_detail set needer_name='".$_POST['needer_name']."',needer_email='".$_POST['needer_email_id']."',needer_contact='".$_POST['needer_contact']."' where needer_id='$id'";
                                                        mysqli_query($conn,$qry1);
                                                        echo "successfully updated";
                                                    
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
ob_flush();
?>