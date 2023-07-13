<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RaptorCorpz
 * @since 2.0
 */

  get_header();
  get_template_part('template-parts/banner','home');
  get_template_part('template-parts/card','row'); 
?>




<!-- What we stand for -->
<div class="container px-lg-5 py-lg-5 my-lg-5">
<?php echo wp_kses_post(get_theme_mod('content','
<h1 class="display-1">What we stand for</h1>
<div class="point">
  <h1>Point 1</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum augue tellus, varius vitae nunc sit amet, volutpat lobortis ligula. Sed sed nibh lorem. Suspendisse potenti. Suspendisse id sodales tortor. Pellentesque consectetur neque quis augue auctor condimentum. Vestibulum enim est, imperdiet eu finibus sit amet, pellentesque pretium diam. Nullam rutrum tristique ornare. Donec in laoreet tortor. Nulla pulvinar iaculis erat, ac vulputate sapien eleifend sed.

  Vivamus molestie odio interdum, dapibus neque eu, consequat nibh. Quisque sollicitudin arcu vitae ultrices pretium. Pellentesque non pulvinar nunc, vitae porta nunc. Nulla egestas ante ac diam gravida porttitor. Nullam dignissim felis ex, a consequat dui vulputate vel. Nulla facilisi. Curabitur rhoncus lacus ut rhoncus venenatis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
</div>
<div class="point">
  <h1>Point 2</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum augue tellus, varius vitae nunc sit amet, volutpat lobortis ligula. Sed sed nibh lorem. Suspendisse potenti. Suspendisse id sodales tortor. Pellentesque consectetur neque quis augue auctor condimentum. Vestibulum enim est, imperdiet eu finibus sit amet, pellentesque pretium diam. Nullam rutrum tristique ornare. Donec in laoreet tortor. Nulla pulvinar iaculis erat, ac vulputate sapien eleifend sed.

  Vivamus molestie odio interdum, dapibus neque eu, consequat nibh. Quisque sollicitudin arcu vitae ultrices pretium. Pellentesque non pulvinar nunc, vitae porta nunc. Nulla egestas ante ac diam gravida porttitor. Nullam dignissim felis ex, a consequat dui vulputate vel. Nulla facilisi. Curabitur rhoncus lacus ut rhoncus venenatis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
</div>
<div class="point">
  <h1>Point 3</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum augue tellus, varius vitae nunc sit amet, volutpat lobortis ligula. Sed sed nibh lorem. Suspendisse potenti. Suspendisse id sodales tortor. Pellentesque consectetur neque quis augue auctor condimentum. Vestibulum enim est, imperdiet eu finibus sit amet, pellentesque pretium diam. Nullam rutrum tristique ornare. Donec in laoreet tortor. Nulla pulvinar iaculis erat, ac vulputate sapien eleifend sed.

  Vivamus molestie odio interdum, dapibus neque eu, consequat nibh. Quisque sollicitudin arcu vitae ultrices pretium. Pellentesque non pulvinar nunc, vitae porta nunc. Nulla egestas ante ac diam gravida porttitor. Nullam dignissim felis ex, a consequat dui vulputate vel. Nulla facilisi. Curabitur rhoncus lacus ut rhoncus venenatis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
</div>'
))?>
</div>

<!-- Special offers-->
<?php if (  true == get_theme_mod( 'special_offers_switch_setting', 'on' )  ) : ?>

  <div class="container-md  " id="SpecialOffers" style="background-image: url('<?php echo esc_url( get_theme_mod( 'special_offers_image_setting_url', "http://raptor-corpz.local/wp-content/uploads/2023/06/black-and-white-girl.jpg" ) ); ?>')">
    <div class="content">

    <h1 style="color:<?php echo get_theme_mod( 'special_offers_title_color_setting_rgba', '#ffffff' ); ?>"><?php echo wp_kses_post(get_theme_mod( 'special_offers_title', 'Special Edition' ))?></h1>

    <h5 class="py-2" style="color:<?php echo get_theme_mod( 'special_offers_subtitle_color_setting_rgba', '#ffffff' ); ?>"><?php echo wp_kses_post(get_theme_mod( 'special_offers_subtitle', 'Limited Time Offer
      <br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.' ))?></h5>
      <button type="button" class="btn btn-outline-light"><?php echo wp_kses_post(get_theme_mod( 'special_offers_button', 'Shop Now '))?></button>
    </div>
  </div>
<?php endif; ?>

<!-- garentees-->
<div class="container-md my-5 py-5" id="Garentees">
  <div class="row justify-content-center">
    <div class="card" style="width: 18rem;">
      <img src="http://raptor-corpz.local/wp-content/uploads/2023/06/globe-free-img.png" class="card-img-top " alt="...">
      <div class="card-body">
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="http://raptor-corpz.local/wp-content/uploads/2023/06/lock-free-img.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="http://raptor-corpz.local/wp-content/uploads/2023/06/quality-free-img.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="http://raptor-corpz.local/wp-content/uploads/2023/06/tag-free-img.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
</div>

<?php get_footer();