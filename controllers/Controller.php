<?php

class Controller
{
	public function home()
	{
		// $a = R::dispense( 'actions' );
	    // $a->nombre = 'otro save';
	    // $id = R::store( $a );

		$var = 'Prueba var';
		// dd($_SERVER['HTTP_HOST']);
		// dd(realpath(dirname(__FILE__)));
		// dd(public_dir());
		// dd($var, true);
		set('saludo', $var);
		return html('home.html.php');
	}
}