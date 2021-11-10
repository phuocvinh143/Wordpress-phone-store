<?php
/*
 * This file belongs to the YIT Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'YITH_WCPO_VERSION' ) ) {
    exit;
} // Exit if accessed directly
?>

<style>
    .section{
        margin-left: -20px;
        margin-right: -20px;
        font-family: "Raleway",san-serif;
    }
    .section h1{
        text-align: center;
        text-transform: uppercase;
        color: #808a97;
        font-size: 35px;
        font-weight: 700;
        line-height: normal;
        display: inline-block;
        width: 100%;
        margin: 50px 0 0;
    }
    .section ul{
        list-style-type: disc;
        padding-left: 15px;
    }
    .section:nth-child(even){
        background-color: #fff;
    }
    .section:nth-child(odd){
        background-color: #f1f1f1;
    }
    .section .section-title img{
        display: table-cell;
        vertical-align: middle;
        width: auto;
        margin-right: 15px;
    }
    .section h2,
    .section h3 {
        display: inline-block;
        vertical-align: middle;
        padding: 0;
        font-size: 24px;
        font-weight: 700;
        color: #808a97;
        text-transform: uppercase;
    }

    .section .section-title h2{
        display: table-cell;
        vertical-align: middle;
        line-height: 24px;
    }

    .section-title{
        display: table;
    }

    .section h3 {
        font-size: 14px;
        line-height: 28px;
        margin-bottom: 0;
        display: block;
    }

    .section p{
        font-size: 13px;
        margin: 25px 0;
    }
    .section ul li{
        margin-bottom: 4px;
    }
    .landing-container{
        max-width: 750px;
        margin-left: auto;
        margin-right: auto;
        padding: 50px 0 30px;
    }
    .landing-container:after{
        display: block;
        clear: both;
        content: '';
    }
    .landing-container .col-1,
    .landing-container .col-2{
        float: left;
        box-sizing: border-box;
        padding: 0 15px;
    }
    .landing-container .col-1 img{
        width: 100%;
    }
    .landing-container .col-1{
        width: 55%;
    }
    .landing-container .col-2{
        width: 45%;
    }
    .premium-cta{
        background-color: #808a97;
        color: #fff;
        border-radius: 6px;
        padding: 20px 15px;
    }
    .premium-cta:after{
        content: '';
        display: block;
        clear: both;
    }
    .premium-cta p{
        margin: 7px 0;
        font-size: 14px;
        font-weight: 500;
        display: inline-block;
        width: 60%;
    }
    .premium-cta a.button{
        border-radius: 6px;
        height: 60px;
        float: right;
        background: url(<?php echo YITH_WCPO_ASSETS_URL?>images/upgrade.png) #ff643f no-repeat 13px 13px;
        border-color: #ff643f;
        box-shadow: none;
        outline: none;
        color: #fff;
        position: relative;
        padding: 9px 50px 9px 70px;
    }
    .premium-cta a.button:hover,
    .premium-cta a.button:active,
    .premium-cta a.button:focus{
        color: #fff;
        background: url(<?php echo YITH_WCPO_ASSETS_URL?>images/upgrade.png) #971d00 no-repeat 13px 13px;
        border-color: #971d00;
        box-shadow: none;
        outline: none;
    }
    .premium-cta a.button:focus{
        top: 1px;
    }
    .premium-cta a.button span{
        line-height: 13px;
    }
    .premium-cta a.button .highlight{
        display: block;
        font-size: 20px;
        font-weight: 700;
        line-height: 20px;
    }
    .premium-cta .highlight{
        text-transform: uppercase;
        background: none;
        font-weight: 800;
        color: #fff;
    }

    @media (max-width: 768px) {
        .section{margin: 0}
        .premium-cta p{
            width: 100%;
        }
        .premium-cta{
            text-align: center;
        }
        .premium-cta a.button{
            float: none;
        }
    }

    @media (max-width: 480px){
        .wrap{
            margin-right: 0;
        }
        .section{
            margin: 0;
        }
        .landing-container .col-1,
        .landing-container .col-2{
            width: 100%;
            padding: 0 15px;
        }
        .section-odd .col-1 {
            float: left;
            margin-right: -100%;
        }
        .section-odd .col-2 {
            float: right;
            margin-top: 65%;
        }
    }

    @media (max-width: 320px){
        .premium-cta a.button{
            padding: 9px 20px 9px 70px;
        }

        .section .section-title img{
            display: none;
        }
    }
</style>
<?php $admin = YITH_Pre_Order_Admin::get_instance(); ?>
<div class="landing">
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( esc_html__('Upgrade to %1$spremium version%2$s of %1$sYITH Pre-Order for WooCommerce%2$s to benefit from all features!','yith-pre-order-for-woocommerce'),'<span class="highlight">','</span>' );?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e('UPGRADE','yith-pre-order-for-woocommerce');?></span>
                    <span><?php _e('to the premium version','yith-pre-order-for-woocommerce');?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_WCPO_ASSETS_URL?>/images/01-bg.png) no-repeat #fff; background-position: 85% 75%">
        <h1><?php _e('Premium Features','yith-pre-order-for-woocommerce');?></h1>
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/01.png" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/01-icon.png" />
                    <h2><?php _e('Pre-Order period','yith-pre-order-for-woocommerce');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('Create tailored sales strategies and set the %1$sexpiring date%2$s of the pre-order period for each product after which the user can complete the purchase. ', 'yith-pre-order-for-woocommerce'), '<b>', '</b>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="section section-odd clear" style="background: url(<?php echo YITH_WCPO_ASSETS_URL?>/images/02-bg.png) no-repeat #f1f1f1; background-position: 15% 100%">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/02-icon.png" />
                    <h2><?php _e('Out-of-stock products','yith-pre-order-for-woocommerce');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__( 'An out-of-stock product prevents the user purchasing it. %3$s To avoid this to happen, you can set the product as %1$s"pre-order"%2$s every time it is currently out of stock.','yith-pre-order-for-woocommerce' ),'<b>','</b>','<br>');?></p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/02.png" />
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_WCPO_ASSETS_URL?>/images/03-bg.png) no-repeat #fff; background-position: 85% 100%">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/03.png" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/03-icon.png" />
                    <h2><?php _e( 'Notification email ','yith-pre-order-for-woocommerce');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('The administrator receives %1$stwo notification emails:%2$s one when a user purchases a pre-order product and one when the expiring date of the pre-order period for a product of the shop is approaching. ','yith-pre-order-for-woocommerce'),'<b>','</b>');?>
                </p>
                <p>
                    <?php echo sprintf(__('The users receive a notification email as well when the pre-order product they purchased is %1$sback in stock%2$s. ','yith-pre-order-for-woocommerce'),'<b>','</b>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="section section-odd clear" style="background: url(<?php echo YITH_WCPO_ASSETS_URL?>/images/04-bg.png) no-repeat #f1f1f1; background-position: 15% 100%">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/04-icon.png" />
                    <h2><?php _e('Special offer','yith-pre-order-for-woocommerce');?></h2>
                </div>
                <p>
                    <?php echo sprintf( esc_html__( 'Apply a %1$smarkup%2$s or a %1$sdiscount%2$s to the product price limited only to the pre-order period. ','yith-pre-order-for-woocommerce' ),'<b>','</b>' );?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/04.png" />
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_WCPO_ASSETS_URL?>/images/05-bg.png) no-repeat #fff; background-position: 85% 100%">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/05.png" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/05-icon.png" />
                    <h2><?php _e('Bulk actions','yith-pre-order-for-woocommerce');?></h2>
                </div>
                <p>
                    <?php echo sprintf( esc_html__('Speed your procedures using WordPress bulk actions. %3$sSet the "pre-order" status on several products of your shop at the same time sorting them by %1$stags%2$s and/or %1$scategories%2$s.','yith-pre-order-for-woocommerce'),'<b>','</b>','<br>' );?></p>
            </div>
        </div>
    </div>
    <div class="section section-odd clear" style="background: url(<?php echo YITH_WCPO_ASSETS_URL?>/images/06-bg.png) no-repeat #f1f1f1; background-position: 15% 100%">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/06-icon.png" />
                    <h2><?php _e('Custom text','yith-pre-order-for-woocommerce');?></h2>
                </div>
                <p>
                    <?php echo sprintf( esc_html__( 'Customize the %1$slabel%2$s of "Add to Cart" button to show the %1$stext%2$s that better suits your "Pre-Order" products.','yith-pre-order-for-woocommerce' ),'<b>','</b>' );?>
                </p>
                <p>
                    <?php echo sprintf( esc_html__( 'Use the placeholders to insert the %1$sexpiration date%2$s of the "Pre-Order" status in the message. ','yith-pre-order-for-woocommerce' ),'<b>','</b>' );?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/06.png" />
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_WCPO_ASSETS_URL?>/images/07-bg.png) no-repeat #fff; background-position: 85% 100%">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/07.png" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCPO_ASSETS_URL?>/images/07-icon.png" />
                    <h2><?php _e('Prevent users from mixing products in the cart','yith-pre-order-for-woocommerce');?></h2>
                </div>
                <p>
                    <?php _e('Hot news! Now you can prevent the purchase combining pre-order and other products of a different type. ','yith-pre-order-for-woocommerce');?>
                </p>
                <p>
                    <?php echo sprintf( esc_html__('Enable the specific option and the system will manage everything. If a pre-order product type is already available in the cart, %1$sthe user could not add other products%2$s unless they are of the same type. ','yith-pre-order-for-woocommerce'),'<b>','</b>' );?>
                </p>
            </div>
        </div>
    </div>
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( esc_html__('Upgrade to %1$spremium version%2$s of %1$sYITH Pre-Order for WooCommerce%2$s to benefit from all features!','yith-pre-order-for-woocommerce'),'<span class="highlight">','</span>' );?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e('UPGRADE','yith-pre-order-for-woocommerce');?></span>
                    <span><?php _e('to the premium version','yith-pre-order-for-woocommerce');?></span>
                </a>
            </div>
        </div>
    </div>
</div>
