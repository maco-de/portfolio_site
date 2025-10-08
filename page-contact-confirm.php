<?php

/**
 * ContactConfirm or ContactComplete/php
 * @package sample
 */

?>

<?php get_header(); ?>

<div class="contact_height">

    <!-- お問い合わせ -->
    <main>
        <section class="contact" id="contact">
            <div class="container">
                <div class="ttl">
                    <p class=contact_text>以下の内容で送信してよろしいですか？</p>
                </div>

                <!-- フォーム -->


                <?php echo do_shortcode('[contact-form-7 id="36efa91" title="コンタクトフォーム(確認画面)"]'); ?>




            </div>
        </section>
    </main>

</div>

<?php get_footer(); ?>