<?php


/**
 *  Search Form
 */
function wp_search_form_body( ) { 
    $form = '<form role="search" method="get" action="' . home_url( '/' ) . '" id="searchform" class="searchform"><div>
   <label class="screen-reader-text" for="sb">Pesquisar por:</label>
   <input type="text" value="" name="s" id="sb"  placeholder="" autocomplete="off">
    <input type="submit" id="searchsubmitbody" value="Pesquisar" />
    </div>
    </form>';
    return $form;
}

function wp_search_form_header( ) { 
    $form = '<form role="search" method="get" action="' . home_url( '/' ) . '" id="searchform" class="searchform"><div>
   <label class="screen-reader-text" for="s">Pesquisar por:</label>
   <input type="text" value="" name="s" id="s"  placeholder="" autocomplete="off">
    <input type="submit" id="searchsubmit" value="Pesquisar" />
    </div>
    </form>';
    return $form;
}


?>