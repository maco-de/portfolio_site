<?php get_header(); ?>

<main>
    <div class="about">
        <div class="about__ttl">
            <h1>ABOUT</h1>
            <span>maco-deについて</span>
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
        <section class="about__concept">
            <div class="container">
                <h2 class="about__concept__ttl">お仕事への考え方</h2>
                <div class="about__concept__body">
                    <div class="about__concept__body__text">
                        <h3>1.コミュニケーション</h3>
                        <p>皆様と気持ちよくお仕事できるよう、円滑なコミュニケーションをするのは当然のこととし、連絡をくださった方へできる限り早くお返事できるよう心掛けています。
                            <br>また、報連相を最重要とし、どんな小さな問題や疑問でもその都度ご相談・ご確認をさせていただきます。なによりも『バッドニュースファスト』を徹底しており、問題が起こっても早期解決できるよう努めます。
                        </p>
                    </div>
                    <div class="about__concept__body__text">
                        <h3>2.デザインの再現と表示崩れ対策</h3>
                        <p>デザイナー様のご指定通りにコーディングを進めていきますが、特に指定がない個所では意図を汲みつつも、よしなに対応させていただいております。
                            <br>また、ブレイクポイント付近で表示崩れを起こしてしまう場合、デザインを調整・変更してコーディングさせていただく可能性がございます。予めご相談させていただきますのでよろしくお願いいたします。ご覧になられる『お客様』を第一に考えた見やすいサイト作りを心掛けております。
                        </p>
                    </div>
                    <div class="about__concept__body__text">
                        <h3>3.柔軟な稼働時間</h3>
                        <p>納期を最優先に稼働しております。
                            <br>その為、特に決まった休日を設けておりません。基本的にお仕事が薄いタイミングでお休みを取らせていただいておりますので、土日祝日もお気軽にご依頼くださいませ。(休める時にしっかり休んでおります！)
                            <br>また、稼働時間も時間で決めていない為、臨機応変にご対応致します。昼型の為、基本的には深夜は就寝しております。
                            <br>曜日も時間も臨機応変に対応できますが、極端に短い納期や突発の変更にはご対応致しかねる場合がございます。大変失礼かと存じますが、できないものはできないと安請け合いしないようにしています。まずはご相談くださいませ。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about__profile">
            <div class="container">
                <h2 class="about__profile__ttl">プロフィール</h2>
                <div class="about__profile__body">
                    <div class="about__profile__body__img fadein">
                        <img class="about__profile__body__img__picture" src="<?php echo get_template_directory_uri(); ?>/img/profile.png">
                        <a href="https://github.com/maco-de">
                            <img class="about__profile__body__img__github" src="<?php echo get_template_directory_uri(); ?>/img/github.png" alt="">
                        </a>
                    </div>
                    <div class="about__profile__body__table fadein">
                        <dl>
                            <dt>屋　号</dt>
                            <dd>maco-de(マコード)</dd>
                            <dt>事業形態</dt>
                            <dd>個人事業主</dd>
                            <dt>代　表</dt>
                            <dd>寺内　惇</dd>
                            <dt>所在地</dt>
                            <dd>栃木県下野市(自宅兼の為、一部省略せさせていただきます)</dd>
                            <dt>対応ソフト</dt>
                            <dd>Figma/XD/Photoshop/illustrator/VScode/Git(GitHub,Bitbucket,Sourcetree)</dd>
                            <dt>可能な業務</dt>
                            <dd>HTML・CSS(sass)コーディング/レスポンシブ対応/アニメーション実装(JavaScript)<br>
                                WordPress構築(お問合せフォーム・カスタム投稿・カスタムフィールド実装)</dd>
                            <dt>趣　味</dt>
                            <dd>バイク、旅行、レトロゲーム</dd>
                        </dl>
                    </div>
                </div>
                <p class="about__profile__text fadein">栃木県在住のフロントエンドエンジニア・マコトです。
                    <br>前職は金属加工会社にて現場リーダーを、前々職は大手携帯キャリアにて勤務しておりました。…からのフロントエンドエンジニアです。
                    <br>異業種からのチャレンジではありますが、意外にも共通点が多く、今の活動にも前職・前々職の経験が大いに活かされております。
                    <br>材料の発注から始まり、加工し、他工程の方や部下達とコミュニケーションを取りながら納期までに納品をする…形は違えども今に通ずるものがあります。また、携帯の販売をしていた時も、2.3ヶ月に一度の研修はもちろん、毎日の接客やクレーム対応もWebコーダーとしての提案力やコミュニケーション力に活かせております。
                    <br>これからも勉強を欠かさずに、日々精進していこうと思っております。
                    <br>
                    <br>最後までお読みいただきありがとうございました。
                </p>
            </div>
        </section>
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