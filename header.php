<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php
        global $page, $paged;

        wp_title( '|', true, 'right' );

        bloginfo( 'name' );

        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
          echo " | $site_description";

        if ( $paged >= 2 || $page >= 2 )
          echo ' | ' . sprintf( __( 'Page %s', 'themename' ), max( $paged, $page ) );
    ?></title>
    
    <meta name="Portfolio of Scott O'Brien" content="Web Development, Web Design, Front-End Development, HTML, CSS, jQuery, Wordpress">
    <meta name="scott-obrien.com" content="Web Designer, Front-End Developer">
    
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-iphone4.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-ipad3.png">

    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."resources/css/normalize.css") ?>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."resources/css/main.css") ?>
    
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>
    
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."resources/js/vendor/modernizr-2.6.1.min.js") ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->

  <div class="wrapper">
    <header>
      <div class="wrap-header clearfix">
        <div class="logo">
          <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
          <span class="sub-logo"><?php bloginfo('description'); ?></span>
        </div>
        <div class="burger-menu right">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav>
          <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-wrap' ) ); ?>
        </nav>
        <div class="mobile-nav">
            <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-wrap' ) ); ?>
        </div>
      </div>
    </header>
