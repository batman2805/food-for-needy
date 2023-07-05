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
?>
<main>

<div class="slider-area">
<div class="slider-height2 slider-bg2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-5 col-lg-6 col-md-8">
<div class="hero-caption hero-caption2">
<h2>Change Password</h2>
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
<label class="col-lg-3 col-form-label" for="val-username">Old Password
 <span class="text-danger"></span>
   </label>
<div class="row">
<div class="col-6">
<div class="form-group">
<input class="form-control valid" name="old_password" id="name" type="text"  placeholder="Enter your old password" required="true">
</div>
</div>

<div class="col-sm-8">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">New Password
 <span class="text-danger"></span>
   </label>
   <input class="form-control valid" name="new_password" id="name" type="text" placeholder="Enter your new password" required="true">
</div>
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
<label class="col-lg-3 col-form-label" for="val-username">Confirm Password
 <span class="text-danger"></span>
  </label>
   <input class="form-control valid" name="confirm_password" id="name" type="text"  placeholder="Enter Your confirm password" required="true">

</div>
</div>
</div>

<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn" name="submit">update</button>
</div>
</form>
</div>

               
               
               
               
               <?php
                                                if(isset($_POST['submit']))
                                                {
                                                    include('backend/connect.php');
                                                    
                                                    $id=$_SESSION['donor_id'];
                                                    $qry="select * from donor_detail where donor_password='".$_POST['old_password']."' and donor_id='".$id."'";
                                                    $result=mysqli_query($conn,$qry);
                                                    $count=mysqli_num_rows($result);
                                                    if($count > 0)
                                                    {
                                                        $qry="update donor_detail set donor_password='".$_POST['new_password']."' where donor_id='$id'";
                                                        mysqli_query($conn,$qry) or die(mysqli_error());
                                                        echo "successfully updated";
                                                    }        
                                                    else
                                                    {
                                                        echo "Incorrect Old Password";
                                                    }
                                                }
                                            ?>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>  
                                               
        
<?php
    include('footer.php');
    ob_flush();
?>