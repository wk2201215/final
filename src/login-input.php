<?php session_start(); ?>
<?php require 'default/header.php'; ?>
<?php
    unset($_SESSION['customer']);
    echo '<from action="login-output.php" method="post">';
    echo 'ユーザーID';
    echo '<input type="text" name="user_id">';
    echo '<br>';
    echo '<div id="app">';
     echo 'パスワード';
     echo '<password 
           name="mail"
           v-model="mail"
           :toggle="true"
           @score="showScore"
           @feedback="showFeedback"></password>';
     echo 'パスワード確認';
     echo '<password 
           name="mail2"
           v-model="mail2"
           :toggle="true"
           @score="showScore"
           @feedback="showFeedback"></password>';
    echo '</div>';
    echo '<br>';
    echo '<input type="submit" class="button" value="ログイン">';
    echo '<br>';
    echo 'アカウント新規作成は<a href="customer-input.php">こちら</a>';
    echo '</from>';
?>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/zxcvbn@4.4.2/dist/zxcvbn.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-password-strength-meter@1.4.2/dist/vue-password-strength-meter.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="./script/login-input.js"></script>
<?php require 'default/footer.php'; ?>
