<?php
$wp_customize->add_setting( 'm_shop_disable_cat_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'm_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'm_shop_disable_cat_sec', array(
                'label'                 => esc_html__('Disable Section', 'm-shop'),
                'type'                  => 'checkbox',
                'section'               => 'm_shop_category_tab_section',
                'settings'              => 'm_shop_disable_cat_sec',
            ) ) );
// section heading
$wp_customize->add_setting('m_shop_cat_tab_heading', array(
        'default' => __('Tabbed Product Carousel','m-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'm_shop_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'm_shop_cat_tab_heading', array(
        'label'    => __('Section Heading', 'm-shop'),
        'section'  => 'm_shop_category_tab_section',
         'type'       => 'text',
));
//= Choose All Category  =   
    if (class_exists( 'M_Shop_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('m_shop_category_tab_list', array(
        'default'           => '',
        'sanitize_callback' => 'm_shop_checkbox_explode'
    ));
    $wp_customize->add_control(new M_Shop_Customize_Control_Checkbox_Multiple(
            $wp_customize,'m_shop_category_tab_list', array(
        'settings'=> 'm_shop_category_tab_list',
        'label'   => __( 'Choose Categories To Show', 'm-shop' ),
        'section' => 'm_shop_category_tab_section',
        'choices' => m_shop_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  

$wp_customize->add_setting('m_shop_category_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'm_shop_sanitize_select',
    ));
$wp_customize->add_control( 'm_shop_category_optn', array(
        'settings' => 'm_shop_category_optn',
        'label'   => __('Choose Option','m-shop'),
        'section' => 'm_shop_category_tab_section',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','m-shop'),
        'featured'   => __('Featured','m-shop'),
        'random'     => __('Random','m-shop'),
            
        ),
    ));

$wp_customize->add_setting( 'm_shop_single_row_slide_cat', array(
                'default'               => false,
                'sanitize_callback'     => 'm_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'm_shop_single_row_slide_cat', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'm-shop'),
                'type'                  => 'checkbox',
                'section'               => 'm_shop_category_tab_section',
                'settings'              => 'm_shop_single_row_slide_cat',
            ) ) );


// Add an option to disable the logo.
  $wp_customize->add_setting( 'm_shop_cat_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'm_shop_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new M_Shop_Toggle_Control( $wp_customize, 'm_shop_cat_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'm-shop' ),
    'section'     => 'm_shop_category_tab_section',
    'type'        => 'toggle',
    'settings'    => 'm_shop_cat_slider_optn',
  ) ) );
$wp_customize->add_setting('m_shop_cat_slider_speed', array(
        'default' =>'3000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'm_shop_sanitize_number',
));
$wp_customize->add_control( 'm_shop_cat_slider_speed', array(
        'label'       => __('Speed', 'm-shop'),
        'description' =>__('Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000','m-shop'),
        'section'  => 'm_shop_category_tab_section',
         'type'    => 'number',
));

$wp_customize->add_setting('m_shop_cat_tab_slider_doc', array(
    'sanitize_callback' => 'm_shop_sanitize_text',
    ));
$wp_customize->add_control(new M_Shop_Misc_Control( $wp_customize, 'm_shop_cat_tab_slider_doc',
            array(
        'section'    => 'm_shop_category_tab_section',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/m-shop/#tabbed-product',
        'description' => esc_html__( 'To know more go with this', 'm-shop' ),
        'priority'   =>100,
    )));
