<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php
$pdo=new PDO($connect,USER,PASS);

$book_id=$_GET['id'];
$change=$_GET['change'];
if($change=='delete'){
    $sql=$pdo->prepare('delete from Users where user_id=? and book_id=?') ;
    $sql->execute([$_SESSION['user']['id'],$book_id]) ;
}else{
    $sql=$pdo->prepare('update Carts set cart_quantity=? where customer_id=? and product_id=?');
    $sql->execute([$change,$_SESSION['customer']['id'],$product_id]);
}
session_write_close();
?>