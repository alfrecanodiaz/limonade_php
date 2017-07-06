<?php require('master.php'); ?>

<?php startblock('title') ?>

	<title><?=$page_title?></title>

<?php endblock() ?>

<?php startblock('meta') ?>

<?php endblock() ?>

<?php startblock('styles') ?>

<link rel="stylesheet" type="text/css" href="css/sidebar.css">

<style type="text/css">
	.featured-boxes-flat .featured-box .icon-featured {
	    margin: -45px 0 -15px;
	}
	.featured-box {
		min-height: 140px;
		height: 140px;
	}
	.shop-title {
		color: #005087;
	}
</style>

<?php endblock() ?>

<?php startblock('content') ?>

<div role="main" class="main">

	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Soluções</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>Soluções</h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="col-md-3">

			<div class="side-menu">
				<nav class="navbar navbar-default" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<!-- <div class="navbar-header">
						<div class="brand-wrapper">
							<div class="brand-name-wrapper">
								<a class="navbar-brand">
									Menu
								</a>
							</div>
						</div>
					</div> -->
					<!-- Main Menu -->
					<div class="side-menu-container">
						<ul class="nav navbar-nav">
							<!-- <li><a href="#"><span class="glyphicon glyphicon-send"></span> Link</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-plane"></span> Active Link</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cloud"></span> Link</a></li> -->
							<!-- Dropdown-->
							<li class="panel panel-default" id="dropdown">
								<a data-toggle="collapse" href="#dropdown-lvl1" aria-expanded="true" style="font-weight: bold;"> <!-- Open aria-expanded="true" -->
									 Equipos <span class="caret"></span>
								</a>
								<!-- Dropdown level 1 -->
								<div id="dropdown-lvl1" class="panel-collapse collapse in"> <!-- Open class = 'in' -->
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a href="#" data-page="prueba">Nuevos</a></li>
											<!-- Dropdown level 2 -->
											<li class="panel panel-default" id="dropdown">
												<a data-toggle="collapse" href="#dropdown-lvl2">
													Seminuevos <span class="caret"></span>
												</a>
												<div id="dropdown-lvl2" class="panel-collapse collapse">
													<div class="panel-body">
														<ul class="nav navbar-nav">
															<li><a href="#">Imagenes</a></li>
															<li><a href="#">CR</a></li>
														</ul>
													</div>
												</div>
											</li>
											<li><a href="#">Alquiler de equipos</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="#" style="font-weight: bold;"> Prótesis</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>

		</div>
		<div class="col-md-9">

			<div role="main" class="main shop">
				<div id="content-scroll" class="container">
					<div class="row" id="first">
						<div class="col-md-6">
							<h1 class="shop-title mb-none">Sistemas de Anestesia</h1>
						</div>
					</div>
					<div class="row">
						<ul class="products product-thumb-info-list" data-plugin-masonry>
							<!-- PRODUTO -->
							<li class="col-md-3 col-sm-6 col-xs-12 product">
								<a href="">
								</a>
								<span class="product-thumb-info">
									<a href="">
										<span class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<span class="product-thumb-info-act-left"><em>Ver</em></span>
												<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Detalhes</em></span>
											</span>
											<img alt="" class="img-responsive" src="img/products/conquest.jpg">
										</span>
									</a>
									<span class="product-thumb-info-content">
										<a href="">
											<h4>Conquest Vertex</h4>
											<span class="price">
											</span>
										</a>
									</span>
								</span>
							</li>
							<!-- FIM PRODUTO -->
							<!-- PRODUTO -->
							<li class="col-md-3 col-sm-6 col-xs-12 product">
								<a href="">
								</a>
								<span class="product-thumb-info">
									<a href="">
										<span class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<span class="product-thumb-info-act-left"><em>Ver</em></span>
												<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Detalhes</em></span>
											</span>
											<img alt="" class="img-responsive" src="img/products/SAB-2000.jpg">
										</span>
									</a>
									<span class="product-thumb-info-content">
										<a href="">
											<h4>SAB 2000</h4>
											<span class="price">
											</span>
										</a>
									</span>
								</span>
							</li>
							<!-- FIM PRODUTO -->
							<!-- PRODUTO -->
							<li class="col-md-3 col-sm-6 col-xs-12 product">
								<a href="">
								</a>
								<span class="product-thumb-info">
									<a href="">
										<span class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<span class="product-thumb-info-act-left"><em>Ver</em></span>
												<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Detalhes</em></span>
											</span>
											<img alt="" class="img-responsive" src="img/products/SAB_4000.jpg">
										</span>
									</a>
									<span class="product-thumb-info-content">
										<a href="">
											<h4>SAB 4000</h4>
											<span class="price">
											</span>
										</a>
									</span>
								</span>
							</li>
							<!-- FIM PRODUTO -->
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>

<?php endblock() ?>

<?php startblock('scripts') ?>

<script type="text/javascript">
	$(document).ready(function()
	{
		$('.panel-body a').click(function()
		{
			$("#content-scroll").load("prueba-include.php").hide().fadeIn();
		});
	});
</script>

<?php endblock() ?>
