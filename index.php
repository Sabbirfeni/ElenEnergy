<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href='assets/images/favicon.png'>
    <title>Elen Energy</title>
    
    
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
          <div class="col-12"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> 

          <div class='d-flex justify-content-center'>
            <lottie-player src="https://lottie.host/2ca9ce3c-a451-44e3-952d-a3a57b93b63d/6s60wxGGGq.json" background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></lottie-player>
          </div>

          <!-- <iframe src="https://lottie.host/?file=2ca9ce3c-a451-44e3-952d-a3a57b93b63d/6s60wxGGGq.json"></iframe> -->
            <h3>HERE WE ARE</h3>
            <h1><b>GROW WITH ORGANIC </b></h1>
            <h4>NUTRIENTS & INGREDIENTS</h4>
          </div>
        </div>
      </div>  
    </section>




    <!-- Products section start
    --------------------------------- -->
    <section class='pt-3 pt-md-5 product'>
      <div class="container">
        
        <h1 class='sectionHeading'>Our Products</h1>
        <p class='text-center'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum deserunt mollit anim id est laborum.</p>
        <div class='row mt-3 mt-md-5'>
          <div class='col-12 col-lg-6'>
            
              <img src="assets/images/cbd.png" alt="">
          </div>
          <div class='col-12 col-lg-6 mt-3 mt-lg-0 productText'>
            <div class='d-flex align-items-end'>
              <h1>CBD</h1>
              <lottie-player src="https://lottie.host/414c9642-3e14-4eb9-a68b-9e3ab07de15c/r2mg8EyFKM.json" background="transparent" speed="0.7" class='lottieAnime' loop autoplay></lottie-player>
            </div>
            
            <p>What's different about our full spectrum cbds...We use whole <span class='text-warning'>hemp plant</span>
               product as well as adding <span class='text-warning'>reiki & crystal</span> what's different about our full
                spectrum cbds...We use whole hemp plant product as well as adding reiki & crystal activation... As an added plus we've included
               <span class='text-warning'>a crystal in every cobalt blue bottle !!!</span> Yes...A crystal in every bottle!

              Products are available in organic coconut mct, vegetable kosher glycerin, and organic olive oil.</p>
          </div>
        </div>
      </div>
    </section>









    <!-- On scroll animation js link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Lottie animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>