<?php
/*
* The main template file not found
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 error_page">
            <h2>404</h2>
            <p>Sorry, but the page you are looking for does not exist.</p>
            <?php get_search_form(); ?>
        </div>
        <a href="<?php echo home_url(); ?>" class="homepage">Home</a>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>
  <!-- comment -->