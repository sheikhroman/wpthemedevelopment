<?php
/*
* The main template for displaying Archive pages
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
            <div id="archive_title">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_author_description('<div class="description">', '</div>');
                ?>
            </div>
        <?php get_template_part('template_part/blog_setup') ?>
    </div>
  </section>

  <?php get_footer(); ?>