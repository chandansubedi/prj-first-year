<?php
session_start();
// session_destroy();
require('config.php');
require('loginCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
</head>
<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class=" text-primary navbar-brand" href="#">Add your order from here</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a  href="index.php" class="nav-link active" aria-current="page" >Home</a>
    <?php
    $countTotal = 0;
    if(isset($_SESSION['cart'])){
      $countTotal=count($_SESSION['cart']);
    }


    ?>
     <button onclick="window.location.href='cart.php';" class="btn btn-outline-success" type="submit"> My Cart - <?php echo $countTotal; ?> </button>
      </form>
    </div>
  </div>
</nav>
    <!-- nav -->
<!-- bubble tea    -->
    <div class="container mt-5">
    <button type="button" class="btn btn-warning mb-3">BUBBLE TEA</button>
        <div class="row">
            <div class="col-lg-3">
                <form action="rendercart.php"   method="POST">
            <div class="card">
              <img src="uploads/img/2.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Milk coffee </h5>
                <p class="card-text">Rs 100</p>
                <button type="submit" name="add" href="#" class="btn btn-success">Add to cart </button>
                <input type="hidden" name="Item_Name" value=" Milk coffee " >
                <input type="hidden" name="Price" value="100">
                <input type="hidden" name="Quantity" value="1">
               </div>
            </div>
        </form>
   </div>

   <div class="col-lg-3 ">
                <form action="rendercart.php"   method="POST">
            <div class="card">
              <img src="uploads/img/4.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">chocklet Bubble tea </h5>
                <p class="card-text">Rs 150</p>
                <button type="submit" name="add" href="#" class="btn btn-success">Add to cart</button>
                <input type="hidden" name="Item_Name" value=" chocklet Bubble tea " >
                <input type="hidden" name="Price" value="150">
                <input type="hidden" name="Quantity" value="1">
               </div>
            </div>
        </form>
   </div> 
   <div class="col-lg-3">
                <form action="rendercart.php"   method="POST">
            <div class="card">
              <img src="uploads/img/3.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">chocklet Bubble tea </h5>
                <p class="card-text">Rs 190</p>
                <button type="submit" name="add" href="#" class="btn btn-success">Add to cart</button>
                <input type="hidden" name="Item_Name" value=" chocklet Bubble tea " >
                <input type="hidden" name="Price" value="190">
                <input type="hidden" name="Quantity" value="1">
               </div>
            </div>
        </form>
   </div>
   <div class="col-lg-3">
                <form action="rendercart.php"   method="POST">
            <div class="card">
              <img src="uploads/img/3.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Milk Bubble tea </h5>
                <p class="card-text">Rs 190</p>
                <button type="submit" name="add" href="#" class="btn btn-success">Add to cart</button>
                <input type="hidden" name="Item_Name" value=" Milk Bubble tea " >
                <input type="hidden" name="Price" value="190">
                <input type="hidden" name="Quantity" value="1">
               </div>
            </div>
        </form>
   </div>
        </div>
    </div>
    <!-- bubble tea  -->

    <!-- pizza   -->
    <div class="container mt-5">
    <button type="button" class="btn btn-warning mb-3">PIZZA</button>
        <div class="row">
            <div class="col-lg-3">
                <form action="rendercart.php"   method="POST">
            <div class="card">
              <img src="uploads/img/pz1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Pizza with salami</h5>
                <p class="card-text">Rs 520</p>
                <button type="submit" name="add" href="#" class="btn btn-success">Add to cart </button>
                <input type="hidden" name="Item_Name" value=" Pizza with salami " >
                <input type="hidden" name="Price" value="520">
                <input type="hidden" name="Quantity" value="1">
               </div>
            </div>
        </form>
   </div>

   <div class="col-lg-3 ">
                <form action="rendercart.php"   method="POST">
            <div class="card">
              <img src="uploads/img/pz2.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Classic pepperoni pizza </h5>
                <p class="card-text">Rs 1850</p>
                <button type="submit" name="add" href="#" class="btn btn-success">Add to cart</button>
                <input type="hidden" name="Item_Name" value=" Classic pepperoni pizza " >
                <input type="hidden" name="Price" value="1150">
                <input type="hidden" name="Quantity" value="1">
               </div>
            </div>
        </form>
   </div> 
   <div class="col-lg-3">
                <form action="rendercart.php"   method="POST">
            <div class="card">
              <img src="uploads/img/pz3.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Pepperoni pizza </h5>
                <p class="card-text">Rs 990</p>
                <button type="submit" name="add" href="#" class="btn btn-success">Add to cart</button>
                <input type="hidden" name="Item_Name" value=" Pepperoni pizza " >
                <input type="hidden" name="Price" value="990">
                <input type="hidden" name="Quantity" value="1">
               </div>
            </div>
        </form>
   </div>
   <div class="col-lg-3">
                <form action="rendercart.php"   method="POST">
            <div class="card">
              <img src="uploads/img/pz4.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Margherita pizza </h5>
                <p class="card-text">Rs 740</p>
                <button type="submit" name="add" href="#" class="btn btn-success">Add to cart</button>
                <input type="hidden" name="Item_Name" value=" Margherita pizza " >
                <input type="hidden" name="Price" value="740">
                <input type="hidden" name="Quantity" value="1">
               </div>
            </div>
        </form>
   </div>
        </div>
    </div>
    <?php
include('footer.php') ;
?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </body>
</html>