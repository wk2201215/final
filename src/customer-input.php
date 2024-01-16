<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php require 'default/header.php'; ?>
<?php
    $id=$password=$name=$email='';
    $b='登録';
    //登録か変更の確認
    if(isset($_SESSION['user'])){
        $id=$_SESSION['user']['id'];
        $password=$_SESSION['user']['password'];
        $name=$_SESSION['user']['name'];
        $email=$_SESSION['user']['email'];
        $b='変更';
    }
    echo '<form action="customer-output.php" method="post" name="enter" onsubmit="return ch_mail();">';

    echo '<label class="label">ユーザーID</label>';
    echo '<input class="input" type="text" name="login_id"  value="', $id, '" required>';

    echo '<label class="label">氏名</label>';
    echo '<input class="input" type="text" name="name"  value="', $name, '" required>';

    echo '<label class="label">パスワード</label>';
    echo '<input class="input" type="password" name="password"  value="', $password, '" required>';

    echo '<label class="label">郵便番号</label>';
    echo '<input class="input" type="text" name="postcode"  value="', $postcode, '" required>';

    echo '<label class="label">住所</label>';
    echo '<input class="input" type="text" name="address"  value="', $address, '" required>';

    echo '<label class="label">電話番号</label>';
    echo '<input class="input" type="text" name="tel"  value="', $tel, '" required>';

    echo '<label class="label">メールアドレス</label>';
    echo '<input class="input" type="text" name="mail"  value="', $mail, '" required>';
    echo '<label class="label">メールアドレス確認</label>';
    echo '<input class="input" type="text" name="mail2"  value="', $mail, '" required>';

    echo '<label class="label">生年月日</label>';
    echo '<input class="input" type="date" name="birth"  value="', $birth, '" required>';

    echo '<label class="label">身分証など本人確認ができる写真をお願いします</label>';
    echo '<label class="file-label">';
    if(isset($_SESSION['customer'])){
        echo '<input class="file-input" type="file" accept="image/*" name="idcard" @change="onImageUploaded">';
        echo '<span class="file-cta">';
        echo '<span class="file-icon"><i class="fas fa-upload"></i></span>';
        echo '<span class="file-label has-text-centered">写真を変更する</span>';
        echo '</span>';
    }else{
        echo '<input class="file-input" type="file" accept="image/*" name="idcard" @change="onImageUploaded" required>';
        echo '<span class="file-cta">';
        echo '<span class="file-icon"><i class="fas fa-upload"></i></span>';
        echo '<span class="file-label has-text-centered">写真をのせる</span>';
        echo '</span>';
    }
    echo '<span class="file-name has-text-centered">{{ image_name }}</span>';
    echo '</label>';
    echo '</div></div>';

    echo '<div class="field">';
    echo '<div class="control">';
    echo '<input class="button is-primary is-medium mt-4" type="submit" value="',$b,'" style="width:100%;">';
    echo '</div></div>';
    echo '</form>';
?>

<?php 
    if(isset($_SESSION['customer'])){
        echo '</div>';
        require 'footer-menu.php';
    }else{
        echo '</div>';
        echo '</div>';
        echo '</section>';
        echo '</div>';
    }
?>
<script src="./script/customer-input.js"></script>
<?php require 'default/footer.php'; ?>