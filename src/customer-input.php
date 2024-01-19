<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php require 'default/header.php'; ?>
<?php
    $id=$password=$name=$email=$postcode=$address=$tel=$email2=$birth='';
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
    echo '<br>';

    echo '<label class="label">氏名</label>';
    echo '<input class="input" type="text" name="name"  value="', $name, '" required>';
    echo '<br>';

    echo '<div id="app">';
     echo 'パスワード';
     echo '<password 
           name="pas1"
           v-model="password1"
           :toggle="true"
           @score="showScore"
           @feedback="showFeedback"></password>';
     echo 'パスワード確認';
     echo '<password 
           name="pas2"
           v-model="password2"
           :toggle="true"
           @score="showScore"
           @feedback="showFeedback"></password>';
    echo '</div>';
    echo '<br>;';

    echo '<label class="label">電話番号</label>';
    echo '<input class="input" type="text" name="tel"  value="', $tel, '" required>';
    echo '<br>';

    echo '<label class="label">メールアドレス</label>';
    echo '<input class="input" type="text" name="mail"  value="', $email, '" required>';
    echo '<label class="label">メールアドレス確認</label>';
    echo '<input class="input" type="text" name="mail2"  value="', $email2, '" required>';
    echo '<br>';


    echo '<label class="label">生年月日</label>';
    echo '<input class="input" type="date" name="birth"  value="', $birth, '" required>';
    echo '<br>';

    echo '<label class="label">性別</label>';
    echo '<input type="radio" name="gender" value="0" required/>男
          <input type="radio" name="gender" value="1" required/>女';
    echo '<br>';
    
    echo '<input class="button is-primary is-medium mt-4" type="submit" value="',$b,'" style="width:100%;">';
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