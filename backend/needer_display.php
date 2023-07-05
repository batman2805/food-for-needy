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
                        
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Needer Details</h4>
                            </div>
<div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Contact</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $count=1;
                                            $qry="select * from needer_detail";
                                            $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                        ?>
                                        
                                            <tr>
                                                <td><?php echo $count++; ?></td>
                                                <td><?php echo $row['needer_name']; ?></td>
                                                <td><?php echo $row['needer_email_id']; ?></td>
                                                <td><?php echo $row['needer_password']; ?></td>
                                                <td><?php echo $row['needer_contact']; ?></td>
                                                <td><?php echo $row['needer_date']; ?></td>
                                                <?php
                                                    if($row['needer_status']=='0')
                                                    {
                                                ?>
                                                <td><a href="edit_needer_status.php?id=<?php echo $row['needer_id']; ?>&st=<?php echo $row['needer_status']; ?>">Pending</a></td>
               
                                                <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                     <td><a href="edit_needer_status.php?id=<?php echo $row['needer_id']; ?>&st=<?php echo $row['needer_status']; ?>">Confirm</a></td>
                                                    <?php
                                                    }
                                                ?>

                                                
                                                <td><a href="needer_delete.php?id=<?php echo $row['needer_id']; ?>" onclick="return confirm('Are you sure you want to delete!!!')"class="btn btn-primary">Delete</a></td>

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Contact</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Delete</th>
 
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>


</div>
</div>
</section>

</main>
<?php
include('footer.php');
?>