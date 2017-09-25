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
								<a data-toggle="collapse" href="#equipamentos-lvl1" aria-expanded="true" data-page="equipamentos" data-type="category" class="active"> <!-- Open aria-expanded="true" -->
									 Equipamentos <span class="fa fa-caret-down"></span>
								</a>
								<!-- Dropdown level 1 -->
								<div id="equipamentos-lvl1" class="panel-collapse collapse in"> <!-- Open class = 'in' -->
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a data-page="novos" data-type="subcategory">Novos</a></li>
											<!-- Dropdown level 2 -->
											<li class="panel panel-default" id="dropdown">
												<a data-toggle="collapse" href="#equipamentos-lvl2" data-page="seminovos" data-type="subcategory">
													Seminovos <span class="fa fa-caret-left"></span>
												</a>
												<div id="equipamentos-lvl2" class="panel-collapse collapse">
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
							<li class="panel panel-default" id="dropdown">
								<a data-toggle="collapse" href="#ortopedia-lvl1" data-page="ortopedia" data-type="category">
									 Ortopedia <span class="fa fa-caret-left"></span>
								</a>
								<!-- Dropdown level 1 -->
								<div id="ortopedia-lvl1" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a data-page="próteses de quadril" data-type="subcategory">Próteses de Quadril</a></li>
											<li><a data-page="próteses de joelho" data-type="subcategory">Próteses de Joelho</a></li>
											<li><a data-page="próteses de ombro" data-type="subcategory">Próteses de Ombro</a></li>
											<li><a data-page="não convencional" data-type="subcategory">Não Convencional</a></li>
											<li><a data-page="fixação intramedular" data-type="subcategory">Fixação Intramedular</a></li>
											<li><a data-page="fixação interna" data-type="subcategory">Fixação Interna</a></li>
											<li><a data-page="fixação externa" data-type="subcategory">Fixação Externa</a></li>
											<li><a data-page="biomateriais" data-type="subcategory">Biomateriais</a></li>
										</ul>
									</div>
								</div>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>

		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="form-group" style="padding-right: 15px; padding-left: 15px;">
					<div class="col-md-5">
						<label>Marca</label>
						<input type="text" value="" class="form-control" name="marca" id="marca" placeholder="Ingrese la Marca">
					</div>
					<div class="col-md-5">
						<label>Tipo de Equipo</label>
						<input type="text" value="" class="form-control" name="tipo_equipo" id="tipo_equipo" placeholder="Ingrese el Tipo de Equipo">
					</div>
					<div class="col-md-2 pull-right" style="margin-top: 24px;">
						<button class="btn btn-primary" id="search-submit">Buscar</button>
					</div>
				</div>
			</div>
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
		var $content = $("#content-scroll");
		var $nav = $('.nav.navbar-nav');

		$.post('functions/data-products.php',
	    {
	    	filter: 0,
	        type: 'category',
	        param: 'equipamentos',
	    },
	    function(data)
	    {
	        $content.html(data).hide().fadeIn();
	    });

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
			    	filter: 0,
			        type: type,
			        param: page
			    },
			    function(data)
			    {
			        $content.html(data).hide().fadeIn();
			    });
			}
		});

		$('.panel.panel-default').find('a').click(function()
		{
			$(this).find('span').toggleClass('fa-caret-left fa-caret-down');
		});

		$('#search-submit').click(function(e)
		{
			var marca = $('#marca').val();
			var tipo_equipo = $('#tipo_equipo').val();
			var $element = $nav.find('a.active');
			console.log(marca + ' - ' + tipo_equipo);
			if (marca != '' || tipo_equipo != '')
			{
				$.post('functions/data-products.php',
			    {
			    	filter: 1,
			    	type: $element.data('type'),
			        param: $element.data('page'),
			        proveedor: marca,
			        ssub: tipo_equipo
			    },
			    function(data)
			    {
			        $content.html(data).hide().fadeIn();
			    });
			}
		});
	});
</script>

<?php endblock() ?>
