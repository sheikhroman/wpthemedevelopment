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
            <div class="post_thumb">
              <?php echo the_post_thumbnail('post-thumbnails'); ?>
            </div>
            <div class="post-details">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            </div>
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