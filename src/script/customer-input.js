function ch_mail(){
    mails = document.enter.mail.value;
    mails2 = document.enter.mail2.value;
  
  //空入力をチェック
    if(mails == ""){
      alert("メールアドレスを入力してください。");
      return false;
    }
  
  //＠の数と＠以降の.(ドット)の数をチェック
    cflag1 = 0;
    cflag2 = 0;
    di = 0;
    for(var i=0; i < mails.length; i++){
      if(mails.charAt(i) == "@"){
        cflag1++;
      }
      if(cflag1 > 0 && mails.charAt(i) == "."){
        cflag2++;
  //＠以降の.(ドット)は連続しない
        if(di + 1 == i){
          cflag1++;
          break;
        }
        di = i;
      }
    }
  
  //＠は１つ
  //＠以降の.(ドット)は１つ以上
  //文字の長さは７文字以上
  //＠の直後に.(ドット)は存在しない
  //.(ドット)から始まらない
  //.(ドット)で終わらない
  //＠の直後に-(ハイフン)は存在しない
  //-(ハイフン)から始まらない
  //-(ハイフン)で終わらない
  //＠の直後に_(アンダーバー)は存在しない
  //_(アンダーバー)から始まらない
  //_(アンダーバー)で終わらない
    if(cflag1 != 1 || cflag2 < 1 || mails.length < 7 ||
  mails.indexOf("@.") > 0 || mails.charAt(0) == "." || mails.charAt(mails.length-1) == "." ||
  mails.indexOf("@-") > 0 || mails.charAt(0) == "-" || mails.charAt(mails.length-1) == "-" ||
  mails.indexOf("@_") > 0 || mails.charAt(0) == "_" || mails.charAt(mails.length-1) == "_"){
      alert("メールアドレスを正しく入力してください。");
      return false;
    }
  
  //,(コロン)の数をチェック
    cflag3 = 0;
    for(var i=0; i < mails.length; i++){
      if(mails.charAt(i) == ","){
        cflag3++;
      }
    }
  
  //,(コロン)は使えないので.(ドット)との勘違いを警告
    if(cflag3 > 0){
      alert("メールアドレスに使用できない文字が含まれています。¥n『.』と『,』を間違っていませんか。");
      return false;
    }
  
  //確認アドレスと照らし合わせる
    if(mails != mails2){
      alert("確認用メールアドレスが一致していません。");
      return false;
    }
  }

Vue.component('password', Password); 
new Vue({
    el: '#app',
    data: {
      mail: null,
      mail: null
    },
    methods: {
      showFeedback ({suggestions, warning}) {
        console.log('🙏', suggestions)
        console.log('⚠', warning)
      },
      showScore (score) {
        console.log('💯', score)
      }
    }
  })