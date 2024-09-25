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

<body style="background-color:white;">

<?php include('includes/navbar.php') ?>


<style>


@import url(https://fonts.bunny.net/css?family=amita:700);

/* body {
    background: url(https://res.cloudinary.com/ritalbradley/image/upload/v1657644013/pexels-elijah-o_donnell-3473569_o7ohfd.jpg)
        center center/cover no-repeat;
    min-height: 100vh;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
} */

h1 {
    color:black;
    font-family: Amita;
    margin: 20px auto;
    width: 450px;
    font-size: 3rem;
    text-align: center;
    border-bottom: 10px double #bc6c25;
}

.galryimg {
    width: 215px;
    height: 130px;
    margin: 10px;
    border: 10px solid;
    /* -webkit-filter: sepia(100%); */
    /* filter: sepia(100%); */
    transition-duration: 1s;
}

.galryimg:hover {
    border: 5px solid #fff;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    -webkit-filter: none;
    filter: none;
}


.containergalry {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}



</style>



    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/banners/partners.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- <h1 class="pagetitle-heading">Our Partners</h1> -->
            <h1 class="pagetitle-heading">Our Partners</h1>
            <nav>
              <ol class="breadcrumb d-flex justify-content-center mt-80 mb-0">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Partners</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <a class="home-nav" href="index.php">
        <i class="icon-home"></i>
      </a>
      <div class="curve-top-shape">
        <svg class="curve-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
          <path class="curve-path" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
        </svg>
      </div><!-- /.curve -->
    </section><!-- /.page-title -->

    <section>

      <h1>Our Partners</h1>
      <div class="containergalry">
          <img class="galryimg" src="assets/images/brand/brand1.png" alt="Herd of horses">
          <img class="galryimg" src="assets/images/brand/brand2.png" alt="Baby Elephant">
          <img class="galryimg" src="assets/images/brand/brand3.png" alt="Koi Fish">
          <img class="galryimg" src="assets/images/brand/brand4.png" alt="Ibis Bird">
          <img class="galryimg" src="assets/images/brand/brand5.png" alt="Lemur">
          <img class="galryimg" src="assets/images/brand/brand6.png" alt="Berber Monkeys">
          <img class="galryimg" src="assets/images/brand/brand7.png" alt="Lemur">
          <img class="galryimg" src="assets/images/brand/brand8.png" alt="Berber Monkeys">
          <img class="galryimg" src="assets/images/brand/brand9.png" alt="Herd of horses">
          <img class="galryimg" src="assets/images/brand/brand10.png" alt="Baby Elephant">
          <img class="galryimg" src="assets/images/brand/brand11.png" alt="Koi Fish">
          <img class="galryimg" src="assets/images/brand/brand12.png" alt="Ibis Bird">
          <img class="galryimg" src="assets/images/brand/brand13.png" alt="Lemur">
          <img class="galryimg" src="assets/images/brand/brand14.png" alt="Berber Monkeys">
          <img class="galryimg" src="assets/images/brand/brand15.png" alt="Lemur">
          <img class="galryimg" src="assets/images/brand/brand25.png" alt="Berber Monkeys">
          <img class="galryimg" src="assets/images/brand/brand17.png" alt="Herd of horses">
          <img class="galryimg" src="assets/images/brand/brand18.png" alt="Baby Elephant">
          <img class="galryimg" src="assets/images/brand/brand19.png" alt="Koi Fish">
          <img class="galryimg" src="assets/images/brand/brand20.png" alt="Ibis Bird">
          <img class="galryimg" src="assets/images/brand/brand21.png" alt="Lemur">
          <img class="galryimg" src="assets/images/brand/brand22.png" alt="Berber Monkeys">
          <img class="galryimg" src="assets/images/brand/brand23.png" alt="Lemur">
          <img class="galryimg" src="assets/images/brand/brand24.png" alt="Berber Monkeys">
      </div>

    </section>



    <?php include('includes/footer.php') ?>
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>