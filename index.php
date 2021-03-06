<!DOCTYPE html>
<html>
    <head>
        <title>Shop Fly | Online Hardware Store Finder</title>
        <meta charset="UTF-08">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="icon" href="images/icon.png" type="image/png">
        <link rel="font" href="fonts/OpenSans-Regular.svg">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/stylesheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  </head>
    <body>
        <!-- Header -->
        <div class="sign-window">
          <div class="close"><i class="fa fa-window-close"></i></div>
          <div class="sign-text">Sign in with your account</div>
          <form action="pages/check.php" method="POST">
            <label for="Username"></label>
            <input type="text" class="Username" id="Username" name="username" placeholder="Username"><br><br>
            <label for="Password"></label>
            <input type="password" class="Password" id="Password" name="password" placeholder="Password" ><br><br>
            <input type="checkbox" class="Remember" id="Remember" name="Remember me" value="Remember me">
            <label for="Remember" class="Remember-text">Remember my password</label><br><br>
            <input type="submit" value="Login">
          </form>
      </div>
        <div class="header">
          <!--Search Nav Bar-->
          <nav class="navbar navbar-light ">
              <!-- Logo-->
              <a href="index.php"><div class="logo"><img src="images/Logo.png"></div></a>
              <form class="form-inline mr-auto ml-auto">
                <input class="form-control" type="search" placeholder="Keyword here ...." aria-label="Search">
                <button class="search-btn" type="submit">SEARCH</button>
              </form>
              <div class="sign"><button class="form-btn" type="submit">Login</button></div>
          </nav>
          <!--Header Nav Bar-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php" >Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="pages/hwcomp.html" >Hardware Components <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="pages/builds.html" >Builds <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="pages/laptops.html" >Laptops <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="pages/about.html" >About Us <span class="sr-only">(current)</span></a>
                  </li>
                </ul>
              </div>
            </nav>
      </div>

      
      <!-- banner -->
      <div class="banner">
        <div class="small-container">
          <h2 class="title">Tech News</h2>
        </div>
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="images/mbs.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Avilable Now</h5>
                  <p> The new INTEL motherboards is here</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="images/rxamd.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Avilable soon..</h5>
                  <p>The new RX 6000 series graphics cards from AMD</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="images/rtx.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Avilable Now</h5>
                  <p>The best performance sreies of Nvidia RTX graphics cards</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="images/amd5000.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Avilable soon..</h5>
                  <p> The new generation of AMD Processors</p>
                  </div>
              </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
      
      <div class="container">
          <!-- Best selling -->
          <div class="best-selling">
              <div class="card">
                  <h2>BEST SELLING</h2>
                  <div class="product">
                      <div class="circle"></div>
                      <img src="./images/motherboards/b550.jpg" alt="B550 Aorus Elite">
                  </div>
                  <div class="info">
                      <h1 class="title">B550 Aorus Elite</h1>
                      <h3>AMD B550 AORUS Motherboard with True 12+2 Phases Digital VRM,
                          Enlarged Surface Heatsinks, PCIe 4.0 x16 Slot, Dual PCIe 4.0
                          /3.0 x4 M.2 with One Thermal Guard, 2.5GbE LAN, RGB FUSION 2.0,
                          Q-Flash Plus.</h3>
                      <h2>Starts from 2,800 EGP</h2>
                      <div class="view">
                          <a href="#"><button>View Stores</button></a>
                      </div>
                      <br>
                  </div>
              </div>
          </div>
          <!-- cards -->
          <!-- Coming soon -->
          <div class="small-container">
            <h2 class="title">Coming Soon</h2>
            <div class="row">
              <a href="#" class="col-4">
                <img src="images/CPUs/R7 5000.png">
                <h4>AMD Ryzen 7 5800X</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <p>Coming Soon ...</p>
              </a>
              <a href="#" class="col-4">
                <img src="images/GPUs/rx 6800.png">
                <h4>AMD Radeon RX 6800</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Coming Soon ...</p>
              </a>
              <a href="#" class="col-4">
                <img src="images/GPUs/rtx 3060.png">
                <h4>Nvidia RTX 3060</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <p>Coming Soon ...</p>
              </a>
              <a href="#" class="col-4">
                <img src="images/CPUs/r9 5950X.png">
                <h4>AMD Ryzen 9 5950X</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Coming Soon ...</p>
              </a>
            </div>
          </div>
          <!-- Featured Products -->
          <div class="small-container">
            <h2 class="title">Featured Products</h2>
            <div class="row">
              <a href="#" class="col-4">
                <img src="images/CPUs/r53600.png">
                <h4>AMD Ryzen 5 3600</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <p>Starts from 3,200 EGP</p>
              </a>
              <a href="#" class="col-4">
                <img src="images/GPUs/RTX 3080.png">
                <h4>AORUS GeForce RTX™ 3080 MASTER 10G</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Starts from 18,000 EGP</p>
              </a>
              <a href="#" class="col-4">
                <img src="images/motherboards/x570 aorus.png">
                <h4>GIGABYTE X570 AORUS Master</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <p>Starts from 6,000 EGP</p>
              </a>
              <a href="#" class="col-4">
                <img src="images/Ram/gskill.png">
                <h4>G.SKILL Trident Z RGB DDR4-3000MHz 16GB Memory</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <p>Starts from 2,000 EGP</p>
              </a>
            </div>
          </div>
        </div>
      <!-- Footer -->
      <footer class="page-footer font-small pt-4">

        <div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <img src="images/White logo.png" alt="">
      <p>This is your best hardware product finder.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">LINKS</h5>

      <ul class="list-unstyled">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="pages/hwcomp.html">Hardware Components</a>
        </li>
        <li>
          <a href="pages/builds.html">Builds</a>
        </li>
        <li>
          <a href="pages/laptops.html">Laptops</a>
        </li>
        <li>
          <a href="pages/about.html">About Us</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">CUSTOMER SERVICE</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Contact</a>
        </li>
        <li>
          <a href="#!">Brands</a>
        </li>
        <li>
          <a href="#!">Newsletter</a>
        </li>
      </ul>

          </div>
          <!-- Grid column -->

          </div>
        <!-- Grid row -->

        </div>
      <!-- Footer Links -->

      </footer>
      <script src="js/script.js"></script>
  </body>
</html>