<?php
//====================================================
//  Template Name: Header
//====================================================
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maco-de|makotoのポートフォリオサイト</title>
    <meta name=”description” content=”栃木県出身のWebコーダーが、より良いWebサイト制作をお手伝いいたします。高品質なデザイン再現はもちろん、綿密なコミュニケーションで皆様をアシスト。WordPress構築もおまかせください。”>
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:title" content="maco-de|makotoのポートフォリオサイト">
    <meta property="og:description" content="栃木県出身のWebコーダーが、より良いWebサイト制作をお手伝いいたします。高品質なデザイン再現はもちろん、綿密なコミュニケーションで皆様をアシスト。WordPress構築もおまかせください。">
    <meta property="og:url" content="https://maco-de.com/">
    <meta property="og:site_name" content="maco-de|makotoのポートフォリオサイト">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="container">
            <div class="header__menu">
                <div class="header__menu__logo">
                    <a class="header__menu__logo__link" href="<?php echo home_url(); ?>">maco-de</a>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav class="header__nav">
                <ul class="header__nav__list">
                    <li><a href="<?php echo home_url(); ?>/about">ABOUT</a></li>
                    <li><a href="<?php echo home_url(); ?>/news">NEWS</a></li>
                    <li><a href="<?php echo home_url(); ?>/works">WORKS</a></li>
                    <li><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
                    <li><a href="https://github.com/maco-de">GitHub</a></li>
                </ul>
            </nav>
        </div>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-PTZL3WWV96"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-PTZL3WWV96');
        </script>
    </header>