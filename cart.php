<?php
session_start();
require('loginCheck.php');
  // session_destroy();
  ?>
  <?php
    require('config.php');
 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  
   
  <div class="container  mt-2">
    <div class="row">
      <a  class="mb-3"   href="index.php"><button  class="btn btn-info">Go Back To Home</button></a>
      <div class="col-lg-12 text-center rounded bg-light ">
        <h1 class=' me-5'>My Cart</h1>
        <div class="col-lg-8">
          <table class="table ms-5 mt-5 text-center ">
            <thead>
              <tr>
                <th scope="col">S N </th>
                <th scope="col">Item Name </th>
                <th scope="col"> Item Price</th>
                <th scope="col">Quantity</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $total = 0;
              $itemss="";
              if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value) {
                  $sn = $key + 1;

                  $total += $value['Price'];
                  $itemss .= " " . $value['Item_Name'];
                  echo "
        <tr>  
        <td>$sn</td> 
        <td> $value[Item_Name]</td>
        <td> $value[Price] </td>
        <td> <input class='text-center' type='number'  value='$value[Quantity]' min='1' max='12'></td>
        <form action='rendercart.php' method='POST'>
        <td>  <button name='remove' class= ' button btn-sm btn-outline-danger'> Remove </td>
        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form>
        </tr> ";

                }
              }
              ?>


            </tbody>
          </table>

        </div>
        <div class="col-lg-4 ms-5">
          <div class="border bg-light rounded p-4">
            <h5>Total Price : <span class='text-info'>
              </span> </h5>
              <?php echo $total ?>
            <form action="cart.php" method='POST'>
            <div class="form-outline">
              <label class="form-label" for="typeNumber">Phone Number</label>
             <input type="number" name="ph" id="typeNumber" class="form-control" />
              <label class="form-label" for="typeNumber">Address</label>
             <input name="add" type="text" id="typeNumber" class="form-control" />
             </div>
              <button  name="pay" type='submit' class=' mt-2 btn btn-primary btn-block'>Purchase </button>
             
              <?php

              //  echo $total;
              // echo $nm;
              // if(isset($_POST['submit'])) { 

              //   $insert_query = "insert into orderlist(username, totalPrice) values (  " . $_SESSION['email']    . ");
              //   $conf_orders = mysqli_query($con , $insert_query);
              // }
              // if($total!== 0 && $items==""){
              //   echo '   <div class="alert alert-danger" role="alert">
              //           CART IS EMPTY !
              //                </div> ' ;

              // } else{
                
                if(isset($_POST['pay'])){
                  
                  $phn= $_POST['ph'];
                  $ad= $_POST['add'];
                  if($total == 0 || $itemss==""){
                    echo '   <div class="alert alert-danger" role="alert">
                            CART IS EMPTY !
                                 </div> ' ;
                  }else{ 
    
                  
                  $insert_query = "INSERT INTO orderlists (ph,address,items,total) VALUES('$phn', '$ad','$itemss','$total')";
                  // $insert_query = "INSERT INTO orderlists ( items , total) VALUES('$total', '$itemss')";
                  $conf_orders = mysqli_query($con , $insert_query);
                  if($conf_orders){
                    echo "your order is placed";
                  }else {
                    echo '   <div class="alert alert-danger" role="alert">
                    enter Ph no and address !
                         </div> ' ;
                    
                  }
                }
              }

                
          
            
            
               ?>
             
              
            </form>

          </div>

        </div>
      </div>
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>