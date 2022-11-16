<?php 
if(isset($_SESSION['id']))
{

}
else 
{
    echo header('Location: login.php?msg=notLogedIn');
}
?>