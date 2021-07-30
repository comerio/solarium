<?php
// New Sizes
add_image_size( 'banner-home-desk', 1904, 400 , array( 'center', 'center' ));
add_image_size( 'banner-home-mobile', 1904, 400 , array( 'center', 'center' ));
add_image_size( 'post-single-size', 1200, 400 , array( 'center', 'center' ));
add_image_size( 'post-feature-size', 270, 350 , array( 'center', 'center' ));

function wp_trim_all_excerpt($text) {
    // Creates an excerpt if needed; and shortens the manual excerpt as well
    global $post;
       $raw_excerpt = $text;
       if ( '' == $text ) {
          $text = get_the_content('');
          $text = strip_shortcodes( $text );
          $text = apply_filters('the_content', $text);
          $text = str_replace(']]>', ']]&gt;', $text);
       }
    
    $text = strip_tags($text);
    $excerpt_length = apply_filters('excerpt_length', 17);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $text = wp_trim_words( $text, $excerpt_length, $excerpt_more ); 
    
    return apply_filters('wp_trim_excerpt', $text, $raw_excerpt); 
    }
    
    remove_filter('get_the_excerpt', 'wp_trim_excerpt');
    add_filter('get_the_excerpt', 'wp_trim_all_excerpt');

add_filter( 'gform_tabindex', '__return_false' );


function is_first_time() {
    if (isset($_COOKIE['_wp_first_time']) || is_user_logged_in()) {
        return false;
    } else {
        // expires in 30 days.
        setcookie('_wp_first_time', 1, time() + (WEEK_IN_SECONDS * 4), COOKIEPATH, COOKIE_DOMAIN, false);

        return true;
    }
}
add_action( 'init', 'is_first_time');


function archive_list( $query ){
    if( ! is_admin()
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 6 );
    }
}
add_action( 'pre_get_posts', 'archive_list' );



function get_menu_items_by_registered_slug($menu_slug) {

    $menu_items = array();

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_slug ] ) ) {
        $menu = get_term( $locations[ $menu_slug ] );

        $menu_items = wp_get_nav_menu_items($menu->term_id);
    }
    return $menu_items;
}


add_theme_support( 'title-tag' );


function pushScript($uri) {
    header("Link: <{$uri}>; rel=preload; as=script", false);
}

function pushStyle($uri) {
    header("Link: <{$uri}>; rel=preload; as=style", false);
}


remove_action('wp_head', 'wp_generator'); 
remove_action('wp_head', 'rel_canonical');

add_filter( 'cancel_comment_reply_link', '__return_false' );


add_action( 'amp_post_template_head', function() {
  echo '<link rel="canonical" href="'.get_the_permalink().'">';
} );


?>