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
<h2>Booking Details </h2>
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

</div>
<div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 100%">
                                        <thead>
                                            <tr>
                                            <td><b>Needer Name</b></td>
                                            <td><b>Needer address</b></td>
                                            <td><b>Quantity</b></td>
                                            <td><b>Needer Contact</b></td>
                                            <td><b>Delivery Date</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                    
                                        $id=$_SESSION['donor_id'];
                                            $qry="select * from donor_donation_detail inner join needer_booking_details on donor_donation_detail.donation_detail_id=needer_booking_details.donation_detail_id inner join needer_detail on needer_booking_details.needer_id=needer_detail.needer_id where donor_id = $id";
                                            $result=mysqli_query($conn,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                        ?>
                                        
                                            <tr>
                                            
                                                <td><?php echo $row['needer_name']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['quantity_per_person']; ?></td>
                                                <td><?php echo $row['needer_contact']; ?></td>
                                                <td><?php echo $row['delivery_date']; ?></td>
                                                

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