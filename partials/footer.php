<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="footer-ribbon">
				<span>Entre em contato</span>
			</div>
			<div class="col-md-3">
				<div class="newsletter">
					<h4>Newsletter</h4>
					<p>Acompanhe nossos recursos e tecnologia sempre em evolução. Insira o seu e-mail para receber nossa newsletter.</p>

					<div class="alert alert-success hidden" id="newsletterSuccess">
						<strong>Sucesso!</strong> Você foi adicionado a nossa Newsletter.
					</div>

					<div class="alert alert-danger hidden" id="newsletterError"></div>

					<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
						<div class="input-group">
							<input class="form-control" placeholder="Seu e-mail" name="newsletterEmail" id="newsletterEmail" type="text">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Inscrever!</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3">
			<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "", "count": 2}'>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-details">
					<h4>Fale Conosco</h4>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> <strong>Endereço:</strong> Gral. Abdón Caballero Nº 489 casi Ybyturusu Campo Grande - Luque</p></li>
						<li><p><i class="fa fa-phone"></i> <strong>Telefone:</strong> (+595) 994 847395</p></li>
						<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">contacto@rdmedical.com.py</a></p></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<h4>Siga-nos</h4>
				<ul class="social-icons">
					<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<!-- <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
					<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li> -->
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-1">
					<a href="index.php" class="logo">
						<img alt="RD Medical SRL" class="img-responsive" src="img/logo.png">
					</a>
				</div>
				<div class="col-md-7">
					<p>© Copyright 2017. Todos os direitos reservados.</p>
				</div>
				<div class="col-md-4">
					<nav id="sub-menu">
						<ul>
							
							<li>Desenvolvido por <a href="http://pazzetto.com" target="_blank">Pazzetto.com</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</footer>