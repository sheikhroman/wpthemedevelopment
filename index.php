<?php
/* this templete for displaying the header */

// use JetBrains\PhpStorm\Language; 

?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  wp_head(); ?>
 </head>
<body <?php body_class(); ?> >

<div id="header_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href=""><img src=" <?php echo get_theme_mod('roman_logo') ?> "alt=""></a>
            </div>
            <div class="com-md-9">

            </div>
        </div>
    </div>
</div>

    <?php wp_footer(); ?>
</body>
</html>