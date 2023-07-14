<?php
/**
 * Homepage Banner template
 *
 * @package RaptorCorpz
 * @since 1.0
 */
?>
<?php
    $banner_image = get_theme_mod( 
      'banner_image_setting_url', 
      'http://local/wp-content/uploads/2023/07/girl-in-sunglasses-scaled.jpg' 
  );
  $banner_title = get_theme_mod( 
      'banner_title', 
      'Raining offers for Hot summer' 
  );
  $banner_subtitle = get_theme_mod( 
    'banner_subtitle', 
    'Raining offers for Hot summer' 
  );
  $banner_button1 = get_theme_mod( 
    'banner_button1', 
    'Shop Now' 
  );
  $banner_button2 = get_theme_mod( 
    'banner_button2', 
    'Find More' 
  );
?>

<!-- Top Banner -->
<div class="container-fluid px-0 mx-0">
  <div class="row px-0 mx-0">
    <div class="banner" style="background-image: url('<?php echo esc_url( $banner_image ); ?>')">
    <div class="col-md-1"></div>
      <div class="col-md-6 col-sm-12 title ">
        <h1 style="color:<?php echo get_theme_mod( 'title_color_setting_rgba', '#ffffff' ); ?>"><?php echo wp_kses_post($banner_title)?></h1>
        <h2 style="color:<?php echo get_theme_mod( 'subtitle_color_setting_rgba', '#ffffff' ); ?>"><?php echo wp_kses_post($banner_subtitle)?></h2>
        <button type="button" class="btn btn-outline-light"><?php echo wp_kses_post($banner_button1)?></button>
        <button type="button" class="btn btn-outline-light "><?php echo wp_kses_post($banner_button2)?></button>
      </div>
    </div>
  </div>
</div>