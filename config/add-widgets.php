<?php

function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Assets laterais',
        'id'            => 'lateral-widgets',
        'before_widget' => '<div class="lateral-widgets">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="lateral-title" style="display:none">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init' );


?>
