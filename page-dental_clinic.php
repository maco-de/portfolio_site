<?php
if(!is_home()):
if(is_page('dental_clinic')):
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
    <title>MAKOTO DENTAL CLINIC</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dental_clinic.css">
</head>
<body>
    <header>
      <div class="header_top">
       <h1><a class="header_logo" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/logo.png" alt="ロゴ"></a></h1>
       <div class="header_adress">
         <div class="adress_tel">
           <p class="adress">〒321-0965<br>栃木県宇都宮市川向町１−２３</p>
           <p class="tel">028-000-000</p>
         </div>
         <div class="reserve"><a href="">WEB予約</a></div>
       </div>
      </div>

      <div class="sp_menu">
        <div class="sp_logo">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/logo.png" alt=""></a>
        </div>
        <div class="hamburger" >
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>      
        
      <picture class="mainvisual"><source media="(max-width: 800px)" srcset="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/hospital_sp.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/hospital.jpg" alt="歯科医院"></picture>

       <nav class="nav_header">
        <ul class="nav list_nav_header">
            <li><a href="">トップページ</a></li>
            <li><a href="">初めての方へ</a></li>
            <li><a href="">診療内容</a></li>
            <li><a href="">スタッフ紹介</a></li>
            <li><a href="">院内紹介</a></li>
            <li><a href="">アクセス</a></li>
        </ul>
       </nav>
    </header>
    <section class="news">
      <div class="news_ttl">
        <h2>お知らせ</h2>
      </div>
      <div class="news_post">
        <p><a href="">2024.12.30　　年末年始のお知らせ</a></p>
        <div class="news_post_btn"><a href="">一覧を見る</a></div>
      </div>
    </section>

      <h2 class="section_ttl">診療案内</h2>
      <section class="info">
      <div class="info_text">
        <div class="schedule">
          <h3>診療時間</h3>
          <table>
          <tr>
          <th></th>
          <th>月</th>
          <th>火</th>
          <th>水</th>
          <th>木</th>
          <th>金</th>
          <th>土</th>
          <th>日・祝</th>
          </tr>
          <tr>
          <td>9:00～12:00</td>
          <td>〇</td>
          <td>〇</td>
          <td>〇</td>
          <td>〇</td>
          <td>〇</td>
          <td>〇</td>
          <td>×</td>
          </tr>
          <tr>
          <td>14:00～18:00</td>
          <td>〇</td>
          <td>〇</td>
          <td>〇</td>
          <td>×</td>
          <td>〇</td>
          <td>×</td>
          <td>×</td>
          </tr>
          </table>
          <p>※日曜日・祝日は休診となります。<br>　木曜日・土曜日の午後は休診となります。</p>
          <p>ご予約、お問い合わせは<br>　<span class="str">tel.028-000-000</span>　まで</p>
          </div>
      </div>
      <div class="info_map">        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3204.7961562815335!2d139.89587617626142!3d36.5590276812565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601f67744cb10813%3A0xcffb13407e050083!2z5a6H6YO95a6u6aeF!5e0!3m2!1sja!2sjp!4v1735361860099!5m2!1sja!2sjp"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    
    
    <section class="about">
      <div class="container">
        <h2 class="section_ttl">当院について</h2>
        <h3 class="about_ttl">お子様の虫歯ゼロを目指して</h3>
        <div class="about_flex">
          <div class="about_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/toothbrush.png" alt="予防">
          </div>
          <div class="about_text1">
            <p>わたしたち、まこと歯科クリニックは「お子様の治療・予防」を大切に考えている歯科医院です 。</p>
            <p>歯医者が怖い、歯が痛いのに歯医者に行けない、そして虫歯が悪化…そんな悪循環になっていませんか？</p>
            <p>当医院では「お子様がまた来たくなる歯医者さん」を目指して、医院内に楽しく治療できる仕組みを充実させております。待合室での待ち時間はもちろん、治療中もお子様の恐怖心を減らす工夫をいくつもご用意しております。</p>          
            <p>お子様の虫歯ゼロを目指して、楽しくなる治療、そして楽しくなる予防をお子様に伝えられたらと思っております。</p>          
          </div>
        </div>
        <div class="about_text2">
          <p>まずは虫歯になる前に<span class="str2">「お子様の虫歯予防について」</span><br>　ぜひわたしたちにご相談ください！</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/docteor.png" alt="歯医者">
        </div>
      </div>
    </section>

    <section class="commitment">      
        <h3 class="about_ttl">また行きたい！そんな歯医者さんをめざして<br>まこと歯科クリニックの5つのこだわり</h3>
        <div class="commitment_flex">
          <div class="commitment_box">
            <p class="commitment_no">-01-</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/commitment1.jpg" alt="">
            <p class="ttl_p">お子様といっしょにいられる</p>
            <p>診察室内・外にキッズスペースを<br>完備しております</p>
          </div>
          <div class="commitment_box">
            <p class="commitment_no">-02-</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/commitment2.jpg" alt="">
            <p class="ttl_p">ゆったり治療を受けられる</p>
            <p>半個室の診察スペース<br>隣を気にせず治療を受けられます</p>
          </div>
          <div class="commitment_box">
            <p class="commitment_no">-03-</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/commitment3.jpg" alt="">
            <p class="ttl_p">納得の治療を受けられる</p>
            <p>丁寧な診察と検査を<br>心がけています</p>
          </div>
          <div class="commitment_box">
            <p class="commitment_no">-04-</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/commitment4.jpg" alt="">
            <p class="ttl_p">徹底した衛生管理と感染症対策</p>
            <p>専用の水管理システムにより<br>治療中の給水も清浄に保ちます</p>
          </div>
          <div class="commitment_box">
            <p class="commitment_no">-05-</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/commitment5.jpg" alt="">
            <p class="ttl_p">治療後のケアもあんしん</p>
            <p>的確な歯磨き指導を行います</p>
          </div>
        </div>   
    </section>

    <section class="service">
      <div class="container">
        <h3 class="section_ttl">治療メニュー</h3>
        <ul class="menu1">
          <li>
            <a href="">
              <p class="ttl_p">虫歯治療</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/menu1.png" alt="">
              <p>治療の初期・準備段階から予防に取り組むことで、虫歯になりにく口腔内環境を整え、治療後も長く使える歯をめざします。</p>
            </a>
          </li>
          <li>
            <a href="">
              <p class="ttl_p">小児歯科</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/menu2.png" alt="">
              <p>お子様が将来、ご自分で歯の健康を管理できるように、小さいうちからのデンタルケアや歯みがき指導を行っていきます。</p>
            </a>
          </li>
          <li>
            <a href="">
              <p class="ttl_p">歯のメンテナンス</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/menu3.png" alt="">
              <p>治療が終わった後も、まだ虫歯になっていない方も、健康的な口腔環境を自分で維持できるよう、定期歯科健診に加えて、歯みがき指導などを行います。</p>
            </a>
          </li>
        </ul>
        <ul class="menu2">
          <li>
            <a href="">
              <p class="ttl_p">歯周病治療</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/menu4.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <p class="ttl_p">根管治療</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/menu5.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <p class="ttl_p">マタニティ歯科</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/menu6.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <p class="ttl_p">矯正歯科</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/menu7.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <p class="ttl_p">審美治療</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/menu8.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <p class="ttl_p">インプラント</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/menu9.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <p class="ttl_p">入れ歯</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/menu10.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <p class="ttl_p">親知らず</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/menu11.png" alt="">
            </a>
          </li>
        </ul>
      </div>
    </section>
    <footer>
        <ul class="footer_gallery">
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/commitment1.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/commitment2.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/commitment3.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/commitment4.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/commitment5.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/dental_clinic_img/commitment6.jpg" alt=""></li>
        </ul>
      <div class="footer_main">
      <div class="container">
      <nav>
        <ul class="footer_nav">
            <li><a href="">トップページ</a></li>
            <li><a href="">初めての方へ</a></li>
            <li><a href="">診療内容</a></li>
            <li><a href="">スタッフ紹介</a></li>
            <li><a href="">院内紹介</a></li>
            <li><a href="">アクセス</a></li>
        </ul>
       </nav>
      </div>
      <p>© 2025 まこと歯科クリニック</p>
      </div>
    </footer>
    
    

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
  <script>
    //　ハンバーガーメニュー

    $(".hamburger").click(function(){
      $(this).toggleClass("open");
      $(".nav_header").toggleClass("open");
    });
    $("a").click(function(){
      $(".hamburger").removeClass("open");
      $(".nav_header").removeClass("open");
    });
  </script>

</body>
</html>