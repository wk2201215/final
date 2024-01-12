<?php session_start(); ?>
<?php require 'default/header.php'; ?>
<?php
    unset($_SESSION['customer']);
    echo 'ユーザーID';
    echo '<input type="text" name="login_id">';
    echo '<br>';
    echo '<div id="app">
           <div class="form-horizontal">
            <div class="form-group">
             <label class="col-md-2 control-label">パスワード</label>
             <div class="col-md-10">
              <input class="form-control" v-model.trim="p" />
              <div class="help-block">
               <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-info" :style="{width: `${s}%`}">
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
         </div>';
    echo '<br>';
    echo 'パスワード確認';
    echo '<input type="password" name="password2" v-model="password2">';
    echo '<br>';
    echo '<input type="submit" class="button" value="ログイン">';
    echo '<br>';
    echo 'アカウント新規作成は<a href="customer-input.php">こちら</a>';
    echo '</div>';
?>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="./script/script-login.js"></script>
<?php require 'default/footer.php'; ?>
