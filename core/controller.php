<?php

$page_title = 'RD Medical S.A.';

$request_page = "$_SERVER[REQUEST_URI]";

#Validar si existe un parametro incorrecto = Ej: index.php/foo
$invalid_request_param = strrpos($request_page, '/');
if ($invalid_request_param > 0) {
	echo '<script type="text/javascript">
           		window.location.href = "/404.php";
      		</script>';
}