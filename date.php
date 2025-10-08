<?php get_header(); ?>

<main>
    <section class="blog">
        <div class="archive_works_ttl">
            <h2>NEWS</h2>
            <h1>お知らせ</h1>
        </div>
        <div class="container">
            <div class="news_flex">
                <div class="news_sidebar"><?php get_sidebar(); ?></div>
                <div class="news_archive_box">






                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>



                            <div class="news_box">
                                <a href="<?php the_permalink(); ?>">
                                    <time><?php the_time('Y.m.d'); ?></time>
                                    <p><?php the_field('news_ttl'); ?></p>
                                </a>
                            </div>



                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>まだ投稿はありません。</p>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
</main>



<?php get_footer(); ?>