<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('insert into RegisteredBooks values(?,?,?,?,?,?,?)');
$sql->execute([
    $_SESSION['user']['id'],
    $_POST['b-id'],
    $_POST['c'],
    $_POST['o'],
    $_POST['s'],
    $_POST['d'],
    $_POST['p']
]);
header('Location:registered-books.php');
exit();
?>