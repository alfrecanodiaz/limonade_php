<?php

require_once 'lib/limonade.php';

#Application code goes here

$dirs = ['config', 'core', 'http'];

foreach ($dirs as $dir) {
	foreach (glob($dir.'/*.php') as $file) {
		include_once $file;	
	}
}

function autoload($class) {
	include_once 'src/' . $class . '.php';
	// include_once 'controllers/' . $class . '.php';
}

spl_autoload_register('autoload');

run();