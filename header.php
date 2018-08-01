<!DOCTYPE html>
<head>
    <html lang="<?php echo get_bloginfo('language'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('&#8594;', true, 'right'); echo get_bloginfo('name');?> - <?php echo get_bloginfo('description') ?></title>
    <script src="<?php echo get_template_directory_uri(); ?>/app/js/libs.min.js"></script>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/libs.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/main.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109201466-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109201466-1');
    </script>
        
</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="super-wrapper">
<div class="super-content">

<!--================================================================================
# HEADER
=================================================================================-->
<div class="container">
<header class="header">
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-12">
            <div class="header__logo">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/logo.png" alt="" title="" class="header__logo__img img-responsive">
                </a>
            </div>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <div class="row header__top-flex">
                <div class="header__phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/phone.png"> <a style="color: #000;" href="tel:096-223-11-93">096-223-11-93</a>
                    <p class="desc">Студия-магазин</p>
                </div>
                <div class="header__phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/phone.png"> <a style="color: #000;" href="tel:098-523-56-00">098-523-56-00</a>
                    <p class="desc">Центр красоты</p>
                </div>
                <div class="header__phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/phone.png"> <a style="color: #000;" href="tel:063-527-31-71">063-527-31-71</a>
                    <p class="desc">Учебный центр</p>
                </div>
                <div class="header__button__wrapper">
                    <button id="beaurypro_open" class="header__button">онлайн запись на услуги</button>
                    <!-- <button id="beaurypro_open" class="header__button" data-toggle="modal" data-target="#my-bron">онлайн запись на услуги</button> -->
                </div>
                <div class="header__cart">
                    <span class="header__cart__count">
                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/cart.png" class="header__cart__img"> <?php echo WC()->cart->get_cart_contents_count(); ?>
                    </span>
                    <span class="header__cart__sum"><?php echo WC()->cart->get_cart_total(); ?></span>
                    <a class="header__cart-link" href="<?php echo wc_get_cart_url(); ?>"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 padding-0">
                    <div class="top-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'top-menu') ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="mobile-menu"></div>

<div class="search">
    <form role="search" method="get" id="searchform" class="search__form" action="<?php echo home_url( '/' ) ?>" >
        <input  class="search__input" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск по сайту"/>
        <input class="search__button" type="submit" id="searchsubmit" value="найти" />
    </form>
</div>

<?php if( !is_front_page() ): ?>
<section class="bread">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if(function_exists('bcn_display')) { bcn_display(); }?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>