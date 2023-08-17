<?php
/* 
footer section 
*/
?>
<footer id="footer_area">
<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      <?php dynamic_sidebar( 'footer_1' ); ?>
      </div>
      <div class="col-md-4 links">
      <?php dynamic_sidebar( 'footer_2' ); ?>
      </div>
      <div class="col-md-4">
      <?php dynamic_sidebar( 'footer_3' ); ?>
      </div>
    </div>
  </div>
</section>
<section id="copyright_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <p><?php echo get_theme_mod('roman_copyright_section'); ?></p>     
     </div>
    </div>
  </div>
</section>
</footer>


<?php wp_footer(); ?>
</body>
</html>