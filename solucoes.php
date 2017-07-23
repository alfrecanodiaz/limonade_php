<?php require('master.php'); ?>

<?php startblock('title') ?>

<title><?=$page_title?></title>

<?php endblock() ?>

<?php startblock('meta') ?>

<?php endblock() ?>

<?php startblock('styles') ?>

<link rel="stylesheet" type="text/css" href="css/sidebar.css">
<link rel="stylesheet" type="text/css" href="css/products.css">

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
						<ul class="nav navbar-nav" style="width: 100%;">
							<!-- Dropdown-->
							<li class="panel panel-default" id="dropdown">
								<a data-toggle="collapse" href="#dropdown-lvl1" aria-expanded="true" data-page="equipamentos" data-type="category"> <!-- Open aria-expanded="true" -->
									 Equipamentos <span class="fa fa-caret-down"></span>
								</a>
								<!-- Dropdown level 1 -->
								<div id="dropdown-lvl1" class="panel-collapse collapse in"> <!-- Open class = 'in' -->
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a data-page="novos" data-type="subcategory">Novos</a></li>
											<!-- Dropdown level 2 -->
											<li class="panel panel-default" id="dropdown">
												<a data-toggle="collapse" href="#dropdown-lvl2" data-page="seminovos" data-type="subcategory">
													Seminovos <span class="fa fa-caret-left"></span>
												</a>
												<div id="dropdown-lvl2" class="panel-collapse collapse">
													<div class="panel-body">
														<ul class="nav navbar-nav">
															<li><a data-page="imagens" data-type="subsubcategory">Imagens</a></li>
															<li><a data-page="cr" data-type="subsubcategory">CR</a></li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<a data-page="locação de equipamentos" data-type="subcategory">
													Locação de Equipamentos
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li><a data-page="proteses" data-type="category">Próteses</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>

		</div>
		<div class="col-md-9">

			<div role="main" class="main shop">
				<div id="content-scroll" class="container">
					<!-- Content Load -->
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
		$.post('functions/data-products.php',
	    {
	        type: 'category',
	        param: 'equipamentos'
	    },
	    function(data)
	    {
	        $("#content-scroll").html(data).hide().fadeIn();
	    });

		var $nav = $('.nav.navbar-nav');
		$nav.find('a').click(function()
		{
			$nav.find('a.active').removeClass('active');
			$(this).addClass('active');

			var type = $(this).data('type');
			var page = $(this).data('page');
			if (page != '' && type != '')
			{
				$.post('functions/data-products.php',
			    {
			        type: type,
			        param: page
			    },
			    function(data)
			    {
			        $("#content-scroll").html(data).hide().fadeIn();
			    });
			}
		});

		$('.panel.panel-default').find('a').click(function()
		{
			$(this).find('span').toggleClass('fa-caret-left fa-caret-down');
		});
	});
</script>

<?php endblock() ?>
