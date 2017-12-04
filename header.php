<!DOCTYPE html>
<!--[if lt IE 7 ]> <html  class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html  class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html  class="ie8"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!--> <html> <!--<![endif]-->

<head>
    <title><?php bloginfo('name'); ?><?php '||' . wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>

    <meta name="robots" content="index, follow" >
    <meta name="keywords" content="" >
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">

    <!-- CSS begin -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" >
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skeleton.css" >
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox-1.3.4.css"  >
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/styler.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/colors/yellow.css" id="template-color">

    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie-warning.css" ><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/style-ie.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ei8fix.css" ><![endif]-->

    <!-- CSS end -->

    <!-- JS begin -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jQuery.BlackAndWhite.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/styler.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<!--HEADER start-->
<header id="header">
    <div class="container clearfix">
        <div class="sixteen columns ">
            <div id="logo-container">
                <a href="/" class="logo" rel="home" title="Home"><?php the_field('logo_name',6); ?></a>
            </div>
            <ul id="social-links" class="clearfix">
                <li><a id="vk-link" target="_blank" title="VKontakte" href="<?php the_field('vk_group',6); ?>"></a></li>
            </ul>
        </div>
    </div>
    <div class="container clearfix">
        <div class="sixteen columns nav-border">

            <!-- TOP MENU -->
            <nav id="main-nav">
                <?php
                wp_nav_menu( array(
                    'menu_class'=>'sf-menu',
                    'theme_location'=>'main'
                ) );
                ?>
            </nav>
            <div class="search-container clearfix">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</header>
<!--HEADER end-->