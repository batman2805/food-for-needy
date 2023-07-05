
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images\favicon.png">
    <link rel="stylesheet" href="vendor\owl-carousel\css\owl.carousel.min.css">
    <link rel="stylesheet" href="vendor\owl-carousel\css\owl.theme.default.min.css">
    <link href="vendor\jqvmap\css\jqvmap.min.css" rel="stylesheet">
    <link href="css\style.css" rel="stylesheet">

</head>

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
                                            <input type="email" class="form-control"  name="user_email_id" >
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control"  name="user_password" >
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="admin_forgot_password.php">Forgot Password?</a>
                                            </div>
                                        </div>
                                                                          
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <button type="submit" class="btn btn-primary btn-block" name="submit">Sign me in</button></p>
                                        <?php
                                                if(isset($_POST['submit']))
                                                {
                                                    include('connect.php');
                                                    $qry="select * from setting_users where user_email_id='".$_POST['user_email_id']."' and user_password='".$_POST['user_password']."'";
                                                    $result=mysqli_query($conn,$qry) or die (mysqli_error());
                                                    $count=mysqli_num_rows($result);
                                                    $row=mysqli_fetch_array($result);
                                                    if($count > 0)
                                                    {
                                                        session_start();
                                                        $_SESSION['user_id']=$row['user_id'];
                                                        $_SESSION['user_email_id']=$row['user_email_id'];
                                                        header('location:index.php');
                                                    }        
                                                    else
                                                    {
                                                        echo "incorrect  email id or Password";
                                                    }
                                                }
                                            ?>

                                    </div>
                                    </form>
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
</html>