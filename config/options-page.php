<?php 

if( function_exists("acf_add_options_page") ) {

    acf_add_options_page(array(
      "page_title"  => "Banner Home",
      "menu_title"  => "Banner Home",
      "menu_slug"   => "banner_home",
      "capability"  => "manage_options",
      "redirect"    => false
    ));

}

?>