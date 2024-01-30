$('.Card-Item-Comment-Text').each(function(e){

    let $comment = $(this);
    // 元の文章を変数に格納
    let comment = $comment.html();
    let length = comment.length;
    let commentShow;
    let commentText;
    if($comment.height() > 100){
      // 文章の要素の高さが100を超えていたら隠す用のisHiddenクラスを付与
      $comment.addClass('isHidden');
      
      // ウィンドウ幅が768px以上の時の処理（PC表示）
      if (window.matchMedia('(min-width: 768px)').matches) {
        commentShow = comment.replace(/<br>/g, "\u00a0").substring(0, 86);
        commentText = commentShow += '<span class="Card-Item-Comment-Text-More">' + '...続きを読む' + '</span>';
        $comment.html(commentText);
      } else { // ウィンドウ幅が768px以下の時の処理（スマホ表示）
        commentShow = comment.replace(/<br>/g, "\u00a0").substring(0, 68);
        commentText = commentShow += '<span class="Card-Item-Comment-Text-More">' + '...続きを読む' + '</span>';
        $comment.html(commentText);
      }
      // 続きを読むをクリックで元の文章を表示
      $comment.on('click', '.Card-Item-Comment-Text-More', function(e){
        let $anchor = $(e.currentTarget);
        let $anchorParent = $anchor.parent();
        $anchorParent.removeClass('isHidden');
        $anchorParent.html(''); // 一旦空にする
        $anchorParent.html(comment).append('<span class="Card-Item-Comment-Text-Hide">' + '閉じる' + '</span>');
        // 閉じるをクリックで元に戻す
        $('.Card-Item-Comment-Text-Hide').on('click', function(e){
          let $anchorHide = $(e.currentTarget).parent();
          $anchorHide.addClass('isHidden');
          $anchorHide.html('');
          $anchorHide.html(commentText);
        });
      });
    }
    });

// バーガーメニュー
$(document).ready(function() {
    $(document).delegate('.open', 'click', function(event){
      $(this).addClass('oppenned');
      event.stopPropagation();
    })
    $(document).delegate('body', 'click', function(event) {
      $('.open').removeClass('oppenned');
    })
    $(document).delegate('.cls', 'click', function(event){
      $('.open').removeClass('oppenned');
      event.stopPropagation();
    });
  });










































//登録ボタン
// var buttonT = document.getElementsByClassName('buttonT');

// for (i = 0; i < buttonT.length; i++) {

//     $.ajax({
//         type: 'GET', // HTTPリクエストメソッドの指定
//         url: 'top-db.php', // 送信先URLの指定
//         async: true, // 非同期通信フラグの指定
//         dataType: 'json', // 受信するデータタイプの指定
//         timeout: 10000, // タイムアウト時間の指定
//         data: {
//           id: this.value,
//           change: 'delete' // クエリパラメータの指定。サーバーに送信したいデータを指定
//         }
//     })
//     .done(function(data) {
//       // 通信が成功したときの処理
//     })
//     .fail(function() {
//       // 通信が失敗したときの処理
//     });
//     // .always(function() {
//     //   // 通信が完了したときの処理
//     // });

//   buttonT[i].addEventListener("click", function() {
//     this.classList.toggle('active');
//     if(this.textContent=='登録'){
//         this.textContent = '登録済み';
//       }else{
//         this.textContent = '登録';
//       }
//   });
// }

