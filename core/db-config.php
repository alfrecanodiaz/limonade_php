<?php

$servername = "localhost";
$username = "dev";
$password = "dev";
$dbname = "rd_medical";

$conn = new mysqli( $servername, $username, $password, $dbname );
$conn->set_charset( "utf8" );

if ( $conn->connect_error )
	die( "Error en la conexión: " . $conn->connect_error );