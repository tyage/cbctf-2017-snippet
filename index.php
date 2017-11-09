<?php include('config.php') ?>
<h1>Welcome to gist</h1>

<?php
if (file_exists($USER_DIR . '/is_admin')) {
  die($FLAG);
}
?>

<a href="export.php?dir=<?php echo $USER_DIR ?>">Export</a>
<a href="<?php echo $USER_DIR ?>">Your files</a>

<form action="import.php?dir=<?php echo $USER_DIR ?>" enctype="multipart/form-data" method="POST">
  <input type="file" name="file">
  <input type="submit" value="Import">
</form>

<form action="post.php" method="post">
  <input name="filename">
  <textarea name="contents"></textarea>
  <input type="submit" value="POST">
</form>
