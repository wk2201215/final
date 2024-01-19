<?php session_start(); ?>
<?php require 'default/header.php'; ?>
<from action="login-output.php" method="post">
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
           v-model="password1"
           :toggle="true"
           @score="showScore"
           @feedback="showFeedback"
           required></password>';
     echo 'パスワード確認';
     echo '<password 
           name="pas2"
           v-model="password2"
           :toggle="true"
           @score="showScore"
           @feedback="showFeedback"
           required></password>';
    echo '</div>';
    echo '<br>';
    echo '<input type="submit" value="ログイン">';
    echo '<br>';
    echo 'アカウント新規作成は<a href="customer-input.php">こちら</a>';
?>
</from>
<script src="https://cdn.jsdelivr.net/npm/zxcvbn@4.4.2/dist/zxcvbn.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-password-strength-meter@1.4.2/dist/vue-password-strength-meter.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="./script/login-input.js"></script>
<?php require 'default/footer.php'; ?>
