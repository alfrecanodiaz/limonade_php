<?php

	/*
	|--------------------------------------------------------------------------
	| Application Environment
	|--------------------------------------------------------------------------
	| 
	| Definir si la aplicación esta en modo producción o desarrollo (ENV_PRODUCTION, ENV_DEVELOPMENT)
	| Definir el modo debug de la aplicación para mostrar los errores generados
	| 
	*/

	option('env', ENV_DEVELOPMENT);
	option('debug', true);

	/*
	|--------------------------------------------------------------------------
	| Public DIR
	|--------------------------------------------------------------------------
	| 
	| Definir el directorio público de la aplicación
	| 
	*/

	option('public_dir', dirname(__FILE__).'/public/');

	/*
	|--------------------------------------------------------------------------
	| Controllers DIR
	|--------------------------------------------------------------------------
	| 
	| Definir el directorio absoluto de los controladores
	| 
	*/

	option('controllers_dir', dirname(__FILE__).'/src/');

	/*
	|--------------------------------------------------------------------------
	| Libs DIR
	|--------------------------------------------------------------------------
	| 
	| Definir el directorio absoluto de las librerías
	| 
	*/

	option('lib_dir', dirname(__FILE__).'/lib/');

	/*
	|--------------------------------------------------------------------------
	| Page Views DIR
	|--------------------------------------------------------------------------
	| 
	| Definir el directorio absoluto de las vistas
	| 
	*/

	option('views_dir', dirname(__FILE__).'/views/');

	/*
	|--------------------------------------------------------------------------
	| Master Layout File
	|--------------------------------------------------------------------------
	| 
	| Definir el archivo donde se renderizará las vistas
	| 
	*/

	layout('master.html.php');