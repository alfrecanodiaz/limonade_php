<?php require('master.php'); ?>

<?php startblock('title') ?>

	<title><?=$page_title?> - Equipamentos médicos Hospitalares, Software para PACS e Telemedicina</title>

<?php endblock() ?>

<?php startblock('meta') ?>

<?php endblock() ?>

<?php startblock('styles') ?>

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
	<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css" media="screen">
	<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css" media="screen">
	<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen">

	<style type="text/css">
		.rev_slider .slotholder:after, .rev_slider .slotholder .kenburnimg img:after {
		    width: 100%;
		    height: 100%;
		    content: "";
		    position: absolute;
		    left: 0;
		    top: 0;
		    pointer-events: none;
		    z-index: 99;
		    background: rgba(0,0,0,.5);
		}
		.slider-container .main-label {
			line-height: 130px;
		}
	</style>

<?php endblock() ?>

<?php startblock('content') ?>

	<div role="main" class="main">

		<div class="slider-container rev_slider_wrapper" style="height: 677px;">
			<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 800, "gridheight": 400}'>
				<ul>
					<li data-transition="fade">
						<img src="img/slides/slide-bg-1.jpg"  
							alt=""
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat" 
							class="rev-slidebg">

						<div class="tp-caption"
							data-x="center" data-hoffset="-150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

						<div class="tp-caption top-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-95"
							data-start="500"
							style="z-index: 5;"
							data-transform_in="y:[-300%];opacity:0;s:500;">Estamos aqui para</div>

						<div class="tp-caption"
							data-x="center" data-hoffset="150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

						<div class="tp-caption main-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-45"
							data-start="1500"
							data-whitespace="nowrap"						 
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							style="z-index: 5"
							data-mask_in="x:0px;y:0px;">Promover</div>

						<div class="tp-caption bottom-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="5"
							data-start="2000"
							style="z-index: 5"
							data-transform_in="y:[100%];opacity:0;s:500;">cuidados com a vida.</div>

						
					<li data-transition="fade">
						<img src="img/slides/slide-bg-2.jpg"  
							alt=""
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat" 
							class="rev-slidebg">

						<div class="tp-caption"
							data-x="center" data-hoffset="-150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

						<div class="tp-caption top-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-95"
							data-start="500"
							style="z-index: 5"
							data-transform_in="y:[-300%];opacity:0;s:500;">Comercializar</div>

						<div class="tp-caption"
							data-x="center" data-hoffset="150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

						<div class="tp-caption main-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-45"
							data-start="1500"
							data-whitespace="nowrap"						 
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							style="z-index: 5"
							data-mask_in="x:0px;y:0px;">Soluções</div>

						<div class="tp-caption bottom-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="5"
							data-start="2000"
							style="z-index: 5"
							data-transform_in="y:[100%];opacity:0;s:500;">seguras, confiáveis e sustentáveis para a saúde.</div>

					
					<li data-transition="fade">
						<img src="img/slides/slide-bg-3.jpg"  
							alt=""
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat" 
							class="rev-slidebg">

						<div class="tp-caption"
							data-x="center" data-hoffset="-150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

						<div class="tp-caption top-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-95"
							data-start="500"
							style="z-index: 5"
							data-transform_in="y:[-300%];opacity:0;s:500;">Temos os melhores</div>

						<div class="tp-caption"
							data-x="center" data-hoffset="150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

						<div class="tp-caption main-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-45"
							data-start="1500"
							data-whitespace="nowrap"						 
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							style="z-index: 5"
							data-mask_in="x:0px;y:0px;">Equipamentos</div>

						<div class="tp-caption bottom-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="5"
							data-start="2000"
							style="z-index: 5"
							data-transform_in="y:[100%];opacity:0;s:500;">do mundo.</div>

						
					<li data-transition="fade">
						<img src="img/slides/slide-bg-4.jpg"  
							alt=""
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat" 
							class="rev-slidebg">

						<div class="tp-caption"
							data-x="center" data-hoffset="-150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

						<div class="tp-caption top-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-95"
							data-start="500"
							style="z-index: 5"
							data-transform_in="y:[-300%];opacity:0;s:500;">Nosso objetivo </div>

						<div class="tp-caption"
							data-x="center" data-hoffset="150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

						<div class="tp-caption main-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-45"
							data-start="1500"
							data-whitespace="nowrap"						 
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							style="z-index: 5"
							data-mask_in="x:0px;y:0px;">Atingir</div>

						<div class="tp-caption bottom-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="5"
							data-start="2000"
							style="z-index: 5"
							data-transform_in="y:[100%];opacity:0;s:500;">a excelência nos serviços prestados.</div>

				
					<li data-transition="fade">
						<img src="img/slides/slide-bg-5.jpg"  
							alt=""
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat" 
							class="rev-slidebg">

						<div class="tp-caption"
							data-x="center" data-hoffset="-150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

						<div class="tp-caption top-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-95"
							data-start="500"
							style="z-index: 5"
							data-transform_in="y:[-300%];opacity:0;s:500;">Temos parceria com os</div>

						<div class="tp-caption"
							data-x="center" data-hoffset="150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

						<div class="tp-caption main-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-45"
							data-start="1500"
							data-whitespace="nowrap"						 
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							style="z-index: 5"
							data-mask_in="x:0px;y:0px;">Melhores</div>

						<div class="tp-caption bottom-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="5"
							data-start="2000"
							style="z-index: 5"
							data-transform_in="y:[100%];opacity:0;s:500;">fornecedores do mercado.</div>

			
					</div>
			</div>
		</div>

		<div class="home-intro" id="home-intro">
			<div class="container">

				<div class="row">
					<div class="col-md-8">
						<p>
							Equipamentos novos e semi-novos revisados e com <em>garantia!</em>
							<span>São diversas marcas e modelos para atender as suas necessidades.</span>
						</p>
					</div>
					<div class="col-md-4">
						<div class="get-started">
							<a href="<?= get_url_page( 'solucoes' ); ?>" class="btn btn-lg btn-primary">Veja agora!</a>
							<div class="learn-more"><a href="<?= get_url_page( 'solucoes' ); ?>"></a></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 text-center">
						<button id="scroll-down" style="background: none !important; border:none !important;">
							<i class="fa fa-chevron-down" style="color: white; font-size: 35px;"></i>
						</button>
					</div>
				</div>

			</div>
		</div>

		<div class="container">

			<div class="row center">
				<div class="col-md-12">
					<h2 class="mb-sm word-rotator-title">
						A <strong>RD Medical</strong> está há mais de 20 anos oferecendo soluções em cuidados para a saúde.
					</h2>
					<p class="lead">
						<?= trans( 'prueba' ) ?>
					</p>
				</div>
			</div>

		</div>

		<div class="container">
			<div class="row center">
				<div class="col-md-12">
					<img src="img/dark-and-light.jpg" class="img-responsive appear-animation" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 45px 0px -30px;"> 
				</div>
			</div>
		</div>

		<section class="section">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-check"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-none">Equipamentos Hospitalares</h4>
										<!-- <p class="tall">Equipe RD Medical, favor indicar um resumo para <span class="alternative-font">preencher</span> esses textos.</p> -->
									</div>
								</div>
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-check"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-none">Sistema de PACS/RIS</h4>
										<!-- <p class="tall">Equipe RD Medical, favor indicar um resumo para <span class="alternative-font">preencher</span> esses textos.</p> -->
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-check"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-none">Teleradiologia</h4>
										<!-- <p class="tall">Equipe RD Medical, favor indicar um resumo para <span class="alternative-font">preencher</span> esses textos.</p> -->
									</div>
								</div>
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-check"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-none">Produtos Biotecnológicos</h4>
										<!-- <p class="tall">Equipe RD Medical, favor indicar um resumo para <span class="alternative-font">preencher</span> esses textos.</p> -->
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-check"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-none">Digitalizador de Imagens Radiológicas (CR)</h4>
										<!-- <p class="tall">Equipe RD Medical, favor indicar um resumo para <span class="alternative-font">preencher</span> esses textos.</p> -->
									</div>
								</div>
								</div>
								<div class="col-md-4">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-check"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-none">Manutenção de Equipamentos</h4>
										<!-- <p class="tall">Equipe RD Medical, favor indicar um resumo para <span class="alternative-font">preencher</span> esses textos.</p> -->
									</div>
								</div>
								</div>
								<div class="col-md-4">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-check"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-none">Cursos de Capacitação em Radiologia</h4>
										<!-- <p class="tall">Equipe RD Medical, favor indicar um resumo para <span class="alternative-font">preencher</span> esses textos.</p> -->
									</div>
								</div>
								</div>
								<div class="col-md-4">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-check"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-none">Próteses e Materiais de Osteossíntese.</h4>
										<!-- <p class="tall">Equipe RD Medical, favor indicar um resumo para <span class="alternative-font">preencher</span> esses textos.</p> -->
									</div>
								</div>
								</div>
								<div class="col-md-4">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="fa fa-check"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-none">Partes e Peças de Reposição</h4>
										<!-- <p class="tall">Equipe RD Medical, favor indicar um resumo para <span class="alternative-font">preencher</span> esses textos.</p> -->
									</div>
	                              </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

			<div class="container">
				<div class="row"></div>
			</div>
		</div>
		</div>
		</div>
			</div>
		</div>
		</div>
		</div>
		</div>
		<div class="row center">

		<div class="container">
			<div class="row center">
				<div class="col-md-12">
					<h2 class="mb-none word-rotator-title mt-lg">
						Somos distribuidores
						<strong>
							<span class="word-rotate" data-plugin-options='{"delay": 3500, "animDelay": 400}'>
								<span class="word-rotate-items">
									<span>oficiais</span>
									<span>exclusivos</span>
								</span>
							</span>
						</strong>
						das melhores
					</h2>
					<p class="lead">marcas de equipamentos médicos.</p>
				</div>
			</div>
			<div class="row center mt-xl">
				<div class="owl-carousel owl-theme" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
					<div>
						<img class="img-responsive" src="img/logos/logo-1.png" alt="">
					</div>
					<!-- <div>
						<img class="img-responsive" src="img/logos/logo-2.png" alt="">
					</div> -->
					<!-- <div>
						<img class="img-responsive" src="img/logos/logo-3.png" alt="">
					</div> -->
					<!-- <div>
						<img class="img-responsive" src="img/logos/logo-4.png" alt="">
					</div> -->
					<div>
						<img class="img-responsive" src="img/logos/logo-06.png" alt="">
					</div>
					<div>
						<img class="img-responsive" src="img/logos/logo-07.png" alt="">
					</div>
					<!-- <div>
						<img class="img-responsive" src="img/logos/logo-08.png" alt="">
					</div> -->
					<div>
						<img class="img-responsive" src="img/logos/logo-09.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="call-to-action-content">
							<h3>Conheça um pouco mais de nossos parceiros.</h3>
							<p>Saiba mais sobre as marcas, informações sobre os produtos, baixe os catálogos dos produtos.</p>
						</div>
						<div class="call-to-action-btn">
							<a href="<?= get_url_page( 'solucoes' ); ?>" target="" class="btn btn-lg btn-primary">Clique Aqui!</a><span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -12px;"></span>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

<?php endblock() ?>

<?php startblock('scripts') ?>

	<!-- Current Page Vendor and Views -->
	<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
	<script src="js/views/view.home.js"></script>

	<script type="text/javascript">
		$(document).ready(function()
		{
			$('#scroll-down').click(function()
			{
				var $target = $('html,body');
				// console.log($target.height());
				$target.animate({scrollTop: /*$target.height()*/ 600}, 1000);
			});
		});
	</script>

<?php endblock() ?>