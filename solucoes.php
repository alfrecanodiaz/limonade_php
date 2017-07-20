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
	.product-thumb-info {
		cursor: pointer;
	}
	.product-thumb-info h4 {
	    font-weight: 400;
	}
	.side-menu #dropdown .fa.fa-caret-left, .side-menu #dropdown .fa.fa-caret-down {
	    float: right;
	    margin: 5px 5px 0;
	}
	.product_view .modal-dialog {
		max-width: 800px;
	}
	@media (min-width: 992px) {
		.product_view .modal-dialog {
			width: 100%;
		}	
	}
	.pre-cost {
		text-decoration: line-through;
		color: #a5a5a5;
	}
	.space-ten {
		padding: 10px 0;
	}
	@media (min-width: 992px) {
		#left-column {
			padding-left: 0;
			padding-right: 0;
		}
	}
	.product-thumb-info .product-thumb-info-image {
	    background: white;
	}
	.modal-product-title {
		color: #005087;
		margin-bottom: 10px;
	}
	.modal-product-subtitle {
		color: #005087;
		margin-bottom: 5px;	
	}
	.carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right {
		color: #005087;
	}
	@media (max-width: 991px) {
		.product_content {
			margin-top: 10px;
		}
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
		<div class="col-md-3" id="left-column">

			<div class="side-menu">
				<nav class="navbar navbar-default" role="navigation">
					<!-- Main Menu -->
					<div class="side-menu-container">
						<ul class="nav navbar-nav">
							<!-- Dropdown-->
							<li class="panel panel-default" id="dropdown">
								<a data-toggle="collapse" href="#dropdown-lvl1" aria-expanded="true" data-page="equipamentos"> <!-- Open aria-expanded="true" -->
									 Equipamentos <span class="fa fa-caret-down"></span>
								</a>
								<!-- Dropdown level 1 -->
								<div id="dropdown-lvl1" class="panel-collapse collapse in"> <!-- Open class = 'in' -->
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a data-page="novos">Novos</a></li>
											<!-- Dropdown level 2 -->
											<li class="panel panel-default" id="dropdown">
												<a data-toggle="collapse" href="#dropdown-lvl2" data-page="seminovos">
													Seminovos <span class="fa fa-caret-left"></span>
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
							<li><a data-page="proteses">Próteses</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>

		</div>
		<div class="col-md-9">

			<div role="main" class="main shop">
				<div id="content-scroll" class="container">
					
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
		$.get( 'soluciones/equipamentos.php', function(data)
		{
			$("#content-scroll").html(data).hide().fadeIn();
		});

		var $nav = $('.nav.navbar-nav');
		$nav.find('a').click(function()
		{
			$nav.find('a.active').removeClass('active');
			$(this).addClass('active');

			var page = $(this).data('page');
			if (page != '' && page != undefined && page != null)
			{
				$.get( 'soluciones/'+page+'.php', function(data)
				{
					$("#content-scroll").html(data).hide().fadeIn();
				});
				// $("#content-scroll").load('soluciones/'+page+'.php').hide().fadeIn();
			}
		});

		$('.panel.panel-default').find('a').click(function()
		{
			$(this).find('span').toggleClass('fa-caret-left fa-caret-down');
		});

		$('.product-thumb-info-image').on('click', function(event)
		{
	        event.preventDefault();
	        $('#product_view').modal('show');
	    });

	});
</script>

<?php endblock() ?>
