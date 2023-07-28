<?php
/*
* The main template file
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
        <?php if(have_posts(  )):
            while(have_posts(  )):the_post(  );
             ?>
          <div class="blog_area">
          <?php the_content(); ?>
          </div>
          <?php 
          endwhile;
        else:
          _e('No post found');
        endif;
          ?>
        </div>
        <div class="col-md-3">
          <h2>Side bar area</h2>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>