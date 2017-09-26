<?php

include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/db-config.php' );
include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/db-helper.php' );
include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/products.php' );

if ( $_POST[ "filter" ] )
{
	$data = filter_products( /*$_POST[ "type" ], $_POST[ "param" ],*/ strtolower($_POST[ "ssub" ]), strtolower($_POST[ "proveedor" ]) );
}
else
{
	switch ( $_POST[ "type" ] )
	{
		case 'category':
			$data = get_products_by_category( $_POST[ "param" ] );
			break;

		case 'subcategory':
			$data = get_products_by_subcategory( $_POST[ "param" ] );
			break;

		case 'subsubcategory':
			$data = get_products_by_subsubcategory( $_POST[ "param" ] );
			break;

		case 'partner':
			$data = get_products_by_partner( $_POST[ "param" ] );
			break;
	}
}

return make_html( $data );