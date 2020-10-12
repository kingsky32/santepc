<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div id="Container">
    <header id="header">
        <h1 id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png"
                    alt="<?php echo $config['cf_title']; ?>"></a>
        </h1>
        <nav id="gnb">
            <ul id="gnb-child">
                <li><a href="/page/sub1/sub1_01.php">브랜드 소개</a></li>
                <li><a href="/page/sub2/sub2_01.php">성공 경쟁력</a></li>
                <li><a href="/page/sub3/sub3_04.php#page1">창업혜택</a></li>
                <li><a href="/page/sub4/sub4_01.php">성공창업</a></li>
                <li><a href="/page/sub5/sub5_01.php">인테리어</a></li>
                <li><a href="/bbs/board.php?bo_table=notice">커뮤니티</a></li>
            </ul>
            <div id="line">line</div>
            <div id="submenu">
                <ul>
                    <li><a href="/page/sub1/sub1_01.php">샹떼PC방</a></li>

                    <li><a href="/page/sub1/sub1_03.php">연혁</a></li>
                    <li><a href="/page/sub1/sub1_04.php">경영이념</a></li>
                    <li><a href="/page/sub1/sub1_05.php">찾아오시는 길</a></li>
                </ul>
                <ul>
                    <li><a href="/page/sub2/sub2_01.php#page1">PC방 전문상권분석</a></li>
                    <li><a href="/page/sub2/sub2_01.php#page2">Shop In Shop 시스템</a></li>
                    <li><a href="/page/sub2/sub2_01.php#page3">전용F&amp;B</a></li>
                    <li><a href="/page/sub2/sub2_01.php#page4">특화된 전용 책상</a></li>
                    <li><a href="/page/sub2/sub2_01.php#page5">가맹관리 시스템</a></li>
                    <li><a href="/page/sub2/sub2_01.php#page6">전문 PC관리 시스템</a></li>
                </ul>
                <ul>
                    <li><a href="/page/sub3/sub3_04.php#page1">창업대출</a></li>
                    <li><a href="/page/sub3/sub3_04.php#page2">안심창업시스템</a></li>
                    <li><a href="/page/sub3/sub3_04.php#page3">성공 마케팅 전략</a></li>
                    <li><a href="/page/sub3/sub3_04.php#page4">이달의 창업혜택</a></li>
                    <li><a href="/page/sub3/sub3_04.php#page5">정보공개서 신청</a></li>
                </ul>
                <ul>
                    <li><a href="/page/sub4/sub4_01.php">수익성 분석</a></li>
                    <li><a href="/page/sub4/sub4_02.php">성공창업 문의</a></li>
                    <li><a href="/page/sub4/sub4_03.php">추천점포</a></li>
                    <li><a href="/page/sub4/sub4_04.php">리모델링 신청</a></li>
                    <li><a href="/page/sub4/sub4_05.php">사업설명회 신청</a></li>
                    <li><a href="/page/sub4/sub4_05.php">성공창업이야기</a></li>
                </ul>
                <ul>
                    <li><a href="/page/sub5/sub5_01.php">인테리어</a></li>
                    <li><a href="/page/sub5/sub5_021.php">인테리어 컨셉 소개</a></li>
                    <li><a href="">VR</a></li>
                </ul>
                <ul>
                    <li><a href="/bbs/board.php?bo_table=notice">공지사항</a></li>
                    <li><a href="/bbs/board.php?bo_table=news">언론보도</a></li>
                    <li><a href="/bbs/board.php?bo_table=event">이벤트</a></li>
                    <li><a href="/bbs/board.php?bo_table=open_news">오픈소식</a></li>
                    <li><a href="/bbs/board.php?bo_table=qa">FAQ</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-side">
        <ul>
            <li><a href="">
                    <img src="<?php echo G5_IMG_URL ?>/communication.svg" alt="성공창업 상담신청">
                    <p><b>성공창업</b>상담신청</p>
                </a></li>
            <li><a href="">
                    <img src="<?php echo G5_IMG_URL ?>/building.svg" alt="창업대출 한도확인">
                    <p><b>창업대출</b>한도확인</p>
                </a></li>
            <li><a href="">
                    <img src="<?php echo G5_IMG_URL ?>/document.svg" alt="PC방전문 상권분석">
                    <p><b>PC방전문</b>상권분석</p>
                </a></li>
            <li><a href="">
                    <img src="<?php echo G5_IMG_URL ?>/alram.svg" alt="안전창업 시스템">
                    <p><b>안전창업</b>시스템</p>
                </a></li>
            <li><a href="">
                    <img src="<?php echo G5_IMG_URL ?>/certification.svg" alt="샹떼의 성공창업">
                    <p><b>샹떼의</b>성공창업</p>
                </a></li>
        </ul>
    </aside>
    <div class="content_container">
        <section id="main-vis">
            <article class="visual">
                <div class="img" style="background-image: url('<?php echo G5_IMG_URL ?>/main/main-vis1.gif')">
                    Main Visual Image
                </div>
            </article>
        </section>
        <section id="section-01" style="background-image: url(' <?php echo G5_IMG_URL ?>/main/bg_section01.png')">
            <div class="section-01-container">
                <div class="big-text">
                    21
                </div>
                <div class="text">
                    <div class="text-row"><b>년된</b>1988부터 시작한 <span class="red">PC방 장수브랜드</span></div>
                    <hr>
                    <div class="text-row"><b class="green">PC방 프랜차이즈</b></div>
                    <p class="since">SINCE 1998</p>
                </div>
            </div>
        </section>
        <script>
            $(window).on("scroll", function (e) {
                if ($(this).scrollTop() >= $('#section-01').offset().top - 300) {
                    $('#section-01').addClass('active');
                }
            });
        </script>
        <section id="section-02">
            <div class="section-02-container">
                <article>
                    <a href="/page/sub3/sub3_04.php#page1">
                        <img src="<?php echo G5_IMG_URL ?>/main/section-02-01-img.png" alt="img">
                    </a>
                </article>
                <article>
                    <a href="/page/sub2/sub2_01.php#page5">
                        <img src="<?php echo G5_IMG_URL ?>/main/section-02-02-img.png" alt="img">
                    </a>
                </article>
                <article>
                    <ul>
                        <li><a href="/page/sub3/sub3_04.php#page2">
                                <img src="<?php echo G5_IMG_URL ?>/main/section-02-03-img.png" alt="img">
                            </a></li>
                        <li><a href="/page/sub2/sub2_01.php#page5">
                                <img src="<?php echo G5_IMG_URL ?>/main/section-02-04-img.png" alt="img">
                            </a></li>
                    </ul>
                    <p>꼭 필요한 부품들로 준비했습니다. <img src="<?php echo G5_IMG_URL ?>/arrow-down.png" alt="arrow-down"></p>
                    <div class="section-02-banner">
                        <a href="/page/sub3/sub3_04.php#page4">
                            <img src="<?php echo G5_IMG_URL ?>/main/section-02-05-img.png" alt="img">
                        </a>
                    </div>
                </article>
            </div>
        </section>
        <script>
            $(window).on("scroll", function (e) {
                if ($(this).scrollTop() >= $('#section-02').offset().top - 300) {
                    $('#section-02').addClass('active');
                }
            });
        </script>
        <section id="section-03">
            <span>SANTE PC ZONE</span>
            <div class="container">
                <ul>
                    <li class="active"><b>샹떼 다점포</b>점주님 성공스토리
                        <div class="thumb"><img src="<?php echo G5_IMG_URL ?>/main/jumju/jumju1-active.png" alt="thumb">
                        </div>
                    </li>
                    <li><b>우수한 가맹관리</b>점주님 성공스토리
                        <div class="thumb"><img src="<?php echo G5_IMG_URL ?>/main/jumju/jumju2.png" alt="thumb"></div>
                    </li>
                    <li>샹떼로 성공한<b>20대 CEO</b>
                        <div class="thumb"><img src="<?php echo G5_IMG_URL ?>/main/jumju/jumju3.png" alt="thumb"></div>
                    </li>
                    <li><b>업계최대 대출</b>창업대출 후기
                        <div class="thumb"><img src="<?php echo G5_IMG_URL ?>/main/jumju/jumju4.png" alt="thumb"></div>
                    </li>
                </ul>
                <div class="main-container">
                    <div class="main">
                        <p>샹떼 다점포 점주님</p>
                        <h3><b>샹떼라서</b>가능한거죠.</h3>
                        <span>1호점 2호점 모두 상떼PC방으로!</span>
                        <a href="/page/sub4/sub4_05.php">자세히 보기</a>
                        <img src="<?php echo G5_IMG_URL ?>/main/jumju/jumju1-main.png" alt="main">
                    </div>
                    <div class="main">
                        <p>샹떼로 성공한 20대 CEO</p>
                        <h3><b>억대연봉</b>사장님</h3>
                        <span>슈퍼바이저 지원 만족스러웠습니다.</span>
                        <a href="/page/sub4/sub4_05.php">자세히 보기</a>
                        <img src="<?php echo G5_IMG_URL ?>/main/jumju/jumju3-main.png" alt="main">
                    </div>
                    <div class="main">
                        <p>우수한 가맹점 관리</p>
                        <h3><b>어려운 거</b>하나 없어요.</h3>
                        <span>이제 웬만한 PC는 제가 다 고쳐요.</span>
                        <a href="/page/sub4/sub4_05.php">자세히 보기</a>
                        <img src="<?php echo G5_IMG_URL ?>/main/jumju/jumju2-main.png" alt="main">
                    </div>
                    <div class="main">
                        <p>만족스러웠던 샹떼 대출</p>
                        <h3><b>1금융권</b>창업대출.</h3>
                        <span>직접 은행가지 않고, 너무 편했어요.</span>
                        <a href="/page/sub4/sub4_05.php">자세히 보기</a>
                        <img src="<?php echo G5_IMG_URL ?>/main/jumju/jumju4-main.png" alt="main">
                    </div>
                </div>
            </div>
        </section>
        <section id="section-04">
            <article style="background-image: url('<?php echo G5_IMG_URL ?>/main/section-04-01-bg.png')">
                <div>
                    <div class="text">
                        <p>게이밍<br>마우스+키보드<br>+모니터</p>
                        <span>게임하기 좋은 PC방 상떼!</span>
                    </div>
                    <div class="more">
                        <a href="">
                            <img src="<?php echo G5_IMG_URL ?>/cycle-angle-right.png" alt="icon">
                            <span>자세히 보기</span>
                        </a>
                    </div>
                </div>
            </article>
            <article style="background-image: url('<?php echo G5_IMG_URL ?>/main/section-04-02-bg.png')">
                <div>
                    <div class="text">
                        <span>쾌적한 환경을 위한</span>
                        <p>천정형 프리미엄<br>냉난방기<br><span class="beige">100%무상지원</span></p>
                    </div>
                    <div class="more">
                        <a href="">
                            <img src="<?php echo G5_IMG_URL ?>/cycle-angle-right.png" alt="icon">
                            <span>자세히 보기</span>
                        </a>
                    </div>
                </div>

            </article>
            <article style="background-image: url('<?php echo G5_IMG_URL ?>/main/section-04-03-bg.png')">
                <div>
                    <div class="text">
                        <p>RTX2080<br>SUPER<br>본사 20% 지원</p>
                        <span>사양 업글로 게임 몰입감 상승!</span>
                    </div>
                    <div class="more">
                        <a href="">
                            <img src="<?php echo G5_IMG_URL ?>/cycle-angle-right.png" alt="icon">
                            <span>자세히 보기</span>
                        </a>
                    </div>
                </div>
            </article>
            <article style="background-image: url('<?php echo G5_IMG_URL ?>/main/section-04-04-bg.png')">
                <div>
                    <div class="text">
                        <p>가계약금,<br>가맹비, 교육비<br>물류보증비<br><span class="beige">100%면제</span></p>
                    </div>
                    <div class="more">
                        <a href="">
                            <img src="<?php echo G5_IMG_URL ?>/cycle-angle-right.png" alt="icon">
                            <span>자세히 보기</span>
                        </a>
                    </div>
                </div>
            </article>
            <a href="" class="button">상떼 창업패키지 자세히보기</a>
        </section>
    </div>
</div>

<script>
    const $gnb = $("#gnb");
    const $gnbLine = $("#line");
    const $gnbChild = $("#gnb-child").children();
    const $subMenu = $("#submenu");
    let isLine = false;
    let slideNum = 0;

    const lineFn = function (idx) {
        if (isLine) {
            $gnbLine.css({
                "opacity": 1,
                "width": $gnbChild[idx].children[0].offsetWidth,
                "left": $gnbChild[idx].children[0].offsetLeft + 530
            });
        } else {
            $gnbLine.css({
                "opacity": 0,
                "width": 0,
                "left": 530
            });
        }
    }

    $gnbChild.on("mouseover", function () {
        isLine = true;
        lineFn($(this).index());
    });

    $gnbChild.on("mouseleave", function () {
        isLine = false;
        lineFn($(this).index());
    });

    $subMenu.children().on("mouseover", function () {
        isLine = true;
        lineFn($(this).index());
    });

    $subMenu.children().on("mouseleave", function () {
        isLine = false;
        lineFn($(this).index());
    });

    const $slide = $('.main-container');

    const onSlide = function (num) {
        $($pager).eq(num).addClass('active');
        for (let i = 0; i < $pager.length; i++) {
            if ($pager.eq(i).find('img').attr('src').slice(-10) === "active.png") {
                let temp = $pager.eq(i).find('img').attr('src').slice(0, -11);
                $pager.eq(i).find('img').attr('src', temp + '.png');
            }
        }
        let tmp = $($pager).eq(num).find('img').attr('src').slice(0, -4);
        $($pager).eq(num).find('img').attr('src', tmp + '-active.png');
        $pager.not($($pager).eq(num)).removeClass('active');
        $slide.children().not($slide.eq(num)).fadeOut();
        $slide.children().eq(num).fadeIn();
    }

    const $pager = $('.container > ul > li');

    setInterval(function () {
        slideNum = slideNum == 3 ? 0 : slideNum + 1;
        onSlide(slideNum);
    }, 3000);

    $pager.on('click', function (e) {
        onSlide($(this).index());
    });
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>