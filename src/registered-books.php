<?php session_start(); ?>
<?php require 'default/db-connect.php'; ?>
<?php require 'default/header-top.php'; ?>
<?php require 'ba-ga-.php'; ?>
<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('select * from RegisteredBooks where user_id=?');
$sql->execute([$_SESSION['user']['id']]);
$c=$sql->rowCount();
?>
  <!-- 1件以上取得した書籍情報がある場合 -->
  <?php if($c > 0): ?>
    <div class="loop_books">

      <!-- 取得した書籍情報を順に表示 -->
      <?php $count = 0;
          foreach($sql as $book):
          require 'default/api3.php';
          //書籍ID
          $id = $data->id;
          // タイトル
          $title = $data->volumeInfo->title;
          // サムネ画像
          $img = $data->volumeInfo->readingModes->image;
          if($img){
            $thumbnail = $data->volumeInfo->imageLinks->thumbnail;
          }else{
            $thumbnail = './img/null.jpg';
          }
          // 著者（配列なのでカンマ区切りに変更）
          if(isset($data->volumeInfo->authors)){
            $authors = implode(',', $data->volumeInfo->authors);
          }else{
            $a=['null'];
            $authors = implode(',', $a); 
          }
          //出版社
          if(isset($data->volumeInfo->publisher)){
            $publisher = $data->volumeInfo->publisher;
          }else{
            $publisher = 'null';
          }
          //発行年月日
          if(isset($data->volumeInfo->publishDate)){
            $publishDate = $data->volumeInfo->publishDate;
          }else{
            $publishDate = 'null';
          }
          //書籍内容の説明
          if(isset($data->volumeInfo->description)){
            $description = $data->volumeInfo->description;
          }else{
            $description = 'null';
          }
          //ページ数
          if(isset($data->volumeInfo->pageCount)){
            $pageCount = $data->volumeInfo->pageCount;
          }else{
            $pageCount = 'null';
          }
          //リンクGoogle Booksの書籍ページ
          if(isset($data->volumeInfo->infoLink)){
            $infoLink = $data->volumeInfo->infoLink;
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
                <button onclick="location.href='r-b-d.php?id=<?php echo $id; ?>'">削除</button>
            </li>
          </ul>
        </div>
      <?php $count++;endforeach; ?>

    </div><!-- ./loop_books -->

  <!-- 書籍情報が取得されていない場合 -->
  <?php else: ?>
    <p>情報が有りません</p>

  <?php endif; ?>
<?php require 'default/footer-top.php'; ?>
