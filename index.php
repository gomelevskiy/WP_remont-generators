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

    <div class="wrapper">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>

                <?php the_content(); ?>

            <?php endwhile; endif; ?>
        </div>
    </div>
<?php get_footer(); ?>