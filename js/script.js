//画面を開くとロゴがフェード
$(function () {
    setTimeout(function () {
        $(".home__start h1").fadeIn(1600);
    }, 500);
    setTimeout(function () {
        $(".home__start").fadeOut(2500);
    }, 2500);
});

//　Topへボタン
$(function () {
    let pagetop = $(".top");
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
});

//　ハンバーガーメニュー
$(function () {
    $("#hamburger").click(function () {
        $(this).toggleClass("open");
        $(".header__nav").toggleClass("open");
    });
});

//スクロールすると下からフェードイン
$(function () {
    $(window).scroll(function () {
        $(".fadein").each(function () {
            let scroll = $(window).scrollTop();
            let target = $(this).offset().top;
            let windowHeight = $(window).height();
            if (scroll > target - windowHeight + 100) {
                $(this).css("opacity", "1");
                $(this).css("transform", "translateY(0)");
            }
        });
    });
});

//スクロールするとフェードイン
$(function () {
    $(window).scroll(function () {
        $(".fadein2").each(function () {
            let scroll = $(window).scrollTop();
            let target = $(this).offset().top;
            let windowHeight = $(window).height();
            if (scroll > target - windowHeight + 100) {
                $(this).css("opacity", "1");
            }
        });
    });
});

//スクロールすると横からフェードイン
$(function () {
    $(window).scroll(function () {
        $(".fadein_l,.fadein_r").each(function () {
            let scroll = $(window).scrollTop();
            let target = $(this).offset().top;
            let windowHeight = $(window).height();
            if (scroll > target - windowHeight + 100) {
                $(this).css("opacity", "1");
                $(this).css("transform", "translateX(0)");
            }
        });
    });
});

// main-visualスライダー
$(function () {
    $(".home__main-visual__content__img")
        // 最初のスライドに"add-animation"のclassを付ける(data-slick-index="0"が最初のスライドを指す)
        .on("init", function () {
            $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
        })
        // 通常のオプション
        .slick({
            autoplay: true, // 自動再生ON
            fade: true, // フェードON
            arrows: false, // 矢印OFF
            speed: 2000, // スライド、フェードアニメーションの速度2000ミリ秒
            autoplaySpeed: 4000, // 自動再生速度4000ミリ秒
            pauseOnFocus: false, // フォーカスで一時停止OFF
            pauseOnHover: false, // マウスホバーで一時停止OFF
        })
        .on({
            // スライドが移動する前に発生するイベント
            beforeChange: function (event, slick, currentSlide, nextSlide) {
                // 表示されているスライドに"add-animation"のclassをつける
                $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
                // あとで"add-animation"のclassを消すための"remove-animation"classを付ける
                $(".slick-slide", this)
                    .eq(currentSlide)
                    .addClass("remove-animation");
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

// 背景の泡

window.addEventListener("load", function () {
    const bubbleContainer = document.getElementById("bubble-container");
    const bubbleContainerHeight = bubbleContainer.offsetHeight;
    const animationDurationInSeconds = bubbleContainerHeight / 100;
    const setTimeoutDray = bubbleContainerHeight * 10;
    const screenWidth = window.innerWidth;
    const bubbleConcentration = 600 - 0.2 * screenWidth;

    const craetebubble = () => {
        let bubble = document.createElement("span");
        bubble.className = "bubble";

        minSize = 5;
        maxSize = 15;

        let bubbleSize = Math.random() * (maxSize - minSize) + minSize;

        bubble.style.width = bubbleSize + "px";
        bubble.style.height = bubbleSize + "px";
        bubble.style.left = Math.random() * 100 + "%";
        bubble.style.animationDuration = `${animationDurationInSeconds}s`;

        bubbleContainer.appendChild(bubble);

        setTimeout(() => {
            bubble.remove();
        }, setTimeoutDray);
    };
    setInterval(craetebubble, bubbleConcentration);
});

// 背景の泡その２

window.addEventListener("load", function () {
    if (this.location.pathname === "/") {
        const bubbleContainer2 = document.getElementById("bubble-container2");
        const bubbleContainerHeight2 = bubbleContainer2.offsetHeight;
        const animationDurationInSeconds2 = bubbleContainerHeight2 / 100;
        const setTimeoutDray2 = bubbleContainerHeight2 * 10;
        const screenWidth = window.innerWidth;
        const bubbleConcentration2 = 600 - 0.2 * screenWidth;

        const craetebubble2 = () => {
            let bubble2 = document.createElement("span");
            bubble2.className = "bubble2";

            minSize = 5;
            maxSize = 15;

            let bubbleSize = Math.random() * (maxSize - minSize) + minSize;

            bubble2.style.width = bubbleSize + "px";
            bubble2.style.height = bubbleSize + "px";
            bubble2.style.left = Math.random() * 100 + "%";
            bubble2.style.animationDuration = `${animationDurationInSeconds2}s`;

            bubbleContainer2.appendChild(bubble2);

            setTimeout(() => {
                bubble2.remove();
            }, setTimeoutDray2);
        };
        setInterval(craetebubble2, bubbleConcentration2);
    }
});
