<?php

$dirInt="";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar = (substr($_SERVER['DOCUMENT_ROOT'],-1)=='/') ? "":"/";
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}calendarioMVC");

define('HOST', 'localhost');
define('DB', 'calendarioMVC');
define('USER', 'root');
define('PASS', '');

include(DIRREQ.'/app/libraries/composer/vendor/autoload.php');