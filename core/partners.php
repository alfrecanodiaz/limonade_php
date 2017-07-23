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
		$images = get_products_images( $item[ 'nombre' ] );
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
	?>
			<div class="item active"><img src="img/sin_imagen.jpg"></div>
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

function get_products_images( $product )
{
	$product = str_replace( ' ', '-', $product );
	$dir = $_SERVER[ 'DOCUMENT_ROOT' ]."/img/products/$product";
	return glob( "$dir/*.{jpg,png}", GLOB_BRACE );
}

function get_real_path( $src )
{
	return strstr( $src, 'img' );
}