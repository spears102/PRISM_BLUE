<?php
/**
 * Theme header.
 */
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="ja">
    <meta name="description" content="BONDI BLUEはWD2の開発した新しいテーマです。">
    <meta name="keywords" content="BONDI BLUE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
    <?php if( is_mobile()) : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mobile.css">
    <?php elseif( is_tablet()) : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/tablet.css">
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <?php endif; ?>
  </head>
  <body>
    <div id="wrapper">
        <header>
            <div id="headerleft">
                <p id="headerleftname"><?php display_logo() ?></p>
            </div><!-- #headerleft -->
            <div id="headerright">
                <ul>
                    <li><a href="">instagram</a></li>
                    <li><a href="">facebook</a></li>
                    <li><a href="">twitter</a></li>
                </ul>
            </div><!-- #headerright -->
        </header>
        <div class="clear"></div><!-- .clear -->
        <div id="menu">
            <ul>
                <li><a href="<?php echo home_url(); ?>">HOME</a></li>
                <li><a href="<?php echo home_url( 'portfolio' ); ?>">PORTFOLIO</a></li>
                <li><a href="<?php echo home_url( 'about' ); ?>">ABOUT</a></li>
                <li><a href="<?php echo home_url( 'contact' ); ?>">CONTACT</a></li>
            </ul>
        </div><!-- #menu -->
