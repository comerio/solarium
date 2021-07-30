<?php 
    $images_desk = get_field('banner_home_desktop', 'option');
    $size_desk = 'banner-home-desktop'; // (thumbnail, medium, large, full or custom size)
    if( $images_desk ): ?>
        <div class="banner-home d-none d-md-block">
            <?php foreach( $images_desk as $image ): ?>
                <div>
                    <div>
                        <a href="<?php echo $image['link']; ?>">
                            <img src="<?php echo $image['imagem']['url']; ?>" data-src="<?php echo $image['imagem']['sizes'][$size_desk]; ?>" alt="<?php echo $image['imagem']['alt']; ?>">
                            <script type="application/ld+json">
                                {
                                "@context": "https://schema.org",
                                "@type": "ImageObject",
                                "name": "<?php the_title(); ?>",
                                "description": "<?php echo get_the_excerpt(); ?>",
                                "width": "1904",
                                "height": "400",
                                "contentUrl": "<?php echo $image['imagem']['sizes'][$size_desk]; ?>"
                                }
                            </script>
                            <span>
                                <?php echo $image['imagem']['alt']; ?>
                            </span>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
    <?php endif; ?>
    <?php 
    $images_mob = get_field('banner_home_mobile','option');
    $size_mob = 'banner-home-mobile'; // (thumbnail, medium, large, full or custom size)
    if( $images_mob ): ?>   
        <div class="banner-home d-md-none">
            <?php foreach( $images_mob as $image ): ?>
                <div>
                    <div>
                        <a href="<?php echo $image['link']; ?>">
                        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $image['imagem']['sizes']['large']; ?>" alt="<?php echo $image['imagem']['alt']; ?>">
                        <span>
                            <?php echo $image['imagem']['alt']; ?>
                        </span>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
    <?php endif; ?>
</div>
