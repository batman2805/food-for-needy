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
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    <form method="post">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control"  name="user_email_id" >
                                        </div>
                                        
                                                                          
                                    <div class="new-account mt-3">
                                         <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
               <?php
                                                if(isset($_POST['submit']))
                                                {
                                                    include('connect.php');
                                                   
                                                    
                                                    $qry="select * from setting_users where user_email_id='".$_POST['user_email_id']."'";
                                                    $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                                    $count=mysqli_num_rows($result);
                                                    $row=mysqli_fetch_array($result);
                                                    if($count > 0)
                                                    {
                                                        $send_email=$_POST['user_email_id'];
                                                        $send_password= "Your Password is : " . $row['user_password'];
                                                        /* send password process*/
                                                        require("phpmailer/class.phpmailer.php");
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
                                                        
                                                     
                                                    
                                                    //    echo $row['user_password'];
                                                    }        
                                                    else
                                                    {
                                                        echo "Incorrect Email Id";
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
                                               
        
<?php
    include('footer.php');
    ob_flush();
?>