<?php
/*
* The main template file not found
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 error_page">
            <h1>404</h1>
            <h3>Sorry, but the page you are looking for does not exist.</h3>
            <div class="error_search">
            <?php get_search_form(); ?>
            </div>
            <a href="<?php echo home_url(); ?>" class="homepage">Homepage</a>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>
  <!-- comment -->