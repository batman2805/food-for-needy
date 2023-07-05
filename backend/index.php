<?php
    include('head.php');
    include('header.php');
    include('sidebar.php');
    include('connect.php');
?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-3">
                        <div class="card">
                        <a href="state_display.php">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total State</div>
                                    <div class="stat-digit">
                                        <?php
                                            $result=mysqli_query($conn,"select * from setting_states");
                                            echo $total_state=mysqli_num_rows($result);
                                        ?>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="card">
                        <a href="city_display.php">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total City</div>
                                    <div class="stat-digit">
                                    <?php
                                            $result=mysqli_query($conn,"select * from setting_cities");
                                            echo $total_state=mysqli_num_rows($result);
                                        ?>
                                         </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                    
                    <!-- /# column -->
                    </div>
                <div class="col-lg-3 col-sm-3">
                        <div class="card">
                        <a href="city_display.php">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Pincode</div>
                                    <div class="stat-digit">
                                    <?php
                                            $result=mysqli_query($conn,"select * from setting_pincode");
                                            echo $total_state=mysqli_num_rows($result);
                                        ?>
                                         </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3">
                        <div class="card">
                        <a href="city_display.php">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Donor</div>
                                    <div class="stat-digit">
                                    <?php
                                            $result=mysqli_query($conn,"select * from donor_detail");
                                            echo $total_state=mysqli_num_rows($result);
                                        ?>
                                         </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                        <div class="card">
                        <a href="city_display.php">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Donation</div>
                                    <div class="stat-digit">
                                    <?php
                                            $result=mysqli_query($conn,"select * from donor_donation_detail");
                                            echo $total_state=mysqli_num_rows($result);
                                        ?>
                                         </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                        <div class="card">
                        <a href="city_display.php">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Needer</div>
                                    <div class="stat-digit">
                                    <?php
                                            $result=mysqli_query($conn,"select * from needer_detail");
                                            echo $total_state=mysqli_num_rows($result);
                                        ?>
                                         </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                        <div class="card">
                        <a href="city_display.php">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Booking</div>
                                    <div class="stat-digit">
                                    <?php
                                            $result=mysqli_query($conn,"select * from needer_booking_details");
                                            echo $total_state=mysqli_num_rows($result);
                                        ?>
                                         </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                </div>
                
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
            Content body end
        ***********************************-->

<?php
    include('footer.php');
?>