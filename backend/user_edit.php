<?php
    include('head.php');
    include('header.php');
    include('sidebar.php');
    include('connect.php');
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
                            <li class="breadcrumb-item"><a href="user_display.php" class="btn btn-primary">Back</a></li>
                            
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User Form</h4>
                            </div>
                            <div class="card-body">
                            
                                <div class="form-validation">
                                   
                                    <form class="form-valide" action="#" method="post">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-username">User Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" id="val-user name" name="user_name" placeholder="Enter a name.."required="true">
                                                    </div>
                                                </div>
                                                <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-username">User Email Id
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" id="val-user name" name="user_email_id" placeholder="Enter a name..">
                                                    </div>
                                                </div>
                                                <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-username">Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" id="val-user name" name="user_name" placeholder="********">
                                                    </div>
                                                </div>
                                                <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-username">Photo
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" id="val-user name" name="photo" placeholder="..">
                                                    </div>
                                                </div>



                                                <div class="form-group row">
                                                    <div class="col-lg-12 ml-auto">
                                                        <button type="submit" class="btn btn-primary" name="submit">submit</button>
                                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                                        

                                        
                                                    </div>
                                                    
                                                </div> 
                                                <?php
                                                    if(isset($_POST['submit']))
                                                    {
                                                      $conn=mysqli_connect("localhost","root","","food_needy");
                                                      $qry="update setting_user set user_name='".$_POST['user_name']."'where user_id='$id'";
                                                      mysqli_query($conn,$qry) or die(mysqli_error());
                                                      header('location:state_display.php');
                                        
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