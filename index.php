<?php
$dir = md5($_SERVER['REMOTE_ADDR']);
?>
<h1>Welcome to gist</h1>

<a href="export.php?dir=<?php echo $dir ?>">export</a>

<form action="./post.php" method="post">
  <input name="filename">
  <textarea name="contents"></textarea>
  <input type="submit" name="" value="">
</form>
