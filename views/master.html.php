<!DOCTYPE html>

<html>

    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <?php if (isset($title)) echo $title; ?>

        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="author" content="">

        <?php if (isset($meta)) echo $meta; ?>

        <!-- =========================================
        Global Css Section
        ========================================== -->

        <!-- =========================================
        Pages Css Section
        ========================================== -->

        <?php if (isset($styles)) echo $styles; ?>

        <!-- =========================================
        Google Analytics
        ========================================== -->

    </head>

    <body>
    
        <?php if (isset($content)) echo $content; ?>

    </body>

    <!-- =========================================
    Global Scripts Section
    ========================================== -->

    <!-- =========================================
    Pages Script Section
    ========================================== -->

    <?php if (isset($scripts)) echo $scripts; ?>

</html>