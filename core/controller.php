<?php

$page_title = 'RD Medical S.A.';

function trans( $name ) {
    global $trans;
    return $trans[ $name ];
}

function sanitize_param( $param ) {
	if ( strrpos( $param, '/' ) > 0 )
		$param = substr( $param, 0, strrpos( $param, '/' ) );

	return $param;
}

function clean_uri( $uri ) {
	return str_replace( '/', '', trim( strtok( sanitize_param( $uri ), '?' ) ) );
}

function get_current_page() {
	if ( clean_uri( "$_SERVER[REQUEST_URI]" ) !== '' )
		return clean_uri( "$_SERVER[REQUEST_URI]" );
	else
		return 'index.php';
}

function remove_extension( $param ) {
	return preg_replace( '/\\.[^.\\s]{3,4}$/', '', $param );
}

function get_url_page( $page ) {
	if ( isset( $_SESSION[ "lang" ] ) ) {
		return $page . '.php' . '?lang=' . $_SESSION[ "lang" ];
	} else {
		return $page . '.php';
	}
}

function locate( $uri, $lang ) {
	if ( $uri != '' )
		return $uri . '.php' . '?lang=' . $lang;
	else
		return 'index.php?lang=' . $lang;
}

function get_current_flag() {
	$flag = 'br';
	if ( isset( $_SESSION[ "lang" ] ) ) {
		switch ( $_SESSION[ "lang" ] ) {
			case 'es':
				$flag = 'es';
				break;
			case 'en':
				$flag = 'us';
				break;
		}
	}
	return $flag;
}

function get_current_lang() {
	$language = 'Português';
	if ( isset( $_SESSION[ "lang" ] ) ) {
		switch ( $_SESSION[ "lang" ] ) {
			case 'es':
				$language = 'Español';
				break;
			case 'en':
				$language = 'English';
				break;
		}
	}
	return $language;
}

function set_lang( $lang ) {
	if ( isset( $_SESSION[ "lang" ] ) ) {
		if ( $_SESSION[ "lang" ] != $lang )
			$_SESSION[ "lang" ] = $lang;
	} else {
		$_SESSION[ "lang" ] = $lang;
	}
}

function is_valid_lang( $lang ) {
	$valid_lang = array( 'en', 'es', 'po' );
	return in_array( $lang, $valid_lang );
}

function get_lang() {
	if ( isset( $_SESSION[ "lang" ] ) )
		return $_SESSION[ "lang" ];
	else if ( isset( $_GET[ 'lang' ] ) )
		if ( is_valid_lang( $_GET[ 'lang' ] ) )
			return $_GET[ 'lang' ];
	else
		return 'es';
}

function get_all_headers( $position ) {
	if ( $position == 'top' ) {
		return array(
			'Home' => 'index',
			'A Empresa' => 'about-us',
			'Soluções' => 'solucoes'
		);
	} else if ( $position == 'bottom' ) {
		return array(
			'Assistência Técnica' => 'assist',
			// 'blog' => 'blog',
			'Contato' => 'contact-us'
		);
	} else if ( $position == 'dropdown' ) {
		return array(
			// 'Alfamed' => 'parceiro3',
			'Baumer' => 'parceiro2',
			// 'CDK' => 'parceiro4',
			'Bionext' => 'parceiro6'
		);
	} else {
		return null;
	}
}

function dd( $arg ) {
    var_dump( $arg );
	die();
}