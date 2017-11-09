<?php
include('config.php');

// TODO: check hmac of file

$zip = new ZipArchive();
$zip->open($_FILES['file']['tmp_name']);
$zip->extractTo($USER_DIR);

header('Location: /');
