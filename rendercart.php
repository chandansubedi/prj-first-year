<?php
session_start();
// session_destroy();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        if (isset($_SESSION['cart'])) {
            $allItems = array_column($_SESSION['cart'], 'Item_Name');
            if (in_array($_POST['Item_Name'], $allItems)) {
                echo "<script>
              alert('item already added ');
             window.location.href='menuItems.php';
              </script>";
            } else{
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array(
                'Item_Name' => $_POST['Item_Name'],
                'Price' => $_POST['Price'],
                'Quantity' => $_POST['Quantity']
            );
            echo "<script>
            alert(' New item added '); 
           window.location.href='menuItems.php';
            </script>";
                  } 
              } 
          else {
            $_SESSION['cart'][0] = array(
                'Item_Name' => $_POST['Item_Name'],
                'Price' => $_POST['Price'],
                'Quantity' => $_POST['Quantity']
            );
            echo "<script>
             alert('New item added '); 
             window.location.href='menuItems.php';
              </script>";
        }
    }
    if (isset($_POST['remove'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Item_Name'] == $_POST['Item_Name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo ' 
            <script> confirm("Do you want to remove item from cart")
            window.location.href="cart.php";
            </script> ';


            }

        }
    }
}




?>