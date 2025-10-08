<?php get_header(); ?>

<main>
    <section class="blog">
        <div class="archive_works_ttl">
            <h2>WORKS</h2>
            <h1>制作実績</h1>
        </div>
        <div class="container">
            <article class="blog_space">
                <div class="works_content">
                    <h1 class="works_ttl"><?php the_field('works_ttl'); ?></h1>
                    <img class="works_img" src="<?php the_field('works_img'); ?>">
                    <p class="works_ttl2">URL</p>
                    <a class="works_link" href="<?php the_field('works_link'); ?>"><?php the_field('works_link'); ?></a>
                    <p class="works_ttl2">制作サイトについて</p>
                    <p class="works_text"><?php the_field('works_text'); ?></p>

                </div>
            </article>
        </div>
    </section>
</main>

<?php get_footer(); ?>