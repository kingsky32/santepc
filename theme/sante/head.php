<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->

<?php
if(!defined('_INDEX_')) { // index가 아닐때 실행
?>

<header id="header">
    <div class="inner">
        <h1 id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png"
                    alt="<?php echo $config['cf_title']; ?>"></a>
        </h1>
        <nav id="gnb">
            <ul id="gnb-child">
                <li><a href="/page/sub1/sub1_01.php">브랜드 소개</a>
                    <ol>
                        <li><a href="/page/sub1/sub1_01.php">샹떼PC방</a></li>
                        <li><a href="/page/sub1/sub1_02.php">브랜드 경쟁력</a></li>
                        <li><a href="/page/sub1/sub1_03.php">연혁</a></li>
                        <li><a href="/page/sub1/sub1_04.php">경영이념</a></li>
                        <li><a href="/page/sub1/sub1_05.php">찾아오시는 길</a></li>
                    </ol>
                </li>
                <li><a href="/page/sub2/sub2_01.php">성공 경쟁력</a>
                    <ol>
                        <li><a href="/page/sub2/sub2_01.php#page1">PC방 전문상권분석</a></li>
                        <li><a href="/page/sub2/sub2_01.php#page2">Shop In Shop 시스템</a></li>
                        <li><a href="/page/sub2/sub2_01.php#page3">전용F&amp;B</a></li>
                        <li><a href="/page/sub2/sub2_01.php#page4">특화된 전용 책상</a></li>
                        <li><a href="/page/sub2/sub2_01.php#page5">가맹관리 시스템</a></li>
                        <li><a href="/page/sub2/sub2_01.php#page6">전문 PC관리 시스템</a></li>
                    </ol>
                </li>
                <li><a href="/page/sub3/sub3_01.php">창업혜택</a>
                    <ol>
                        <li><a href="/page/sub3/sub3_01.php">창업대출</a></li>
                        <li><a href="/page/sub3/sub3_02.php">안심창업시스템</a></li>
                        <li><a href="/page/sub3/sub3_03.php">성공 마케팅 전략</a></li>
                        <li><a href="/page/sub3/sub3_04.php">이달의 창업혜택</a></li>
                        <li><a href="/page/sub3/sub3_05.php">정보공개서 신청</a></li>
                    </ol>
                </li>
                <li><a href="/page/sub4/sub4_01.php">성공창업</a>
                    <ol>
                        <li><a href="/page/sub4/sub4_01.php">수익성 분석</a></li>
                        <li><a href="/page/sub4/sub4_02.php">성공창업 문의</a></li>
                        <li><a href="/page/sub4/sub4_03.php">추천점포</a></li>
                        <li><a href="/page/sub4/sub4_04.php">리모델링 신청</a></li>
                        <li><a href="/page/sub4/sub4_05.php">사업설명회 신청</a></li>
                    </ol>
                </li>
                <li><a href="/page/sub5/sub5_01.php">인테리어</a>
                    <ol>
                        <li><a href="/page/sub5/sub5_01.php">인테리어</a></li>
                        <li><a href="/page/sub5/sub5_02.php">VR</a></li>
                    </ol>
                </li>
                <li><a href="/page/sub6/sub6_01.php">커뮤니티</a>
                    <ol>
                        <li><a href="/page/sub6/sub6_01.php">공지사항</a></li>
                        <li><a href="/page/sub6/sub6_02.php">언론보도</a></li>
                        <li><a href="/page/sub6/sub6_03.php">이벤트</a></li>
                        <li><a href="/page/sub6/sub6_04.php">오픈소식</a></li>
                        <li><a href="/page/sub6/sub6_05.php">FAQ</a></li>
                    </ol>
                </li>
            </ul>
            <div id="line">line</div>
        </nav>
    </div>
</header>

<script>
    const $header = $("#header");
    const $gnb = $("#gnb");
    const $gnbLine = $("#line");
    const $gnbChild = $("#gnb-child").children();
    const $subMenu = $("#submenu");
    let isLine = false;

    const lineFn = function (idx) {
        if (isLine) {
            $header.addClass("hover");
            $gnbLine.css({
                "opacity": 1,
                "width": $gnbChild[idx].children[0].offsetWidth,
                "left": $gnbChild[idx].offsetLeft
            });
        } else {
            $header.removeClass("hover");
            $gnbLine.css({
                "opacity": 0,
                "width": 0,
                "left": 0
            });
        }
    }

    $gnbChild.on("mouseover", function () {
        isLine = true;
        lineFn($(this).index());
    });

    $subMenu.children().on("mouseover", function () {
        isLine = true;
        lineFn($(this).index());
    });

    $header.on("mouseleave", function () {
        isLine = false;
        lineFn($(this).index());
    });

    $(window).scroll(function (e) {
        if ($(this).scrollTop() === 0) {
            $header.removeClass('notop');
        } else {
            $header.addClass('notop');
        }
    });
</script>

<nav id="snb">
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
</nav>

<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
}
?>
<!-- } 상단 끝 -->


<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
        <div id="container">