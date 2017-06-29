<?php require('master.php'); ?>

<?php startblock('title') ?>

	<title><?=$page_title?></title>

<?php endblock() ?>

<?php startblock('meta') ?>

<?php endblock() ?>

<?php startblock('styles') ?>

<style type="text/css">
	.portfolio-item .img-responsive {
		height: 100% !important;
		max-height: 100% !important;
	}
	.fa.fa-circle {
		font-size: 12px !important;
		margin-top: 2px;
	}
	.feature-box .feature-box-icon {
	    display: flex;
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
							<li class="active">Assistência</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1>Assistência Técnica e Manutenção</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="container">

				<div class="row" style="text-align: justify;">
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-circle"></i>
									</div>
									<div class="feature-box-info">
										<p class="tall">Executamos Assistência Técnica em diversas marcas e
										modelos de equipamentos médico-hospitalares com a
										mais alta tecnologia e profissionalismo.
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-circle"></i>
									</div>
									<div class="feature-box-info">
										<p class="tall" style="color: rgb(0, 79, 128);">Contamos com corpo técnico altamente qualificado e
										equipamentos de última geração garantindo segurança e
										confiabilidade.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-circle"></i>
									</div>
									<div class="feature-box-info">
										<p class="tall">Estrutura totalmente voltada para satisfação do cliente.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-circle"></i>
									</div>
									<div class="feature-box-info">
										<p class="tall" style="color: rgb(0, 79, 128);">Fornecimento de peças, placas e tubos para
										tomografia e mamografia, Siemens e General Electric.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-circle"></i>
									</div>
									<div class="feature-box-info">
										<p class="tall">Reloaded y revitalización de tubos para Tomografía.</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-6 col-md-offset-2">
						<img src="img/parceiro/asistencia.png" class="img-responsive" alt="" style="width: 470px; height: auto;">
					</div>
				</div>
			</div>
		</section>

<?php endblock() ?>

<?php startblock('scripts') ?>

<?php endblock() ?>