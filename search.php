<?php require('master.php'); ?>

<?php startblock('title') ?>

	<title><?=$page_title?></title>

<?php endblock() ?>

<?php startblock('meta') ?>

<?php endblock() ?>

<?php startblock('styles') ?>

<link rel="stylesheet" type="text/css" href="css/products.css">

<?php endblock() ?>

<?php startblock('content') ?>

<?php

include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/db-config.php' );
include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/db-helper.php' );
include ( $_SERVER[ 'DOCUMENT_ROOT' ].'/core/products.php' );

?>

<div role="main" class="main">
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">A Empresa</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>A Empresa</h1>
				</div>
			</div>
		</div>
	</section>

	<!-- <div class="container"> -->
		<div class="col-md-12">
			<div role="main" class="main shop">
				<div id="content-scroll" class="container">
					<?php 
						$data = get_products_by_name( $_POST["product"] );
						$html = make_search( $data );
						echo $html;
					?>
				</div>
			</div>
		</div>
	<!-- </div> -->
</div>

<?php endblock() ?>

<?php startblock('scripts') ?>

<?php endblock() ?>