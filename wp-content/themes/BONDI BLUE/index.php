<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="ja">
    <meta name="description" content="BEAST">
    <meta name="keywords" content="BEAST">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEAST</title>
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
        <header></header>
        <header id="fix">
            <div class="logo"><a><img></a></div>
            <nav>
                <ul>
                    <li><a><img></a></li>
                    <li><a><img></a></li>
                    <li><a><img></a></li>
                    <li><a><img></a></li>
                    <li><a><img></a></li>
                    <li><a><img></a></li>
                </ul>
            </nav>
            <ul class="sns">
                <li><a><img></a></li>
                <li><a><img></a></li>
                <li><a><img></a></li>
            </ul>
        </header>
        <div id="main">
            <h1>functions.phpで、関数を用いて端末判断を行う</h1>
            <p>PCでは背景色が灰色に、<br>タブレットでは背景色が黄緑色に、<br>スマホでは背景色が黄色になります。</p>
        </div><!-- #main -->
        <footer></footer>
    </div><!-- #wrapper -->
  </body>
</html>
