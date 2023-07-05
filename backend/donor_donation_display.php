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
                            
                            
                        </ol>
                    </div>
                </div>
                <!-- row -->
            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Donor Donation Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Details</th>
                                                <th>Quantity</th>
                                                <th>Donation Date</th>
                                                <th>Address</th>
                                                <th>Register Date</th>
                                                <th>Status</th> 
                                                <th>Delete</th>      
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $count=1;
                                            $qry="select * from donor_donation_detail inner join donor_detail on donor_detail.donor_id=donor_donation_detail.donor_id";
                                            $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                        ?>
                                       
                                            <tr>
                                            <td><?php echo $count++; ?></td>
                                                <td><?php echo $row['donor_name']; ?></td>
                                                <td><?php echo $row['food_type']; ?></td>
                                                <td><?php echo $row['food_details']; ?></td>
                                                <td><?php echo $row['quantity_per_person']; ?></td>
                                                <td><?php echo $row['donation_date']; ?></td>
                                                <td><?php echo $row['donors_address']; ?></td>
                                                <td><?php echo $row['register_date']; ?></td>
                                                <?php
                                                    if($row['donation_status']=='0')
                                                    {
                                                ?>
                                                <td><a href="edit_donation_status.php?id=<?php echo $row['donation_detail_id']; ?>&st=<?php echo $row['donation_status']; ?>">Pending</a></td>
                                                <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                    <td><a href="edit_donation_status.php?id=<?php echo $row['donation_detail_id']; ?>&st=<?php echo $row['donation_status']; ?>">Confirm</a></td>
                                                    <?php
                                                    }
                                                ?>
                                                <td><a href="donor_donation_delete.php?id=<?php echo $row['donation_detail_id']; ?>" onclick="return confirm('Are you sure you want to delete!!!')"class="btn btn-primary">Delete</a></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                             </tbody>
                                        <tfoot>
                                        <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Details</th>
                                                <th>Quantity</th>
                                                <th>Donation Date</th>
                                                <th>Address</th>
                                                <th>Register Date</th>
                                                <th>Status</th> 
                                                <th>Delete</th>      
                                       </tr>
                                        
                                        </tfoot>
                                    </table>
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