<?php

    <!-- Header Area -->
    get_header();?>
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
?>