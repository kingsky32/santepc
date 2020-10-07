<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "특화된 전용 책상";
  include_once(G5_PATH.'/head.php');
?>
<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<div class="sub_container">
  <div class="main-vis" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub_bg.png');">
    <h2>성공 경쟁력</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li><a href="/page/sub2/sub2_01.php">PC방 전문상권분석</a></li>
      <li><a href="/page/sub2/sub2_02.php">전용F&amp;B</a></li>
      <li class="on"><a href="/page/sub2/sub2_03.php">특화된 전용 책상</a></li>
      <li><a href="/page/sub2/sub2_04.php">가맹관리 시스템</a></li>
      <li><a href="/page/sub2/sub2_05.php">전문 PC관리 시스템</a></li>
      <li><a href="/page/sub2/sub2_06.php">Shop In Shop 시스템</a></li>
    </ul>
  </nav>
  <div class="inner">

  </div>
</div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>