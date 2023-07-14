<?php
/**
 * Card Row template
 *
 * @package RaptorCorpz
 * @since 1.0
 */
?>
<?php if (  true == get_theme_mod( 'garentees_card_row_switch_setting', 'on' )  ) : ?>

<?php 
//CARD ROW 
    $num_cards=get_theme_mod( 'num_garentees_cards', 3 );
    $card_width = get_theme_mod( 'garentees_card_width', '300');
    //CARD 1 DETAILS
    $card1_image = get_theme_mod( 
        'garentees_card1_image_setting_url', 
        'http://raptor-corpz.local/wp-content/uploads/2023/07/bright-woman.png' 
    );
    $card1_text = get_theme_mod( 
        'garentees_card1_text', 
        'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' 
    );

    //CARD 2 DETAILS
    $card2_image = get_theme_mod( 
        'garentees_card2_image_setting_url', 
        'http://raptor-corpz.local/wp-content/uploads/2023/07/bright-woman.png' 
    );
    $card2_text = get_theme_mod( 
        'garentees_card2_text', 
        'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' 
    );

    //CARD 3 DETAILS
    $card3_image = get_theme_mod( 
        'garentees_card3_image_setting_url', 
        'http://raptor-corpz.local/wp-content/uploads/2023/07/bright-woman.png' 
    );
    $card3_text = get_theme_mod( 
        'garentees_card3_text', 
        'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' 
    );

    //CARD 4 DETAILS
    $card4_image = get_theme_mod( 
      'garentees_card4_image_setting_url', 
      'http://raptor-corpz.local/wp-content/uploads/2024/07/bright-woman.png' 
    );
    $card4_text = get_theme_mod( 
        'garentees_card4_text', 
        'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' 
    );

?>  

<!-- garentees-->
<div class="container-md my-5 py-5" id="Garentees">
  <div class="row justify-content-center">
  <?php if($num_cards>=1): ?>
    <div class="card" style="width: <?php echo $card_width?>px;">
      <img src="<?php echo esc_url( $card1_image ); ?>" class="card-img-top " alt="...">
      <div class="card-body">
        <p class="card-text text-center"><?php echo wp_kses_post($card1_text)?></p>
      </div>
    </div>
    <?php endif; ?>
    <?php if($num_cards>=2): ?>
    <div class="card" style="width: <?php echo $card_width?>px;">
      <img src="<?php echo esc_url( $card2_image ); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text text-center"><?php echo wp_kses_post($card2_text)?></p>
      </div>
    </div>
    <?php endif; ?>
    <?php if($num_cards>=3): ?>
    <div class="card" style="width: <?php echo $card_width?>px;">
      <img src="<?php echo esc_url( $card3_image ); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text text-center"><?php echo wp_kses_post($card3_text)?></p>
      </div>
    </div>
    <?php endif; ?>
    <?php if($num_cards>=4): ?>
    <div class="card" style="width: 18rem;">
      <img src="<?php echo esc_url( $card4_image ); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text text-center"><?php echo wp_kses_post($card4_text)?></p>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>

<?php endif; ?>