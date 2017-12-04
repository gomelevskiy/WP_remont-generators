<?php
/*
Template Name: Template contact page
*/
?>

<?php get_header(); ?>

    <!-- PAGE TITLE start -->
    <div class="container m-bot-15 clearfix">
        <div class="sixteen columns">
            <div class="page-title-container clearfix">
                <h1 class="page-title"><?php the_title();?></h1>
            </div>
        </div>
    </div>
    <!-- PAGE TITLE end -->
    <!-- CONTENT start -->
    <div class="container clearfix">
        <div class="twelve columns  m-bot-25">
            <!-- CONTACT FORM-->

            <style>
                .screen-reader-response {
                    display: none;
                }
                .wpcf7-response-output.wpcf7-validation-errors,
                .wpcf7-response-output.wpcf7-mail-sent-ok{
                    display: inline-block;
                    margin-top: 10px;
                    width: 100%;
                }
                .wpcf7-not-valid-tip{
                    display: none;
                }
                .field-1-3 input.wpcf7-not-valid{
                    border: 1px solid #e25959;
                }
            </style>

            <div class="contact-form-container">
                <div id="contact-form" class="clearfix">
                <?php the_field('contact_feedback',12); ?>
                </div>
            </div>

            <div class="content-container-white">
                <!-- Yandex Maps -->
                <section class="google-map-container">
                    <?php the_field('contact_map',12); ?>
                </section>
                <!-- Yandex Maps / End -->
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="four columns  m-bot-25">
            <div class="content-container-white">
                <h3 class="title-widget"><span class="bold">КОНТАКТНАЯ</span> ИНФОРМАЦИЯ</h3>
            </div>
            <div class="under-box-bg"></div>
            <div class="content-container-white padding-cont-15">
                <p>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>

                        <?php the_content(); ?>

                    <?php endwhile; endif; ?>
                </p>
            </div>
            <div class="under-box-bg"></div>
            <div class="content-container-white">
                <ul class="contact-info-page">
                    <li class="icon_loc"><?php the_field('address',6); ?></li>
                    <li class="icon_phone"><?php the_field('tel_1',6); ?><br><?php the_field('tel_2',6); ?></li>
                    <li class="icon_mail"><a href="mailto:<?php the_field('email',6); ?>"><?php the_field('email',6); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- CONTENT end -->

<?php get_footer(); ?>