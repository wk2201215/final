<form action="top.php" method="post" >
著者：<input type="text" name="intitle" value="<?php echo $str1; ?>">
<br>
タイトル：<input type="text" name="inauthor" value="<?php echo $str2; ?>">
<br>
<input type="submit" value="検索">
<br>
<?php if($get_count > 0): ?>
  <?php if($startIndex > 0): ?>
    <button type="submit" name="p-" value="<?php echo $startIndex-1; ?>"><</button>
  <?php endif; ?>
  <?php echo $startIndex+1; ?>ページ目
  <?php if($startIndex < $total_count/$get_count): ?>
    <button type="submit" name="p+" value="<?php echo $startIndex+1; ?>">></button>
  <?php endif; ?>
<?php endif; ?>
<?php echo $url; ?>
</form>
<hr>