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
<h2>Forget Password</h2>
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
<label class="col-lg-3 col-form-label" for="val-username">Donor Email Id
 <span class="text-danger"></span>
   </label>
<div class="row">
<div class="col-6">
<div class="form-group">
<input class="form-control valid" name="donor_email_id" id="name" type="text" placeholder="Enter your old password" required="true">
</div>
</div>


<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn" name="submit">Submit</button>
</div>
</form>
</div>

               
               
               
               
               <?php
                                                if(isset($_POST['submit']))
                                                {
                                                    include('backend/connect.php');
                                                   
                                                    
                                                    $qry="select * from donor_detail where donor_email_id='".$_POST['donor_email_id']."'";
                                                    $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                                    $count=mysqli_num_rows($result);
                                                    $row=mysqli_fetch_array($result);
                                                    if($count > 0)
                                                    {
                                                        $send_email=$_POST['donor_email_id'];
                                                        $send_password= "Your Password is : " . $row['donor_password'];
                                                        /* send password process*/
                                                        require("backend/phpmailer/class.phpmailer.php");
                                                        $mail = new PHPMailer();
                                                        $mail->IsSMTP();
                                                        $mail->Host = "smtp.gmail.com";
                                                        $mail->From = "anjusurya397@gmail.com";
                                                        $mail->FromName  = "Admin";
                                                        $mail->AddAddress($send_email);
                                                        $mail->AddAddress($send_email);
                                                    
                                                        $mail->SMTPSecure = 'ssl';
                                                        $mail->SMTPAuth = "true";
                                                        $mail->Username = "anjusurya397@gmail.com";
                                                        $mail->Password =  "surya&2002";
                                                        $mail->Port  =  "465";
                                                    
                                                        $mail->Subject = "Your Password";
                                                        $mail->Body = $send_password;
                                                        $mail->WordWrap = 50;
                                                    
                                                        if(!$mail->Send())
                                                        {
                                                            echo 'Message was not sent.';
                                                            echo 'Mailer error: ' . $mail->ErrorInfo;
                                                        }
                                                        else
                                                        {
                                                            echo "
                                                                <script type=\"text/javascript\">
                                                                alert('Your Password Is in Your Mail Box. Thanks');
                                                                </script>
                                                                    ";
                                                            
                                                        }
                                                        /* password process complete*/
                                                        
                                                    
                                                        echo $row['donor_password'];
                                                    }        
                                                    else
                                                    {
                                                        echo "Incorrect Email Id";
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