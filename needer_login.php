




<?php
ob_start();
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
<h2>Needer Login</h2>
</div>
</div>
</div>
</div>
</div>
</div>

<section class="contact-section">
<div class="container">
                         
<body class="h-100">
    <div class="authincation h-100"> 
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form method="post">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="text" class="form-control" name="needer_email_id">
                                        </div>
                                        <div class="form-group">
                                            <label><strong> Password</strong></label>
                                            <input type="password" class="form-control" name="needer_password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <a href="needer_forget_password.php" style="color:#f15b43">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="submit">Sign me in</button>
                                            
                                            <?php
                                                if(isset($_POST['submit']))
                                                { include('backend/connect.php');
                                                   $qry="select * from needer_detail where needer_email_id='".$_POST['needer_email_id']."' and needer_password='".$_POST['needer_password']."'";
                                                    $result=mysqli_query($conn,$qry) or die (mysqli_error());
                                                    $count=mysqli_num_rows($result);
                                                    $row=mysqli_fetch_array($result);

                                                    if($count > 0)
                                                    {
                                                        session_start();
                                                        $_SESSION['needer_id']=$row['needer_id'];
                                                        $_SESSION['needer_email_id']=$row['needer_email_id'];
                                                        header('location:index.php');
                                                    }        
                                                    else
                                                    {
                                                        echo "incorrect needer email id  or Password";
                                                    }

                                                }
                                            ?>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                    <a href="needer_registration.php" style="color:#f15b43">Don't have an account?</a> <a class="text-primary" href="needer_registration.php">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor\global\global.min.js"></script>
    <script src="js\quixnav-init.js"></script>
    <script src="js\custom.min.js"></script>

</body>
</div>
</section>

</main>
<?php
include('footer.php');
ob_flush();
?>