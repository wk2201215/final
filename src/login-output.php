<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php
unset($_SESSION['user']);
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('select * from Users where user_id=?');
$sql->execute([$_POST['id']]);
foreach($sql as $row) {
    if(password_verify($_POST['pas2'],$row['password'])){
        $_SESSION['user']=[
            'id'=>$row['user_id'],
            'password'=>$_POST['pas2'],
            'name'=>$row['user_name'],
            'gender'=>$row['gender'],
            'birth'=>$row['birth'],
            'mail'=>$row['mail'],
            'tel'=>$row['tel'],
            'registration_date'=>$row['registration_date'],
            'update_date'=>$row['update_date'],
            'last_access_date'=>$row['last_access_date']
        ];
    }
}
if(isset($_SESSION['user'])){
header('Location:top.php');
exit();    
}else{
header('Location:login-input.php?hogeA=ユーザー名またはパスワードが違います');
exit();
}
?>
