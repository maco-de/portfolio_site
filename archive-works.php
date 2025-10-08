<?php get_header(); ?>

<main>
    <section class="blog">
        <div class="archive_works_ttl">
            <h2>WORKS</h2>
            <h1>制作実績</h1>
        </div>
        <div class="container">
            <div class="works_flex">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article class="works_article">
                            <a href="<?php the_permalink(); ?>">
                                <div class="blog_top_img">
                                    <img src="<?php the_field('works_img'); ?>" alt="<?php the_field('works_ttl'); ?>">
                                </div>
                                <div class="blog_top_ttl"><?php the_field('works_ttl'); ?>
                                    <time class="card_time"><?php the_time('Y.m.d'); ?></time>
                                </div>
                            </a>
                        </article>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p>まだ投稿はありません。</p>
                <?php endif; ?>

            </div>
        </div>
    </section>
</main>



<?php get_footer(); ?>