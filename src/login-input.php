<?php session_start(); ?>
<?php require 'default/header.php'; ?>
<form action="login-output.php" method="post">
<?php
    unset($_SESSION['customer']);
    if(isset($_GET['hogeA'])){
        echo '<p>',$_GET['hogeA'],'</p>';
    }
    echo 'ユーザーID';
    echo '<input type="text" name="id" required>';
    echo '<br>';
    echo '<div id="app">';
     echo 'パスワード';
     echo '<password 
           name="pas1"
           required></password>';
     echo 'パスワード確認';
     echo '<password 
           name="pas2"
           required></password>';
     echo '<p  v-if="ab"
          >パスワードが一致していません</p>';
    echo '</div>';
    echo '<br>';
    echo '<input type="submit" value="ログイン">';
    echo '<br>';
    echo 'アカウント新規作成は<a href="customer-input.php">こちら</a>';
?>
</form>
<?php require 'default/footer.php'; ?>
