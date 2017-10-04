<?php content_for('title'); ?>

<title>Prueba titulo</title>

<?php end_content_for(); ?>

<?php content_for('meta'); ?>

<?php end_content_for(); ?>

<?php content_for('styles'); ?>

<style type="text/css">
	p {
		color:red;
	}
</style>

<?php end_content_for(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				<h1><?php echo $saludo; ?></h1>
			</div>
			<div class="col-md-4">
				<?php
					echo Form::simpleInput('nombre', 'Nombre', null, ['data-send' => 'prueba data']);
					echo Form::simpleTextarea('descripcion', 'Descripción');
					echo Form::simpleCheckbox('estado', 'Estado', 1);
					echo Form::simpleCheckbox('nuevo', 'Nuevo');
					echo Form::simpleSelect('seleccion', 'Selecciones', $options, 2, ['class' => 'prueba', 'data-send' => 'send']);
				?>
			</div>
		</div>
	</div>
</div>

<?php content_for('scripts'); ?>

<script type="text/javascript">
	
</script>

<?php end_content_for(); ?>