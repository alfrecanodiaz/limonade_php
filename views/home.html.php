<?php content_for('title'); ?>

<title>Prueba titulo</title>

<?php end_content_for(); ?>

<?php content_for('meta'); ?>

<?php end_content_for(); ?>

<?php content_for('styles'); ?>

<?=Html::style('bootstrap.min.css');?>

<style type="text/css">
	p {
		color:red;
	}
</style>

<?php end_content_for(); ?>

<h1><?php echo $saludo; ?></h1>

<p>
Return often to receive updates about the trials and tribulations
surrounding raising my heart rate beyond 80bpm!
</p>

<button id="button">Button</button>

<?php content_for('scripts'); ?>

<?=Html::script('jquery-3.2.1.min.js');?>
<?=Html::script('bootstrap.min.js');?>

<script type="text/javascript">
	
</script>

<?php end_content_for(); ?>