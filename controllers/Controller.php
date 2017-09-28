<?php

class Controller
{
	public function home()
	{
		$var = 'Prueba var';
		// dd($_SERVER['HTTP_HOST']);
		// dd(realpath(dirname(__FILE__)));
		// dd(public_dir());
		// dd($var, true);
		set('saludo', $var);
		return html('home.html.php');
	}
}