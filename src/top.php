<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php require 'default/header.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
if(isset($_POST['keyword'])){
//キーワード検索
    $sql=$pdo->prepare('select * from Products where product_name like ?');
    $sql->execute(['%'.$_POST['keyword'].'%']);
}else if(isset($_GET['category_id'])){
//カテゴリ検索
    $sql=$pdo->prepare('select * from Products where category_id = ?');
    $sql->execute([$_GET['category_id']]);
}else if(isset($_GET['priceA'])){
//値段範囲検索
    if($_GET['priceB']=='max'){
        //上限なし
        $sql=$pdo->prepare('select * from Products where price >= ?');
        $sql->execute([$_GET['priceA']]);
    }else{
        //値段の範囲指定
        $sql=$pdo->prepare('select * from Products where price BETWEEN ? AND ?');
        $sql->execute([$_GET['priceA'],$_GET['priceB']]);
    }
}else{
    $pdor=new PDO($connect,USER,PASS);
    $sqlr=$pdor->query('
    select P.*,num
    from Products as P 
    inner join
    (select product_id,sum(quantity) as num
    from Order_details group by product_id) as O
    on
    P.product_id=O.product_id
    order by num desc
    limit 10;');
    // var_dump($sqlr);
    // $k=$sqlr->fetchAll();
    // var_dump($k);
    $sql=$pdo->query('select * from Products');
}
// var_dump($sqlr);
// echo '<hr>';
// var_dump($sql);
// echo '<hr>';
foreach ($sql as $i => $row) {
   
   
}
?>
</div>
<?php require 'default/footer.php'; ?>
