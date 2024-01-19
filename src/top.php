<?php session_start(); ?>
<?php require 'default/api.php'; ?>
<?php require 'default/header-top.php'; ?>
<?php require 'search.php'; ?>
<p>全<?php echo $total_count; ?>ページ、<?php echo $get_count; ?>件を表示中（<?php echo $startIndex+1; ?>ページ目）</p>

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
            $a=['null'];
            $authors = implode(',', $a); 
          }
          //出版社
          if(isset($book->volumeInfo->publisher)){
            $publisher = $book->volumeInfo->publisher;
          }else{
            $publisher = 'null';
          }
          //発行年月日
          if(isset($book->volumeInfo->publishDate)){
            $publishDate = $book->volumeInfo->publishDate;
          }else{
            $publishDate = 'null';
          }
          //書籍内容の説明
          if(isset($book->volumeInfo->description)){
            $description = $book->volumeInfo->description;
          }else{
            $description = 'null';
          }
          //ページ数
          if(isset($book->volumeInfo->pageCount)){
            $pageCount = $book->volumeInfo->pageCount;
          }else{
            $pageCount = 'null';
          }
          //リンクGoogle Booksの書籍ページ
          if(isset($book->volumeInfo->infoLink)){
            $infoLink = $book->volumeInfo->infoLink;
          }else{
            $infoLink = '';
          }
      ?>
        <div class="loop_books_item">
          <ul class="t">
            <li>
              <a href="<?php echo $infoLink; ?>">
                <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>">
              </a>
              <br />
            </li>
            <li>
            <a href="<?php echo $infoLink; ?>"><b>『<?php echo $title; ?>』</b></a><br />
                著者：<?php echo $authors; ?>出版社：<?php echo $publisher; ?><br />
                発行年月日：<?php echo $publishDate; ?>ページ数：<?php echo $pageCount; ?><br />
                <div class="Card">
                  <div class="Card-Item">
	                <div class="Card-Item-Comment">
                      <div class="Card-Item-Comment-Text">
		                書籍内容：<?php echo $description; ?>
	                  </div>
                    </div>
                  </div>
                </div>
            </li>
          </ul>
        </div>
      <?php endforeach; ?>

    </div><!-- ./loop_books -->

  <!-- 書籍情報が取得されていない場合 -->
  <?php else: ?>
    <p>情報が有りません</p>

  <?php endif; ?>
<?php require 'default/footer-top.php'; ?>
