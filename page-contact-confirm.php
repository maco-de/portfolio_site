<?php

/**
 * ContactConfirm or ContactComplete/php
 * @package sample
 */

?>

<?php get_header(); ?>

<main>
    <div class="contact" id="contact">
        <div class="contact__ttl">
            <h1>CONTACT</h1>
            <span>お問い合せ</span>
        </div>
        <div class="waves waves_bg-w">
            <svg
                class="waves_item"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28"
                preserveAspectRatio="none"
                shape-rendering="auto">
                <defs>
                    <path
                        id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use
                        xlink:href="#gentle-wave"
                        x="48"
                        y="0"
                        fill="rgba(240,240,240,0.7)" />
                    <use
                        xlink:href="#gentle-wave"
                        x="48"
                        y="3"
                        fill="rgba(240,240,240,0.5)" />
                    <use
                        xlink:href="#gentle-wave"
                        x="48"
                        y="5"
                        fill="rgba(240,240,240,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(240,240,240)" />
                </g>
            </svg>
        </div>
        <div class="container">
            <div class="contact__content">
                <p class=contact__content__text>以下の内容で送信してよろしいですか？</p>
                <!-- フォーム -->
                <?php echo do_shortcode('[contact-form-7 id="36efa91" title="コンタクトフォーム(確認画面)"]'); ?>
            </div>
        </div>
    </div>
    <div class="waves waves_bg-g">
        <svg
            class="waves_item"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28"
            preserveAspectRatio="none"
            shape-rendering="auto">
            <defs>
                <path
                    id="gentle-wave"
                    d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use
                    xlink:href="#gentle-wave"
                    x="48"
                    y="0"
                    fill="rgba(255,255,255,0.7)" />
                <use
                    xlink:href="#gentle-wave"
                    x="48"
                    y="3"
                    fill="rgba(255,255,255,0.5)" />
                <use
                    xlink:href="#gentle-wave"
                    x="48"
                    y="5"
                    fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(255,255,255)" />
            </g>
        </svg>
    </div>
</main>

<?php get_footer(); ?>