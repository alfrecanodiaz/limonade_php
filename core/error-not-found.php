<?php

$invalid_params = strrpos( $uri, '/' );

if ( $invalid_params > 0 ) {

	if ( isset( $_GET['lang'] ) ) {
		$lang = sanitize_param( $_GET['lang'] );

		echo '<script type="text/javascript">
           		window.location.href = "/404.php?lang='.$lang.'";
      		</script>';
	} else {
		echo '<script type="text/javascript">
           		window.location.href = "/404.php";
      		</script>';
	}

}