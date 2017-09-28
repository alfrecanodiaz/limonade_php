<?php

class Controller
{
	public function home()
	{
		$var = 'Prueba var';
		// dd($var);
		// dd($var, true);
		set('saludo', $var);
		return html('home.html.php');
	}
}