<?php
include('head.php');
include('header.php');
include('backend/connect.php');
?>

<main>
  <style>
    .form-group span {
      color: red;
    }
  </style>
  <div class="slider-area">
    <div class="slider-height2 slider-bg2 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-6 col-md-8">
            <div class="hero-caption hero-caption2">
              <h2>Donor Registration</h2>
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
        <div class="col-lg-8">
          <form class="form-contact" method="post">
            <label class="col-lg-3 col-form-label" for="val-username">Donor name
              <span class="text-danger"></span>
            </label>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control valid" name="donor_name" id="name" type="text" placeholder="Enter Donor name" required="true">
                </div>
              </div>

              <div class="col-sm-8">
                <div class="form-group">
                  <label class="col-lg-3 col-form-label" for="val-username">Donor email
                    <span class="text-danger"></span>
                  </label>
                  <input class="form-control valid" name="donor_email_id" id="email" onkeyup="validateMAIL()" type="email" placeholder="Enter Your email" required="true">
                  <span id="mail-error"></span>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label class="col-lg-3 col-form-label" for="val-username">Donor contact
                  <span class="text-danger"></span>
                </label>
                <input class="form-control valid" name="donor_contact" id="contactNumber" onkeyup="validateContact()" type="text" placeholder="" required="true">
                <span id="phon-error"></span>
              </div>
            </div>
        </div>

        <div class="col-sm-8">
          <div class="form-group">
            <label class="col-lg-3 col-form-label" for="val-username">Donor password
              <span class="text-danger"></span>
            </label>

            <input class="form-control valid" name="donor_password" id="text" type="password" placeholder="********" required="true">
          </div>
        </div>


        <div class="form-group mt-3">
          <button type="submit" class="button button-contactForm boxed-btn" onclick="return validate()" name="submit">Send</button>
        </div>
        </form>
      </div>
      <script type="text/javascript">
        var emailError = document.getElementById("mail-error");
        var contactError = document.getElementById("phon-error");

        function validateContact() {
          console.log("In validation function")
          var phon = document.getElementById('contactNumber').value;
          if (phon.length !== 10) {
            contactError.innerHTML = "Enter Valid Phon Number."
            return false;
          }
          if (!phon.match(/^[0-9]{10}$/)) {
            contactError.innerHTML = "Enter Valid Phon Number."
            return false;
          }
          contactError.innerHTML = ""
          return true
        }

        function validateMAIL() {
          var Mail = document.getElementById('email').value;
          if (!Mail.match(/[A-Za-z][A-Za-z0-9._]*[@][a-z]*\.[a-z]{2,3}/gm)) {
            emailError.innerHTML = "Enter Valid mail Address."
            return false;
          }
          emailError.innerHTML = ""
          return true
        }

        function validate() {
          if (!validateContact()) {
            alert("Enter Valid Input!!");
            return false;
          }
        }
      </script>
      <?php
      if (isset($_POST['submit'])) {
        $date = date('d-m-y');
        $qry = "insert into donor_detail values('','" . $_POST['donor_name'] . "','" . $_POST['donor_email_id'] . "','" . $_POST['donor_password'] . "','" . $_POST['donor_contact'] . "','$date','o')";
        mysqli_query($conn, $qry) or die(mysqli_error());
        // echo "insert successfully";
      }
      ?>


    </div>
    </div>
  </section>


</main>
<?php
include('footer.php');
?>