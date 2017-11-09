<?php
include('secret.php');
$dir = md5($SALT . $_SERVER['REMOTE_ADDR']);

// TODO: check hmac of file

$zip = new ZipArchive();
$zip->open($_FILE['file']['tmp_name']);
$zip->extractTo($dir);
