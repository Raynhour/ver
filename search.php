<?php get_header(); ?>

<h2 class="text-center sec_centr__inner-top-title">Результаты поиска по фразе "<?php echo $s ?>"</h2>
<hr>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<div class="row">
    <div class="col-md-2">
        <?php the_post_thumbnail(' img-responsive'); ?>
    </div>
    <div class="col-md-10">
        <a class="" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
        <?php echo mb_substr( strip_tags( get_the_content() ), 0, 400 ); ?>...
    </div>
</div>
<?php endwhile; endif;?>

<div class="navigate">
    <?php wp_pagenavi(); ?>
</div>

<?php get_footer(); ?>