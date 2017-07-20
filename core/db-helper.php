<?php

function get_products_by_category( $cat )
{
	global $conn;
	$q = "SELECT * FROM productos WHERE categoria = '$cat' ORDER BY subcategoria ASC, linea ASC, nombre ASC";
	$data = $conn->query($q);
	$conn->close();
	return $data;
}

function get_products_by_subcategory( $sub )
{
	global $conn;
	$q = "SELECT * FROM productos WHERE subcategoria = '$sub' ORDER BY linea ASC, nombre ASC";
	$data = $conn->query($q);
	$conn->close();
	return $data;
}

function get_products_by_line( $line )
{
	global $conn;
	$q = "SELECT * FROM productos WHERE linea = '$line' ORDER BY nombre ASC";
	$data = $conn->query($q);
	$conn->close();
	return $data;
}

// function format_product_name( $name )
// {
// 	return str_replace( ' ', '-', $name );
// }