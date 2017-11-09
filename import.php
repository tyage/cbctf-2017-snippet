<?php
include('config.php');

$tmpfile = $_FILES['file']['tmp_name'];
$hmac = hash_hmac('sha256', file_get_contents($tmpfile), $MY_SECRET);
if ($_FILES['file']['name'] !== "${hmac}.zip") {
  die('hello hacker :)');
}

$zip = new ZipArchive();
$zip->open($tmpfile);
$zip->extractTo($USER_DIR);

header('Location: /');
