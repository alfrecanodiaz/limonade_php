<?php

function get_products_by_category( $cat )
{
	global $conn;
	$q = "SELECT * FROM productos WHERE categoria = '$cat' ORDER BY subcategoria ASC, subsubcategoria ASC, linea ASC, nombre ASC";
	$data = $conn->query($q);
	$conn->close();
	return $data;
}

function get_products_by_subcategory( $sub )
{
	global $conn;
	$q = "SELECT * FROM productos WHERE subcategoria = '$sub' ORDER BY subsubcategoria ASC, linea ASC, nombre ASC";
	$data = $conn->query($q);
	$conn->close();
	return $data;
}

function get_products_by_subsubcategory( $ssub )
{
	global $conn;
	$q = "SELECT * FROM productos WHERE subsubcategoria = '$ssub' ORDER BY linea ASC, nombre ASC";
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

function get_products_by_partner( $part )
{
	global $conn;
	$q = "SELECT * FROM productos WHERE proveedor = '$part' ORDER BY linea ASC, nombre ASC";
	$data = $conn->query($q);
	$conn->close();
	return $data;
}

function get_products_by_name( $product )
{
	global $conn;
	$q = "SELECT * FROM productos WHERE nombre LIKE '$product%' ORDER BY nombre ASC";
	$data = $conn->query($q);
	$conn->close();
	return $data;
}

function filter_products( $type, $param, $ssub, $part )
{
	global $conn;
	switch ($type)
	{
		case 'category':
			$q = "SELECT * FROM productos WHERE categoria = '$param'";
			break;
		case 'subcategory':
			$q = "SELECT * FROM productos WHERE subcategoria = '$param'";
			break;
	}

	if( $ssub == '' && $part == '' )
		return null;
	
	if( $ssub != '' )
		$q .= " AND subsubcategoria = '$ssub'";
	if ( $part != '' )
		$q .= " AND proveedor = '$part'";

	$q .= " ORDER BY linea ASC, nombre ASC";
	$data = $conn->query($q);
	$conn->close();
	return $data;
}