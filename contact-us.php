<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Chemlabs - Laboratory & Science Research HTML5 Template">
  <link href="assets/images/logo/logo1.png" style="width: 200px; height:200px;" rel="icon">
  <title>Phoenix</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<?php include('includes/navbar.php') ?>

  

   


    <!-- ========================= 
            Google Map
    =========================  -->
    <section class="map py-0">
      <iframe height="620"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d169068.1768563142!2d55.26836776806532!3d25.18173892086031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e1!3m2!1sen!2sin!4v1727174646663!5m2!1sen!2sin">
      </iframe>
     
        <div class="map-container">
        <div class="contact-panel p-0">
          <div class="panel-header">
            <h3 class="panel-title color-white mb-0">Offices and Main Labs</h3>
          </div>
          <div class="accordion" id="accordion">
            <div class="accordion-item opened">
              <div class="accordion-header" data-bs-toggle="collapse" data-bs-target="#contact-collapse1">
                <a class="accordion-title" href="#">Head Office</a>
              </div><!-- /.accordion-item-header -->
              <div id="contact-collapse1" class="collapse show" data-bs-parent="#accordion">
                <div class="accordion-body">
                  <ul class="contact-list list-unstyled mb-0">
                    <li>Offices Land Building, Block 1, Office # 101, Karama, Dubai, U.A.E</li>
                    <!-- <li>Email: Chemlabs@7oroof.com</li>
                    <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li> -->
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion-header" data-bs-toggle="collapse" data-bs-target="#contact-collapse2">
                <a class="accordion-title" href="#">Phone</a>
              </div><!-- /.accordion-item-header -->
              <div id="contact-collapse2" class="collapse" data-bs-parent="#accordion">
                <div class="accordion-body">
                  <ul class="contact-list list-unstyled mb-0">
                    <li>Phone: +971 433667896 </li>
                    <!-- <li>Email: Chemlabs@7oroof.com</li>
                    <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li> -->
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->

            
            <div class="accordion-item">
              <div class="accordion-header" data-bs-toggle="collapse" data-bs-target="#contact-collapse3">
                <a class="accordion-title" href="#">Email</a>
              </div><!-- /.accordion-item-header -->
              <div id="contact-collapse3" class="collapse" data-bs-parent="#accordion">
                <div class="accordion-body">
                  <ul class="contact-list list-unstyled mb-0">
                    <li>Email: info@phoenic-me.com</li>
                   <!-- <li>Phone: +97 1433667896 <li> -->
                    <!--  <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li> -->
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->




            



          </div><!-- /.accordion -->
        </div>
      </div><!-- /.map-container -->
      <a class="home-nav" href="index.php">
        <i class="icon-home"></i>
      </a>
      <div class="curve-top-shape d-none d-xl-block">
        <svg class="curve-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
          <path class="curve-path" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
        </svg>
      </div><!-- /.curve -->
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1" style="background-color: white;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="heading-layout2 mb-50">
              <h2 class="heading-subtitle">Contact Us And We Will Respond Within The Next Two Working Days</h2>
              <h3 class="heading-title">Drop Us A Quick Line!</h3>
            </div>
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="text-block">
              <p class="text-block-desc">We’re just an email or phone call away. Fill out the form below and we’ll be right with you
              </p>
            </div>
            <!-- <a href="find-lab.html" class="btn btn-secondary">
              <i class="icon-arrow-right"></i> <span>Find A Lab</span>
            </a> -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <form class="contact-panel-form" method="post" action="assets/php/contact.php" id="contactForm">
              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone" name="contact-phone"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-control sbt" placeholder="Subject" id="contact-Phone" name="contact-phone"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Additional Details" id="contact-message"
                      name="contact-message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block btn-xhight mt-10">
                    <span>Submit</i>
                  </button>
                  <div class="contact-result"></div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->

    

    <?php include('includes/footer.php') ?>

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>