<?php
$MY_SECRET = 'immortalmageagent';
$SALT = 'immortalmageagent';
$FLAG = 'CBCTF{hogehogege}';

session_start();
$USER_DIR = md5($SALT . $_SERVER['REMOTE_ADDR'] . session_id());
