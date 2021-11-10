<?php 
function m_shop_product_category_list($arr='',$all=true){
    $cats = array();
    if($all == true){
        $cats[0] = 'All Categories';
    }
    foreach ( get_categories($arr) as $categories => $category ){
        $cats[$category->slug] = $category->name;
     }
     return $cats;
}
$wp_customize->add_setting( 'm_shop_disable_product_slide_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'm_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'm_shop_disable_product_slide_sec', array(
                'label'                 => esc_html__('Disable Section', 'm-shop'),
                'type'                  => 'checkbox',
                'section'               => 'm_shop_product_slide_section',
                'settings'              => 'm_shop_disable_product_slide_sec',
            ) ) );
// section heading
$wp_customize->add_setting('m_shop_product_slider_heading', array(
	    'default' => __('Product Carousel','m-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'm_shop_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'm_shop_product_slider_heading', array(
        'label'    => __('Section Heading', 'm-shop'),
        'section'  => 'm_shop_product_slide_section',
         'type'       => 'text',
));

//control setting for select options
	$wp_customize->add_setting('m_shop_product_slider_cat', array(
	'default' => 0,
	'sanitize_callback' => 'm_shop_sanitize_select',
	) );
	$wp_customize->add_control( 'm_shop_product_slider_cat', array(
	'label'   => __('Select Category','m-shop'),
	'section' => 'm_shop_product_slide_section',
	'type' => 'select',
	'choices' => m_shop_product_category_list(array('taxonomy' =>'product_cat'),true),
	) );

$wp_customize->add_setting('m_shop_product_slide_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'm_shop_sanitize_select',
    ));
$wp_customize->add_control( 'm_shop_product_slide_optn', array(
        'settings' => 'm_shop_product_slide_optn',
        'label'   => __('Choose Option','m-shop'),
        'section' => 'm_shop_product_slide_section',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','m-shop'),
        'featured'   => __('Featured','m-shop'),
        'random'     => __('Random','m-shop'),
            
        ),
    ));

$wp_customize->add_setting( 'm_shop_single_row_prdct_slide', array(
                'default'               => false,
                'sanitize_callback'     => 'm_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'm_shop_single_row_prdct_slide', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'm-shop'),
                'type'                  => 'checkbox',
                'section'               => 'm_shop_product_slide_section',
                'settings'              => 'm_shop_single_row_prdct_slide',
            ) ) );


// Add an option to disable the logo.
  $wp_customize->add_setting( 'm_shop_product_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'm_shop_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new M_Shop_Toggle_Control( $wp_customize, 'm_shop_product_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'm-shop' ),
    'section'     => 'm_shop_product_slide_section',
    'type'        => 'toggle',
    'settings'    => 'm_shop_product_slider_optn',
  ) ) );
   $wp_customize->add_setting('m_shop_product_slider_speed', array(
        'default' =>'3000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'm_shop_sanitize_number',
   ));
   $wp_customize->add_control( 'm_shop_product_slider_speed', array(
            'label'       => __('Speed', 'm-shop'),
            'description' =>__('Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000','m-shop'),
            'section'     => 'm_shop_product_slide_section',
             'type'       => 'number',
    ));


  $wp_customize->add_setting('m_shop_product_slider_doc', array(
    'sanitize_callback' => 'm_shop_sanitize_text',
    ));
$wp_customize->add_control(new M_Shop_Misc_Control( $wp_customize, 'm_shop_product_slider_doc',
            array(
        'section'    => 'm_shop_product_slide_section',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/m-shop/#product-carousel',
        'description' => esc_html__( 'To know more go with this', 'm-shop' ),
        'priority'   =>100,
    )));