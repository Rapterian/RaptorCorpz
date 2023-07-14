<footer>




  <div class="footer-calltoaction text-center bg-secondary py-4 my-4">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 overflow-hidden">
          <p class="sub-title"><?php echo esc_html( get_theme_mod( 'footer_sub_heading','Join the course' ) ); ?></p>
          <h2><?php echo esc_html( get_theme_mod( 'footer_calltoaction_heading','Bootstrap to WordPress' ) ); ?></h2>
          <p class="fcta-desc"><?php echo esc_html( get_theme_mod( 'footer_calltoaction_desc','Learn how to design and build custom, beautiful & responsive WordPress websites and themes for beginners in 2022' ) ); ?></p>
          <a href="<?php echo esc_html( get_theme_mod( 'footer_cta_link','#' ) ); ?>" class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'footer_calltoaction_button','Join Now ->' ) ); ?></a>
        </div>
      </div>
    </div>
  </div>


<?php wp_footer(); ?>

</body>

</html>
