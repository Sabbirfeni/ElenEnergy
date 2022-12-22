<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require 'favicon.php'?>
    <title>Elán Energy</title>
    
  
    <!-- On Scroll animation link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    
  </head>
  <body>
    <!-- Navbar start 
    --------------------------- -->
    <?php require 'navbar.php'?>


    <!-- Hero section start
    ---------------------------->
    <section class="hero home__hero">
      <video autoplay muted loop id="myVideo">
        <source src="assets/videos/background.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
      <div class="container heroText" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
          <div class="col-12"> 

          <!-- <div class='d-flex justify-content-center'>
          <lottie-player src="https://lottie.host/590dcab2-22fa-42d9-8e34-5c0450352aa3/DrBPRxP2Bx.json" background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></lottie-player>
          </div> -->

            <h1 class='bigHeading textColor'>All things, all of life, <br>
            All of creation  is part of one original thought.<br>
            - Ra</h1>
          </div>
        </div>
      </div>  
    </section>



    <!-- About us section start
    --------------------------------- -->
    <section class='about__us' id='aboutUs'>
      <div class="container">
        <div class='row' data-aos="fade-up" data-aos-duration="1000">
          <div class="col-12 text-center">
                <h1 class='sectionHeading'>About Us</h1>
                <p class='textColor'>
                <span class='text-warning'>"</span>We are those who are of the Law 
                of One. In our vibration the polarities are harmonized, 
                the complexities are simplified, and the paradoxes have their 
                solution. We are one. That is our nature and our purpose.<span class='text-warning'>" - Ra</span> 
                </p>
             
            </div>
        </div>
      </div>
    </section>


    <!-- Products section start
    --------------------------------- -->
    <section class="product section pb-2 pb-md-4 pt-2 pt-md-4" id='products'>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12" data-aos="fade-up" data-aos-duration="800">
            <h4 class='sectionHeading'>Our Products</h4>
            
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-duration="800">
            <div class="product-container">
              <img src="assets/images/seamoss-1.jpeg" alt="">
              <div class="product-text">
                <h4>Sea Moss Products</h4>
                <div class='buttonContainer'>
                  <a href='products.php?productName=seamoss-gel' class='button'>Sea Moss Gel</a>
                  <a href='products.php?productName=sea-moss-capsules' class='button'>capsules</a>
                  <!--  when you click on it the description is Seamoss/Bladderwrack/Burdock Root Capsules -->
                  <a href='products.php?productName=sea-moss-dried' class='button'>Dried</a>
                  <!-- When you click on Dried Seamoss there should be 2 options which are Seamoss and Bladderwrack -->
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-duration="800">
            <div class="product-container">
              <img src="assets/images/mushrooms.jpeg" alt="">
              <div class="product-text">
                <h4>Mushroom Products</h4>
                <div class='buttonContainer'>
                  <a href='products.php?productName=mushroom-capsules' class='button'>Capsules</a>
                  <a href='products.php?productName=mushroom-teabags' class='button'>Teabags</a>
                  <a href='#' class='button'>Dried</a>
                  <!-- When you click on Dried mushrooms there should be 3 options which are Chaga, Turkey Tail, and Reishi -->
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-duration="800">
            <div class="product-container">
              <img src="assets/images/terotDrek.jpeg" alt="">
              <div class="product-text">
                <h4>Tarot Decks</h4>
                <div class='buttonContainer'>
                  <a href='products.php?productName=terot-cards' class='button'>Buy Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-duration="800">
            <div class="product-container">
              <img src="assets/images/cbd.jpeg" alt="">
              <div class="product-text">
                <h4>CBD</h4>
                <div class='buttonContainer'>
                  <a href='products.php?productName=cbd' class='button'>Buy Now</a>
                </div>
              </div>
            </div>
          </div>
         
          <div href='#' class="col-12 col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-duration="800">
            <div class="product-container">
              <img src="assets/images/whereElenBook.jpeg" alt="">
              <div class="product-text">
                <h4>Where's Elán? Book Series</h4>
                <div class='buttonContainer'>
                  <a href='#' class='button'>Buy Now</a>
                </div>
              </div>
            </div>
          </div>
          <div href='#' class="col-12 col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-duration="800">
            <div class="product-container">
              <img src="assets/images/crystals.jpeg" alt="">
              <div class="product-text">
                <h4>Sentient Plasma Crystals</h4>
                <div class='buttonContainer'>
                  <a href='#' class='button'>Buy Now</a>
                </div>
              </div>
            </div>
          </div>
          <!-- <a href='#' class="col-12 col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-duration="800">
            <div class="product-container">
              <img src="assets/images/bookSeries.jpeg" alt="">
              <div class="product-text">
                <h4>Book series</h4>
                
              </div>
            </div>
          </a>

          <a href='#' class="col-12 col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-duration="800">
            <div class="product-container">
              <img src="assets/images/bookSeries.jpeg" alt="">
              <div class="product-text">
                <h4>Book series</h4>
                
              </div>
            </div>
          </a>

          <a href='#' class="col-12 col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-duration="800">
            <div class="product-container">
              <img src="assets/images/bookSeries.jpeg" alt="">
              <div class="product-text">
                <h4>Book series</h4>
                
              </div>
            </div>
          </a>

          <a href='#' class="col-12 col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-duration="800">
            <div class="product-container">
              <img src="assets/images/bookSeries.jpeg" alt="">
              <div class="product-text">
                <h4>Book series</h4>
                
              </div>
            </div>
          </a>

          <a href='#' class="col-12 col-md-6 col-lg-4 col-xl-3 p-2" data-aos="fade-up" data-aos-duration="800">
            <div class="product-container">
              <img src="assets/images/bookSeries.jpeg" alt="">
              <div class="product-text">
                <h4>Book series</h4>
                
              </div>
            </div>
          </a> -->

          <!-- <a href="services.html" class="col-12 col-md-6 col-lg-4 col-xl-3  mt-md-4 mt-2 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="800">
            <div class="service-container">
              <img src="assets/images/pauline-heidmets-GTL39WM6QqA-unsplash.jpg" alt="">
                <h1 style="z-index: 2; color: white;" class="more-service">View More</h1>
            </div>
          </a> -->
          
          
        </div>
      </div>

    </section>



    <!-- Newsletter section start 
    ------------------------- -->
    <?php require 'newsLetter.php'?>


    <!-- Footer start 
    --------------------------- -->
    <?php require 'footer.php'?>




    <!-- On scroll animation js link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Lottie animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>