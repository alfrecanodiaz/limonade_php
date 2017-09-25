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

function print_item( $item )
{
	$src = get_product_single_image( $item[ "id" ] );
	?>
		<li class="col-md-3 col-sm-6 col-xs-12 product">
			<span class="product-thumb-info">
				<a data-toggle="modal" data-target="#product_<?=$item['id']?>">
					<span class="product-thumb-info-image">
						<span class="product-thumb-info-act">
							<span class="product-thumb-info-act-left"><em>Ver</em></span>
							<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Detalhes</em></span>
						</span>
						<img alt="" class="img-responsive" src="<?=$src?>">
					</span>
				</a>
				<span class="product-thumb-info-content">
					<a data-toggle="modal" data-target="#product_<?=$item['id']?>">
						<h4><?=$item["nombre"]?></h4>
						<span class="price">
						</span>
					</a>
				</span>
			</span>
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
}

function print_message()
{
	?>
		<div class="row" id="first">
			<div class="col-md-8 text-center" style="margin-top: 20px;">
				<p style="font-size: 20px;font-weight: bold;">No se han encontrado productos disponibles.</p>
			</div>
		</div>
	<?php
}

function make_html( $data )
{
	$html = '';

	if ( $data->num_rows )
	{
		$linea = '';
		$count = 0;
		$init = true;
		while( $row = $data->fetch_assoc() )
		{
			if ( $init )
			{
				$linea = $row[ "linea" ];
				$html .= print_header( $row[ "linea" ] );
				$html .= print_container();
				$init = false;
			}

			if ( $linea != $row[ "linea" ] )
			{
				$linea = $row[ "linea" ];
				$html .= close_container();
				$html .= print_header( $row[ "linea" ] );
				$html .= print_container();
				$count = 0;
			}

			if ( $count == 3 )
			{
				$html .= close_container();
				$html .= print_container();
				$count = 0;
			}

			$html .= print_item( $row );
			$html .= print_modal( $row );

			$count++;
		}
		$html .= close_container();
	}
	else
	{
		$html .= print_message();
	}

	return $html;
}