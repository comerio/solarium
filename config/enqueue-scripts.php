
<?php 

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
//add_action( 'init', 'ajax_assets' );

function enqueue_scripts()
{

    if (!is_admin()) {
        wp_deregister_script('jquery');
     }
    wp_enqueue_script( 'jquery',  get_template_directory_uri() . '/build/jquery-3.6.min.js', null , null , false );
 

    if (is_home() || is_front_page()) {
        wp_enqueue_style( 'home-style', get_template_directory_uri(). '/build/css/home.css', null, null , false);
        wp_enqueue_script( 'home-script', get_template_directory_uri(). '/build/js/scripts-home.js', null, null , false);
        global $wp_query;

	}

}

function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
   }
   

   function disable_emoji_feature() {
	
	// Prevent Emoji from loading on the front-end
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Remove from admin area also
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// Remove from RSS feeds also
	remove_filter( 'the_content_feed', 'wp_staticize_emoji');
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji');

	// Remove from Embeds
	remove_filter( 'embed_head', 'print_emoji_detection_script' );

	// Remove from emails
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Disable from TinyMCE editor. Currently disabled in block editor by default
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

	/** Finally, prevent character conversion too
         ** without this, emojis still work 
         ** if it is available on the user's device
	 */

	add_filter( 'option_use_smilies', '__return_false' );

}

function disable_emojis_tinymce( $plugins ) {
	if( is_array($plugins) ) {
		$plugins = array_diff( $plugins, array( 'wpemoji' ) );
	}
	return $plugins;
}

add_action('init', 'disable_emoji_feature');


function my_deregister_scripts(){
    wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );



?>