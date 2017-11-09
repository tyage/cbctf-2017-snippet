<?php
$tmpfile = '/tmp/' . tempnam();

if (dirname($_GET['dir']) !== '.') {
  die('You should provide only directory name!');
}

$zip = new ZipArchive();
$zip->open($tmpfile, ZipArchive::CREATE);
$options = array('remove_path' => $_GET['dir']);

$dir = trim($_GET['dir'], '/');
$zip->addGlob($dir . '/*', 0, $options);

$zip->close();

header('Content-Disposition: attachment; filename="export.zip"');
readfile($tmpfile);

unlink($tmpfile);

// TODO: show hmac OR password?
