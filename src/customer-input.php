<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php require 'default/header.php'; ?>
<?php
    $id=$password=$name=$mail=$postcode=$address=$tel=$email2=$birth='';
    $b='登録';
    //登録か変更の確認
    if(isset($_GET['hogeA'])){
        echo '<p>',$_GET['hogeA'],'</p>';
    }
    if(isset($_SESSION['user'])){
        $id=$_SESSION['user']['id'];
        // $password=$_SESSION['user']['password'];
        $name=$_SESSION['user']['name'];
        $tel=$_SESSION['user']['tel'];
        $mail=$_SESSION['user']['mail'];
        $birth=$_SESSION['user']['birth'];
        $gender=$_SESSION['user']['gender'];
        $b='更新';
    }
    echo '<form action="customer-output.php" method="post" name="enter" onsubmit="return ch_mail();">';

    echo '<label class="label">ユーザーID</label>';
    echo '<input class="input" type="text" name="id"  value="', $id, '" required>';
    echo '<br>';

    echo '<label class="label">ユーザー名</label>';
    echo '<input class="input" type="text" name="name"  value="', $name, '" required>';
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

    echo '<label class="label">電話番号</label>';
    echo '<input class="input" type="tel" name="tel"  value="', $tel, '" pattern="\d{1,5}-\d{1,4}-\d{4,5}" title="電話番号は、市外局番からハイフン（-）を入れて記入してください。" required>';
    echo '<br>';

    echo '<label class="label">メールアドレス</label>';
    echo '<input class="input" type="text" name="mail"  value="', $mail, '" required>';
    echo '<br>';
    echo '<label class="label">メールアドレス確認</label>';
    echo '<input class="input" type="text" name="mail2" required>';
    echo '<br>';

    echo '<label class="label">生年月日</label>';
    echo '<input class="input" type="date" name="birth"  value="', $birth, '" required>';
    echo '<br>';

    echo '<label class="label">性別</label>';
    echo '<input type="radio" name="gender" value="0" value="', $gender, '" required/>男
          <input type="radio" name="gender" value="1" value="', $gender, '" required/>女';
    echo '<br>';
    
    echo '<input class="button is-primary is-medium mt-4" type="submit" value="',$b,'" style="width:100%;">';
    echo '</form>';
?>
<script src="https://cdn.jsdelivr.net/npm/zxcvbn@4.4.2/dist/zxcvbn.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-password-strength-meter@1.4.2/dist/vue-password-strength-meter.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="./script/customer-input.js"></script>
<?php require 'default/footer.php'; ?>