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
                            <li class="breadcrumb-item"><a href="city_form.php" class="btn btn-primary">Add</a></li>
                            
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">City Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $count=1;
                                            $qry="select * from setting_cities inner join setting_states on setting_cities.state_id=setting_states.state_id";
                                            $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                        ?>
                                            <tr>
                                                <td><?php echo $count++; ?></td>
                                                <td><?php echo $row['state_name']; ?></td>
                                                <td><?php echo $row['city_name']; ?></td>
                                                <td><a href="city_edit.php?id=<?php echo $row['city_id']; ?>" class="btn btn-primary">Edit</a></td>
                                                <td><a href="city_delete.php?id=<?php echo $row['city_id']; ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete!!!')">Delete</a></td>

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Edit</th>
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