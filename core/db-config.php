<?php

$server = "localhost";
$user = "dev";
$pass = "dev";
$db = "rd_medical";

$conn = new mysqli( $server, $user, $pass, $db );
$conn->set_charset( "utf8" );

if ( $conn->connect_error )
	die( "Error en la conexión: " . $conn->connect_error );