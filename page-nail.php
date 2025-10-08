<?php
if(!is_home()):
if(is_page('nail')):
$userArray = array(
"test" => "test"
);
basic_auth($userArray);
endif;
endif;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nail.css">
    <title>maconail</title>
</head>
<body>
    <header id="header">

        <!-- PCヘッダー -->
      <div class="PC_header">
        <div class="container">
          
            <h1 class="header_logo"><a href="">maconail</a></h1>
            
          

          <!-- PCヘッダーナビ -->

          <nav class="header_nav">
            <ul>
                <li><a class="menu_ttl" href="">ABOUT</a></li>
                <li class="menu">
                  <a class="menu_ttl" href="">MENU</a>
                  <div class="child_menu">
                    <div class="menu_container">
                    <p>MENU</p>
                    <ul>
                      <li><a href="#">BASIC</a></li>
                      <li><a href="#">GEL</a></li>
                      <li><a href="#">NAIL EXTENSION</a></li>
                      <li></li>
                      <li><a href="#">ART</a></li>
                      <li><a href="#">OTHERS</a></li>                      
                      <li></li>
                      <li></li>
                    </ul>
                    </div>
                  </div>
                </li>
                <li class="menu">
                  <a class="menu_ttl" href="">SALON</a>
                  <div class="child_menu">
                    <div class="menu_container">
                    <p>SALON</p>
                    <ul>
                      <li><a href="#">新宿店</a></li>
                      <li><a href="#">渋谷店</a></li>
                      <li><a href="#">池袋店</a></li>
                      <li><a href="#">横浜店</a></li>
                      <li><a href="#">大宮店</a></li>
                      <li><a href="#">千葉店</a></li>
                      <li><a href="#">つくば店</a></li>
                      <li><a href="#">宇都宮店</a></li>
                    </ul>
                    </div>
                  </div>
                </li>
                <li class="menu">
                  <a class="menu_ttl" href="">SCHOOL</a>
                  <div class="child_menu">
                    <div class="menu_container">
                    <p>SCHOOL</p>
                    <ul>
                      <li><a href="#">新宿校</a></li>
                      <li><a href="#">渋谷校</a></li>
                      <li><a href="#">池袋校</a></li>
                      <li></li>
                      <li><a href="#">横浜校</a></li>
                      <li><a href="#">大宮校</a></li>
                      <li></li>
                      <li></li>
                    </ul>
                    </div>
                  </div>
                </li>
                <li><a class="menu_ttl" href="">NEWS</a></li>
                <li><a class="menu_ttl" href="">RESERVATION</a></li>
            </ul>
          </nav>
        </div>
      </div>

    <!-- SPヘッダー -->

    <div id="header" class="sp_header">
      <div id="header-inner" class="header-inner content-wrpper">
        <h1 class="header_logo">maconail</h1>

        <!-- ハンバーガーボタン -->

        <div id="header-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <!-- ハンバーガーウィンドウ -->

      <div id="hamburger-window">
        <ul class="hamburger-window__nav-list">
          <li class="hamburger-window__link">
            <div class="acordion-menu-wrapper">
              <a class="acordion-btn border-top_none" href="#">
                <p class="hamburger-window__title">MENU</p>
              </a>
              <ul class="acordion">
                <li class="acordion__item">
                  <a class="acordion__link" href="#">BASIC</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">GEL</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">NAIL EXTENSION</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">ART</a>
                </li>
                <li class="acordion__item border-bottom">
                  <a class="acordion__link" href="#">OTHERS</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="hamburger-window__link">
            <div class="acordion-menu-wrapper">
              <a class="acordion-btn" href="#">
                <p class="hamburger-window__title">SALON</p>
              </a>
              <ul class="acordion">
                <li class="acordion__item">
                  <a class="acordion__link" href="#">新宿店</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">渋谷店</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">池袋店</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">横浜店</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">大宮店</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">千葉店</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">つくば店</a>
                </li>
                <li class="acordion__item border-bottom">
                  <a class="acordion__link" href="#">宇都宮店</a>
                </li>                
              </ul>
            </div>
          </li>
          <li class="hamburger-window__link">
            <div class="acordion-menu-wrapper">
              <a class="acordion-btn" href="#">
                <p class="hamburger-window__title">SCHOOL</p>
              </a>
              <ul class="acordion">
                <li class="acordion__item">
                  <a class="acordion__link" href="#">新宿校</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">渋谷校</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">池袋校</a>
                </li>
                <li class="acordion__item">
                  <a class="acordion__link" href="#">横浜校</a>
                </li>
                <li class="acordion__item border-bottom">
                  <a class="acordion__link" href="#">大宮校</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="hamburger-window__link">
            <div class="acordion-menu-wrapper">
              <a class="acordion-btn2" href="#">
                <p class="hamburger-window__title">ABOUT</p>
              </a>
            </div>
          </li>
          <li class="hamburger-window__link">
            <div class="acordion-menu-wrapper">
              <a class="acordion-btn2" href="#">
                <p class="hamburger-window__title">NEWS</p>
              </a>
            </div>
          </li>
          <li class="hamburger-window__link">
            <div class="acordion-menu-wrapper">
              <a class="acordion-btn2" href="#">
                <p class="hamburger-window__title">RESERVATION</p>
              </a>
            </div>
          </li>          
        </ul>
      </div>
    </div>

  </header>

    <!-- ローディング(ロゴ) -->

    <div class="start">
      <h1>maconail</h1>
    </div>

    <!-- メインヴィジュアル -->

    <ul class="mainvisual">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/nail_img/mv_sp01.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/mv01.jpg" alt="画像01">
        </picture>
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/nail_img/mv_sp02.jpg">          
          <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/mv02.jpg" alt="画像02">
        </picture>
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/nail_img/mv_sp03.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/mv03.jpg" alt="画像03">
        </picture>
    </ul>

    <!-- キャッチコピー -->

    <section>
      <div class="container">
        <p class="slogan_text1">Beauty nail makes you happy</p>
        <p class="slogan_text2">あなたを笑顔にするお手伝いを</p>
        <div class="slogan_flex fadein">
          <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/slogan1.jpg" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/slogan2.jpg" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/slogan3.jpg" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/slogan4.jpg" alt="">
        </div>
      </div>
    </section>

    <!-- アバウト -->

    <section>
      <div class="container">
        <h2 class="section_ttl fadein">ABOUT</h2>
        <ul class="top_about_flex fadein">
          <li class="top_about_box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/about1.jpg" alt="">
            <div class="about_text">
              <p>私たちの想いと大切にしていることをご紹介</p>
              <a href="">ABOUT SALON</a>
            </div>
          </li>
          <li class="top_about_box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/about2.jpg" alt="">
            <div class="about_text">
              <p>サービスメニューと料金のご案内</p>
              <a href="">MENU</a>
            </div>
          </li>
          <li class="top_about_box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/about3.jpg" alt="">
            <div class="about_text">
              <p>癒しのひとときをお過ごしください</p>
              <a href="">ACCESS</a>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- デザイン -->

    <section>
      <div class="container">
        <div class="ttl_flex fadein">
          <h2 class="section_ttl">DESIGN</h2>
          <a href="">DESIGN LIST</a>          
        </div>
        <ul class="design_flex fadein">
          <li class="design_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/design1.jpg" alt="">
              <p>design1</p>
            </a>
          </li>
          <li class="design_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/design2.jpg" alt="">
              <p>design2</p>
            </a>
          </li>
          <li class="design_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/design3.jpg" alt="">
              <p>design3</p>
            </a>
          </li>
          <li class="design_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/design4.jpg" alt="">
              <p>design4</p>
            </a>
          </li>
          <li class="design_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/design5.jpg" alt="">
              <p>design5</p>
            </a>
          </li>
          <li class="design_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/design6.jpg" alt="">
              <p>design6</p>
            </a>
          </li>
          <li class="design_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/design7.jpg" alt="">
              <p>design7</p>
            </a>
          </li>
          <li class="design_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/design8.jpg" alt="">
              <p>design8</p>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <!-- スクール -->

    <section>
      <div class="container">
        <div class="ttl_flex fadein">
          <h2 class="section_ttl">SCHOOL</h2>
          <a href="">ABOUT SCHOOL</a>          
        </div>
        <ul class="school_flex fadein">
          <li class="school_box">
            <a href="">
              <h3>本科コース</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/school1.jpg" alt="">
              <p>ネイリストを目指す方にお勧めのコース</p>
            </a>
          </li>
          <li class="school_box">
            <a href="">
              <h3>試験対策コース</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/school2.jpg" alt="">
              <p>資格取得に特化したコース</p>
            </a>
          </li>
          <li class="school_box">
            <a href="">
              <h3>スキルアップコース</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/school3.jpg" alt="">
              <p>スキルアップや趣味ネイルなど目的別のコース</p>
            </a>
          </li>
          <li class="school_box">
            <a href="">
              <h3>Calgelコース</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/school4.jpg" alt="">
              <p>自爪に優しい Calgel を学べるコース</p>
            </a>
          </li>          
        </ul>
        <ul class="school_menu_flex fadein">
          <li class="school_menu_box">
            <a href="">JNECネイリスト技能検定試験</a>
          </li>
          <li class="school_menu_box">
            <a href="">JNAジェルネイル技能検定試験</a>
          </li>
          <li class="school_menu_box">
            <a href="">ネイルサロン衛生管理士</a>
          </li>
          <li class="school_menu_box">
            <a href="">JNAフットケア理論検定試験</a>
          </li>
        </ul>
      </div>
    </section>

    <!-- お知らせ -->

    <section class="information">
      <div class="container">
        <h2 class="section_ttl fadein">INFORMATION</h2>
        <h3 class="fadein">maconailからの最新のお知らせです</h3>
        <div class="information_area fadein">
          <div class="information_flex" href="">
            <time datetime="">2025.01.01</time>            
            <a href=""><p><span>ニュース</span>2025☆HAPPY NEW YEAR！</p></a>
          </div>
          <div class="information_flex" href="">
            <time datetime="">2024.12.01</time>            
            <a href=""><p><span>ニュース</span>ネイリスト募集！</p></a>
          </div>
          <div class="information_flex" href="">
            <time datetime="">2024.11.01</time>            
            <a href=""><p><span>ニュース</span>年末年始のお休み</p></a>
          </div>
          <div class="information_flex" href="">
            <time datetime="">2024.10.01</time>            
            <a href=""><p><span>ニュース</span>LINE公式アカウントはじめました！</p></a>
          </div>
        </div>
        <a class="information_btn fadein" href="">お知らせ一覧</a>
      </div>
    </section>
    
    <!-- サロン -->

    <section class="salon">
      <div class="container">
        <h2 class="section_ttl2 fadein">SEARCH SALON</h2>
        <h3 class="fadein">コンセプトの違う各サロンにて、お客様のご要望にあったサービスを</h3>
        <ul class="salon_flex fadein">
          <li><a href="">東京都 (3)</a></li>
          <li><a href="">神奈川県(1)</a></li>
          <li><a href="">埼玉県(1)</a></li>
          <li><a href="">千葉県(1)</a></li>
          <li><a href="">茨城県(1)</a></li>
          <li><a href="">栃木県(1)</a></li>
        </ul>
      </div>
    </section>

    <!-- ニュース -->

    <section class="news">
      <div class="container">
        <h2 class="section_ttl fadein">NEWS</h2>
        <h3 class="fadein">ネイルだけでなく、美容全体に関わる役立つコンテンツを発信しております</h3>
        <ul class="news_flex fadein">
          <li class="news_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/news1.jpg" alt="">
              <p>男性こそネイルケアが必要！？</p>
            </a>
          </li>
          <li class="news_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/news2.jpg" alt="">
              <p>フットネイル週間</p>
            </a>
          </li>
          <li class="news_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/news3.jpg" alt="">
              <p>ウエディングネイルのご予約はお早めに</p>
            </a>
          </li>
          <li class="news_box">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/news4.jpg" alt="">
              <p>検定試験対策強化月間</p>
            </a>
          </li>
        </ul>
        <a class="information_btn fadein" href="">記事一覧</a>
        <ul class="sns_icon_flex fadein">
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/instagram.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/x.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/line.png" alt="">
            </a>
          </li>
        </ul>
      </div>
    </section>

    <a class="top" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/nail_img/top_icon.png" alt=""></a>

    <!-- フッター -->

    <footer>

        <!-- PCフッターナビ -->

        <div class="container">
            <div class="footer_flex">
                <div class="footer_address">
                    <h1 class="footer_logo">maconail</h1>
                    <p>〒160-0022</p>
                    <p>東京都新宿区新宿〇〇〇〇 (<a href="">MAP</a>)</p>
                    <p>TEL:0000-00-0000</p>
                    <p>FAX:0000-00-0000</p>
                </div>
                <div class="footer_nav">
                    <ul>
                        <li><h3><a href="">MENU</a></h3></li>
                        <li><a href="">BASIC</a></li>
                        <li><a href="">GEL</a></li>
                        <li><a href="">NAIL EXTENSION</a></li>
                        <li><a href="">ART</a></li>
                        <li><a href="">OTHERS</a></li>
                    </ul>
                    <ul>
                        <li><h3><a href="">SALON</a></h3></li>
                        <li><a href="">新宿店</a></li>
                        <li><a href="">渋谷店</a></li>
                        <li><a href="">池袋店</a></li>
                        <li><a href="">横浜店</a></li>
                        <li><a href="">大宮店</a></li>
                        <li><a href="">千葉店</a></li>
                        <li><a href="">つくば店</a></li>
                        <li><a href="">宇都宮店</a></li>
                    </ul>
                    <ul>
                        <li><h3><a href="">SCHOOL</a></h3></li>
                        <li><a href="">新宿校</a></li>
                        <li><a href="">渋谷校</a></li>
                        <li><a href="">池袋校</a></li>
                        <li><a href="">横浜校</a></li>
                        <li><a href="">大宮校</a></li>
                    </ul>
                    <ul>
                        <li><p><a href="">ABOUT</a></p></li>
                        <li><p><a href="">NEWS</a></p></li>
                        <li><p><a href="">RESERVATION</a></p></li>
                    </ul>                    
                </div>
            </div>
        </div>

        
        
    </footer>
    <p class="copyright">©maconail</p>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <script>

// メインヴィジュアルのスライダー

$(function () {
  $(".mainvisual")
    // 最初のスライドに"add-animation"のclassを付ける(data-slick-index="0"が最初のスライドを指す)
    .on("init", function () {
      $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
    })
    // 通常のオプション
    .slick({
      autoplay: true, // 自動再生ON
      fade: true, // フェードON
      arrows: false, // 矢印OFF
      speed: 3000, // スライド、フェードアニメーションの速度3000ミリ秒
      autoplaySpeed: 1200, // 自動再生速度1200ミリ秒
      pauseOnFocus: false, // フォーカスで一時停止OFF
      pauseOnHover: false, // マウスホバーで一時停止OFF
    })
    .on({
      // スライドが移動する前に発生するイベント
      beforeChange: function (event, slick, currentSlide, nextSlide) {
        // 表示されているスライドに"add-animation"のclassをつける
        $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
        // あとで"add-animation"のclassを消すための"remove-animation"classを付ける
        $(".slick-slide", this).eq(currentSlide).addClass("remove-animation");
      },
      // スライドが移動した後に発生するイベント
      afterChange: function () {
        // 表示していないスライドはアニメーションのclassを外す
        $(".remove-animation", this).removeClass(
          "remove-animation add-animation"
        );
      },
    });
});


// ハンバーガーボタン
let hamburgerBtn = document.getElementById('header-hamburger');
// ハンバーガーウィンドウ
let hamburgerWindw = document.getElementById('hamburger-window');

/**
 * ハンバーガーメニューの開閉を制御
 */
hamburgerBtn.addEventListener('click', () => {
  // ハンバーガーメニューのopenとcloseの状態を制御
  if (hamburgerBtn.classList.contains('active')) {
    hamburgerBtn.classList.remove('active');
  } else {
    hamburgerBtn.classList.add('active');
  }
  // ハンバーガーウィンドウの表示状態を制御
  if (hamburgerWindw.classList.contains('open')) {
    hamburgerWindw.classList.remove('open');
  } else {
    hamburgerWindw.classList.add('open');
  }
});

// button要素がクリックされたらアコーディオンを開閉する
const menuBtns = document.querySelectorAll('.acordion-btn');
const menuLists = document.querySelectorAll('.acordion');

menuBtns.forEach((element, index) => {
  element.addEventListener('click', function () {
    menuBtns[index].classList.toggle('is-open');
    menuLists[index].classList.toggle('is-open');
  });
});


//ハンバーガーボタンを押したら背景をスライドできないようにする

$(function () {
  // ハンバーガーメニューボタンがクリックされたときのイベントハンドラを設定
  $("#header-hamburger").click(function () {

    // 現在のbodyタグのoverflowスタイルを確認
    if ($("body").css("overflow") === "hidden") {

      // もしoverflowがhiddenなら、bodyのスタイルを元に戻す
      $("body").css({ height: "", overflow: "" });

    } else {

      // そうでなければ、bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
      $("body").css({ height: "100%", overflow: "hidden" });

    }
  });
});



//スクロールするとフェードイン

$(window).scroll(function() {
  $('.fadein').each(function() {
    let scroll = $(window).scrollTop();
    let target = $(this).offset().top;
    let windowHeight = $(window).height();
    if (scroll > target - windowHeight) {
      $(this).css('opacity','1');
      $(this).css('transform','translateY(0)');
    }
  });
});


//画面を開くとロゴがフェード
    
  $(function(){
     setTimeout(function(){
     $('.start h1').fadeIn(1600);
     },500);
     setTimeout(function(){
     $('.start').fadeOut(2500);
     },2500);
     
    });

    
//ローディング用のCSSを読み込む

  $(function(){
        var style = '<link rel="stylesheet" href="animation.css">';
        $('head link:last').after(style);
    });


//　Topへボタン

var pagetop = $('.top');
pagetop.hide();
$(window).scroll(function () {
if ($(this).scrollTop() > 200) {
    pagetop.fadeIn();
} else {
    pagetop.fadeOut();
}
});    

    </script>
</body>
</html>