<?php
/**
 * @package ShopperPress
 * @author Mark Fail
 * @version 2.21
 */
/*
Plugin Name: ShopperPress
Plugin URI: http://shopperpress.com/
Description: ShopperPress can be used to setup 4 different types of websites, Online Store with Payment Gateway, Affiliate Stores, Catalogue Websites, Digital Music & File Download Website.
Author: PremiumPress
Version: 2.23
Author URI: http://www.premiumpress.com
*/

function shopperpress_plugin_options() {

	add_menu_page(__('shopperpress_plugin'), __('ShopperPress','cp'), 8, basename(__FILE__), '', 'http://www.shopperpress.com/favicon.ico');
 
	add_submenu_page(basename(__FILE__), __('shopperpress_plugin','cp'), __('Getting Started','cp'), '10', basename(__FILE__), 'shopperpress_plugin');	
	add_submenu_page(basename(__FILE__), __('shopperpress_plugin','cp'), __('More Themes','cp'), '10', 'plugin_themes', 'shopperpress_plugin_themes');	

}

function shopperpress_plugin_logo(){

?>
<a href="http://www.premiumpress.com/?adminlink=shopperpress" target="_blank">
<img src="http://www.premiumpress.com/inc/images/layout/logoSymbol-small.png" style="float:right; margin-top:10px;" />
</a>

<?php

}



function shopperpress_plugin( ) { ?>

<div class="wrap"><?php echo shopperpress_plugin_logo(); ?> 
<h2>Getting Started with ShopperPress - Shopping Cart</h2>
<hr>
<p><b>NOTE: ShopperPress plugin has now been redeveloped as a Wordpress theme.</b> </p>
<p>To use ShopperPress please download the free Wordpress theme (below) and install it under the themes section of your Wordpress admin. </p>
<iframe src="http://premiumpress.com/downloads/?source=wordpress-plugin" width="100%" style="height:900px;"></iframe>
</div>
 
<?php }


function shopperpress_plugin_themes( ) { ?>
<div class="wrap"><?php echo shopperpress_plugin_logo(); ?> 
<h2>ShopperPress Developed by PremiumPress</h2><hr>
<p>Take a look at some of our other premium wordpress themes at <a href="http://www.premiumpress.com" target="_blank">www.premiumpress.com</a></p>
<iframe src="http://premiumpress.com?source=wordpress-plugin" width="100%" style="height:900px;"></iframe>
</div>
 
<?php }

add_action('admin_menu', 'shopperpress_plugin_options');
?>
