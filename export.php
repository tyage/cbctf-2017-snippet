<?php
include('config.php');

$tmpfile = tempnam('/tmp', 'gist');

if (dirname($_GET['dir']) !== '.') {
  die('You should provide only directory name!');
}

$zip = new ZipArchive();
$zip->open($tmpfile, ZipArchive::CREATE);
$options = array('remove_path' => $_GET['dir']);

$dir = trim($_GET['dir'], '/');
$zip->addGlob($dir . '/*', 0, $options);

$zip->close();

// TODO: show hmac OR password?

$hmac = hash_hmac('sha256', file_get_contents($tmpfile), $MY_SECRET);
header("Content-Disposition: attachment; filename='${hmac}.zip'");
readfile($tmpfile);

unlink($tmpfile);
