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
                            <li class="breadcrumb-item"><a href="pincode_display.php" class="btn btn-primary">Back</a></li>
                            
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pincode Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide"  method="post">
                                        <div class="row">
                                            <div class="col-xl-12">
                                            <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-username" required="true">State Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                       <select data-required="true" class="form-control" name="ddlstate" required="true">
                                                           <option value="">please select first</option>
                                                           <?php
                                                           $qry="select *from setting_states";
                                                           $result=mysqli_query($conn,$qry)or die(musqli_error());
                                                           while($row=mysqli_fetch_array($result))
                                                           {
                                                               ?>
                                                               <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>
                                                               <?php
                                                               }
                                                               ?>
                                                               </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-username" required="true">City Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                    <select data-required="true" class="form-control" name="city_name">
                                                           <option value="">please select first</option>
                                                           <?php
                                                           $qry="select * from setting_cities";
                                                           $result=mysqli_query($conn,$qry)or die(musqli_error());
                                                           while($row=mysqli_fetch_array($result))
                                                           {
                                                               ?>
                                                               <option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
                                                               <?php
                                                               }
                                                               ?>
                                                               </select>    
                                                             </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label" for="val-username">Pincode
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="val-state name" name="pincode" placeholder="Enter a pincode.." required="true">
  
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12 ml-auto">
                                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                                       
                                                        

                                        
                                                    </div>
                                                    
                                                </div> 
                                                <?php
                                                    if(isset($_POST['submit']))
                                                    {
                                                      $conn=mysqli_connect("localhost","root","","food_needy");
                                                      $qry="insert into setting_pincode values('','".$_POST['city_name']."','".$_POST['pincode']."')";
                                                      mysqli_query($conn,$qry) or die(mysqli_error());
                                                      echo"insert successfully";
                                        
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
?>