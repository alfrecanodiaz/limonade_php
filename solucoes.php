<?php require('master.php'); ?>

<?php startblock('title') ?>

<title><?=$page_title?></title>

<?php endblock() ?>

<?php startblock('meta') ?>

<?php endblock() ?>

<?php startblock('styles') ?>

<link rel="stylesheet" type="text/css" href="css/sidebar.css">
<link rel="stylesheet" type="text/css" href="css/products.css">

<style type="text/css">
	.partner .product-thumb-info .product-thumb-info-image:before {
	    background: none;
	}
	.partner-block {
		background: #f0f5f7;
    	border-top: 5px solid #f0f5f7;
    	border-radius: 5px;
    	padding: 15px;
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
						<ul class="nav navbar-nav" style="width: 100%;">
							<!-- Dropdown-->
							<li class="panel panel-default" id="dropdown">
								<a data-toggle="collapse" href="#equipamentos-lvl1" aria-expanded="true" data-param="equipamentos" data-type="category"> <!-- Open aria-expanded="true" -->
									 Equipamentos <span class="fa fa-caret-down"></span>
								</a>
								<!-- Dropdown level 1 -->
								<div id="equipamentos-lvl1" class="panel-collapse collapse in"> <!-- Open class = 'in' -->
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a class="active" data-param="novos" data-type="subcategory" data-info="native">Novos</a></li>
											<li><a data-param="seminovos" data-type="subcategory" data-info="button">Seminovos</a></li>
											<!-- Dropdown level 2 -->
											<!-- <li class="panel panel-default" id="dropdown">
												<a data-toggle="collapse" href="#equipamentos-lvl2" data-param="seminovos" data-type="subcategory">
													Seminovos <span class="fa fa-caret-left"></span>
												</a>
												<div id="equipamentos-lvl2" class="panel-collapse collapse">
													<div class="panel-body">
														<ul class="nav navbar-nav">
															<li><a data-param="imagens" data-type="subsubcategory">Imagens</a></li>
															<li><a data-param="cr" data-type="subsubcategory">CR</a></li>
														</ul>
													</div>
												</div>
											</li> -->
											<li>
												<a data-param="locação de equipamentos" data-type="subcategory" data-info="info">
													Locação de Equipamentos
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="panel panel-default" id="dropdown">
								<a data-toggle="collapse" href="#ortopedia-lvl1" data-param="ortopedia" data-type="category">
									 Ortopedia <span class="fa fa-caret-left"></span>
								</a>
								<!-- Dropdown level 1 -->
								<div id="ortopedia-lvl1" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a data-param="próteses de quadril" data-type="subcategory">Próteses de Quadril</a></li>
											<li><a data-param="próteses de joelho" data-type="subcategory">Próteses de Joelho</a></li>
											<li><a data-param="próteses de ombro" data-type="subcategory">Próteses de Ombro</a></li>
											<li><a data-param="não convencional" data-type="subcategory">Não Convencional</a></li>
											<li><a data-param="fixação intramedular" data-type="subcategory">Fixação Intramedular</a></li>
											<li><a data-param="fixação interna" data-type="subcategory">Fixação Interna</a></li>
											<li><a data-param="fixação externa" data-type="subcategory">Fixação Externa</a></li>
											<li><a data-param="biomateriais" data-type="subcategory">Biomateriais</a></li>
										</ul>
									</div>
								</div>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>

		</div>
		<div class="col-md-9">
			<div class="row" style="margin-bottom: 15px;">
				<div class="form-group" style="padding-right: 15px; padding-left: 15px;">
					<div class="col-md-5">
						<label>Marca</label>
						<!-- <input type="text" value="" class="form-control" name="marca" id="marca" placeholder="Ingrese la Marca"> -->
						<select class="form-control" id="marca" name="marca">
							<option value="" selected="">---</option>
							<option value="barrfab">Barrfab</option>
							<option value="baumer">Baumer</option>
						</select>
					</div>
					<div class="col-md-5">
						<label>Tipo de Equipo</label>
						<!-- <input type="text" value="" class="form-control" name="tipo_equipo" id="tipo_equipo" placeholder="Ingrese el Tipo de Equipo"> -->
						<select class="form-control" id="tipo_equipo" name="tipo_equipo">
							<option value="" selected="">---</option>
							<option value="focos cirúrgicos">Focos Cirúrgicos</option>
							<option value="mesas cirúrgicas">Mesas Cirúrgicas</option>
						</select>
					</div>
					<div class="col-md-2 pull-right" style="margin-top: 24px;">
						<button class="btn btn-primary" id="filter-submit">Buscar</button>
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

		post_data_partner('native', 'subcategory', 'novos');

		// $.post('functions/data-partners.php',
	 //    {
	 //    	data: 'native',
	 //        type: 'subcategory',
	 //        param: 'novos',
	 //    },
	 //    function(data)
	 //    {
	 //        $content.html(data).hide().fadeIn();
	 //    });

		// $.post('functions/data-products.php',
	 //    {
	 //    	filter: 0,
	 //        type: 'category',
	 //        param: 'equipamentos',
	 //    },
	 //    function(data)
	 //    {
	 //        $content.html(data).hide().fadeIn();
	 //    });

		$nav.find('a').click(function()
		{
			$nav.find('a.active').removeClass('active');
			$(this).addClass('active');

			// var type = $(this).data('type');
			// var param = $(this).data('param');
			// console.log($(this).data('info'));
			post_data_partner($(this).data('info'), $(this).data('type'), $(this).data('param'));
			// if (param != '' && type != '')
			// {
			// 	$.post('functions/data-products.php',
			//     {
			//     	filter: 0,
			//         type: type,
			//         param: param
			//     },
			//     function(data)
			//     {
			//         $content.html(data).hide().fadeIn();
			//     });
			// }
		});

		$('.panel.panel-default').find('a').click(function()
		{
			$(this).find('span').toggleClass('fa-caret-left fa-caret-down');
		});

		$('#filter-submit').click(function(e)
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
			    	// type: $element.data('type'),
			        // param: $element.data('param'),
			        proveedor: marca,
			        ssub: tipo_equipo
			    },
			    function(data)
			    {
			        $content.html(data).hide().fadeIn();
			    });
			}
		});

		$content.on('click', 'a.partner-info', function(e)
		{
			e.preventDefault();
			e.stopImmediatePropagation();
			var $element = $(this).parent('li');
			$.post('functions/data-products.php',
		    {
		    	filter: 0,
		        type: $element.data('type'),
		        param: $element.data('partner'),
		    },
		    function(data)
		    {
		        $content.html(data).hide().fadeIn();
		    });
		});

		function post_data_partner(data, type, param)
		{
			$.post('functions/data-partners.php',
		    {
		    	data: data,
		        type: type,
		        param: param,
		    },
		    function(data)
		    {
		        $content.html(data).hide().fadeIn();
		    });
		}
	});
</script>

<?php endblock() ?>
