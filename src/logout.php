<?php session_start(); ?>
<?php
unset($_SESSION['user']);
header('Location:login-input.php');
exit();
?>