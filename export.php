<?php

$tmpfile = '/tmp/' . tempnam();

$zip = new ZipArchive();
$zip->open($tmpfile, ZipArchive::CREATE);
// TODO: check dirname($_GET['dir']) && basename($_GET['dir'])
$options = array('remove_path' => $_GET['dir']);

$dir = trim($_GET['dir'], '/');
$zip->addGlob($dir . '/*', 0, $options);

$zip->close();

header('Content-Disposition: attachment; filename="export.zip"');
readfile($tmpfile);

unlink($tmpfile);

// TODO: show hmac
