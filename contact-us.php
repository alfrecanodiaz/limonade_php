<?php require('master.php'); ?>

<?php startblock('title') ?>

	<title><?=$page_title?></title>

<?php endblock() ?>

<?php startblock('meta') ?>

<?php endblock() ?>

<?php startblock('styles') ?>

<?php endblock() ?>

<?php startblock('content') ?>

	<div role="main" class="main">

		<section class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li class="active">Contato</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1>Contato</h1>
					</div>
				</div>
			</div>
		</section>

		<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
		<div id="googlemaps" class="google-map"></div>

		<div class="container">

			<div class="row">
				<div class="col-md-6">

					<div class="alert alert-success hidden" id="contactSuccess">
						<strong>Success!</strong> Your message has been sent to us.
					</div>

					<div class="alert alert-danger hidden" id="contactError">
						<strong>Error!</strong> There was an error sending your message.
					</div>

					<h2 class="mb-sm mt-sm"><strong>Fale</strong> Conosco</h2>
					<form id="contactForm" action="php/contact-form.php" method="POST">
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label>Seu nome *</label>
									<input type="text" value="" data-msg-required="*Campo obrigatório." maxlength="100" class="form-control" name="name" id="name" required>
								</div>
								<div class="col-md-6">
									<label>Seu endereço de e-mail *</label>
									<input type="email" value="" data-msg-required="*Campo obrigatório.	" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Assunto *</label>
									<input type="text" value="" data-msg-required="*Campo obrigatório." maxlength="100" class="form-control" name="subject" id="subject" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Mensagem *</label>
									<textarea maxlength="5000" data-msg-required="*Campo obrigatório." rows="10" class="form-control" name="message" id="message" required></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Enviar Mensagem" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">

					<h4 class="heading-primary mt-lg">É importante para nós seu <strong>contato</strong></h4>
					<p>Utilize uma das formas abaixo para falar conosco, será um prazer atendê-los.</p>

					<hr>

					<h4 class="heading-primary">Nosso <strong>Escritório</strong></h4>
					<ul class="list list-icons list-icons-style-3 mt-xlg">
						<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> Gral. Abdón Caballero Nº 489 casi Ybyturusu Campo Grande - Luque</li>
						<li><i class="fa fa-phone"></i> <strong>Phone:</strong> (+595) 994 847395</li>
						<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:contacto@rdmedical.com.py">contacto@rdmedical.com.py</a></li>
					</ul>

					<hr>

					<h4 class="heading-primary">Horário de <strong>Funcionamento</strong></h4>
					<ul class="list list-icons list-dark mt-xlg">
						<li><i class="fa fa-clock-o"></i> Segunda - Sexta 9h às 17h</li>
						<li><i class="fa fa-clock-o"></i> Sábado - 9h às 14h</li>
						<li><i class="fa fa-clock-o"></i> Domingo - Fechado</li>
					</ul>

				</div>

			</div>

		</div>

	</div>

	<section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="call-to-action-content">
						<h3>A <strong>máquina nova ou semi-nova</strong> que você precisa <strong>está</strong> aqui!</h3>
						<p>Acesse agora mesmo nosso <strong>catálogo</strong> e veja.</p>
					</div>
					<div class="call-to-action-btn">
						<a href="solucoes.php" target="_blank" class="btn btn-lg btn-primary">Confira!</a><span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -12px;"></span>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endblock() ?>

<?php startblock('scripts') ?>

	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<!-- Current Page Vendor and Views -->
	<script src="js/views/view.contact.js"></script>

	<script>

		/*
		Map Settings

			Find the Latitude and Longitude of your address:
				- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
				- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

		*/

		// Map Markers
		var mapMarkers = [{
			address: "Gral. Abdón Caballero Nº 489 casi Ybyturusu Campo Grande - Luque",
			html: "<strong>RD Medical S.A</strong><br>Luque - Paraguay",
			icon: {
				image: "img/pin.png",
				iconsize: [26, 46],
				iconanchor: [12, 46]
			},
			popup: true
		}];

		// Map Initial Location
		var initLatitude = -25.287228;
		var initLongitude = -57.5398179;

		// Map Extended Settings
		var mapSettings = {
			controls: {
				draggable: (($.browser.mobile) ? false : true),
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: true,
				streetViewControl: true,
				overviewMapControl: true
			},
			scrollwheel: false,
			markers: mapMarkers,
			latitude: initLatitude,
			longitude: initLongitude,
			zoom: 16
		};

		var map = $("#googlemaps").gMap(mapSettings);

		// Map Center At
		var mapCenterAt = function(options, e) {
			e.preventDefault();
			$("#googlemaps").gMap("centerAt", options);
		}

	</script>

<?php endblock() ?>