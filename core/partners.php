<?php

function print_header( $str )
{
	?>
		<h4 class="mt-xlg mb-none text-uppercase"><?=$str?></h4>
	<?php
}

function print_container()
{
	?>
		<div class="row">
			<ul class="portfolio-list">
	<?php
}

function close_container()
{
	?>
			</ul>
		</div>
	<?php
}

function print_item( $item )
{
	$src = "/img/products/".str_replace( ' ', '-', $item["nombre"] );
	if ( file_exists( $_SERVER[ 'DOCUMENT_ROOT' ].$src.".png" ) )
		$src .= ".png";
	else if( file_exists( $_SERVER[ 'DOCUMENT_ROOT' ].$src.".jpg" ) )
		$src .= ".jpg";
	else
		$src = '';//sin imagen agregar
	?>
		<li class="col-md-3 col-sm-6 col-xs-12">
			<div class="portfolio-item">
				<a href="#" target="_blank">
					<span class="thumb-info">
						<span class="thumb-info-wrapper">
							<img src="<?=$src?>" class="img-responsive" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-type"><?=$item["nombre"]?></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</li>
	<?php
}