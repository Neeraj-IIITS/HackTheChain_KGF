<?php
include("header.php");

    if(isset($_POST['submit'])) {
        $name = $_POST ['name'];
        $email = $_POST ['email'];
        $contact = $_POST ['contact'];
        $message = $_POST ['message'];

        $sql = "INSERT INTO `contact_us`(`id`, `name`,`email`, `contact`, `message`) VALUES (null,'$name','$email','$contact', '$message')";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header ("Location: home_page.php?msg=New record created successfully");
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    }
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>CONTACT US...</h2>
          <ol>
            <li>Happy to help..</li>
          </ol>
        </div>

      </div>
    </section>
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>We'd Love To Hear From You!!!</h3>
          <p> Please use the contact form on the right side if you have any questions or requests, concerning our services. <br>We will respond to your message within 24 hours.</p>
    
        <a href="https://twitter.com/mala_neeraj?t=lpnGBerP0sCO_8942tw7CQ&s=09" class="twitter cta-btn "><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/neeraj.srinivas.908?mibextid=ZbWKwL" class="facebook cta-btn"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/sri_bangaru_568?igshid=NTA5ZTk1NTc=" class="instagram cta-btn"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/neeraj-srinivas-26217a228" class="linkedin cta-btn"><i class="bx bxl-linkedin"></i></a>

        </div>

      </div>
    </section>
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>Chanda Nagar, Hyderabad, Telangana, India, 500050</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@f2fmart.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+91-8247302611</p>
                </div>
              </div>
            </div>
            <form action="" method="post" role="form" class="mt-4">
              <div class="form-row">
                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <input type="text" class="form-control" name="contctno" id="contctno" placeholder="Your Contact  No."  data-msg="Please enter a valid Contact No" required />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><input type="submit" class="btn btn-success" name="submit" id="submit" value="Send Message"></div>
            </form>
          </div>
        </div>

      </div>
    </section>

  </main>
<?php
include("footer.php");
?>