<?php 
session_start();

unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['email']);

echo '<script> confirm(" Are you sure ? you want to log out");
window.location.href="index.php";
</script> ';
?>