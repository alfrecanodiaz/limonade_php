<footer id="footer">
	<div class="container">
		<div class="row footer-top">
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
						<li><p><i class="fa fa-phone"></i> <strong>Telefone:</strong>(+595) 981 850663</p></li>
						<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:contacto@rdmedical.com.py">contacto@rdmedical.com.py</a></p></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<h4>Siga-nos</h4>
				<ul class="social-icons">
					<li class="social-icons-facebook" style="box-shadow: none;">
						<a href="http://www.facebook.com/" target="_blank" title="Facebook" style="margin-left: 25px;">
							<i class="fa fa-facebook fa-center"></i>
						</a>
					</li>
					<!-- <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
					<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li> -->
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright" style="padding: 25px 0 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<a href="<?= get_url_page( 'index' ); ?>" class="logo">
						<img alt="RD Medical SRL" class="img-responsive" src="img/logo-footer.png">
					</a>
				</div>
				<div class="col-md-4">
					<p>© Copyright 2017. Todos os direitos reservados.</p>
				</div>
				<div class="col-md-6 text-left">
					Desenvolvido por <a href="http://www.zentcode.com/" target="_blank">Zentcode</a>
				</div>
			</div>
			<!-- <div class="row">
					<div class="col-md-12 text-center" style="margin-bottom: 2px;">
							Desenvolvido por <a href="http://www.zentcode.com/" target="_blank">Zentcode</a>
					</div>
			</div> -->
		</div>
	</div>
</footer>
