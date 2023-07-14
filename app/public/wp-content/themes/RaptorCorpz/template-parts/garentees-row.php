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

<!-- garentees-->
<div class="container-md my-5 py-5" id="Garentees">
  <div class="row justify-content-center">
  <?php if($num_cards>=1): ?>
    <div class="card" style="width: <?php echo $card_width?>px;">
      <img src="http://raptor-corpz.local/wp-content/uploads/2023/06/globe-free-img.png" class="card-img-top " alt="...">
      <div class="card-body">
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <?php endif; ?>
    <?php if($num_cards>=2): ?>
    <div class="card" style="width: <?php echo $card_width?>px;">
      <img src="http://raptor-corpz.local/wp-content/uploads/2023/06/lock-free-img.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <?php endif; ?>
    <?php if($num_cards>=3): ?>
    <div class="card" style="width: <?php echo $card_width?>px;">
      <img src="http://raptor-corpz.local/wp-content/uploads/2023/06/quality-free-img.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <?php endif; ?>
    <?php if($num_cards>=4): ?>
    <div class="card" style="width: 18rem;">
      <img src="http://raptor-corpz.local/wp-content/uploads/2023/06/tag-free-img.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>

<?php endif; ?>