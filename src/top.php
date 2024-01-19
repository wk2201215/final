<?php session_start(); ?>
<?php require 'default/api.php'; ?>
<?php require 'default/header.php'; ?>
<?php require 'search.php'; ?>
<p>全<?php echo $total_count; ?>件中、<?php echo $get_count; ?>件を表示中（<?php echo $startIndex+1; ?>ページ目）</p>

  <!-- 1件以上取得した書籍情報がある場合 -->
  <?php if($get_count > 0): ?>
    <div class="loop_books">

      <!-- 取得した書籍情報を順に表示 -->
      <?php foreach($books as $book):
          // タイトル
          $title = $book->volumeInfo->title;
          // サムネ画像
          $img = $book->volumeInfo->readingModes->image;
          if($img){
            $thumbnail = $book->volumeInfo->imageLinks->thumbnail;
          }else{
            $thumbnail = './img/null.jpg';
          }
          // 著者（配列なのでカンマ区切りに変更）
          if(isset($book->volumeInfo->authors)){
            $authors = implode(',', $book->volumeInfo->authors);
          }else{
            $a=['nul'];
            $authors = implode(',', $a); 
          }
      ?>
        <div class="loop_books_item">
          <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>"><br />
          <p>
            <b>『<?php echo $title; ?>』</b><br />
            著者：<?php echo $authors; ?>
          </p>
        </div>
      <?php endforeach; ?>

    </div><!-- ./loop_books -->

  <!-- 書籍情報が取得されていない場合 -->
  <?php else: ?>
    <p>情報が有りません</p>

  <?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="./script/top.js"></script>
<?php require 'default/footer.php'; ?>
