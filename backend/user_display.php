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
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="users_form.php">Add</a></li>
                            
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>User Name</th>
                                                <th>User Email Id</th>
                                                <th>Password</th>
                                                <th>Photo</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $qry="select * from setting_users";
                                            $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                        ?>
                                        
                                            <tr>
                                                <td><?php echo $row['user_name']; ?></td>
                                                <td><?php echo $row['user_email_id']; ?></td>
                                                <td><?php echo $row['user_password']; ?></td>
                                                <td><?php echo $row['photo']; ?></td>
                                                <td><a href="user_edit.php?id=<?php echo $row['user_id']; ?>">Edit</td>
                                                <td><a href="user_delete.php?id=<?php echo $row['user_id']; ?>" onclick="return confirm('Are you sure you want to delete!!!')">Delete</a></td>

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>User Name</th>
                                                <th>User Email Id</th>
                                                <th>Password</th>
                                                <th>Photo</th>
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