<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require 'favicon.php'?>
    <title>Elen Energy</title>

    <!-- Lottie animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/products.css">
  </head>
  <body>

    <!-- Navbar start 
    ----------------------------->
    <?php require 'navbar.php'?>


    
    <!-- Products section start 
    ----------------------------->
    <div class="sectionContainer">

    </div>
    <!-- <section class='productDetails' style='background-image: url("assets/images/seamoss-3.jpeg")'>
        <div class="container pb-3 pb-md-5">
            <div class="row p-3 p-md-0">
                <div class="col-lg-6 p-0">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="assets/images/seamoss-1.jpeg" class="d-block" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="assets/images/seamoss-2.jpeg" class="d-block" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="assets/images/seamoss-3.jpeg" class="d-block" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6" style='background-color: gold;'>
                    <div class='p-3 p-md-4'>
                        <h1>Sea Moss Gel</h1>
                        <ul>
                            <li><p>100% Natural & Organic</p></li>
                            <li><p>Gut Health & Digestion </p></li>
                            <li><p>Support Thyroid & Boost Your Energy</p></li>
                            <li><p>24 Hour Customer Support</p></li>
                            <li><p>92 Minerals In One Scoop</p></li>
                        </ul>
                        
                        <div class='measure'>
                            <p class='package' value='35.99'>8oz - $<span>35.99</span></p>
                            <p class='package' value='47.99'>16oz - $<span>47.99</span></p>
                            <p class='package' value='57.99'>32oz - $<span>57.99</span></p>
                        </div>
                        <p>Spend Over $49.99 & Get One Jar At 50% Off! + Free Shipping When You Spend Over $100! 📦</p>
                        <div class='d-flex justify-content-end'>
                            <button class='button bg-white text-black buyNow'>Buy Now</button>
                        </div>
                        <div class="alert"></div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <div class="orderForm">
        <div>
            <form class='form'>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="package">Package</label>
                    <input type="text" class="form-control" id="package" placeholder="package">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" placeholder="number">
                </div>
                <div class='d-flex justify-content-end'>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
                
                <div class="cancelBtn">
                    <span>X</span>
                </div>
            </form>

           
        </div>

    </div>

    <!-- Newsletter section start 
    ------------------------------>
    <?php require 'newsLetter.php'?>


    <!-- Footer start 
    ----------------------------->
    <?php require 'footer.php'?>



    <script src="assets/js/productSelection.js" type="text/javascript" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
    
    
    
    
    
    
    
