<?php
/*
Template Name Posts: Шаблон для записей
*/
?>

<?php get_header(); ?>

    <!-- PAGE TITLE start -->
    <div class="container m-bot-15 clearfix">
        <div class="sixteen columns">
            <div class="page-title-container clearfix">
<!--                <h1 class="page-title">--><?php //the_title();?><!--</h1>-->
                <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
            </div>
        </div>
    </div>
    <!-- PAGE TITLE end -->

    <!-- CONTENT start -->
    <div class="container clearfix">
        <div class="eleven columns ">
            <!-- PORTFOLIO ITEM -->
            <div class="blog-item m-bot-25">
                <div class="content-container-white">
                    <div class="view view-first">
                        <img style="width: 100%;" src="<?php the_field('image_item'); ?>" alt="<?php the_title(); ?>" >
                    </div>
                    <div class="contant-container-caption">
                        <a class="a-invert" href="<?php the_permalink() ?>"><span class="bold"><?php the_title(); ?></span></a>
                    </div>
                </div>
                <div class="under-box-bg"></div>
                <div class="content-container-white blog-text-container">
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>

                        <?php the_content(); ?>

                    <?php endwhile; endif; ?>
                </div>
            </div>

        </div>

        <!-- SIDEBAR -->
        <div class="five columns ">
            <!-- WIDGET -->
            <div class="sidebar-item  m-bot-25">
                <div class="content-container-white">
                    <h3 class="title-widget"><span class="bold">МЕНЮ</span></h3>
                </div>
                <div class="under-box-bg"></div>
                <div class="content-container-white padding-l-r-15">
                    <?php get_sidebar(); ?>
                </div>
            </div>

            <!-- WIDGET -->
            <div class="sidebar-item  m-bot-25">
                <div class="center-text">
                    <a class="button large-border" href="<?php the_field('vk_group',6); ?>">МЫ ВКОНТАКТЕ</a>
                </div>
            </div>

        </div>
    </div>
    <!-- CONTENT start -->

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

<?php get_footer(); ?>