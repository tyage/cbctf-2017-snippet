<?php
$dir = md5($_SERVER['REMOTE_ADDR']);
?>
<h1>Welcome to gist</h1>

<a href="export.php?dir=<?php echo $dir ?>">Export</a>
<a href="<?php echo $dir ?>">Your files</a>

<form action="import.php">
  <input type="file">
  <input type="submit" value="Import">
</form>

<form action="post.php" method="post">
  <input name="filename">
  <textarea name="contents"></textarea>
  <input type="submit" value="POST">
</form>
