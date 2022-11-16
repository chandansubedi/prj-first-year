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

    <style>
        .reg{
            margin-top: 20px;
           
        }
        .form{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="reg">
<form action="#" method="POST">


    <div class="form">
        <?php
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $conf_password =$_POST['conf-password'];
    if($name !="" && $email !="" && $password != "" && $conf_password != "")
    {
        if($password == $conf_password)
        {
            $register_data =" INSERT INTO register (name , email, password) VALUES (
                '$name', '$email' , '$password')  ";
                $conf_register = mysqli_query($con , $register_data);
                 if($conf_register){
                   echo header('Location: login.php?msg=loginSuccessful');
                }
            }else{
                echo    "<div class='alert alert-danger' role='alert ' aligns-items-center justify-content-center>
                confirm password doesn't match !
                </div> " ;

            }
            
            
        }else{
            echo   '<div class="alert alert-danger" role="alert">
            All fields must be filled !
            </div> ' ;
            
            
        }
    }
    
            ?>

    <h1> Register New Account </h1>

    <br>
    <input class="f-input" type="name"name="name" placeholder=" username">
    <br>
    <br>
    <input class="f-input" type="email"name="email" placeholder=" Email">
    <br>
    <br>
    <input class="f-input" type="password"name="  password" placeholder="  Password">
    <br>
    <br>
    <input class="f-input" type="password"name="  conf-password" placeholder=" confirm Password">
    <br>
    <br>
    <input class="submit"   type="submit" name="submit" value="Register" href="login.php" >
    <br>
    <p> <a  href="login.php"   >already have an account</a></p>

    
     
</div>
</form>
</div>
 <!-- footer  -->
 <?php
  include('footer.php');
  ?>
  
  <!-- footer  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    
</script>

    
</body>
</html>