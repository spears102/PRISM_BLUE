<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="ja">
    <meta name="description" content="BONDI BLUEはWD2の開発した新しいテーマです。">
    <meta name="keywords" content="BONDI BLUE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BONDI BLUE</title>
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
                <p id="headerleftname">岩倉しおり</p>
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
        <div id="worklist">
            <ul id="worklist1">
                <li><a href="">真夏のサイダー</a></li>
                <li><a href="">水しぶき</a></li>
                <li><a href="">夏の海が光る。</a></li>
                <li><a href="">花あそび</a></li>
            </ul>
            <ul id="worklist2">
                <li><a href="">梅雨の夕暮れ</a></li>
                <li><a href="">紫陽花の水やり</a></li>
                <li><a href="">夜明け前の海。</a></li>
                <li><a href="">夏雲</a></li>
            </ul>
            <ul id="worklist3">
                <li><a href="">旅行中に見つけた向日葵畑</a></li>
                <li><a href="">夏の匂い。</a></li>
                <li><a href="">海での時間</a></li>
            </ul>
            <ul id="worklist4">
                <li><a href="">夏の日差し</a></li>
                <li><a href="">光の模様</a></li>
                <li><a href="">初夏</a></li>
                <li><a href="">夏の窓枠</a></li>
            </ul>
            <ul id="worklist5">
                <li><a href="">夏の午後</a></li>
                <li><a href="">プールの水しぶき</a></li>
                <li><a href="">夏の音</a></li>
            </ul>
        </div><!-- #worklist -->
        <footer>
            <div id="footerleft"><p>2019 Image by iwakura shiori</p></div><!-- #footerleft -->
            <div id="footerright">
                <a href=""><img src="<?php bloginfo('template_directory'); ?>/img/prism-icon-sample.jpg"></a>
            </div><!-- #footerright -->
        </footer>
        <div class="clear"></div><!-- .clear -->
    </div><!-- #wrapper -->
  </body>
</html>
