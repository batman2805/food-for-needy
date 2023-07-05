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
<h2>Contact</h2>
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
<h2 class="contact-title">Get in Touch</h2>
</div>
<div class="col-lg-8">
<form class="" method="post" novalidate="">
<div class="row">
<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
</div>
</div>
</div>
<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn" name="send">Send</button>
<?php
                                                if(isset($_POST['send']))
                                                {
                                                
                                                   
                                                    
                                                        $send_email="anjusurya397@gmail.com";
                                                        $send_msg= "Name : " . $_POST['name'] ." Email : ". $_POST['email'] . " Subject : " . $_POST['subject'] ." Message : " .$_POST['message'];
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
                                                    
                                                        $mail->Subject = "Contact us details";
                                                        $mail->Body = $send_msg;
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
                                                        
                                                }
                                            ?>
              
</div>
</form>
</div>
<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-home"></i></span>
<div class="media-body">
<h3>Devang Patel Institute of Advance Technology and Research,Anand, GUJARAT-388421</h3>
<p>1234567890</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-tablet"></i></span>
<div class="media-body">
<h3>9586986702</h3>
<p>Mon to Sat 9am to 6pm</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-email"></i></span>
<div class="media-body">
<h3><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="50232520203f222410333f3c3f223c39327e333f3d">[email&#160;protected]</a></h3>
<p>Send us your query anytime!</p>
</div>
</div>
</div>
</div>
</div>
</section>

</main>
<?php
include('footer.php');
?>
