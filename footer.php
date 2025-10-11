<?php
//====================================================
//  Template Name: Footer
//====================================================
?>

<!-- フッター -->

<footer class="footer">
    <a class="top" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/top_icon.png" alt=""></a>
    <div class="content-width">
        <div class="footer__menu">
            <a class="footer__menu__logo" href="<?php echo home_url(); ?>">maco-de</a>
            <nav class="footer__menu__nav">
                <ul class="footer__menu__nav__list">
                    <li><a href="<?php echo home_url(); ?>/about">ABOUT</a></li>
                    <li><a href="<?php echo home_url(); ?>/news">NEWS</a></li>
                    <li><a href="<?php echo home_url(); ?>/works">WORKS</a></li>
                    <li><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
                    <li><a href="https://github.com/maco-de">GitHub</a></li>
                </ul>
            </nav>
        </div>
        <p class="footer__copy">&copy;maco-de</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>