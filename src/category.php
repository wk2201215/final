<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php require 'default/api2.php'; ?>
<?php require 'default/header-top.php'; ?>
<?php require 'ba-ga-.php'; ?>
<!-- <form action="registered-books.php" method="post"> -->
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('select * from Category where user_id=?');
$sql->execute([$_SESSION['user']['id']]);
if(!empty($sql)){
    echo '<table>';
    echo '<tr><th>カテゴリ番号</th><th>カテゴリ名</th>';
    echo '<th></th></tr>';
    $no=1;
    // var_dump($_SESSION);
    foreach($sql as $row){
        echo '<tr>';
        echo '<td>',$no,'</td>';
        echo '<td><a href="detail.php?id=',$id,'">',$product['name'],'</a></td>';
        echo '<td>',$product['price'],'</td>';
        echo '<td>',$product['count'],'</td>';
        $subtotal=$product['price']*$product['count'];
        $total+=$subtotal;
        echo '<td>',$subtotal,'</td>';
        echo '<td><a href="cart-delete.php?id=',$id,'">削除</a></td>';
        echo '</tr>';
    }
    echo '</table>';
}else{
    echo 'カテゴリがありません。';
}
?>
<!-- </form> -->
<?php require 'default/footer-top.php'; ?>
