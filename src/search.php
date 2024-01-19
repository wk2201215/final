<h1>Google Books APIs</h1>
<form action="top.php" method="post" >
タイトル：<input type="text" name="intitle" value="<?php echo $str1; ?>">
<br>
著者：<input type="text" name="inauthor" value="<?php echo $str2; ?>">
<br>
出版社：<input type="text" name="inpublisher" value="<?php echo $str3; ?>">
<br>
<input type="submit" value="検索">
<br>
<?php if($get_count > 0): ?>
  <?php if($startIndex > 0): ?>
    <button type="submit" name="p-" value="<?php echo $startIndex-1; ?>"><</button>
  <?php endif; ?>
  <?php echo $startIndex+1; ?>ページ目
  <?php if($startIndex+1 < $total_count): ?>
    <button type="submit" name="p+" value="<?php echo $startIndex+1; ?>">></button>
  <?php endif; ?>
<?php endif; ?>
<?php 
// echo $url; 
?>
</form>
<hr>