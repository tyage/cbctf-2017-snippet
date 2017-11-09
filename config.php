<?php
$MY_SECRET = 'immortalmageagent';
$SALT = 'immortalmageagent';
$FLAG = 'CBCTF{hogehogege}';

$USER_DIR = md5($SALT . $_SERVER['REMOTE_ADDR']);
