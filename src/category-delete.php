<?php require 'default/db-connect.php'; ?>
<?php
$pdo=new PDO($connect, USER, PASS);
if($_GET['id']!=1){
    $sql2=$pdo->prepare('update RegisteredBooks set category_id=? where  category_id=?');
    $sql2->execute([1,$_GET['id']]);
    $sql=$pdo->prepare('delete from Category where category_id=?');
    $sql->execute([$_GET['id']]);
}
header('Location:category.php');
exit();
?>