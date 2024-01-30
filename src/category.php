<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php require 'default/header-top.php'; ?>
<?php require 'ba-ga-.php'; ?>
<form action="category-insert.php" method="post">
    カテゴリ名
    <input type="text" name="id">
    <input type="submit" value="登録">
</form>
<hr>
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
        echo '<td>',$row['category_name'],'</td>';
        echo '<td><a href="category-delete.php?id=',$row['category_id'],'">削除</a></td>';
        echo '</tr>';
        $no++;
    }
    echo '</table>';
}else{
    echo 'カテゴリがありません。';
}
?>
<?php require 'default/footer-top.php'; ?>
