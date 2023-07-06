<?php
/* this templete for displaying the header */

// use JetBrains\PhpStorm\Language; 

?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Header Area -->
    <header id="header_area" class="<?php echo get_theme_mod('roman_menu_position') ?> ">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo home_url(); ?>"><img src=" <?php echo get_theme_mod('roman_logo') ?> " alt=""></a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
                </div>
            </div>
        </div>
    </header>
<h1>ARCHIVE PAGE</h1>
    <!-- Body area -->
    <section id="body_area">
        <div class="container">
            <div class="row col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <!-- Footer section start -->
    <footer id="footer_area">
        <section id="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo get_theme_mod('roman_copyright_section'); ?></p>
                </div>
            </div>
        </section>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>