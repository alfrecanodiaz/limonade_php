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
	.nav.navbar-nav li a {
		cursor: pointer;
	}
	.product-thumb-info h4 {
	    font-weight: 400;
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
					<!-- Main Menu -->
					<div class="side-menu-container">
						<ul class="nav navbar-nav">
							<!-- Dropdown-->
							<li class="panel panel-default" id="dropdown">
								<a data-toggle="collapse" href="#dropdown-lvl1" aria-expanded="true" data-page="equipamentos" style="font-weight: bold;"> <!-- Open aria-expanded="true" -->
									 Equipamentos <span class="caret"></span>
								</a>
								<!-- Dropdown level 1 -->
								<div id="dropdown-lvl1" class="panel-collapse collapse in"> <!-- Open class = 'in' -->
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a data-page="novos">Novos</a></li>
											<!-- Dropdown level 2 -->
											<li class="panel panel-default" id="dropdown">
												<a data-toggle="collapse" href="#dropdown-lvl2" data-page="seminovos">
													Seminovos <span class="caret"></span>
												</a>
												<div id="dropdown-lvl2" class="panel-collapse collapse">
													<div class="panel-body">
														<ul class="nav navbar-nav">
															<li><a data-page="">Imagens</a></li>
															<li><a data-page="">CR</a></li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<a data-page="locacao-equipamentos">
													Locação de Equipamentos
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li><a data-page="proteses" style="font-weight: bold;">Próteses</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>

		</div>
		<div class="col-md-9">

			<div role="main" class="main shop">
				<div id="content-scroll" class="container">
					<?php include 'soluciones/equipamentos.php' ?>
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
		$('.nav.navbar-nav').find('a').click(function()
		{
			var page = $(this).data('page');
			if (page != '' && page != undefined && page != null)
				$("#content-scroll").load('soluciones/'+page+'.php').hide().fadeIn();
		});
	});
</script>

<?php endblock() ?>
