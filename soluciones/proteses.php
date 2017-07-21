<?php

include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/db-config.php' );
include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/db-helper.php' );
include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/products.php' );

$data = get_products_by_category( 'proteses' );

$html = '';

if ( $data->num_rows )
{
	$linea = '';
	$count = 0;
	$init = true;
	while( $row = $data->fetch_assoc() )
	{
		if ( $init )
		{
			$linea = $row[ "linea" ];
			$html .= print_header( $row[ "linea" ] );
			$html .= print_container();
			$init = false;
		}

		if ( $linea != $row[ "linea" ] )
		{
			$linea = $row[ "linea" ];
			$html .= close_container();
			$html .= print_header( $row[ "linea" ] );
			$html .= print_container();
			$count = 0;
		}

		if ( $count == 3 )
		{
			$html .= close_container();
			$html .= print_container();
		}

		$html .= print_item( $row );
		$html .= print_modal( $row );

		$count++;
	}
	$html .= close_container();
}

return $html;