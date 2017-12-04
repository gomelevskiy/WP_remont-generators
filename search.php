<?php get_header(); ?>
<div class="wrapper">
    <div class="container">
        <p><b>Поиск по: "<?php echo $_GET['s'];?>"</b></p>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
            <?php the_content(''); ?>
        <?php endwhile; else: ?>
            <p>Поиск не дал результатов.</p>
        <?php endif;?>
    </div>
</div>
<?php get_footer(); ?>