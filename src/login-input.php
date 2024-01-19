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
     echo '<input type="password" 
           name="pas1"
           v-model="pas1"
           required />';
     echo 'パスワード確認';
     echo '<input type="password" 
           name="pas2"
           v-model="pas2"
           required />';
     echo '<p  v-if="ab"
          >パスワードが一致していません</p>';
    echo '</div>';
    echo '<br>';
    echo '<input type="submit" value="ログイン">';
    echo '<br>';
    echo 'アカウント新規作成は<a href="customer-input.php">こちら</a>';
?>
</form>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="./script/login-input.js"></script>
<?php require 'default/footer.php'; ?>
