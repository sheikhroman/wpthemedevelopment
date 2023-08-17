<?php
/*
* The main template for displaying Search pages
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
        <div id="search_title">
              <h1 class="title"><?php printf( __( 'Search Results for: %s', 'sheikhroman'), get_search_query()); ?></h1>
            </div>
        <?php get_template_part('template_part/blog_setup') ?>
    </div>
  </section>

  <?php get_footer(); ?>