<?php
/*
Template Name: Template main page
*/
?>

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

        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie-warning.css" ><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/style-ie.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ei8fix.css" ><![endif]-->

        <!-- Sequence slider CSS -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/sequencejs-theme.modern-slide-in.css" >
        <!--[if lt IE 9]><link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/sequencejs-theme.modern-slide-in.ie.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/sequencejs-theme.modern-slide-in.ie8.css" ><![endif]-->

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/colors/yellow.css" id="template-color">
        <!-- CSS end -->

        <!-- JS begin -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script>
        <!-- sequence js -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sequence.jquery-min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sequence-slider.js"></script>
        <!-- end sequence js -->
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
        <!-- JS end -->

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

    <!-- SLIDER start -->
    <div id="slider-container" class="container clearfix">
        <div class="sixteen columns ">
            <div id="sequence-theme">

                <div id="sequence">
                    <div class="arrows-nav ">
                        <img class="prev" src="<?php bloginfo('template_directory'); ?>/images/bt-prev.png" alt="Previous Frame" ><img class="next" src="<?php bloginfo('template_directory'); ?>/images/bt-next.png" alt="Next Frame" >
                    </div>
                    <ul>
                        <!-- SLIDE -->
                        <li class="animate-in">
                            <img class="bg-slide" src="<?php the_field('s1_img',6); ?>" alt="Slide 1" />
                            <div class="main-text"><span class="size-14"><?php the_field('s1_text1',6); ?></span><br><span class="size-28"><?php the_field('s1_text2',6); ?></span><br><span class="size-14"><?php the_field('s1_text3',6); ?></span> <a href="/kontakty/"><span  class="size-41 color"><?php the_field('s1_text4',6); ?></span></a></div>
                        </li>
                        <!-- SLIDE -->
                        <li>
                            <img class="bg-slide" src="<?php the_field('s2_img',6); ?>" alt="Slide 2" />
                            <div class="main-text"><span class="size-14"><?php the_field('s2_text1',6); ?></span><br><span class="size-28"><?php the_field('s2_text2',6); ?></span><br><span class="size-14"><?php the_field('s2_text3',6); ?></span> <a href="/kontakty/"><span  class="size-41 color"><?php the_field('s2_text4',6); ?></span></a></div>
                        </li>
                        <!-- SLIDE -->
                        <li>
                            <img class="bg-slide" src="<?php the_field('s3_img',6); ?>" alt="Slide 3" />
                            <div class="main-text"><span class="size-14"><?php the_field('s3_text1',6); ?></span><br><span class="size-28"><?php the_field('s3_text2',6); ?></span><br><span class="size-14"><?php the_field('s3_text3',6); ?></span> <a href="/kontakty/"><span  class="size-41 color"><?php the_field('s3_text4',6); ?></span></a></div>
                        </li>
                    </ul>

                </div>
                <ul class="nav">
                    <li><img style="width: 138px; height: 46px;" src="<?php the_field('s1_img',6); ?>" alt="Slide 1 Preview" /></li>
                    <li><img style="width: 138px; height: 46px;" src="<?php the_field('s2_img',6); ?>" alt="Slide 2 Preview" /></li>
                    <li><img style="width: 138px; height: 46px;" src="<?php the_field('s3_img',6); ?>" alt="Slide 3 Preview" /></li>
                </ul>
                <ul class="controls">
                    <li class="status"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- SLIDER end -->

    <!-- 3 BLOCKS start -->
    <div class="container box3-cont clearfix">
        <!-- BLOCK -->
        <div class="one-third m-bot-35 column">
            <div class="block3-container">
                <a class="block3-a" href="<?php the_field('b1_link',6); ?>">
                    <div class="box-main-container">
                        <div class="box-number">
                            01
                        </div>
                        <div class="img-holder seo" style="background-image: url(<?php the_field('b1_img',6); ?>);"></div>
                        <h3><?php the_field('b1_article',6); ?></h3>
                    </div>
                </a>
                <div class="under-box-bg"></div>
                <div class="box-text-container">
                    <h5><?php the_field('b1_text',6); ?></h5>
                    <a class="r-m-plus-small" href="<?php the_field('b1_link',6); ?>"></a>
                </div>
            </div>
        </div>
        <!-- BLOCK -->
        <div class="one-third m-bot-35 column">
            <div class="block3-container">
                <a class="block3-a" href="<?php the_field('b2_link',6); ?>">
                    <div class="box-main-container">
                        <div class="box-number">
                            02
                        </div>
                        <div class="img-holder seo" style="background-image: url(<?php the_field('b2_img',6); ?>);"></div>
                        <h3><?php the_field('b2_article',6); ?></h3>
                    </div>
                </a>
                <div class="under-box-bg"></div>
                <div class="box-text-container">
                    <h5><?php the_field('b2_text',6); ?></h5>
                    <a class="r-m-plus-small" href="<?php the_field('b2_link',6); ?>"></a>
                </div>
            </div>
        </div>
        <!-- BLOCK -->
        <div class="one-third m-bot-35 column">
            <div class="block3-container">
                <a class="block3-a" href="<?php the_field('b3_link',6); ?>">
                    <div class="box-main-container">
                        <div class="box-number">
                            03
                        </div>
                        <div class="img-holder seo" style="background-image: url(<?php the_field('b3_img',6); ?>);"></div>
                        <h3><?php the_field('b3_article',6); ?></h3>
                    </div>
                </a>
                <div class="under-box-bg"></div>
                <div class="box-text-container">
                    <h5><?php the_field('b3_text',6); ?></h5>
                    <a class="r-m-plus-small" href="<?php the_field('b3_link',6); ?>"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- 3 BLOCKS end -->

    <!-- BUY NOW  start -->
    <div class="container m-bot-25 clearfix">
        <div class="sixteen columns">
            <div class="buy-now-text-container">
                <h2><span class="bold">Закажите звонок</span> и наши специалисты свяжутся с вами</h2><span class="buy-now-slogan">Если у вас есть какие либо вопросы, то мы с радостью проконсультируем вас.</span>
            </div>
            <div class="side-box-bg buy-now"></div>
            <div class="button-buy-container modal-buy"><a class="button large-border" href="/kontakty/">Заказать звонок</a></div>
        </div>
    </div>
    <!-- BUY NOW  end -->

    <!-- LATEST WORK start -->
    <div class="container clearfix">
        <div class="sixteen columns m-bot-20">
            <div class="latest-work-caption-container">
                <div class="caption-main-container clearfix">
                    <div class="caption-text-container">
                        <span class="bold">НАШИ</span> УСЛУГИ
                    </div>
                    <div class="carousel-navi jcarousel-scroll">
                        <div class="jcarousel-prev"></div>
                        <div class="jcarousel-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LATEST WORK end -->

    <!-- jCAROUSEL start -->
    <div class="jcarousel container latest-work-jc m-bot-25" >
        <ul>
        <?php $id= 4; $recent = new WP_Query("cat=$id&showposts=$n"); while($recent->have_posts()) : $recent->the_post();?>
               <!-- OUR PROJECTS ITEM -->
               <li class="four columns">
                   <div class="content-container-white">
                       <div class="view view-first">
                           <img src="<?php the_field('image_item'); ?>" alt="Ipsum" >
                           <div class="mask">
                               <h2><span class="w-b-bottom"><span class="bold"><?php the_title(); ?></span></span></h2>
                               <a href="<?php the_field('image_item'); ?>" class="lightbox zoom info"></a><a href="<?php the_permalink() ?>" class="link info"></a>
                           </div>
                       </div>
                       <div class="lw-item-caption-container">
                           <a class="a-invert" href="<?php the_permalink() ?>" ><span class="bold"><?php the_title(); ?></span></a>
                       </div>
                   </div>
                   <div class="under-box-bg"></div>
                   <div class="content-container-white lw-item-text-container">
                       <p><?php the_field('review_item'); ?></p>
                   </div>
               </li>
        <?php endwhile; ?>
        </ul>
    </div>
    <!-- jCAROUSEL end -->

    <!-- NEWS LETTER start -->
    <div class="container m-bot-25 clearfix">
        <div class="sixteen columns">
            <div class="content-container-white nl-img-container">
                <img src="<?php bloginfo('template_directory'); ?>/images/mail-big-icon.png" alt="mail">
            </div>
            <div class="side-box-bg news-letter hide"></div>
            <div class="nl-text-container part">
                <div class="caption">
                    <span class="bold">ЗАКАЗАТЬ</span> ЗВОНОК
                </div>
                <div class="nl-text">Поля отмеченные *<br/> обязательны для заполнения</div>
            </div>
            <div class="nl-form-container ">

                <style>
                    .screen-reader-response{
                        display: none;
                    }
                    .wpcf7-response-output.wpcf7-mail-sent-ok{
                        display: none;
                    }
                    .wpcf7-response-output.wpcf7-validation-errors{
                        display: none;
                    }
                    .wpcf7-not-valid-tip{
                        display: none;
                    }
                    .wpcf7-not-valid{
                        border: 1px solid #e25959;
                    }
                </style>

                <div class="newsletterform">
                    <?php the_field('contact_feedback_small',12); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- NEWS LETTER end -->

    <!-- LATEST WORK start -->
    <div class="container clearfix reviews-container">
        <div class="sixteen columns m-bot-20">
            <div class="latest-work-caption-container">
                <div class="caption-main-container clearfix">
                    <div class="caption-text-container">
                        <span class="bold">ОТЗЫВЫ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LATEST WORK end -->

    <!-- jCAROUSEL start -->
    <div class="jcarousel container latest-work-jc m-bot-25" >
        <ul>

            <!-- LATEST WORK ITEM -->
            <li class="four columns">
                <div class="content-container-white">
                    <div class="view view-first">
                        <img src="<?php bloginfo('template_directory'); ?>/images/content/port-2-3.jpg" alt="Ipsum" >
                    </div>
                    <div class="lw-item-caption-container">
                        <a class="a-invert"><?php the_field('o1_author',6); ?></a>
                    </div>
                </div>
                <div class="under-box-bg"></div>
                <div class="content-container-white lw-item-text-container">
                    <p><?php the_field('o1_text',6); ?></p>
                </div>

            </li>

            <!-- OUR PROJECTS ITEM -->
            <li class="four columns">
                <div class="content-container-white">
                    <div class="view view-first">
                        <img src="<?php bloginfo('template_directory'); ?>/images/content/port-2-4.jpg" alt="Ipsum" >
                    </div>
                    <div class="lw-item-caption-container">
                        <a class="a-invert"><?php the_field('o2_author',6); ?></a>
                    </div>
                </div>
                <div class="under-box-bg"></div>
                <div class="content-container-white lw-item-text-container">
                    <p><?php the_field('o2_text',6); ?></p>
                </div>
            </li>

            <!-- OUR PROJECTS ITEM -->
            <li class="four columns">
                <div class="content-container-white">
                    <div class="view view-first">
                        <img src="<?php bloginfo('template_directory'); ?>/images/content/port-2-6.jpg" alt="Ipsum" >
                    </div>
                    <div class="lw-item-caption-container">
                        <a class="a-invert"><?php the_field('o3_author',6); ?></a>
                    </div>
                </div>
                <div class="under-box-bg"></div>
                <div class="content-container-white lw-item-text-container">
                    <p><?php the_field('o3_text',6); ?></p>
                </div>
            </li>

            <!-- OUR PROJECTS ITEM -->
            <li class="four columns">
                <div class="content-container-white">
                    <div class="view view-first">
                        <img src="<?php bloginfo('template_directory'); ?>/images/content/port-2-6.jpg" alt="Ipsum" >
                    </div>
                    <div class="lw-item-caption-container">
                        <a class="a-invert"><?php the_field('o4_author',6); ?></a>
                    </div>
                </div>
                <div class="under-box-bg"></div>
                <div class="content-container-white lw-item-text-container">
                    <p><?php the_field('o4_text',6); ?></p>
                </div>
            </li>

        </ul>
    </div>
    <!-- jCAROUSEL end -->

    <!-- OUR CLIENTS start -->
    <div class="container clearfix">
        <div class="sixteen columns m-bot-20">
            <div class="our-clients-caption-container">
                <div class="caption-main-container clearfix">
                    <div class="caption-text-container">
                        <span class="bold">КАРТА</span> САЙТА
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container m-bot-35 clearfix">
        <ul class="our-clients-container clearfix">
            <li class="content-container-white">
                <a href="<?php the_field('map-site1_link',6); ?>">
                    <div class="bw-wrapper">
                        <img src="<?php the_field('map-site1_img',6); ?>" alt="maps-page" />
                    </div>
                </a>
            </li>
            <li class="content-container-white">
                <a href="<?php the_field('map-site2_link',6); ?>">
                    <div class="bw-wrapper">
                        <img src="<?php the_field('map-site2_img',6); ?>" alt="maps-page" >
                    </div>
                </a>
            </li>
            <li class="content-container-white">
                <a href="<?php the_field('map-site3_link',6); ?>">
                    <div class="bw-wrapper">
                        <img src="<?php the_field('map-site3_img',6); ?>" alt="maps-page" >
                    </div>
                </a>
            </li>
            <li class="content-container-white">
                <a href="<?php the_field('map-site4_link',6); ?>">
                    <div class="bw-wrapper">
                        <img src="<?php the_field('map-site4_img',6); ?>" alt="maps-page" >
                    </div>
                </a>
            </li>
            <li class="content-container-white">
                <a href="<?php the_field('map-site5_link',6); ?>">
                    <div class="bw-wrapper">
                        <img src="<?php the_field('map-site5_img',6); ?>" alt="maps-page" >
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- OUR CLIENTS end -->

    <!-- FOOTER start -->
    <!-- FOOTER start -->
    <footer>
        <div class="footer-content-bg">
            <a class="scrollup" href="#header">Go To Top</a>
            <div class="container clearfix">
                <div class="four columns m-bot-25">
                    <div class="clearfix">
                        <a href="/" class="logo-footer clearfix" rel="home" title="Home"><?php the_field('logo_name',6); ?></a>
                    </div>
                    <p><?php the_field('text_about',6); ?></p>
                    <a class="right r-m-plus" href="<?php the_field('link_footer',6); ?>">
                        <span class="bold">Узнать</span> больше
                    </a>
                </div>
                <div class="four columns m-bot-25">
                    <h3 class="caption"><span class="bold">УСЛУГИ</span></h3>
                    <?php
                    wp_nav_menu( array(
                        'menu_class'=>'footer-menu-category',
                        'theme_location'=>'footer_left'
                    ) );
                    ?>
                </div>
                <div class="four columns m-bot-25">
                    <h3 class="caption"><span class="bold">РЕМОНТ ГЕНЕРАТОРОВ</span></h3>
                    <?php
                    wp_nav_menu( array(
                        'menu_class'=>'footer-menu-category',
                        'theme_location'=>'footer_right'
                    ) );
                    ?>
                </div>
                <div class="four columns m-bot-25">
                    <h3 class="caption"><span class="bold">КОНТАКТЫ</span></h3>
                    <div title="Location" class="icon_loc"><?php the_field('address',6); ?></div>
                    <div title="Phone" class="icon_phone"><?php the_field('tel_1',6); ?><br><?php the_field('tel_2',6); ?><br><?php the_field('tel_3',6); ?><br><?php the_field('tel_4',6); ?></div>
                    <div title="Email" class="icon_mail"><a href="mailto:<?php the_field('email',6); ?>"><?php the_field('email',6); ?></a></div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-bg">
            <div class="container clearfix">
                <div class="eight columns">
                    <nav class="clearfix" id="footer-nav">
                        <?php
                        wp_nav_menu( array(
                            'menu_class'=>'footer-menu',
                            'theme_location'=>'main'
                        ) );
                        ?>
                    </nav>
                </div>
                <div class="eight columns right-text">
                    Copyright &copy; <a class="author" href="http://kokomarket.net">KOKOMARKET</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter41352494 = new Ya.Metrika({
                        id:41352494,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/41352494" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</body>

</html>