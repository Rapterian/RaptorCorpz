<?php
/**
 * Card Row template
 *
 * @package RaptorCorpz
 * @since 1.0
 */
?>
<?php if (  true == get_theme_mod( 'card_row_switch_setting', 'on' )  ) : ?>

<?php 
//CARD ROW 
    $num_cards=get_theme_mod( 'num_cards', 3 );
    $card_height = get_theme_mod( 'card_height', 'auto');
    $card_width = get_theme_mod( 'card_width', 'auto');
    //CARD 1 DETAILS
    $card1_image = get_theme_mod( 
        'card1_image_setting_url', 
        'http://raptor-corpz.local/wp-content/uploads/2023/07/bright-woman.png' 
    );
    $card1_title = get_theme_mod( 
        'card1_title', 
        '20% Off On Tank Tops' 
    );
    $card1_text = get_theme_mod( 
        'card1_text', 
        'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' 
    );
    $card1_button_text = get_theme_mod( 
        'card1_button_text', 
        'Shop Now' 
    );
    //CARD 2 DETAILS
    $card2_image = get_theme_mod( 
        'card2_image_setting_url', 
        'http://raptor-corpz.local/wp-content/uploads/2023/07/bright-woman.png' 
    );
    $card2_title = get_theme_mod( 
        'card2_title', 
        '20% Off On Tank Tops' 
    );
    $card2_text = get_theme_mod( 
        'card2_text', 
        'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' 
    );
    $card2_button_text = get_theme_mod( 
        'card2_button_text', 
        'Shop Now' 
    );
    //CARD 3 DETAILS
    $card3_image = get_theme_mod( 
        'card3_image_setting_url', 
        'http://raptor-corpz.local/wp-content/uploads/2023/07/bright-woman.png' 
    );
    $card3_title = get_theme_mod( 
        'card3_title', 
        '20% Off On Tank Tops' 
    );
    $card3_text = get_theme_mod( 
        'card3_text', 
        'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' 
    );
    $card3_button_text = get_theme_mod( 
        'card3_button_text', 
        'Shop Now' 
    );
?>
<?php if($card_height>0){?>
<style>
    .card img{
        height: <?php echo $card_height; ?>px !important;
        width: <?php echo $card_width; ?>px !important;
    }
</style>
<?php }?>

<!-- firts row of cards-->

<div class="container my-5">
  <div class="row px-0 mx-0">
    <div class="card-group">
    <?php if($num_cards>=1): ?>
      <div class="
          <?php if($num_cards==1){ echo("col-lg-6 p-3 offset-lg-3 col-md-8 offset-md-2");}
          elseif($num_cards==2){ echo("col-xl-4 p-3 offset-xl-2 col-sm-8 offset-sm-2");}
          elseif($num_cards==3){ echo("col-lg-4 p-3 offset-lg-0 col-md-8 offset-md-2");};?>
        ">
        <div class="card">
          <img src="<?php echo esc_url( $card1_image ); ?>" class="card-img " alt="...">
          <div class="card-img-overlay">
            <div class="row px-0 mx-0">
              <h3 style="color:<?php echo get_theme_mod( 'card1_title_color_setting_rgba', '#ffffff' ); ?>" class="card-title pb-2 mb-1 pt-2" id="card1_title"><?php echo wp_kses_post($card1_title)?></h3>
            </div>
            <div class="card-content">
              <div class="row px-0 mx-0 pb-3">
                <button type="button " class="btn btn-outline-dark">
                    <?php echo($card1_button_text)?>
                </button>
              </div>
              <div class="row px-0 mx-0">
                <p style="color:<?php echo get_theme_mod( 'card1_text_color_setting_rgba', '#ffffff' ); ?>" class="card-text">
                    <?php echo wp_kses_post($card1_text)?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if($num_cards>=2): ?>
      <div class="col-lg-4 p-3 offset-lg-0 col-md-8 offset-md-2">
      <div class="card">
          <img src="<?php echo esc_url( $card2_image ); ?>" class="card-img " alt="...">
          <div class="card-img-overlay">
            <div class="row px-0 mx-0">
              <h3 style="color:<?php echo get_theme_mod( 'card2_title_color_setting_rgba', '#ffffff' ); ?>" class="card-title pb-2 mb-1 pt-2" id="card2_title"><?php echo wp_kses_post($card2_title)?></h3>
            </div>
            <div class="card-content">
              <div class="row px-0 mx-0 pb-3">
                <button type="button " class="btn btn-outline-dark">
                    <?php echo($card2_button_text)?>
                </button>
              </div>
              <div class="row px-0 mx-0">
                <p style="color:<?php echo get_theme_mod( 'card2_text_color_setting_rgba', '#ffffff' ); ?>" class="card-text">
                    <?php echo wp_kses_post($card2_text)?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif;?>
      <?php if($num_cards>=3): ?>
      <div class="col-lg-4 p-3 offset-lg-0 col-md-8 offset-md-2">
        <div class="card">
            <img src="<?php echo esc_url( $card3_image ); ?>" class="card-img " alt="...">
            <div class="card-img-overlay">
                <div class="row px-0 mx-0">
                <h3 style="color:<?php echo get_theme_mod( 'card3_title_color_setting_rgba', '#ffffff' ); ?>" class="card-title pb-2 mb-1 pt-2" id="card3_title"><?php echo wp_kses_post($card3_title)?></h3>
                </div>
                <div class="card-content">
                <div class="row px-0 mx-0 pb-3">
                    <button type="button " class="btn btn-outline-dark">
                        <?php echo($card3_button_text)?>
                    </button>
                </div>
                <div class="row px-0 mx-0">
                    <p style="color:<?php echo get_theme_mod( 'card3_text_color_setting_rgba', '#ffffff' ); ?>" class="card-text">
                        <?php echo wp_kses_post($card3_text)?>
                    </p>
                </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>


<?php endif; ?>