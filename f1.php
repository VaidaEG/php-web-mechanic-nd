<?php
/*
http://localhost/php-web-mechanic-nd/f1.php <---- kelias narsyklei
C:\xampp\htdocs\php-web-mechanic-nd/f1.php  <---- kelias srveriui
*/
_d($_SERVER);
_d($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);

echo 'Labas';
echo '<br>';
echo __DIR__; // <----- stebuklinga konstanta TIK SERVERIUI
echo '<br>';
include 'f2.php';
'<br>';
include_once __DIR__.'/f2.php';
require 'f2.php';
require_once 'f2.php';
echo '<br>';
echo "Viskas OK";
// sesija gali buti tik tame paciame serveryje, jeigu vaikstome tarp puslapiu.