<?php session_start(); ?>
<?php require 'default/header.php'; ?>
<?php
    unset($_SESSION['customer']);
    echo 'ユーザーID';
    echo '<input type="text" name="login_id">';
    echo '<br>';
    echo 'パスワード';
    echo '<input type="password" name="password1">';
    echo '<br>';
    echo 'パスワード確認';
    echo '<input type="password" name="password2">';
    echo '<br>';
    echo '<input type="submit" class="button" value="ログイン">';
    echo '<br>';
    echo 'アカウント新規作成は<a href="customer-input.php">こちら</a>';
?>
    </form>
</div>
<?php require 'default/footer.php'; ?>
