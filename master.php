<?php
require( 'libs/ti.php' );
require( 'core/controller.php' );
$trans = require( 'resources/lang/po.php' );
require( 'core/error-not-found.php' );

if ( isset( $_GET['lang'] ) )
{
	$lang = sanitize_param( $_GET['lang'] );

	if ( $lang == 'en' )
		$trans = array_merge( $trans, require( 'resources/lang/en.php' ) );
	elseif ( $lang == 'es' )
		$trans = array_merge( $trans, require( 'resources/lang/es.php' ) );
	else
		$trans = array_merge( $trans, require( 'resources/lang/po.php' ) );
}

?>
<!DOCTYPE html>

<html>

	<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	

	<?php startblock('title') ?><?php endblock() ?>	

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="RD Medical SRL">
	<meta name="author" content="okler.net">

	<?php startblock('meta') ?><?php endblock() ?>

	<!-- =========================================
	Global Css Section
	========================================== -->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">
	<link rel="stylesheet" href="css/theme-animate.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.js"></script>

	<style type="text/css">
		.fa.fa-facebook {
			margin-top: 8px;
		}
	</style>

	<!-- =========================================
	Pages Css Section
	========================================== -->

	<?php startblock('styles') ?><?php endblock() ?>

	<!-- =========================================
	Google Analytics
	========================================== -->

	</head>

	<body data-spy="scroll" data-target="#navSecondary" data-offset="154">

	<div class="body">

	    <!-- =========================================
	    Menu
	    ========================================== -->

		<?php require_once('partials/header.php');?>

		<!-- =========================================
	    Content Section
	    ========================================== -->

	    <?php startblock('content') ?><?php endblock() ?>

		<!-- =========================================
	    Footer Section
	    ========================================== -->

	    <?php require_once('partials/footer.php');?>

    </div>

    <!-- =========================================
    Global Scripts Section
    ========================================== -->

    <!-- Vendor -->
	<script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/jquery.appear/jquery.appear.js"></script>
	<script src="vendor/jquery.easing/jquery.easing.js"></script>
	<script src="vendor/jquery-cookie/jquery-cookie.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.js"></script>
	<script src="vendor/common/common.js"></script>
	<script src="vendor/jquery.validation/jquery.validation.js"></script>
	<script src="vendor/jquery.stellar/jquery.stellar.js"></script>
	<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
	<script src="vendor/jquery.gmap/jquery.gmap.js"></script>
	<script src="vendor/jquery.lazyload/jquery.lazyload.js"></script>
	<script src="vendor/isotope/jquery.isotope.js"></script>
	<script src="vendor/owl.carousel/owl.carousel.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="vendor/vide/vide.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Theme Custom -->
	<!-- <script src="js/custom.js"></script> -->

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

	<script type="text/javascript">
		$(function()
		{
			if (!window.location.pathname.substr(1) == '')
				$('a.nav-page[href="'+window.location.pathname.substr(1)+'"]').parent().closest('li.nav-li').addClass('active');
			else
				$('a.nav-page[href="index.php"]').parent().closest('li.nav-li').addClass('active');
		});
	</script>

	<!-- =========================================
    Pages Script Section
    ========================================== -->

    <?php startblock('scripts') ?><?php endblock() ?>

	</body>

</html>