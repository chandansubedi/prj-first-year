<?php
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOgIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link   rel="stylesheet" href="css/login.css">
</head>
<form class="mt-5 mb-5" action="#" method="POST">
    <div class="form"   >
    <?php
if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $_SESSION['email']=$email;
    $password= $_POST['password'];
    $login_check = "  SELECT * FROM register WHERE email = '$email' AND password = '$password' ";
    $login_query = mysqli_query($con, $login_check );
    $loginDataCount = mysqli_num_rows($login_query);
    if($loginDataCount == 1 ){
        session_start(); 
        $login_row = $login_query->fetch_assoc();
        $_SESSION['id']=$login_row['id'];
        $_SESSION['name']=$login_row['name'];
        $_SESSION['email']=$login_row['email'];
        echo   "<div class='alert alert-success' role='alert ' aligns-items-center justify-content-center>
        login successfully !
        </div>  
    //    <script> alert('logged in successfully');
       window.location.href='index.php';
       </script>
                  "  ; 
       

    }else{
        echo  "<div class='alert alert-danger' role='alert ' aligns-items-center justify-content-center>
                email and password doesn't match !
                </div> " ;
    }
}

?>
        <h1> Log into GF&B</h1>
    <br>
    <input class="f-input" type="text"name="email" placeholder=" Email">
    <br>
    <br>
    <input class="f-input" type="password"name="password" placeholder="  Password">
    <br>
    <br>
    <input class="submit"   type="submit" name="submit" value="Log In">
    <br>
    <p  > <a  href="register.php"   > Register new account </a></p>
</div>
</form class="mb-5">

<?php
include('footer.php') ;
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    
</script>
</body>
</html>
