<!DOCTYPE html>
<?php include("partial/header-info.php") ?>
<html lang="pt-br">
<head>
        <title><?php echo $pageInfo["title"];  ?></title>
        <meta name="description" content="<?php echo $pageInfo["description"];  ?>">
        <link rel="canonical" href="<?php echo $pageInfo["canonical"];  ?>">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri()."/resources/img/favicon-tenda.ico";?>"> -->
        <meta name="theme-color" content="#000">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php if (!is_404() && !is_page("noindex")): ?>
        <meta name="robots" content="index, follow">
        <?php else: ?>
        <meta name="robots" content="noindex, nofollow">
        <?php endif; ?>
        <?php if (is_single()): ?>
        <meta name="robots" content="index, follow">
        <meta property="og:type" content="article">
        <?php else: ?>
        <meta property="og:type" content="website">
        <?php endif; ?>
        <meta property="og:title" content="<?php echo $pageInfo["title"];  ?>">
        <meta property="og:image" content="<?php echo $pageInfo["image"];  ?>">
        <meta property="og:site_name" content="<?php echo get_bloginfo( 'name' ); ?>">
        <meta property="og:url" content="<?php echo $pageInfo["canonical"];  ?>">
        <meta property="og:description" content="<?php echo $pageInfo["description"];  ?>">
        <?php if (is_single()): ?>
        <?php if (get_the_tags()) { for($i = 0; $i < sizeof(get_the_tags()); $i++ ){ ?>
        <meta property="article:tag" content="<?php  echo get_the_tags()[$i]->name; ?>">
        <?php } }?>
        <meta property="article:section" content="<?php  echo get_the_category()[0]->name; ?>">
        <meta property="article:published_time" content="<?php  echo get_the_date('c'); ?>">
        <meta property="article:modified_time" content="<?php  echo get_the_modified_date('c'); ?>">
        <meta property="og:updated_time" content="<?php  echo get_the_modified_date('c'); ?>">
        <meta property="og:image:secure_url" content="<?php echo get_the_post_thumbnail_url(get_the_ID(),"full") ?>">
        <meta property="og:locale" content="pt_BR">
        <?php endif ?>
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php echo get_the_title(); ?>">
        <meta name="twitter:description" content="<?php echo strip_tags(get_the_excerpt()); ?>">
        <meta name="twitter:image:src" content="<?php echo get_the_post_thumbnail_url(get_the_ID(),"full") ?>">
        <meta name="twitter:url" content="<?php echo get_the_title(); ?>">
        <?php wp_head(); ?>
        <script type="text/javascript">
        var templateUrl = '<?= get_stylesheet_directory_uri(); ?>';
        </script>
</head>
<body <?php body_class($isPage); ?>>
<!-- Banner Home: -->
<?php include("partial/header-template.php") ?> 
<!-- :Banner Home -->