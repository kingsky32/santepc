<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "이달의 창업혜택";
  include_once(G5_PATH.'/head.php');
?>
<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<div class="sub_container">
  <div class="main-vis" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub_bg.png');">
    <h2>창업혜택</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li><a href="/page/sub3/sub3_01.php">창업대출</a></li>
      <li><a href="/page/sub3/sub3_02.php">안심창업시스템</a></li>
      <li><a href="/page/sub3/sub3_03.php">성공 마케팅 전략</a></li>
      <li class="on"><a href="/page/sub3/sub3_04.php">이달의 창업혜택</a></li>
      <li><a href="/page/sub3/sub3_05.php">정보공개서 신청</a></li>
    </ul>
  </nav>
  <div class="inner">

  </div>
</div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>