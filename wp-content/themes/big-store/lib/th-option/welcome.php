
<!--- tab first -->
<div class="theme_link">
    <h3><?php _e('Setup Home Page','big-store'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e('Click button to set theme default home page','big-store'); ?></p>
     <p>
        <?php
		if($this->_check_homepage_setup()){
            $class = "activated";
            $btn_text = __("Home Page Activated",'big-store');
            $Bstyle = "display:none;";
            $style = "display:inline-block;";
        }else{
            $class = "default-home";
             $btn_text = __("Set Home Page",'big-store');
             $Bstyle = "display:inline-block;";
            $style = "display:none;";


        }
        ?>
        <button style="<?php echo $Bstyle; ?>"; class="button activate-now <?PHP echo $class; ?>"><?php _e($btn_text,'big-store'); ?></button>
        <a style="<?php echo $style; ?>";  target="_blank" href="<?php echo get_home_url(); ?>" class="button alink button-primary"><?php _e('View Home Page','big-store'); ?></a>
		
         </p>
		 	 
		 
    <p>
        <a target="_blank" href="https://themehunk.com/docs/big-store/#homepage-setting"><?php _e('Manually Setup','big-store'); ?></a>
    </p>
</div>



<!--- tab second -->
<div class="theme_link">

    <h3><?php _e('Documentation','big-store'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e('Our WordPress Theme is well documented, you can go with our documentation and learn to customize Big Store Theme','big-store'); ?></p>
    <p><a target="_blank" href="https://themehunk.com/docs/big-store/"><?php _e(' Go to docs','big-store'); ?></a></p>

    
    
</div>
<!--- tab third -->





<!--- tab second -->
<div class="theme_link">
    <h3><?php _e('Customize Your Website','big-store'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e('Big Store theme support live customizer for home page set up. Everything visible at home page can be changed through customize panel','big-store'); ?></p>
    <p>
    <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php _e("Start Customize","big-store"); ?></a>
    </p>
</div>
<!--- tab third -->

  <div class="theme_link">
    <h3><?php _e("Customizer Links","big-store"); ?></h3>
    <div class="card-content">
        <div class="columns">
                <div class="col">
                    <a href="<?php echo admin_url('customize.php?autofocus[control]=custom_logo'); ?>" class="components-button is-link"><?php _e("Upload Logo","big-store"); ?></a>
                    <hr><a href="<?php echo admin_url('customize.php?autofocus[section]=big-store-gloabal-color'); ?>" class="components-button is-link"><?php _e("Global Colors","big-store"); ?></a><hr>
                    <a href="<?php echo admin_url('customize.php?autofocus[panel]=woocommerce'); ?>" class="components-button is-link"><?php _e("Woocommerce","big-store"); ?></a><hr>

                </div>

               <div class="col">
                <a href="<?php echo admin_url('customize.php?autofocus[section]=big-store-section-header-group'); ?>" class="components-button is-link"><?php _e("Header Options","big-store"); ?></a>
                <hr>

                <a href="<?php echo admin_url('customize.php?autofocus[panel]=big-store-panel-frontpage'); ?>" class="components-button is-link"><?php _e("FrontPage Sections","big-store"); ?></a><hr>


                 <a href="<?php echo admin_url('customize.php?autofocus[section]=big-store-section-footer-group'); ?>" class="components-button is-link"><?php _e("Footer Section","big-store"); ?></a><hr>
            </div>

        </div>
    </div>

</div>
<!--- tab fourth -->