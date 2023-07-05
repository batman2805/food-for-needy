<?php

ob_start();

include('head.php');

include('header.php');
    include('sidebar.php');
?>
 <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php" class="btn btn-primary">Back</a></li>
                            
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Change-password</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-username">Old Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" id="val-state name" name="Old_Password" placeholder="Enter a old password..">
                                                    </div>
                                                </div>
                                                <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-username">New Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" id="val-state name" name="New_Password" placeholder="Enter a new password.."required="true">
                                                    </div>
                                                </div>
                                                <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-username">Confirm Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" id="val-state name" name="Confirm_Password" placeholder="Enter a confirm password.."required="true">
                                                    </div>
                                                </div>
                                        
                                                <div class="form-group row">
                                                    <div class="col-lg-12 ml-auto">
                                                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                                </div>
                                                    
                                                </div> 
                                                <?php
                                                if(isset($_POST['submit']))
                                                {
                                                    include('connect.php');
                                                    session_start();
                                                    $id=$_SESSION['user_id'];
                                                    $qry="select * from setting_users where  user_password='".$_POST['Old_Password']."' and user_id='".$id."'";
                                                    $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                                    $count=mysqli_num_rows($result);
                                                    if($count > 0)
                                                    {
                                                        $qry="update setting_users set user_password='".$_POST['New_Password']."' where user_id='$id'";
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