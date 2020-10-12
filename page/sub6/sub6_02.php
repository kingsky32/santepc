<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "언론보도";
  include_once(G5_PATH.'/head.php');
?>
<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<div class="sub_container">
  <div class="main-vis" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub_bg.png');">
    <h2>커뮤니티</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li><a href="/bbs/board.php?bo_table=notice">공지사항</a></li>
      <li class="on"><a href="/bbs/board.php?bo_table=news">언론보도</a></li>
      <li><a href="/bbs/board.php?bo_table=event">이벤트</a></li>
      <li><a href="/bbs/board.php?bo_table=open_news">오픈소식</a></li>
      <li><a href="/bbs/board.php?bo_table=qa">FAQ</a></li>
    </ul>
  </nav>
  <div class="inner">

  </div>
</div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>