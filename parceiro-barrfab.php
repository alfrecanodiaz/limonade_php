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

<div role="main" class="main">
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Parceiros</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>Parceiros</h1>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				
				<div>
					<span class="img-thumbnail">
						
						<img alt="" height="300" class="img-responsive" src="img/logos/logo-10.png">
					</span>
				</div>
				
			</div>
			<div class="col-md-8">
				<h2 class="mb-none"><strong>Barrfab</strong></h2>
				<h4 class="heading-primary">Equipamentos Hospitalares</h4>
				<hr class="solid">
				<p>Mais uma grande empresa fabricante de mesas Cirúrgicas parceira da RD Medical S.A., que tem como objetivo principal entregar aos nossos clientes o melhor possível com excelente custo benefício, dessa forma criamos uma parceria sólida a fim de não só vender um produto, mas sim uma solução completa, prezando muito pelo pós venda, e satisfação dos clientes.</p>
				<p>MELHORIA CONTÍNUA em produtos e processos, oferecendo assim diferencial em qualidade e benefícios destas melhorias aos seus clientes. Melhorar todo dia em busca do aumento da probabilidade de exceder a expectativa do cliente no atendimento de suas necessidades e por meio de análise critica de tendência, visualizar onde a organização encontra-se e planejar aonde quer chegar, agregando valor ao seu produto.</p>
				
				<p>CUSTO X BENEFÍCIO oferecido e entregue em um único produto, ou seja, um equipamento que atende os necessidades e supera as expectativas do cliente.</p>
				<br>
			</div>

			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
			</div>

		</div>
	</div>

<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4 class="mt-xlg mb-none text-uppercase">Equipamentos <strong>Hospitalares</strong></h4>

			<div id="data-wrapper"></div>
			
		</div>
	</div>
</div> -->

</div>

<?php endblock() ?>

<?php startblock('scripts') ?>

<!-- <script type="text/javascript">
	$(document).ready(function()
	{
		$.post('functions/data-partners.php',
	    {
	        param: 'barrfab'
	    },
	    function(data)
	    {
	        $("#data-wrapper").html(data).hide().fadeIn();
	    });	
	});
</script> -->

<?php endblock() ?>