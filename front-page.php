<?php get_header('top'); ?>

<main>
    <div class="home__start">
        <h1>maco-de</h1>
    </div>
    <section class="home__main-visual">
        <p class="home__main-visual__title">フリーランスフロントエンドエンジニア</p>
        <div class="home__main-visual__content">
            <div class="home__main-visual__content__text">
                <p>コーディング代行、<br>ホームページ修正、<br>WordPressの構築など、<br>Web制作のお仕事を承っております。</p>
                <div class="circle_block">
                    <svg class="circleText" viewBox="0 0 100 100">
                        <path id="circle" class="circleText__circle" d="M 0 50 A 50 50 0 1 1 0 51 z" />
                        <text class="circleText__text">
                            <textPath xlink:href="#circle">
                                maco-de. maco-de. maco-de. maco-de. maco-de.
                            </textPath>
                        </text>
                    </svg>
                </div>
            </div>
            <ul class="home__main-visual__content__img">
                <picture>
                    <source media="(max-width: 800px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top_sp.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top.jpg" alt="画像01">
                </picture>
                <picture>
                    <source media="(max-width: 800px)" srcset="<?php echo get_template_directory_uri(); ?>/img/dog_sp.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="画像02">
                </picture>
                <picture>
                    <source media="(max-width: 800px)" srcset="<?php echo get_template_directory_uri(); ?>/img/design_sp.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/design.jpg" alt="画像03">
                </picture>
            </ul>
        </div>
    </section>

    <!-- アバウト -->

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
    <section class="home__about">
        <div class="content-width fadein">
            <div class="home__about__title">
                <h2>ABOUT</h2>
                <p>maco-deについて</p>
            </div>
            <div class="home__about__text fadein">
                <p>ご覧いただきありがとうございます。
                    <br>フロントエンドエンジニア・寺内　惇によるフリーランス事務所『maco-de(マコード)』です。
                    <br>
                    <br>フロントエンドエンジニアとしてコーディングはもちろんのこと、ホームページのちょっとした修正、またはお客様のお悩みのご相談までお承り致します。
                    <br>個人事務所ならではのフットワークの軽さを活かし、お客様のニーズに細かくお応えいたします。
                    <br>
                    お見積もり、ご相談は無料ですので、御用の際はぜひお問い合わせください。
                </p>
                <label class="popup__button" for="popup" id="txt_label">maco-de(マコード)とは？</label>
            </div>
            <div class="fadein2">
                <a class="button01" href="<?php echo home_url(); ?>/about/">詳細はこちら</a>
            </div>
        </div>
    </section>
    <input type="checkbox" id="popup" class="popup">
    <div id="overlay">
        <label for="popup" id="bg_gray"></label>
        <div id="window">
            <label for="popup" id="btn_cloth">
                <span></span>
            </label>
            <h3>『 maco-de(マコード) 』とは？</h3>
            <p>
                <br>私、寺内　惇(マコト)とcodeをかけ合わせた造語です。(そのままです！)
                <br>ひとつひとつはただの文字であるコードも、組み合わさればたくさんのことを表現できます。
                <br>一見ただのダジャレのよう名前ですが、マコト×コード×皆様との繋がり＝無限大。
                <br>そんな意味を込めて、屋号にこの名前を付けました。
            </p>
        </div>
    </div>


    <!-- ニュース -->

    <section class="home__news">
        <div class="content-width">
            <div class="home__news__content fadein">
                <div class="home__news__content__title">
                    <h2>NEWS</h2>
                    <p>お知らせ</p>
                    <a class="home__news__content__title__button button01" href="<?php echo home_url(); ?>/news/">お知らせ一覧へ</a>
                </div>
                <div class="home__news__content__post">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <article class="home__news__content__post__article">
                                <a href="<?php the_permalink(); ?>">
                                    <time><?php the_time('Y.m.d'); ?></time>
                                    <p><?php the_field('news_title'); ?></p>
                                </a>
                            </article>

                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>まだ投稿はありません。</p>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- サービス -->

    <section class="home__service">
        <div class="home__service__clip-path">
            <div class="content-width">
                <div class="home__service__title fadein_l">
                    <h2>SERVICE</h2>
                    <p>サービス</p>
                </div>
                <div class="home__service__content">
                    <div class="home__service__content__item1 fadein">
                        <h3>コーディング</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/coding.png" alt="">
                        <p>デザインを忠実に再現することはもちろんのこと、迅速にコーディングできるよう努めております。レスポンシブにも対応し、表示崩れしていないかを徹底検証いたします。
                            <br>納品後も他者が変更や修正をすることを考え、保守性の高いコーディングを意識しております。
                        </p>
                    </div>
                    <div class="home__service__content__item2 fadein">
                        <h3>WordPress構築</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/web_site.png" alt="">
                        <p>WebサイトのWordPress化を致します。既存のデザインテンプレートはもちろん、オリジナルデザインでの構築も可能です。<br>デフォルトのブログ機能に加え、カスタム投稿の追加や、カスタムフィールド、お問合せフォームなどもご相談ください。
                        </p>
                    </div>
                    <div class="home__service__content__item3 fadein">
                        <h3>サイト改修</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/reload.png" alt="">
                        <p>運用中のサイトにコンテンツを追加したり、レイアウトが崩れてしまっている所を直したい…などのお悩みがありましたらぜひご相談ください。
                            <br>一部分のみの修正や、写真の差し替えなど、どんなことでも迅速に対応致します。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ご依頼の流れ -->

    <section class="home__flow">
        <div class="content-width">
            <div class="home__flow__title fadein">
                <h2>FLOW</h2>
                <p>お仕事の流れ</p>
            </div>
            <div class="faq_wrap fadein">
                <input type="checkbox" id="check1">
                <label for="check1">
                    <p>01</p>
                    <p>お問い合わせ</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="">
                    <span class="arrow"></span>
                </label>
                <div class="faq_content">
                    <p><a href="<?php echo home_url(); ?>/contact">『お問い合わせフォーム』</a>よりご依頼、ご相談ください。<br>
                        ご相談いただいた際は、記載のメールアドレスへご返信させていただきます。</p>
                </div>
            </div>
            <div class="faq_wrap fadein">
                <input type="checkbox" id="check2">
                <label for="check2">
                    <p>02</p>
                    <p>お見積もり</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/yen.png" alt="">
                    <span class="arrow"></span>
                </label>
                <div class="faq_content">
                    <p>デザインカンプやラフデザインを拝見させていただきます。<br>
                        デザインのボリュームや、実装する機能などを元にお見積もり致します。</p>
                </div>
            </div>
            <div class="faq_wrap fadein">
                <input type="checkbox" id="check3">
                <label for="check3">
                    <p>03</p>
                    <p>コーディング</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/html_tag.png" alt="">
                    <span class="arrow"></span>
                </label>
                <div class="faq_content">
                    <p>ご希望の初稿提出日に合わせ、デザインに忠実にコーディングしていきます。<br>
                        作業中は定期的に連絡を取り、何かあればすぐに「報連相」を致します。</p>
                </div>
            </div>
            <div class="faq_wrap fadein">
                <input type="checkbox" id="check4">
                <label for="check4">
                    <p>04</p>
                    <p>最終調整・納品</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="">
                    <span class="arrow"></span>
                </label>
                <div class="faq_content">
                    <p>コーディングデータを提出し、確認していただきます。<br>
                        修正や調整がございましたら対応致します。<br>
                        ZIPやFTP、Git(GitHub,Bitbucket)による納品が可能です。
                    </p>
                </div>
            </div>
            <div class="fadein2">
                <a class="popup__button fadein" href="<?php echo home_url(); ?>/contact">お問い合わせはこちら</a>
            </div>
            <div class="home__flow__title2 fadein">
                <h2>PRICE</h2>
                <p>料金表</p>
            </div>
            <div class="home__flow__list fadein">
                <p>レスポンシブ対応込みのコーディングのお値段です</p>
                <dl>
                    <dt>トップページ</dt>
                    <dd>￥30,000～</dd>
                    <dt>下層ページ(1ページ)</dt>
                    <dd>￥10,000～</dd>
                    <dt>LPコーディング</dt>
                    <dd>￥40,000～</dd>
                    <dt>アニメーション(1件につき)</dt>
                    <dd>￥8,000～</dd>
                    <dt>お問合せフォーム</dt>
                    <dd>￥10,000～</dd>
                    <dt>WordPress構築(デフォルトブログ機能含む)</dt>
                    <dd>￥30,000～</dd>
                    <dt>カスタム投稿・カスタムフィールド(ACF利用)追加</dt>
                    <dd>￥10,000～</dd>
                    <dt>既存サイトの修正</dt>
                    <dd>要相談</dd>
                </dl>
                <p>※料金表の金額は、目安ですので予算に合わせてご相談ください。
                    <br>※複雑すぎる実装に関しましては要相談でお願いいたします。
                </p>
            </div>
        </div>
    </section>

    <!-- 制作実績 -->

    <section class="home__works">
        <div class="content-width">
            <div class="home__works__title fadein_r">
                <h2>WORKS</h2>
                <p>制作実績</p>
            </div>
            <div class="home__works__content">
                <?php
                $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => 3,
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <article class="home__works__content__article fadein">
                            <a href="<?php the_permalink(); ?>">
                                <img class="home__works__content__article__img" src="<?php the_field('works_img'); ?>">
                                <p><?php the_field('works_title'); ?></p>
                            </a>
                        </article>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p>まだ投稿はありません。</p>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>
            <div class="fadein2">
                <a class="button01" href="<?php echo home_url(); ?>/works/">制作実績一覧へ</a>
            </div>
        </div>
    </section>
    <div class="waves">
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