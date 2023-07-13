<?php 

if ( ! class_exists ('Kirki')){
    return;
}

// PANELS

new \Kirki\Panel(
	'RaptorCorpz_theme_options',
	[
		'priority'    => 1,
		'title'       => esc_html__( 'RaptorCorpz Theme Options', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this panel to customize your RaptorCorpz Theme', 'RaptorCorpz' ),
	]
);
//SECTION -- BANNER

new \Kirki\Section(
	'RaptorCorpz_banner_section',
	[
		'title'       => esc_html__( 'Banner', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this section to edit your banner', 'RaptorCorpz' ),
		'panel'       => 'RaptorCorpz_theme_options',
		'priority'    => 2,
	]
);

//SECTION -- CARD ROW

new \Kirki\Section(
	'RaptorCorpz_card_row_section',
	[
		'title'       => esc_html__( 'Card Row', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this section to edit your card row', 'RaptorCorpz' ),
		'panel'       => 'RaptorCorpz_theme_options',
		'priority'    => 3,
	]
);

//SECTION -- CARD1 DETAILS
new \Kirki\Section(
	'RaptorCorpz_card1_section',
	[
		'title'       => esc_html__( 'Card 1 Details', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this section to edit your card details', 'RaptorCorpz' ),
		'panel'       => 'RaptorCorpz_theme_options',
		'priority'    => 4,
	]
);
//SECTION -- CARD2 DETAILS
new \Kirki\Section(
	'RaptorCorpz_card2_section',
	[
		'title'       => esc_html__( 'Card 2 Details', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this section to edit your card details', 'RaptorCorpz' ),
		'panel'       => 'RaptorCorpz_theme_options',
		'priority'    => 4,
	]
);
//SECTION -- CARD3 DETAILS
new \Kirki\Section(
	'RaptorCorpz_card3_section',
	[
		'title'       => esc_html__( 'Card 3 Details', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this section to edit your card details', 'RaptorCorpz' ),
		'panel'       => 'RaptorCorpz_theme_options',
		'priority'    => 4,
	]
);
//SECTION -- CONTENT DETAILS
new \Kirki\Section(
	'RaptorCorpz_content_section',
	[
		'title'       => esc_html__( 'Content Details', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this section to edit your content details', 'RaptorCorpz' ),
		'panel'       => 'RaptorCorpz_theme_options',
		'priority'    => 5,
	]
);

//SECTION -- SPECIAL OFFERS BANNER
new \Kirki\Section(
	'RaptorCorpz_special_offers_section',
	[
		'title'       => esc_html__( 'Special Offers Banner', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this section to edit your Special Offers Banner', 'RaptorCorpz' ),
		'panel'       => 'RaptorCorpz_theme_options',
		'priority'    => 5,
	]
);

//SECTION -- GARENTEES CARD ROW

new \Kirki\Section(
	'RaptorCorpz_garentees_garentees_card_row_section',
	[
		'title'       => esc_html__( 'garentees_card Row', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this section to edit your garentees_card row', 'RaptorCorpz' ),
		'panel'       => 'RaptorCorpz_theme_options',
		'priority'    => 3,
	]
);

//SECTION -- GARENTEES CARD1 DETAILS
new \Kirki\Section(
	'RaptorCorpz_garentees_card1_section',
	[
		'title'       => esc_html__( 'Garentees card 1 Details', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this section to edit your Garentees card details', 'RaptorCorpz' ),
		'panel'       => 'RaptorCorpz_theme_options',
		'priority'    => 4,
	]
);
//SECTION -- GARENTEES CARD2 DETAILS
new \Kirki\Section(
	'RaptorCorpz_garentees_card2_section',
	[
		'title'       => esc_html__( 'Garentees card 2 Details', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this section to edit your Garentees card details', 'RaptorCorpz' ),
		'panel'       => 'RaptorCorpz_theme_options',
		'priority'    => 4,
	]
);
//SECTION -- GARENTEES CARD3 DETAILS
new \Kirki\Section(
	'RaptorCorpz_garentees_card3_section',
	[
		'title'       => esc_html__( 'Garentees card 3 Details', 'RaptorCorpz' ),
		'description' => esc_html__( 'Use this section to edit your Garentees card details', 'RaptorCorpz' ),
		'panel'       => 'RaptorCorpz_theme_options',
		'priority'    => 4,
	]
);


//BANNER DETAILS -- FIELDS

new \Kirki\Field\Image(
	[
		'settings'    => 'banner_image_setting_url',
		'label'       => esc_html__( 'Image Control (URL)', 'RaptorCorpz' ),
		'description' => esc_html__( 'The saved value will be the URL.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_banner_section',
		'default'     => '',
	]
);
new \Kirki\Field\Editor(
    [
        'settings'          => 'banner_title',
        'label'             => esc_html__( 'Banner Title', 'RaptorCorpz' ),
        'description'       => esc_html__( 'This is an editor control that changes the banner title.', 'RaptorCorpz' ),
        'section'           => 'RaptorCorpz_banner_section',
        'default'           => '',
    ]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'title_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_banner_section',
		'default'     => '#0008DC',
		'choices'     => [
			'alpha' => true,
		],
	]
);

new \Kirki\Field\Editor(
    [
        'settings'          => 'banner_subtitle',
        'label'             => esc_html__( 'Banner Sub-Title', 'RaptorCorpz' ),
        'description'       => esc_html__( 'This is an editor control that changes the banner sub-title.', 'RaptorCorpz' ),
        'section'           => 'RaptorCorpz_banner_section',
        'default'           => '',
    ]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'subtitle_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_banner_section',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
	]
);
new \Kirki\Field\Text(
    [
        'settings'          => 'banner_button1',
        'label'             => esc_html__( 'Banner Button 1', 'RaptorCorpz' ),
        'description'       => esc_html__( 'This is an editor control that changes the button 1 of the banner.', 'RaptorCorpz' ),
        'section'           => 'RaptorCorpz_banner_section',
        'default'           => '',
    ]
);

new \Kirki\Field\Text(
    [
        'settings'          => 'banner_button2',
        'label'             => esc_html__( 'Banner Button 2', 'RaptorCorpz' ),
        'description'       => esc_html__( 'This is an editor control that changes the button 2 of the banner.', 'RaptorCorpz' ),
        'section'           => 'RaptorCorpz_banner_section',
        'default'           => '',
    ]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'title_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_banner_section',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
	]
);

//CARD ROW -- FIELDS
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'card_row_switch_setting',
		'label'       => esc_html__( 'Toggle Card Row', 'RaptorCorpz' ),
		'description' => esc_html__( 'Switch that enables you to show or not show the card row', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card_row_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'RaptorCorpz' ),
			'off' => esc_html__( 'Disable', 'RaptorCorpz' ),
		],
	]
);

new \Kirki\Field\Slider(
	[
		'settings'    => 'num_cards',
		'label'       => esc_html__( 'Number of cards', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card_row_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 1,
			'max'  => 3,
			'step' => 1,
		],
	]
);

new \Kirki\Field\Number(
	[
		'settings' => 'card_height',
		'label'    => esc_html__( 'Card Height', 'RaptorCorpz' ),
		'section'  => 'RaptorCorpz_card_row_section',
		'default'  => 0,
		'choices'  => [
			'min'  => 0,
			'max'  => 10000,
			'step' => 1,
		],
	]
);

new \Kirki\Field\Number(
	[
		'settings' => 'card_width',
		'label'    => esc_html__( 'Card Width', 'RaptorCorpz' ),
		'section'  => 'RaptorCorpz_card_row_section',
		'default'  => 0,
		'choices'  => [
			'min'  => 0,
			'max'  => 10000,
			'step' => 1,
		],
	]
);

//CARD 1 DETAILS -- FIELDS

new \Kirki\Field\Image(
	[
		'settings'    => 'card1_image_setting_url',
		'label'       => esc_html__( 'Image Control (URL)', 'RaptorCorpz' ),
		'description' => esc_html__( 'The saved value will be the URL.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card1_section',
		'default'     => '',
	]
);
new \Kirki\Field\Editor(
    [
        'settings'          => 'card1_title',
        'label'             => esc_html__( 'Card 1 Title', 'RaptorCorpz' ),
        'description'       => esc_html__( 'This is an editor control that changes card 1 title.', 'RaptorCorpz' ),
        'section'           => 'RaptorCorpz_card1_section',
        'default'           => '',
    ]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'card1_title_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card1_section',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
	]
);

new \Kirki\Field\Editor(
	[
		'settings'    => 'card1_text',
		'label'       => esc_html__( 'Card 1 text', 'RaptorCorpz' ),
		'description' => esc_html__( 'This is an editor control that changes card 1 text.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card1_section',
		'default'     => '',
	]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'card1_text_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card1_section',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings'    => 'card1_button_text',
		'label'       => esc_html__( 'Card 1 button text', 'RaptorCorpz' ),
		'description' => esc_html__( 'This is an editor control that changes card 1 button text.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card1_section',
		'default'     => '',
	]
);
//CARD 2 DETAILS -- FIELDS

new \Kirki\Field\Image(
	[
		'settings'    => 'card2_image_setting_url',
		'label'       => esc_html__( 'Image Control (URL)', 'RaptorCorpz' ),
		'description' => esc_html__( 'The saved value will be the URL.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card2_section',
		'default'     => '',
	]
);
new \Kirki\Field\Editor(
    [
        'settings'          => 'card2_title',
        'label'             => esc_html__( 'card 2 Title', 'RaptorCorpz' ),
        'description'       => esc_html__( 'This is an editor control that changes card 2 title.', 'RaptorCorpz' ),
        'section'           => 'RaptorCorpz_card2_section',
        'default'           => '',
    ]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'card2_title_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card2_section',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
	]
);

new \Kirki\Field\Editor(
	[
		'settings'    => 'card2_text',
		'label'       => esc_html__( 'card 2 text', 'RaptorCorpz' ),
		'description' => esc_html__( 'This is an editor control that changes card 2 text.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card2_section',
		'default'     => '',
	]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'card2_text_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card2_section',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings'    => 'card2_button_text',
		'label'       => esc_html__( 'card 2 button text', 'RaptorCorpz' ),
		'description' => esc_html__( 'This is an editor control that changes card 2 button text.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card2_section',
		'default'     => '',
	]
);

//CARD 3 DETAILS -- FIELDS

new \Kirki\Field\Image(
	[
		'settings'    => 'card3_image_setting_url',
		'label'       => esc_html__( 'Image Control (URL)', 'RaptorCorpz' ),
		'description' => esc_html__( 'The saved value will be the URL.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card3_section',
		'default'     => '',
	]
);
new \Kirki\Field\Editor(
    [
        'settings'          => 'card3_title',
        'label'             => esc_html__( 'card 3 Title', 'RaptorCorpz' ),
        'description'       => esc_html__( 'This is an editor control that changes card 3 title.', 'RaptorCorpz' ),
        'section'           => 'RaptorCorpz_card3_section',
        'default'           => '',
    ]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'card3_title_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card3_section',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
	]
);

new \Kirki\Field\Editor(
	[
		'settings'    => 'card3_text',
		'label'       => esc_html__( 'card 3 text', 'RaptorCorpz' ),
		'description' => esc_html__( 'This is an editor control that changes card 3 text.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card3_section',
		'default'     => '',
	]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'card3_text_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card3_section',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings'    => 'card3_button_text',
		'label'       => esc_html__( 'card 3 button text', 'RaptorCorpz' ),
		'description' => esc_html__( 'This is an editor control that changes card 3 button text.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_card3_section',
		'default'     => '',
	]
);

//CONTENT DETAILS -- FIELDS

new \Kirki\Field\Editor(
    [
        'settings'          => 'content',
        'label'             => esc_html__( 'content', 'RaptorCorpz' ),
        'description'       => esc_html__( 'This is an editor control that changes the content.', 'RaptorCorpz' ),
        'section'           => 'RaptorCorpz_content_section',
        'default'           => '
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
  </div>
        ',
    ]
);
//SPECIAL OFFERS BANNER DETAILS -- FIELDS

new \Kirki\Field\Image(
	[
		'settings'    => 'special_offers_image_setting_url',
		'label'       => esc_html__( 'Image Control (URL)', 'RaptorCorpz' ),
		'description' => esc_html__( 'The saved value will be the URL.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_special_offers_section',
		'default'     => '',
	]
);
new \Kirki\Field\Editor(
    [
        'settings'          => 'special_offers_title',
        'label'             => esc_html__( 'special_offers Title', 'RaptorCorpz' ),
        'description'       => esc_html__( 'This is an editor control that changes the special_offers title.', 'RaptorCorpz' ),
        'section'           => 'RaptorCorpz_special_offers_section',
        'default'           => 'Special Edition',
    ]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'special_offers_title_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_special_offers_section',
		'default'     => '#0008DC',
		'choices'     => [
			'alpha' => true,
		],
	]
);

new \Kirki\Field\Editor(
    [
        'settings'          => 'special_offers_subtitle',
        'label'             => esc_html__( 'special_offers Sub-Title', 'RaptorCorpz' ),
        'description'       => esc_html__( 'This is an editor control that changes the special_offers sub-title.', 'RaptorCorpz' ),
        'section'           => 'RaptorCorpz_special_offers_section',
        'default'           => '',
    ]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'special_offers_subtitle_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_special_offers_section',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
	]
);
new \Kirki\Field\Text(
    [
        'settings'          => 'special_offers_button',
        'label'             => esc_html__( 'special_offers Button', 'RaptorCorpz' ),
        'description'       => esc_html__( 'This is an editor control that changes the button of the special_offers.', 'RaptorCorpz' ),
        'section'           => 'RaptorCorpz_special_offers_section',
        'default'           => '',
    ]
);


new \Kirki\Field\Color(
	[
		'settings'    => 'title_color_setting_rgba',
		'label'       => __( 'Color Control (rgba)', 'RaptorCorpz' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_special_offers_section',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'special_offers_switch_setting',
		'label'       => esc_html__( 'Toggle Card Row', 'RaptorCorpz' ),
		'description' => esc_html__( 'Switch that enables you to show or not show the card row', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_special_offers_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'RaptorCorpz' ),
			'off' => esc_html__( 'Disable', 'RaptorCorpz' ),
		],
	]
);

//GARENTEES CARD ROW -- FIELDS
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'garentees_card_row_switch_setting',
		'label'       => esc_html__( 'Toggle garentees card Row', 'RaptorCorpz' ),
		'description' => esc_html__( 'Switch that enables you to show or not show the garentees card row', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_garentees_card_row_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'RaptorCorpz' ),
			'off' => esc_html__( 'Disable', 'RaptorCorpz' ),
		],
	]
);

new \Kirki\Field\Slider(
	[
		'settings'    => 'num_garentees_cards',
		'label'       => esc_html__( 'Number of garentees cards', 'RaptorCorpz' ),
		'section'     => 'RaptorCorpz_garentees_card_row_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 1,
			'max'  => 3,
			'step' => 1,
		],
	]
);

new \Kirki\Field\Number(
	[
		'settings' => 'garentees_card_height',
		'label'    => esc_html__( 'Garentees card Height', 'RaptorCorpz' ),
		'section'  => 'RaptorCorpz_garentees_card_row_section',
		'default'  => 0,
		'choices'  => [
			'min'  => 0,
			'max'  => 10000,
			'step' => 1,
		],
	]
);

new \Kirki\Field\Number(
	[
		'settings' => 'garentees_card_width',
		'label'    => esc_html__( 'Garentees car Width', 'RaptorCorpz' ),
		'section'  => 'RaptorCorpz_garentees_card_row_section',
		'default'  => 0,
		'choices'  => [
			'min'  => 0,
			'max'  => 10000,
			'step' => 1,
		],
	]
);
