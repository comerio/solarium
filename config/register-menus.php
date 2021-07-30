<?php
    function register_my_menus() {
            register_nav_menus(
                array(
                    'principal_desktop' => 'Menu Principal desktop' ,
                    'principal_mobile' => 'Menu Principal Mobile',
                    'principal_rodape' => 'Menu Principal Rodapé',
                    'rodape_coluna_1' => 'Menu Rodapé Coluna 1',
                    'rodape_coluna_2' => 'Menu Rodapé Coluna 2',
                    'rodape_coluna_3' => 'Menu Rodapé Coluna 3',
                    'rodape_coluna_4' => 'Menu Rodapé Coluna 4'
                    )
                );
        }
    
    add_action( 'init', 'register_my_menus' );
?>