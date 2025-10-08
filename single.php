<?php get_header(); ?>

<main>
    <section class="blog">
        <div class="archive_works_ttl">
            <h2>NEWS</h2>
            <h1>お知らせ</h1>
        </div>
        <div class="container">
            <article class="blog_space">
                <div class="works_content">
                    <h1 class="news_ttl"><?php the_field('news_ttl'); ?></h1>
                    <p class="news_text"><?php the_field('news_text'); ?></p>
                </div>
            </article>
        </div>
    </section>
</main>

<?php get_footer(); ?>