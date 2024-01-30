<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('insert into Category values(default,?,?)');
$sql->execute([$_SESSION['user']['id'],$_POST['id']]);
header('Location:category.php');
exit();
?>