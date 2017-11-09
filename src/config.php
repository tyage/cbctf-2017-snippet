<?php
$MY_SECRET = 'a0572802e277a92210eab6aee0332a21';
$SALT = 'c714025a1500f4f92681d3b952c5b423';
$FLAG = 'CBCTF{plz fix PHP Bug #72374}';

session_start();
$USER_DIR = md5($SALT . $_SERVER['REMOTE_ADDR'] . session_id());
