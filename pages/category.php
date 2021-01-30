<?php
  session_start();
  if ( isset($_SESSION["user"])){
    
  }
  else{
    header("location:../index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shop Fly | Add Category</title>
        <meta charset="UTF-08">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="icon" href="../images/icon.png" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/stylesheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  </head>
    <body>
        <nav class="navbar navbar-light ">
            <!-- Logo-->
            <a href="../index.php"><div class="logo"><img src="../images/Logo.png"></div></a>
            <div class="php-title">
            <?php
                  echo "Welcome " . $_SESSION['user'];
                ?> 
            </div>
        </nav>
        <!-- Header -->
        <div class="header">
          <!--Search Nav Bar-->

          <!--Header Nav Bar-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="../index.php" >Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="hwcomp.html" >Hardware Components <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="builds.html" >Builds <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="laptops.html" >Laptops <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="about.html" >About Us <span class="sr-only">(current)</span></a>
                  </li>
                </ul>
              </div>
            </nav>
      </div>

            <div class="form">
                <h2>Add Category</h2>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <input type="text" name="category" id="category" placeholder="Enter Category Name">

                      <?php

                          if ( $_SERVER['REQUEST_METHOD'] == "POST"){
                            if ( empty($_POST['category']) == true){
                              echo "<span style=\"color: white; display : block; text-align:center; font-size:18px; font-weight:bolder\"> You should enter Category name to add Category </span>";
                            }
                            else{
                                  $category = $_POST['category'];
                                  try{
                                        $servername = "localhost";
                                        $username = "root";
                                        $dbname = "shopfly";
                                        $password = "";
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $sql = "INSERT INTO categories (category_name) values('$category')";
                                        $conn->exec($sql);
                                        echo "<span style=\"color: white; display : block; text-align:center; font-size:18px; font-weight:bolder\">Category added successfully</span>";

                                  }
                                  catch(PDOException $e){
                                        echo "<span style=\"color: white; display : block; text-align:center; font-size:18px; font-weight:bolder\">conennction failed or Category already exist</span>";
                                  }
                            }

                          }


                      ?>

                    <input type="submit" value="add">
                </form>
            </div>


            <!-- Footer -->
            <footer class="page-footer font-small pt-4">

                <div class="container-fluid text-center text-md-left">
        
          <!-- Grid row -->
          <div class="row">
        
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
        
              <!-- Content -->
              <img src="../images/White logo.png" alt="">
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
                  <a href="../index.php">Home</a>
                </li>
                <li>
                  <a href="hwcomp.html">Hardware Components</a>
                </li>
                <li>
                  <a href="builds.html">Builds</a>
                </li>
                <li>
                  <a href="laptops.html">Laptops</a>
                </li>
                <li>
                  <a href="about.html">About Us</a>
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
              <script src="../js/script.js"></script>
          </body>
        </html>