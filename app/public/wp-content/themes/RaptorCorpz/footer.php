<footer>


<?php if (  true == get_theme_mod( 'footer_switch_setting', 'on' )  ) : ?>

  <div class="py-4 my-4" style="background-color:<?php echo(get_theme_mod( 'footer_background_color_setting_rgba','grey'))?>">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
        <p class="col-md-4 mb-0" style="color:<?php echo(get_theme_mod( 'footer_text_color_setting_rgba','white'))?>"><?php echo wp_kses_post(get_theme_mod( 'footer_text','© 2022 Company, Inc' ))?></p>

        <h1><a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none" style="color: <?php echo(get_theme_mod( 'footer_title_color_setting_rgba','white'))?>">
        <?php echo wp_kses_post(get_theme_mod( 'footer_title','Fortitude' ))?>
        </a></h1>
        
      </div>
    </div>
  </div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>
