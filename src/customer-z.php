<?php session_start(); ?>
<?php require 'default/header.php'; ?>
<?php
    echo $_GET['hogeA'];
?>
<button onclick="location.href='top.php'">トップページへ</button>
<?php require 'default/footer.php'; ?>
