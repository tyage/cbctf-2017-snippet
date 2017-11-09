<?php
include('config.php');

$filename = basename(strtolower($_POST['filename']));
if ($filename == 'is_admin' || preg_match('/\./', $filename)) {
  die('Hello hacker :)');
}

@mkdir($USER_DIR);
file_put_contents($USER_DIR . '/' . $_POST['filename'], $_POST['contents']);

header('Location: /');
