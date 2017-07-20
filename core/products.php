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
	// $src = "img/products/".format_product_name( $item["nombre"] );
	$src = "/img/products/".str_replace( ' ', '-', $item["nombre"] );
	if ( file_exists( $_SERVER[ 'DOCUMENT_ROOT' ].$src.".png" ) )
		$src .= ".png";
	else if( file_exists( $_SERVER[ 'DOCUMENT_ROOT' ].$src.".jpg" ) )
		$src .= ".jpg";
	else
		$src = '';
	?>
		<li class="col-md-3 col-sm-6 col-xs-12 product">
			<!-- <a href="">
			</a> -->
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
					<a href="">
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
		            <!-- <div class="modal-header">
		                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		                <h3 class="modal-title"><?=$item['nombre']?></h3>
		            </div> -->
		            <div class="modal-body">
		                <div class="row">
		                    <div class="col-md-6 product_img">
		                        <!-- <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive"> -->
		                        <?php print_slider( $item ) ?>
		                    </div>
		                    <div class="col-md-6 product_content">
		                    	<h3 class="modal-product-title"><?=$item['nombre']?></h3>
		                        <h4 class="modal-product-subtitle"><?=$item['tipo']?></h4>
		                        <!-- <div class="rating">
		                            <span class="glyphicon glyphicon-star"></span>
		                            <span class="glyphicon glyphicon-star"></span>
		                            <span class="glyphicon glyphicon-star"></span>
		                            <span class="glyphicon glyphicon-star"></span>
		                            <span class="glyphicon glyphicon-star"></span>
		                            (10 reviews)
		                        </div> -->
		                        <p><?=$item['descripcion']?></p>
		                        <!-- <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 75.00 <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>
		                        <div class="row">
		                            <div class="col-md-4 col-sm-6 col-xs-12">
		                                <select class="form-control" name="select">
		                                    <option value="" selected="">Color</option>
		                                    <option value="black">Black</option>
		                                    <option value="white">White</option>
		                                    <option value="gold">Gold</option>
		                                    <option value="rose gold">Rose Gold</option>
		                                </select>
		                            </div>
		                            <div class="col-md-4 col-sm-6 col-xs-12">
		                                <select class="form-control" name="select">
		                                    <option value="">Capacity</option>
		                                    <option value="">16GB</option>
		                                    <option value="">32GB</option>
		                                    <option value="">64GB</option>
		                                    <option value="">128GB</option>
		                                </select>
		                            </div>
		                            <div class="col-md-4 col-sm-12">
		                                <select class="form-control" name="select">
		                                    <option value="" selected="">QTY</option>
		                                    <option value="">1</option>
		                                    <option value="">2</option>
		                                    <option value="">3</option>
		                                </select>
		                            </div>
		                        </div>
		                        <div class="space-ten"></div>
		                        <div class="btn-ground">
		                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
		                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Add To Wishlist</button>
		                        </div> -->
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
	// $product = format_product_name( $product );
	$product = str_replace( ' ', '-', $product );
	$dir = $_SERVER[ 'DOCUMENT_ROOT' ]."/img/products/$product";
	return glob( "$dir/*.{jpg,png}", GLOB_BRACE );
}

function get_real_path( $src )
{
	return strstr( $src, 'img' );
}