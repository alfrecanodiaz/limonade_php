<?php

	/*
	|--------------------------------------------------------------------------
	| Database Setup
	|--------------------------------------------------------------------------
	| 
	| Definir las credenciales de la base de datos
	| Modificar el dbname, username y password correspondientes a la base de
	| datos que se utilizará
	| 
	*/

	// R::setup('mysql:host=localhost;dbname=DATABASE', 'USERNAME', 'PASSWORD');
	R::setup('mysql:host=localhost;dbname=limonade', 'dev', 'dev');

	/*
	|--------------------------------------------------------------------------
	| Database State
	|--------------------------------------------------------------------------
	| 
	| Definir si la base de datos está en modo debug o producción
	| Valor false por defecto
	| 
	*/

	R::debug(false);