<?php
include("header.php");
?>

<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
        <h1> .CampusFrenzy. </h1>
        <h2> The hub of college events and competitions... </h2>
        <a href="customerreglogin.php" class="btn-get-started scrollto">Get Started</a>
    </div>
</section>

<main id="main">

    <section id="clients" class="clients">
        <div class="container">

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/img/clients/client-1.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/clients/client-2.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
                    <img src="assets/img/clients/client-3.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
                    <img src="assets/img/clients/client-4.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
                    <img src="assets/img/clients/client-5.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
                    <img src="assets/img/clients/client-6.jpeg" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section>

    <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="img/about_img.jpg" style="width: 70%;">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <p class="font-italic"><b>Mission :</b> To provide technology and services to students, companies,
                        and colleges to help to maintain the events and competitions and their records.</p>
                    <p class="font-italic"><b>Vision :</b> To provide a helping hand mainly to the students who are
                        really interested to participate in the events and competitions held in their colleges or any
                        another colleges.</p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> ‘CollegeFrenzy’ helps Companies in providing a platform
                            for registration for their events and competitions..</li>
                        <li><i class="ri-check-double-line"></i> ‘CollegeFrenzy’ helps Colleges to store and showcase
                            their previous record of events and competitions.</li>
                        <li><i class="ri-check-double-line"></i> ‘CollegeFrenzy’ helps Students to register in the
                            events and competitions according to their interests.</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section id="counts" class="counts">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-4 text-center">
                    <span data-toggle="counter-up">
                        <?php
                          $sql = "select * from seller";
                          $qsql = mysqli_query($con,$sql);
                          echo mysqli_num_rows($qsql);
                        ?>
                    </span>
                    <p>Companies & College's</p>
                </div>

                <div class="col-lg-3 col-4 text-center">
                    <span data-toggle="counter-up"><?php
                          $sql = "select * from customer";
                          $qsql = mysqli_query($con,$sql);
                          echo mysqli_num_rows($qsql);
                        ?>
                    </span>
                    <p>Student's</p>
                </div>

                <div class="col-lg-3 col-4 text-center">
                    <span data-toggle="counter-up">
                        <?php
                          $sql = "select * from article";
                          $qsql = mysqli_query($con,$sql);
                          echo mysqli_num_rows($qsql);
                        ?>
                    </span>
                    <p>Records of Events & Competitions</p>
                </div>

                <div class="col-lg-3 col-4 text-center">
                    <span data-toggle="counter-up">
                        <?php
                          $sql = "select * from selling_product";
                          $qsql = mysqli_query($con,$sql);
                          echo mysqli_num_rows($qsql);
                        ?>
                    </span>
                    <p>Programs List</p>
                </div>
            </div>

        </div>
    </section>

    <section id="why-us" class="why-us">
        <div class="container">

        <div class="row">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <h4>Student</h4>
                    <i class="bx bx-group"></i>
                    <p>Are you willing to participate?<br> <b>Login / Register as Student</b></p>
					<div class="text-center"><button type="button" class="btn btn-info" onclick="window.location='customerreglogin.php'">Click Here</button></div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <h4>Company</h4>
                    <i class="bx bx-donate-heart"></i>
                    <p>Are you willing to announce any program?<br> <b>Login / Register as Company</b></p>
					<div class="text-center"><button type="button" class="btn btn-info" onclick="window.location='farmerreglogin.php'">Click Here</button></div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <h4>College</h4>
                    <i class="bx bx-walk"></i>
                    <p>This feature is Available only for College Staff or Administrator</b></p>
					<div class="text-center"><button type="button" class="btn btn-info" onclick="window.location='adminloginpanel.php'">Click Here</button></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


</main>

<?php
include("footer.php");
?>