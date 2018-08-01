<?php
/*
Template Name: test
*/
?>

<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <section class="partners">
        <div class="row">
            <div class="col-md-12">
                <div class='sec_slider__single-slide' style='background-image: url(<?php echo get_template_directory_uri(); ?>/app/img/beauty_banner.jpg)'></div>
                <div class="page-about__text" style="margin-top: 0px;">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif;?>
<section class="sec_centr">
    <!-- <div class="row">
        
        <?php if ( have_posts() ) : query_posts('page_id=44'); while (have_posts()) : the_post(); ?> 

        <div class="flex">
            <div class="col-md-4 col-sm-5">
                <?php $top_image = get_field('изображение'); ?>
                <div class="sec_centr__inner-top-image" style="background-image: url(<?php echo $top_image['url']; ?>);"></div>
            </div>
            <div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-0 bg-white">
                <h2 class="sec_centr__inner-top-subtitte"><?php the_field('заголовок'); ?></h2>
                <div class="sec_centr__inner-top-text"><?php the_field('описание'); ?></div>
            </div>
        </div>
        <? endwhile; endif; wp_reset_query(); ?>
    </div> -->

    <h2 class="sec_centr__inner-cat-title align-center"><?php echo get_queried_object()->name; ?></h2>
    <div class="row">
        <div class="col-md-12">
        <h2 class="sec_centr__inner-top-title align-center" style='margin: 20px 0'>НОВИНКИ ЦЕНТРА КРАСОТЫ</h2>
        </div>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="col-md-4 col-sm-6 sec_centr__categories">
                <div class="sec_centr__cat-wrapper">
                    <div class="sec_centr__cat-image" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                        echo $thumb_url[0];
                        ?>);">
                    </div>
                    <h4 class="sec_centr__subcat-title"><?php the_title(); ?></h4>
                    <div class="sec_centr__subcat-desc">
                        <p>Описание процедуры: <?php echo get_the_excerpt(); ?></p>
                    </div>
                    <div class="row sec_centr__subcat-items">
                        <div class="col-md-4 col-sm-4 col-xs-4 sec_centr__subcat-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/app/img/calendar.png"> <?php the_field('сеанс'); ?>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 sec_centr__subcat-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/app/img/clock.png"> <?php the_field('длительность'); ?>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 sec_centr__subcat-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/app/img/price.png"> <?php the_field('стоимость'); ?>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="sec_centr__more pull-left">подробнее</a>
                    <button class="sec_centr__call pull-right" data-toggle="modal" data-target="#service-modal">записаться</button>
                    <div class="clearfix"></div>
                </div>
            </div>
        <?php endwhile; endif;?>
    </div>
</section>
<section class="inner_centr">
    <div class="row">
        <div class="col-md-5 col-md-offset-3 col-sm-7 col-sm-offset-5 margin-bottom-30px">
            <h3 class="inner_centr__title">Ждем Встречи</h3>
            <h4 class="inner_centr__subtitle">Заборонируйте удобное для Вас время</h4>
            <p class="inner_centr__address">
                <span><img src="<?php echo get_template_directory_uri(); ?>/app/img/inner_place.png"></span>
                город Борисполь, ул. Киевский Шлях, 14
            </p>
            <p class="inner_centr__address">
                <span><img src="<?php echo get_template_directory_uri(); ?>/app/img/inner_phone.png"></span>
                (063) 527-31-71,  (098) 523-56-00, (066) 404-03-36
            </p>
            <p class="inner_centr__address">
                <span><img src="<?php echo get_template_directory_uri(); ?>/app/img/inner_time.png"></span>
                9.00 - 20.00    без выходных
            </p>
        </div>
        <div class="col-md-4 col-sm-12">
            <form class="inner_centr__form" id="bron" action="<?php echo get_template_directory_uri(); ?>/mailto.php">
                <div class="inner_centr__form-bg">
                    <input type="text" name="name" placeholder="Ваше имя">
                    <input type="text" name="phone" placeholder="телефон*" required class="inner_centr__form-phone mask-phone">
                    <input type="text" name="service" placeholder="желаемая услуга">
                    <input type="text" name="date" onfocus="(this.type='date')" placeholder="желаемая дата">
                </div>
                <div class="align-center">
                    <input type="submit" name="submit" value="забронировать" id="bron-btn">
                </div>
            </form>
        </div>
    </div>
</section>



</div>

<section class="zoom" style="position: relative;">
    <h2 class="zoom__title align-center">Акции</h2>
    <div id="gallery" class="zoomwall">
        <img src="<?php echo get_template_directory_uri(); ?>/app/img/f1.png" data-highres="<?php echo get_template_directory_uri(); ?>/app/img/f1.png">
        <img src="<?php echo get_template_directory_uri(); ?>/app/img/f2.png" data-highres="<?php echo get_template_directory_uri(); ?>/app/img/f2.png">
        <img src="<?php echo get_template_directory_uri(); ?>/app/img/f3.png" data-highres="<?php echo get_template_directory_uri(); ?>/app/img/f3.png">
        <img src="<?php echo get_template_directory_uri(); ?>/app/img/f4.png" data-highres="<?php echo get_template_directory_uri(); ?>/app/img/f4.png">
        <img src="<?php echo get_template_directory_uri(); ?>/app/img/f5.png" data-highres="<?php echo get_template_directory_uri(); ?>/app/img/f5.png">
    </div>
</section>

<div class="container">
<?php
		if (have_posts() ) :query_posts('cat=154');
		while (have_posts()) : the_post();
	?>
<section class="video">
    <div class="row">
        <div class="col-md-12">
        <h3 class="inner_centr__title align-center"><?php the_field('vtitle'); ?></h3>
          <div class="owl-carousel owl-carousel-video">
            <a href=<?php the_field('vlink-1'); ?> data-lity class="video__item">
                <div class='video__img' style='background-image: url(<?php the_field('vimg-1'); ?>)'></div>
            </a>
            <a href=<?php the_field('vlink-2'); ?> data-lity class="video__item">
            <div class='video__img' style='background-image: url(<?php the_field('vimg-2'); ?>)'></div>
            </a>
            <a href=<?php the_field('vlink-3'); ?> data-lity class="video__item">
            <div class='video__img' style='background-image: url(<?php the_field('vimg-3'); ?>)'></div>
            </a>
            <a href=<?php the_field('vlink-4'); ?> data-lity class="video__item">
            <div class='video__img' style='background-image: url(<?php the_field('vimg-4'); ?>)'></div>
            </a>
            <a href=<?php the_field('vlink-5'); ?> data-lity class="video__item">
            <div class='video__img' style='background-image: url(<?php the_field('vimg-5'); ?>)'></div>
            </a>
            <a href=<?php the_field('vlink-6'); ?> data-lity class="video__item">
            <div class='video__img' style='background-image: url(<?php the_field('vimg-6'); ?>)'></div>
            </a>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="http://www.youtube.com/channel/UCREGeGYTnzPpkf2yuXBnn8Q?sub_confirmation=1" target="_blank" class="video__youtube">
                Подписаться на наш канал
                <img src="<?php echo get_template_directory_uri(); ?>/app/img/youtube-icon.png">
            </a>
        </div>
    </div>
</section>
<?php endwhile; endif;?>
<?php
		if (have_posts() ) :query_posts('cat=155');
		while (have_posts()) : the_post();
	?>
<section class="partners">
        <h2 class="partners__title align-center" style="margin-bottom: 0px;">Фотогалерея</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="page-about__text" style="margin-top: 0px;">
                    <?php the_field('gallery'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif;?>
<script type="text/javascript">
    window.onload = function() {
        zoomwall.create(document.getElementById('gallery'), true);
    };
</script>


<?php get_footer(); ?>