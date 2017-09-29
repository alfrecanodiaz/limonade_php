<?php

require_once 'lib/limonade.php';
require_once 'lib/rb.php';

#Application code goes here

$dirs = ['config', 'core', 'http'];

foreach ($dirs as $dir) {
	foreach (glob($dir.'/*.php') as $file) {
		include_once $file;	
	}
}

#Se puede incluir mas directorios
function autoload($class) {
	include_once 'src/' . $class . '.php';
}

spl_autoload_register('autoload');

run();