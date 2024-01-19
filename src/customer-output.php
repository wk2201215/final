<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php require 'default/header.php'; ?>
<?php
$pdo=new PDO($connect,USER,PASS);
$pass=password_hash($_POST['pas2'], PASSWORD_DEFAULT);
$sql=$pdo->prepare('select COUNT(*) from Users where user_id=?');
$sql->execute([$_POST['id']]);
if($sql==1){
    header('Location:customer-input.php?hogeA=そのログインIDは使用できません');
    exit();
}else{
    if(isset($_SESSION['user'])){
        $id=$_SESSION['user']['id'];
        $sql2=$pdo->prepare('update Users set 
        user_id=?, user_name=?, 
        password=?, mail=?, gender=?,
        tel=?, birth=? where user_id=?');
        $sql2->execute([
            $_POST['id'],$_POST['name'],
            $pass,$_POST['mail2'],$_POST['gender'],
            $_POST['tel'],$_POST['birth'],
            $id]);
        $str='更新が完了しました';
    }else{
        $sql=$pdo->prepare('insert into Users value(?,?,?,?,?,?,?,default,default,default)');
        $sql->execute([
            $_POST['id'],
            $_POST['pas2'],
            $_POST['name'],
            $_POST['gender'],
            $_POST['birth'],
            $_POST['mail'],
            $_POST['tel'],
    ]);
        $str='登録が完了しました';
    }
    header('Location:customer-z.php?hogeA='.$str);
    exit();
}
?>
<?php require 'default/footer.php'; ?>