<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('delete from RegisteredBooks where user_id=? and book_id=?');
$sql->execute([$_SESSION['user']['id'],$_GET['id']]);
header('Location:registered-books.php');
exit();
?>