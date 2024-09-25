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

<style>
  h1 {
    color: #fefae0;
    font-family: Amita;
    margin: 20px auto;
    width: 450px;
    font-size: 3rem;
    text-align: center;
    border-bottom: 10px double #bc6c25;
}


/* =======================
          Brand
  =======================*/


.bd1 {

width: 50%;
height: 10vh;
}

.product-carousel {

height: 30vh;
}


.product-items1 {

height: 30vh;
}

.crs1 {

height: 30vh;

}

.clnt {


height: 30vh;
}




@media (max-width: 768px) {
  .about-img img {
    height: 40vh;
    border-radius: 15px;
}
}



/* =======================
    Top selling Product
  =======================*/



.top-selling-properties {
padding-top: 50px;
padding-bottom: 50px;
/* width: 90%;
margin-left: 5%; */
background-image: url(../images/backgrounds/pattern.png);

/* background-color: rgb(12, 74, 128); */
background-color: white;
}

.containerprdt{

width: 80%;
margin-left: 10%;



}

.top-selling-properties img {
max-width: 100%;
height: 100px;
}

.property-slide {
text-align: center;
}

.property-slide img {
width: 100%;
height: 100px;
/* border: solid 1px;
border-color: #bc6c25;
border-radius: 10px; */
}


.tprdt1{

/* border: solid 1px;
border-color: #bc6c25;
border-radius: 10px;
box-shadow: #0c4a80; */
}

.description {
margin-top: -27px;
font-size: 16px;
/* color:white; */
}

.slick-carousel .slick-slide {
padding: 10px;
}











</style>




<body style="background-color: white;">   
  <?php include('includes/navbar.php') ?>

  

    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel carousel-dots-light m-slides-0"
        data-slick='{"slidesToShow": 1,"autoplay": true, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>


        <!-- ==================================
                  First Slider
        =======================================-->
        <div class="slide-item bg-overlay align-v-h">
          <div class="bg-img"><img src="assets/images/banners/bg1.png" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-xl-7">
                <div class="slide-content">
                  <h2 class="slide-title">Industry & Automations</h2>
                  <p class="slide-desc">Our industry and automation solutions encompass a wide range of products and
                    services tailored to enhance efficiency and productivity across various sectors.
                  </p>
                  <div class="d-flex flex-wrap align-items-center">
                    <a href="product2.php" class="btn btn-white btn-xl mr-30">
                      <i class="icon-arrow-right"></i>
                      <span>Shop Now</span>
                    </a>
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->


        <!-- ==================================
                  Second Slider
        =======================================-->
        <div class="slide-item bg-overlay align-v-h">
          <div class="bg-img"><img src="assets/images/banners/bg1.png" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-xl-7">
                <div class="slide-content">
                  <h2 class="slide-title">Cable Terminations, Connectors & Cleats </h2>
                  <p class="slide-desc">Achieve flawless connections and uncompromising reliability with our premier
                    range of cable terminations, connectors, and cleats. Our high-quality products ensure seamless
                    integration, providing optimal performance for your electrical systems.
                  </p>
                  <div class="d-flex flex-wrap align-items-center">
                    <a href="product1.php" class="btn btn-white btn-xl mr-30">
                      <i class="icon-arrow-right"></i>
                      <span>Shop Now</span>
                    </a> 
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->

      <!-- ==================================
                  Third Slider
        =======================================-->

      <div class="slide-item bg-overlay align-v-h">
        <div class="bg-img"><img src="assets/images/banners/bg1.png" alt="slide img"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-xl-7">

              <div class="slide-content">
                <h2 class="slide-title">Cable & Wire</h2>

                <p class="slide-desc">Cables, Wires, and Accessories from reputed global and regional brands with a
                  comprehensive range fulfilling wide applications, specifications, standards, certifications, and
                  quality.

                </p>
                <div class="d-flex flex-wrap align-items-center">
                  <a href="product.php" class="btn btn-white btn-xl mr-30">
                    <i class="icon-arrow-right"></i>
                    <span>Shop Now</span>
                  </a>
                  <!-- <a href="tests-services.html" class="btn btn-white btn-outlined">
                    <span>Tests and Services</span>
                  </a> -->
                </div>
              </div><!-- /.slide-content -->
            </div><!-- /.col-xl-7 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.slide-item -->

     </div><!-- /.carousel -->
    </section>
  
    <!-- ==================================
                  Slider End
          =======================================-->


    

    <!-- ========================
            About Layout 2
          =========================== -->
    <section class="about-layout2 pt-100 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="position-relative">
              <div class="about-img rounded-clippath-filter">
                <img src="assets/images/banners/dis2.png" alt="about" class="octagon-clippath">
              </div>
              <ul class="features-list-layout4 list-unstyled p-0 mb-40">
                <!-- <li class="feature-item">
                  <div class="feature-item-inner octagon-clippath">
                    <div class="feature-icon"><i class="fa-regular fa-star"></i></div>
                    <h4 class="feature-title mb-0">High Quality Products</h4>
                  </div>
                </li> -->
                <!-- <li class="feature-item">
                  <div class="feature-item-inner octagon-clippath">
                    <div class="feature-icon"><i class="fa-solid fa-globe"></i></div>
                    <h4 class="feature-title mb-0">World Wide</h4>
                  </div>
                </li> -->
                <!-- <li class="feature-item">
                  <div class="feature-item-inner octagon-clippath">
                    <div class="feature-icon"><i class="icon-gloves"></i></div>
                    <h4 class="feature-title mb-0">Quality Service</h4>
                  </div>
                </li> -->
              </ul><!-- /.features-list-layout4 -->
            </div>
          </div><!-- /.col-xl-7 -->
          <div class="col-sm-12 col-md-10 col-lg-12 col-xl-5">
            <div class="about-text">
              <div class="heading-layout2">
                <h3 class="heading-title mb-40">Why Choose Phoenix? We'll Tell You!
                </h3>
                <p class="heading-desc mb-30"> Phoenix Trading Co. LLC, established in the year 1979, is an ISO
                  9001-2015
                  certified company and is the leading stockist and manufacturers representative of electrical cables,
                  accessories and related products, in the U.A.E.With over four decades of successfully serving our
                  clients, we have earned a reputation for being a trusted and reliable source of electrical cables,
                  accessories and related products. </p>
              </div>
              <div class="row">
                <div class="col-auto">
                  <img src="assets/images/logo/logo3.png" alt="about" class="rounded-2 mb-20">
                </div><!-- /.col -->
                <div class="col-auto">
                  <ul class="features-list-layout2 list-unstyled p-0 mb-40">
                    <li class="feature-item">
                      <div class="feature-icon"><i class="icon-check"></i></div>
                      <h4 class="feature-title mb-0">High Quality & Best Service</h4>
                    </li>
                    <li class="feature-item">
                      <div class="feature-icon"><i class="icon-check"></i></div>
                      <h4 class="feature-title mb-0">97% customer satisfaction rate</h4>
                    </li>
                    <li class="feature-item">
                      <div class="feature-icon"><i class="icon-check"></i></div>
                      <h4 class="feature-title mb-0">Experienced</h4>
                    </li>
                  </ul>
                </div><!-- /.col -->
              </div><!-- /.row -->
              <div class="note d-flex flex-wrap align-items-center">
                <div class="note-icon"><i class="icon-alert"></i></div>
                <p class="note-text flex-1 mb-0">While we believe we are more than just numbers, the depth of our
                  products is pretty impressive.</p>
              </div>
            </div><!-- /.about-text -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->


    <!-- ==================================
                  About End
        =======================================-->


    <!-- ======================
              Brand
      ========================= -->

    <section class="clients clients-light has-pattern-bg bg-primary overflow-hidden pt-60 pb-220" >
      <h2 style="text-align: center;color:white">Our Brands</h2>
      <div class="container">
        <div class="row" >
          <div class="col-12" >
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <img src="assets/images/brand/brand12.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/brand/brand2.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/brand/brand3.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/brand/brand4.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/brand/brand5.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/brand/brand6.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/brand/brand7.png" alt="client">
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="curve-top-shape d-none d-xl-block">
        <svg class="curve-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
          <path class="curve-path" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
        </svg>
      </div><!-- /.curve -->
    </section><!-- /.clients -->

    <!-- ==================================
                  Brand End
        =======================================-->




    <!-- ========================
                 Products
    =========================== -->
   
    <section class="fancybox-layout5 pt-0 pb-40 border-bottom" style="background-color: white;">
      <h2 style="text-align: center;">Our Products</h2>
      <div class="container"><br><br><br>
        <div class="container">

            <!-- ==================================
                      First Row
            =======================================-->
          <div class="row">
            <div class="category-item animate">
              <img src="assets/images/products/product1.png" alt="Category 1">
              <h4> <a href="products.php">Cable & Wire</a></h4>
              <p>PVC Insulated Building Wire (H07V-R)-6491X Cable </p>
            </div>
            <div class="category-item animate">
              <img src="assets/images/products/product2.png" alt="Category 2">
              <h4> <a href="">Cable & Wire</a></h4>
              <p>LSHF Insulated Conduit Wire (H07Z-R)-6491B Cable</p>
            </div>
            <div class="category-item animate">
              <img src="assets/images/products/product3.png" alt="Category 3">
              <h4> <a href="">Cable & Wire</a></h4>
              <p>LSHF Insulated Conduit Wire (H07Z-R)-6491B Cable</p>
            </div>
            <div class="category-item animate">
              <img src="assets/images/products/pdt1.png" alt="Category 4">
              <h4> <a href="">Cable & Wire</a></h4>
              <p>LSHF Insulated Conduit Wire (H07Z-R)-6491B Cable</p>
            </div>
          </div>
        </div>

           <!-- ==================================
                  Second row
        =======================================-->

        <div class="row">
          <div class="category-item animate">
            <img src="assets/images/products/pdt2.png" alt="Category 1">
            <h4> <a href="">Cable & Wire</a></h4>
            <p>LSHF Insulated Conduit Wire (H07Z-R)-6491B Cable</p>
          </div>
          <div class="category-item animate">
            <img src="assets/images/products/product1.png" alt="Category 2">
            <h4> <a href="">Cable & Wire</a></h4>
            <p>LSHF Insulated Conduit Wire (H07Z-R)-6491B Cable</p>
          </div>
          <div class="category-item animate">
            <img src="assets/images/products/product2.png" alt="Category 3">
            <h4> <a href="">Cable & Wire</a></h4>
            <p>LSHF Insulated Conduit Wire (H07Z-R)-6491B Cable</p>
          </div>

          <div class="category-item animate">
            <img src="assets/images/products/product3.png" alt="Category 4">
            <h4> <a href="">Cable & Wire</a></h4>
            <p>LSHF Insulated Conduit Wire (H07Z-R)-6491B Cable</p>
          </div>
        </div>


              <!-- ==================================
                  Third Row
        =======================================-->

        <div class="row">
          <div class="category-item animate">
            <img src="assets/images/products/pdt1.png" alt="Category 1">
            <h4> <a href="">Cable & Wire</a></h4>
            <p>LSHF Insulated Conduit Wire (H07Z-R)-6491B Cable</p>
          </div>
          <div class="category-item animate">
            <img src="assets/images/products/pdt2.png" alt="Category 2">
            <h4> <a href="">Cable & Wire</a></h4>
            <p>LSHF Insulated Conduit Wire (H07Z-R)-6491B Cable</p>
          </div>
          <div class="category-item animate">
            <img src="assets/images/products/product1.png" alt="Category 3">
            <h4> <a href="">Cable & Wire</a></h4>
            <p>LSHF Insulated Conduit Wire (H07Z-R)-6491B Cable</p>
          </div>
          <div class="category-item animate">
            <img src="assets/images/products/product2.png" alt="Category 4">
            <h4> <a href="">Cable & Wire</a></h4>
            <p>LSHF Insulated Conduit Wire (H07Z-R)-6491B Cable</p>
          </div>
        </div>






        <div class="row align-items-center">
          <div class="col-12 col-xl-6 offset-xl-3 px-xl-5 text-center">
            <!-- <p class="px-xl-4 fw-bold mb-0">Whether you are a provider or patient, when you need trusted information to
              make confident health decisions, consider us.
              <a href="" class="color-primary underlined-text-secondary">Our Specialty Areas</a>
            </p> -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.fancybox-layout5 -->

    <!-- ==================================
                  Products End
        =======================================-->








    <!-- ==================================
                  Counter
        =======================================-->

    <section style="background-color: rgb(4 26 79);">
      <div class="secondary-content">

        <div class="counters counters-light">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="counter-item">
                  <h4 class="counter-number"><span class="counter">250,000</span>                 
                </div><!-- /.counter-item -->
                <p class="counter-desc mb-0">sq.ft of warehousing facility</p>
              </div><!-- /.col-lg-3 -->

              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="counter-item">
                  <h4 class="counter-number"><span class="counter">1979</span></h4>
                  <br>
                  <br>  
                </div><!-- /.counter-item -->
                <p class="counter-desc mb-0">since</p>
              </div><!-- /.col-lg-3 -->

              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="counter-item">
                  <h4 class="counter-number"><span class="counter">1,000</span>+</h4>
                  <br><br>
                </div><!-- /.counter-item -->
                <p class="counter-desc mb-0">Specialized Centers in 24 States</p>
              </div><!-- /.col-lg-3 -->

              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="counter-item">
                  <h4 class="counter-number"><span class="counter">98</span>%</h4>
                </div><!-- /.counter-item -->
                <p class="counter-desc mb-0">Client Satisfaction Rate For Services</p>
              </div><!-- /.col-lg-3 -->

            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.Counters -->
      </div><!-- /.secondary-content -->
    </section>

    <!-- ==================================
                  Counter End
        =======================================-->












      <!-- ==================================
                  Top Selling Products
        =======================================-->

    <section class="top-selling-properties pt-50 pb-50 border-top">
        <div class="containerprdt">


                  <!-- ==================================
                               First Row
              =======================================-->
            <div class="row tprdt1">
                <div class="col-md-12 col-lg-12 col-xl-10 offset-xl-1 px-xl-5">
                <h2 style="text-align: center; color:black;">Top Selling Products</h2>
                    <div class="row align-items-center" style="height: 30vh;">
                        <!-- Left side: Brand image -->
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <img src="assets/images/brand/brand1.png" alt="Brand Logo" class="img-fluid">
                        </div>
                        <!-- Right side: Property Carousel -->
                        <div class="col-md-12 col-lg-12 col-xl-8">
                            <div class="slick-carousel"
                                data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true, "autoplaySpeed": 3000, "infinite": true, "responsive": [{"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}]}'>
                                <div class="property-slide">
                                    <img src="assets/images/cablewire/p1.png"  alt="Property 1" class="img-fluid">
                                    <p class="description">Crane Cable</p>
                                </div>
                                <div class="property-slide">
                                    <img src="assets/images/cablewire/p2.png"  alt="Property 2" class="img-fluid">
                                    <p class="description">HO7RN-F Rubber flexible cable</p>
                                </div>
                                <div class="property-slide">
                                    <img src="assets/images/cablewire/p3.png"  alt="Property 3" class="img-fluid">
                                    <p class="description">HO7RN-F Rubber flexible cable</p>
                                </div>
                                <div class="property-slide">
                                    <img src="assets/images/cablewire/p4.png"  alt="Property 4" class="img-fluid">
                                    <p class="description">HO7RN-F Rubber flexible cable</p>
                                </div>
                                <!-- Add more property slides as needed -->
                            </div><!-- /.carousel -->
                        </div><!-- /.col-xl-8 -->
                    </div><!-- /.row -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <br><br>
          

                      <!-- ==================================
                                    Second Row
                =======================================-->

            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-10 offset-xl-1 px-xl-5">
                    <div class="row align-items-center" style="height: 30vh;">
                        <!-- Left side: Brand image -->
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <img src="assets/images/brand/brand2.png" alt="Brand Logo" class="img-fluid">
                        </div>
                        <!-- Right side: Property Carousel -->
                        <div class="col-md-12 col-lg-12 col-xl-8">
                            <div class="slick-carousel"
                                data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true, "autoplaySpeed": 3000, "infinite": true, "responsive": [{"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}]}'>
                                <div class="property-slide">
                                    <img src="assets/images/cablewire/p2.png"  alt="Property 1" class="img-fluid">
                                    <p class="description">HO7RN-F Rubber flexible cable</p>
                                </div>
                                <div class="property-slide">
                                    <img src="assets/images/cablewire/p16.png"  alt="Property 2" class="img-fluid">
                                    <p class="description">HO7RN-F Rubber flexible cable</p>
                                </div>
                                <div class="property-slide">
                                    <img src="assets/images/cablewire/p1.png"  alt="Property 3" class="img-fluid">
                                    <p class="description">HO7RN-F Rubber flexible cable</p>
                                </div>
                                <div class="property-slide">
                                    <img src="assets/images/cablewire/p25.png"  alt="Property 4" class="img-fluid">
                                    <p class="description">HO7RN-F Rubber flexible cable</p>
                                </div>
                                <!-- Add more property slides as needed -->
                            </div><!-- /.carousel -->
                        </div><!-- /.col-xl-8 -->
                    </div><!-- /.row -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section><!-- /.top-selling-properties -->

    <!-- ==================================
              Top Seling Products  End
    =======================================-->




    <!-- ==================================
                Features
      =======================================-->
    <section class="work-process bg-overlay bg-overlay-primary-gradient bg-parallax pb-0">
      <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="backgrounds"></div>
      <div class="container">
        <div class="row heading-light">
          <div class="col-12">
           
          </div><!-- /.col-12 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
            <h3 class="heading-title">Quality & Services</h3>
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
            
            <ul class="features-list-layout2 list-horizontal features-light list-unstyled p-0 mb-60">
              <li class="feature-item">
               
              </li>
              <li class="feature-item">
                
              </li>
              <li class="feature-item">
                
              </li>
            </ul>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="slick-carousel carousel-container"
              data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "infinite": false, "autoplay":true, "arrows": false ,"dots": false, "responsive": [ {"breakpoint": 1200, "settings": {"slidesToShow": 3}},{"breakpoint": 1100, "settings": {"slidesToShow": 3}},{"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <!-- process item #1 -->
              <div class="process-item" style="height: 40vh;">
                <span class="process-number">1</span>
                
                <h4 class="process-title">Quality</h4>
                <p class="process-desc">Since our inception in 1979, Phoenix has always striven to meet and exceed
                  industry requirements as a supplier of electrical cables, accessories and related products to our
                  customers</p>
                
              </div><!-- /.process-item -->
              <!-- process item #2 -->
              <div class="process-item" style="height: 40vh;">
                <span class="process-number">2</span>
                
                <h4 class="process-title">Experience</h4>
                <p class="process-desc">
                  With over four decades of successfully serving our clients, we have earned a reputation for being a
                  trusted and reliable source</p>
                
              </div><!-- /.process-item -->
              <!-- process item #3 -->
              <div class="process-item" style="height: 40vh;">
                <span class="process-number">3</span>
               
                <h4 class="process-title">Facilities</h4>
                <p class="process-desc">
                  Our centralized storage facility located in Al Jurf area in Ajman, covers over 250,000 sq.ft of
                  covered space and is home to most of the inventory that we carry.</p>
                
              </div><!-- /.process-item -->
              <!-- process item #4 -->
              <div class="process-item" style="height: 40vh;">
                <span class="process-number">4</span>
              
                <h4 class="process-title">Customer Service</h4>
                <p class="process-desc">
                  By understanding our customer’s needs we are better able to meet and exceed them. This allows us to
                  constantly review and update our products and services.</p>
                
              </div><!-- /.process-item -->
              <!-- process item #5 -->
              <div class="process-item" style="height: 40vh;">
                <span class="process-number">5</span>
                
                <h4 class="process-title">Get Your Results Within 9 Hours</h4>
                <p class="process-desc">Results are available for most tests within 7 days of samples reaching the lab.
                </p>
               
              </div><!-- /.process-item -->
              <!-- process item #1 -->
              <div class="process-item" style="height: 40vh;">
                <span class="process-number">1</span>
                
                <h4 class="process-title">Quality</h4>
                <p class="process-desc">
                  Since our inception in 1979, Phoenix has always striven to meet and exceed industry requirements as a
                  supplier of electrical cables, accessories and related products to our customers.</p>
                
              </div><!-- /.process-item -->
              <!-- process item #2 -->
              <div class="process-item" style="height: 40vh;">
                <span class="process-number">2</span>
               
                <h4 class="process-title">Experience</h4>
                <p class="process-desc">
                  With over four decades of successfully serving our clients, we have earned a reputation for being a
                  trusted and reliable source</p>
               
              </div><!-- /.process-item -->
              <!-- process item #3 -->
              <div class="process-item" style="height: 40vh;">
                <span class="process-number">3</span>
               
                <h4 class="process-title">Facilities</h4>
                <p class="process-desc">Our centralized storage facility located in Al Jurf area in Ajman, covers over
                  250,000 sq.ft of covered space and is home to most of the inventory that we carry</p>
                
              </div><!-- /.process-item -->
              <!-- process item #4 -->
              <div class="process-item" style="height: 40vh;">
                <span class="process-number">4</span>
               
                <h4 class="process-title">Customer Service</h4>
                <p class="process-desc">
                  By understanding our customer’s needs we are better able to meet and exceed them. This allows us to
                  constantly review and update our products and services.</p>
                
              </div><!-- /.process-item -->
              <!-- process item #5 -->
              <div class="process-item" style="height: 40vh;">
                <span class="process-number">5</span>
               
                <h4 class="process-title">Get Your Results Within 9 Hours</h4>
                <p class="process-desc">Results are available for most tests within 7 days of samples reaching the lab.
                </p>
                
              </div><!-- /.process-item -->
            </div><!--/.carousel -->
          </div><!-- /.col-12-->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Work Process -->

    <!-- ==================================
                  Feature End
        =======================================-->

    <!-- ======================
              Demo
      ========================= -->
    <section class="cta-layout1 bg-overlay bg-overlay-secondary-gradient" style="background-color: #0c4a80;">
      <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="backgrounds"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-12 col-xl-7">
            <div class="cta-block d-flex align-items-start mt-20 mb-20">
              <div class="cta-icon"><i class="icon-molecule2"></i></div>
              <div>
                <h4 class="cta-title color-white">Quality Services are provided</h4>
                <p class="cta-desc color-gray">Phoenix Trading L.L.C. has provided support to us in terms of quotations,
                  execution of orders and quality of products, thus resulting in timely completion of our projects

                </p>
              </div>
            </div>
          </div><!-- /.col-xl-7 -->
          <div class="col-md-12 col-lg-12 col-xl-5 d-flex flex-wrap justify-content-xl-end">
            <!-- <a href="tests-accreditation.html" class="btn btn-primary btn-primary-style2 btn-xl mr-20 my-2">
              <i class="icon-arrow-right"></i> <span>Accreditation & Licensing</span>
            </a>
            <a href="team.html" class="btn btn-white btn-outlined my-2">
              <span>Meet our Leaders</span>
            </a> -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="curve-top-shape d-none d-xl-block">
        <svg class="curve-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
          <path class="curve-path" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
        </svg>
      </div><!-- /.curve -->
    </section><!-- /.cta-layout1 -->

    <!-- ==================================
                  Demo End
        =======================================-->



   
  <?php include('includes/footer.php') ?>
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
  
</body>

</html>