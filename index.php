<?php

require_once 'lib/limonade.php';

// Application code goes here

foreach (glob('core/*.php') as $filename) {
    include_once $filename;
}

function autoload($class) {
	include_once 'src/' . $class . '.php';
}

spl_autoload_register('autoload');

run();