<?php require('master.php'); ?>

<?php startblock('title') ?>
<title>Error 404 - Page Not Found</title>
<?php endblock() ?>

<?php startblock('meta') ?>

<?php endblock() ?>

<?php startblock('styles') ?>

<link rel="stylesheet" href="css/404.css">

<?php endblock() ?>

<?php startblock('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>Oops!</h1>
                <h2>404 Not Found</h2>
                <div class="error-details">
                    Desculpe, ocorreu um erro, Página pedida não encontrada!
                </div>
                <div class="error-actions">
                    <a href="<?= get_url_page( 'index' ); ?>" class="btn">Home</a>
                    <a href="<?= get_url_page( 'contact-us' ); ?>" class="btn">Contato</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endblock() ?>

<?php startblock('scripts') ?>

<?php endblock() ?>