<?php

include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/db-config.php' );
include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/db-helper.php' );
include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/partners.php' );

if ( $_POST[ "data" ] === 'native' )
{
	switch ( $_POST[ "type" ] )
	{
		case 'category':
			$data = get_products_by_category( $_POST[ "param" ] );
			break;

		case 'subcategory':
			$data = get_products_by_subcategory( $_POST[ "param" ] );
			break;
	}

	return make_html( $data, $_POST[ "param" ] );
}
else if ( $_POST[ "data" ] === 'info' )
{
	return get_info();
}
else
{
	return get_newsletter();
}