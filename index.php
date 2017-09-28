<?php

require_once 'lib/limonade.php';

// Application code goes here

//mejorar, un aray con los nombres de los directorios y una funcion que haga merge de todos
$config = glob('config/*.php');
$core = glob('core/*.php');
$files = array_merge($core, $config);

foreach ($files as $filename) {
    include_once $filename;
}

function autoload($class) {
	include_once 'src/' . $class . '.php';
}

spl_autoload_register('autoload');

run();