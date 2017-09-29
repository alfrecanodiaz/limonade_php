<?php

class Html
{
	//Add break line
	public static function script($name)
	{
		return '<script src="' . js_dir() . $name .'"></script>' . PHP_EOL;
	}

	public static function style($name)
	{
		return '<link rel="stylesheet" href="' . css_dir() . $name . '"/>' . PHP_EOL;
	}
}