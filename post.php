<?php
$dir = md5($_SERVER['REMOTE_ADDR']);
mkdir($dir);
file_put_contents($dir . '/' . $_POST['filename'], $_POST['contents']);
