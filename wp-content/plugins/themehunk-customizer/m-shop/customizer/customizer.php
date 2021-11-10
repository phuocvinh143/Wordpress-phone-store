<?php 
/**
 * all customizer setting includeed
 *
 * @param  
 * @return mixed|string
 */
function m_shop_plugin_customize_register( $wp_customize ){
//Front Page
require THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'm-shop/customizer/section/frontpage/top-slider.php';
require THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'm-shop/customizer/section/frontpage/category-tab.php';
require THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'm-shop/customizer/section/frontpage/product-slide.php';
require THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'm-shop/customizer/section/frontpage/category-slider.php';
require THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'm-shop/customizer/section/frontpage/product-list.php';

require THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'm-shop/customizer/section/frontpage/ribbon.php';
require THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'm-shop/customizer/section/frontpage/banner.php';
require THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'm-shop/customizer/section/frontpage/higlight.php';
require THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'm-shop/customizer/section/frontpage/tab-productimage.php';
require THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'm-shop/customizer/section/frontpage/testimonial.php';
require THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'm-shop/customizer/section/frontpage/blog.php';
}
add_action('customize_register','m_shop_plugin_customize_register');