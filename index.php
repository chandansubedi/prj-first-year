<?php 
require('config.php');

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Title</title>
  <!-- bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="./assest/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/39e387fceb.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- top-nav -->
  <section>
    <div class="container-fluid bg-light p-3 ">
      <div class="row">
        <div class="col-md-9 ">
          <a class="px-3   text-decoration-none  " href="#"><i class="fa-solid fa-location-dot px-1 "></i>Ratnachowk
            POKHARA</a>
          <a href="#" class=" text-decoration-none "><i class="fa-solid fa-envelope  px-1 "></i>info@gf&c.com</a>
        </div>
        <div class="col-md-3 >
                <a class=" text-decoration-none px-3 "  href=" #">follow us</a>
          <a href="#" class="fa fa-facebook  text-decoration-none px-3 "></a>
          <a href="#" class="fa fa-twitter  text-decoration-none px-3 "></a>
          <a href="#" class="fa fa-linkedin  text-decoration-none px-3 "></a>
          <a href="#" class="fa fa-instagram  text-decoration-none px-3 "></a>

        </div>
      </div>
      <hr>
    </div>
  </section>
  <!-- top-nav -->


  <!-- heradergug -->

  <!-- heradergug -->


  <!-- navbar  -->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <button class=" btn btn-outline-primary ">
      <a class="navbar-brand me-2" href="#"><span class="text-primary">G</span>AN<span class="text-primary">DA</span>KI
        -  FOODS & BAKERY <i class="fas fa-pizza-slice"></i>
      </a>
         </button>
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
 
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" mx-lg-3 id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <button type="button" class=" ms-5 btn btn-outline-primary"><a class="nav-link" href="menuItems.php">ORDER Now </a> </button>
          </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              
              <button type="button" class=" ms-5 btn btn-outline-primary"><a class="nav-link link-light" href="menuItems.php">MENU</a> </button>
            </li>
          </ul>
          <!-- Left links -->

          <div class="d-flex align-items-center">
            <!-- <button type="button" class="btn btn-link px-3 me-2">
          Login
        </button> -->
        <a class="btn btn-primary px-3" href="cart.php" role="button"><i
        class='fa fa-shopping-cart'></i></a>
        <button onclick="window.location.href='login.php';" type="button" class=" ms-3 btn btn-primary me-3">
          Login
        </button>

                <button onclick="window.location.href='logout.php';" type="button" class="btn btn-secondary me-3">
              Logout
            </button>
          </div>
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  <!-- navbar  -->




  <!-- home  -->

  <!-- Carousel wrapper -->
  <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
      <!-- Single item -->
      <div class="carousel-item active">
        <img src="./uploads/img/home.png" class="d-block w-100" alt="Sunset Over the City" />
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <!-- Single item -->
      <div class="carousel-item">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100"
          alt="Canyon at Nigh" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <!-- Single item -->
      <div class="carousel-item">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100"
          alt="Cliff Above a Stormy Sea" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Carousel wrapper -->

  <!-- home  -->

 

  <div class="container-fluid">
     <div class="row">
      <div class="mt-5 ms-5 mb-1">
        <button class="btn btn-warning"> Cakes </button>

      </div>
      <div class="col-lg-4">
        <h2 class="text-danger ms-2 mt-2">Sweet Caramel Cake</h2>

      <figure class="figure">
  <img src="./uploads/img/ck1.jpeg" class="figure-img img-fluid rounded" alt="...">
  <h2 class=" ms-3 text-success">
    NRP  550
  </h2>
</figure>
      </div>
      <div class="col-lg-4">
      <h2 class="text-danger ms-2 mt-2">Delightful Mocha Cake</h2>
      <figure class="figure">
  <img src="./uploads/img/ck2.jpeg" class="figure-img img-fluid rounded" alt="...">
  <h2 class=" ms-3 text-success">
    NRP 600
  </h2>
</figure>
      </div>
      <div class="col-lg-4">
      <h2 class="text-danger ms-2 mt-2">Tempting Vanilla Cake</h2>
      <figure class="figure">
  <img src="./uploads/img/ck3.jpeg" class="figure-img img-fluid rounded" alt="...">
  <h2 class=" ms-3 text-success">
    NRP 600
  </h2>
</figure>
      </div>
      </div>
  </div>

  
  </section>
  <div class="container mt-5 mb-5 ms-5">
    <div class="row">
      <div class="col-lg-12">
      <button type="button" class=" ms-5 btn btn-danger"><a class="nav-link link-light" href="menuItems.php">ORDER NOW</a> </button>
      </div>
    </div>
  </div>


  <!-- footer  -->
  <?php
  include('footer.php');
  ?>
  
  <!-- footer  -->






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>