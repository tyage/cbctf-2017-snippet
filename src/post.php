<?php
include('config.php');

$filename = strtolower($_POST['filename']);
if ($filename == 'is_admin' || preg_match('/php/i', $filename) || $filename[0] === '.') {
  die('Hello hacker :)');
}

@mkdir($USER_DIR);
file_put_contents($USER_DIR . '/' . basename($_POST['filename']), $_POST['contents']);

header('Location: /');
