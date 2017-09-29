<?php

function server_path()
{
	if (strpos($_SERVER['HTTP_HOST'], 'http') !== false) {
	    return $_SERVER['HTTP_HOST'] . '/';
	}
	return 'http://' . $_SERVER['HTTP_HOST'] . '/';
}

function public_dir()
{
	return server_path() . 'public/';
}

function asset()
{
	return public_dir() . 'assets/';
}

function js_dir()
{
	return public_dir() . 'js/';
}

function css_dir()
{
	return public_dir() . 'css/';
}