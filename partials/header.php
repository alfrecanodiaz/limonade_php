<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
	<div class="header-body">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-logo">
						<a href="<?= get_url_page( 'index' ); ?>">
							<!-- <img alt="RD Medical SA" width="230" height="50" data-sticky-top="26" src="img/logo.png"> -->
							<img alt="RD Medical SA" width="230" height="40" data-sticky-top="26" src="img/logo.png">
						</a>
					</div>
				</div>
				<div class="header-column">
					<div class="header-row">
						
						<nav class="header-nav-top">
							<ul class="nav nav-pills">
								<!-- <li class="hidden-xs">
									<a href="<?= get_url_page( 'about-us' ); ?>"><i class="fa fa-angle-right"></i> Sobre Nós</a>
								</li> -->
								<!-- <li class="hidden-xs">
									<a href="<?= get_url_page( 'contact-us' ); ?>"><i class="fa fa-angle-right"></i> Entre em contato</a>
								</li> -->
								<li>
									<span class="ws-nowrap"><i class="fa fa-phone"></i> (+595) 994 847395</span>
								</li>
								<li>
									<a href="#" class="dropdown-menu-toggle" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										<img src="img/blank.gif" class="flag flag-<?= get_current_flag(); ?>" alt="Espanõl" /> 
										<?= get_current_lang(); ?>
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
										<li>
											<a href="<?= locate( remove_extension( clean_uri( $uri ) ), 'en' ); ?>">
											<img src="img/blank.gif" class="flag flag-us" alt="English" /> English</a>
										</li>
										<li>
											<a href="<?= locate( remove_extension( clean_uri( $uri ) ), 'es' ); ?>">
											<img src="img/blank.gif" class="flag flag-es" alt="Español" /> Español</a>
										</li>
										<li>
											<a href="<?= locate( remove_extension( clean_uri( $uri ) ), 'po' ); ?>">
											<img src="img/blank.gif" class="flag flag-br" alt="Português" /> Português</a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<div class="header-row">
						<div class="header-nav">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<ul class="header-social-icons social-icons hidden-xs">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<!-- <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li> -->
							</ul>
							<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li class="nav-li">
											<a class="nav-page sliding-middle-out" href="<?= get_url_page( 'index' ); ?>">Home</a>
										</li>
										<li class="nav-li">
											<a class="nav-page sliding-middle-out" href="<?= get_url_page( 'about-us' ); ?>">A Empresa</a>
										</li>
										<li class="nav-li">
											<a class="nav-page sliding-middle-out" href="<?= get_url_page( 'solucoes' ); ?>">Soluções</a>
										</li>
										<li class="dropdown nav-li">
											<a class="dropdown-toggle" href="#">
												Parceiros
											</a>
											<ul class="dropdown-menu">
												<!-- <li><a class="nav-page" href="<?= get_url_page( 'parceiro3' ); ?>">Alfamed</a></li> -->
												<li><a href="<?= get_url_page( 'parceiro2' ); ?>">Baumer</a></li>
												<!-- <li><a class="nav-page" href="<?= get_url_page( 'parceiro4' ); ?>">CDK</a></li> -->
												<!-- <li><a class="nav-page" href="parceiro1.php">RC Móveis</a></li> -->
												<li><a href="<?= get_url_page( 'parceiro6' ); ?>">Bionext</a></li>
											</ul>
										</li>
										
										<li class="nav-li">
											<a class="nav-page sliding-middle-out" href="<?= get_url_page( 'assist' ); ?>">Assistência Técnica</a>
										</li>
										<!-- <li class="nav-li">
											<a class="nav-page" href="<?= get_url_page( 'blog' ); ?>">Blog</a>
										</li> -->
										<li class="nav-li">
											<a class="nav-page sliding-middle-out" href="<?= get_url_page( 'contact-us' ); ?>">Contato</a>
										</li>
																				
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>