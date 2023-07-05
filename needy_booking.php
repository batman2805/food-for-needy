<?php
include('head.php');
session_start();
$nid=isset($_SESSION['needer_id']) ? $_SESSION['needer_id'] : '';
$did=isset($_SESSION['donor_id']) ? $_SESSION['donor_id'] : '';
if($nid <> '')
    include('needer_header.php');
else if($did <> '')
    include('donor_header.php');
else

include('header.php');
include('backend/connect.php');
?>

<main>

<div class="slider-area">
<div class="slider-height2 slider-bg2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-5 col-lg-6 col-md-8">
<div class="hero-caption hero-caption2">
<h2>My Booking  </h2>
</div>
</div>
</div>
</div>
</div>
</div>

<section class="contact-section">
<div class="container">

<div class="row">
<div class="col-12">

<div class="card-body">
                                <div>
                                    <table style="min-width: 100%">
                                        <thead>
                                            <tr>
                                                <td><b>Donor Name</b></td>
                                                <td><b>Food Type</b></td>
                                                <td><b>Food Details</b></td>
                                                <td><b>Quantity Per Person</b></td>
                                                <td><b>Delivery Date</b></td>
                                                <td><b>Cancel</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                    
                                        // $id=$_SESSION['needer_id'];
                                        
                                            $qry="select * from needer_booking_details inner join donor_donation_detail on needer_booking_details.donation_detail_id = donor_donation_detail.donation_detail_id inner join donor_detail on donor_donation_detail.donor_id = donor_detail.donor_id where needer_id = $nid";
                                            $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                        ?>
                                        
                                            <tr>
                                            <td><?php echo $row['donor_name']; ?></td>
                                               <td><?php echo $row['food_type']; ?></td>
                                                <td><?php echo $row['food_details']; ?></td>
                                                <td><?php echo $row['quantity_per_person']; ?></td>
                                                <td><?php echo $row['delivery_date']; ?></td>
                                                <td><a href="book_delete.php?id=<?php echo $row['needer_booking_id']; ?>" onclick="return confirm('Are you sure you want to delete!!!')" class="btn btn-danger">Cancel</a></td>
                                                

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    
                                    </table>
                                </div>
                            </div>
                          
                                                    

</div>
</div>
</section>

</main>
<?php
$nid=isset($_SESSION['needer_id']) ? $_SESSION['needer_id'] : '';
$did=isset($_SESSION['donor_id']) ? $_SESSION['donor_id'] : '';
if($nid <> '')
    include('needer_footer.php');
else if($did <> '')
    include('donor_footer.php');
else

include('footer.php');
?>