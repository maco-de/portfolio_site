<?php get_header(); ?>

<main>
    <div class="single-works">
        <div class="single-works__title">
            <h2>WORKS</h2>
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
            <article class="single-works__article">
                <h1 class="single-works__article__title"><?php the_field('works_ttl'); ?></h1>
                <img src="<?php the_field('works_img'); ?>">
                <p class="single-works__article__sub-title">URL</p>
                <a href="<?php the_field('works_link'); ?>"><?php the_field('works_link'); ?></a>
                <p class="single-works__article__sub-title">制作サイトについて</p>
                <p class="single-works__article__text"><?php the_field('works_text'); ?></p>
            </article>
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