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
<h2>Donor login</h2>
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
                                            <label><strong>User_name</strong></label>
                                            <input type="text" class="form-control" name="user_name">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="submit">Sign me in</button>
                                            <?php
                                                if(isset($_POST['submit']))
                                                {
                                                    include('connect.php');
                                                    $qry="select * from setting_users where user_name='".$_POST['user_name']."' and user_password='".$_POST['password']."'";
                                                    $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                                    $count=mysqli_num_rows($result);
                                                    $row=mysqli_fetch_array($result);
                                                    if($count > 0)
                                                    {
                                                        session_start();
                                                        $_SESSION['user_id']=$row['user_id'];
                                                        $_SESSION['user_name']=$row['user_name'];
                                                        header('location:index.php');
                                                    }        
                                                    else
                                                    {
                                                        echo "incorrect user_name  or Password";
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
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
?>