<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
</div>

</div>
</div>
<!-- } 콘텐츠 끝 -->

<?php
if(!defined('_INDEX_')) { // index가 아닐때 실행
?>

<script>
    $(window).on('scroll', function () {
        if ($('html, body').scrollTop() >= 300) {
            $('.sub_container').css({
                'padding-top': 80
            });
            $('.sub_container .lnb').css({
                'position': 'fixed',
                'top': 80,
                'z-index': 25
            });
        } else {
            $('.sub_container .lnb').css({
                'position': 'static',
                'top': 'auto'
            });
            $('.sub_container').css({
                'padding-top': 0
            });
        }
    });
</script>

<!-- 하단 시작 { -->
<footer id="footer">
    <div class="inner">
        <h1><a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/footer_logo.png"
                    alt="<?php echo $config['cf_title']; ?>"></a></h1>
        <div class="footer_copy">
            <p>(주)참인포텍 | 대표 : 홍기량 | 사업자등록번호 214-88-18470<br>
                서울특별시 강남구 봉은사로 317,8층 (논현동, 아모제 논현빌딩)</p>
            <span class="footer_copyright">Copyright(c) 2016 SANTEPC.CO.KR All Rights Reserved.</span>
        </div>
        <div class="footer_more">
            <div class="footer_call">
                <img src="<?php echo G5_IMG_URL ?>/call_icon.png" alt="call">
                <p>창업상담문의 <b>1544-1271</b></p>
            </div>
            <div class="footer_family">
                <p>패밀리사이트</p>
                <p>▼</p>
            </div>
        </div>
    </div>
</footer>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
    $(function () {
        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
    });
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>

<?php
}
?>