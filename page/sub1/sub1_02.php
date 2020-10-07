<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "브랜드 경쟁력";
  include_once(G5_PATH.'/head.php');
?>
<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<link rel="stylesheet" href="./css/sub1_02.css">

<div class="sub_container">
  <div class="main-vis" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub_bg.png');">
    <h2>브랜드 소개</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li><a href="/page/sub1/sub1_01.php">상떼PC방</a></li>
      <li class="on"><a href="/page/sub1/sub1_02.php">브랜드 경쟁력</a></li>
      <li><a href="/page/sub1/sub1_03.php">연혁</a></li>
      <li><a href="/page/sub1/sub1_04.php">경영이념</a></li>
      <li><a href="/page/sub1/sub1_05.php">찾아오시는 길</a></li>
    </ul>
  </nav>

</div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>