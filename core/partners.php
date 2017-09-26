<?php

function print_header( $cat )
{
	?>
		<div class="row" id="first">
			<div class="col-md-6">
				<h1 class="shop-title mb-none"><?=ucwords($cat)?></h1>
			</div>
		</div>
	<?php
}

function print_container()
{
	?>
		<div class="row">
			<ul class="products product-thumb-info-list" data-plugin-masonry>
	<?php
}

function close_container()
{
	?>
			</ul>
		</div>
	<?php
}

function print_item( $partner )
{
	$src = get_partner_single_image( $partner );
	?>
		<li class="col-md-3 col-sm-6 col-xs-12 partner" data-partner="<?=$partner?>" data-type="partner">
			<a class="partner-info">
				<span class="product-thumb-info">
					<span class="product-thumb-info-image">
						<img alt="" class="img-responsive" src="<?=$src?>">
					</span>
				</span>
			</a>
		</li>
	<?php
}

function get_partner_single_image( $partner )
{
	$src = "/img/logos/$partner";
	if ( file_exists( $_SERVER[ 'DOCUMENT_ROOT' ] . $src . ".png" ) )
		$src .= ".png";
	else if( file_exists( $_SERVER[ 'DOCUMENT_ROOT' ] . $src . ".jpg" ) )
		$src .= ".jpg";
	else
		$src = '';//sin imagen agregar

	return $src;
}

function format_data_partner( $data )
{
	$partners = [];
	while( $row = $data->fetch_assoc() )
	{
		if ( !in_array( $row[ "proveedor" ], $partners ) )
			$partners[] = $row[ "proveedor" ];
	}
	return $partners;
}

function make_html( $data, $param )
{
	$html = '';

	if ( $data->num_rows )
	{
		$count = 0;
		$init = true;
		$partners = format_data_partner( $data );
		// while( $row = $data->fetch_assoc() )
		foreach ($partners as $key => $partner)
		{
			if ( $init )
			{
				$html .= print_header( $param );
				$html .= print_container();
				$init = false;
			}

			if ( $count == 3 )
			{
				$html .= close_container();
				$html .= print_container();
				$count = 0;
			}

			$html .= print_item( $partner );

			$count++;
		}
		$html .= close_container();
	}

	return $html;
}

function get_info()
{
	?>
		<div class="row">
			<div class="col-md-8 text-center partner-block" style="margin-top: 20px;">
				<h4 class="shop-title">Ventajas de Alquilar Equipos con RD MEDICAL S.A.:</h4>
				<ol style="text-align: left;">
					<li>Trabajamos con el mejor precio del mercado, con marcas y modelos de</li>
					reconocida experiencia.
					<li>Garantizamos la entrega de los equipamientos sin defectos, pasando por
					nuestro control de calidad que realiza revisiones periódicas.</li>
					<li>Sustitución inmediata de los equipos si presentan defectos.</li>
					<li>Fortalecemos el soporte técnico ofreciendo capacitaciones y
					entrenamiento a los operadores.</li>
					<li>Bajo costo de inversión, es decir, disminución del costo administrativo de
					adquisición de uno nuevo.</li>
					<li>Actualización tecnológica con bajo costo.</li>
					<li>Pago de valores fijos durante el tiempo necesario de uso.</li>
					<li>Reducción de gastos de mantenimientos preventivos y correctivos.</li>
				</ol>
				<?=print_newsletter()?>
			</div>
		</div>
	<?php
}

function get_newsletter()
{
	?>
		<div class="row">
			<div class="col-md-8 text-center partner-block" style="margin-top: 20px;">
				<?=print_newsletter()?>
			</div>
		</div>
	<?php
}

function print_newsletter()
{
	?>
		<div class="newsletter">
			<h4 class="shop-title">Newsletter</h4>
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
	<?php
}

/*
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
	$src = get_product_single_image( $item[ "id" ] );
	?>
		<li class="col-md-3 col-sm-6 col-xs-12">
			<div class="portfolio-item">
				<a href="#" data-toggle="modal" data-target="#product_<?=$item['id']?>">
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

function print_modal( $item )
{
	?>
		<div class="modal fade product_view" id="product_<?=$item['id']?>">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header" style="border-bottom: none; padding: 5px;">
		                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		            </div>
		            <div class="modal-body">
		                <div class="row">
		                    <div class="col-md-6 product_img">
		                        <?php print_slider( $item ) ?>
		                    </div>
		                    <div class="col-md-6 product_content">
		                    	<h3 class="modal-product-title"><?=$item['nombre']?></h3>
		                        <h4 class="modal-product-subtitle"><?=$item['tipo']?></h4>
		                        <p><?=$item['descripcion']?></p>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	<?php
}

function print_slider( $item )
{
	?>
		<div id="carousel-<?=$item['id']?>" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
	<?php
		$images = get_products_images( $item[ 'id' ] );
		$count = 0;
		if ( !empty( $images ) ) {
		    foreach ( $images as $key => $img ) {
	?>
			    <div class="item <?php if($count == 0) {echo 'active';} ?>"><img src="<?=get_real_path( $img )?>"></div>
	<?php 
				$count++;
			}
	?>
	<?php 
		}
		else
		{
			$src = get_product_single_image( $item[ "id" ] );
	?>
			<div class="item active"><img src="<?=$src?>"></div>
	<?php
		}
	?>
			</div>
			<a class="left carousel-control" href="#carousel-<?=$item['id']?>" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-<?=$item['id']?>" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	<?php
}

function get_product_single_image( $id )
{
	$src = "/img/products/$id";
	if ( file_exists( $_SERVER[ 'DOCUMENT_ROOT' ] . $src . ".png" ) )
		$src .= ".png";
	else if( file_exists( $_SERVER[ 'DOCUMENT_ROOT' ] . $src . ".jpg" ) )
		$src .= ".jpg";
	else
		$src = '';//sin imagen agregar

	return $src;
}

function get_products_images( $id )
{
	$dir = $_SERVER[ 'DOCUMENT_ROOT' ]."/img/products/$id";
	return glob( "$dir/*.{jpg,png}", GLOB_BRACE );
}

function get_real_path( $src )
{
	return strstr( $src, 'img' );
}*/