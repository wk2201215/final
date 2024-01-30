<?php require 'default/db-connect.php'; ?>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('delete from Category where category_id=?');
$sql->execute([$_POST['id']]);
header('Location:category.php');
exit();
?>