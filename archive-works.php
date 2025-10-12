<?php get_header(); ?>

<main>
    <div class="works">
        <div class="works__title">
            <h1>WORKS</h1>
            <span>制作実績</span>
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
        <div class="content-width">
            <div class="works__content">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article class="works__content__article">
                            <a class="works__content__article__link" href="<?php the_permalink(); ?>">
                                <img class="works__content__article__link__img" src="<?php the_field('works_img'); ?>" alt="<?php the_field('works_title'); ?>">
                                <p class="works__content__article__link__title"><?php the_field('works_title'); ?>
                                    <time class="card_time"><?php the_time('Y.m.d'); ?></time>
                                </p>
                            </a>
                        </article>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p>まだ投稿はありません。</p>
                <?php endif; ?>

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