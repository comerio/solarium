
<header>
    <div class="menu-principal ">
        <div class="container-header container">
            <div class="row">
                <div class="col-lg-2 col-md-10 col-xs-10 col-sm-10 col-8 logo-wrapper d-sm-none">
                    <h1>
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri()); ?>/build/img/logo-branca.png" alt="Logo" class="logo">
                        </a>
                    </h1>
                </div>

                <div class="col-lg-2 col-md-10 col-xs-10 col-sm-10 col-8 logo-wrapper d-none d-sm-block">
                    <h1>
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri()); ?>/build/img/logo-branca.png" alt="Logo" class="logo">
                        </a>
                    </h1>
                </div>
                <div class="d-none d-lg-block col-lg-10">
                    <nav class="navList">
                        <?php $items = get_menu_items_by_registered_slug("principal_desktop");
                            if(!empty($items))
                            
                            {
                                foreach($items as $item){
                        ?>
                                <a href="<?php echo $item->url; ?>" class="<?php echo $item->classes[0]; ?>">
                                    <h3><?php echo $item->title; ?></h3>
                                </a>
                        <?php
                                } 
                            }
                        ?>
                    </nav>
                </div>
                <div class="d-lg-none col-md-2 col-xs-2 col-sm-2 col-2">
                    <div class="mobile-menu-toggle js-toggle-menu hamburger-menu" href="#">
                        <span class="menu-item"></span>
                        <span class="menu-item"></span>
                        <span class="menu-item"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-lg-none menu-mobile">
        <div class="bigger">
            <?php $items = get_menu_items_by_registered_slug("principal_mobile");
                if(!empty($items))
                {
                    foreach($items as $item){
            ?>
                    <a class="<?php echo $item->classes[0]?>" href="<?php echo $item->url; ?>">
                        <h2><?php echo $item->title; ?></h2>
                    </a>
            <?php
                } }
            ?> 
        </div>
    </div>
</header>