<!DOCTYPE html>

<html>

    <head>

        <!-- =========================================
        Global Meta Section
        ========================================== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- =========================================
        Page Title Section
        ========================================== -->

        <?php if (isset($title)) echo $title; ?>

        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- =========================================
        Pages Meta Section
        ========================================== -->

        <?php if (isset($meta)) echo $meta; ?>

        <!-- =========================================
        Global Css Section
        ========================================== -->

        <?=Html::style('bootstrap.min.css');?>

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

    <?=Html::script('jquery-3.2.1.min.js');?>
    <?=Html::script('bootstrap.min.js');?>

    <script type="text/javascript">
        $(document).ready(function()
        {
            $('input[type=checkbox]').change(function()
            {
                var value = this.checked ? 1 : 0;
                $(this).val(value);
            });    
        });
    </script>

    <!-- =========================================
    Pages Script Section
    ========================================== -->

    <?php if (isset($scripts)) echo $scripts; ?>

</html>