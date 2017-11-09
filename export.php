<?php
include('config.php');

$tmpfile = tempnam('/tmp', 'cbs');

if (preg_match('/\.|\\\\|^\//', $_GET['dir']) === 1) {
  die('hello hacker :(');
}

$zip = new ZipArchive();
$zip->open($tmpfile, ZipArchive::CREATE);
$options = array('remove_path' => $_GET['dir']);

$dir = trim($_GET['dir'], '/');
$zip->addGlob($dir . '/*', 0, $options);

$zip->close();

$hmac = hash_hmac('sha256', file_get_contents($tmpfile), $MY_SECRET);
header("Content-Disposition: attachment; filename='${hmac}.zip'");
readfile($tmpfile);

unlink($tmpfile);
