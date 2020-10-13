<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "샹떼PC방";
  include_once(G5_PATH.'/head.php');
?>
<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<link rel="stylesheet" href="./css/sub1_01.css">

<div class="sub_container">
  <div class="main-vis" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub_bg.png');">
    <h2>브랜드 소개</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li class="on"><a href="/page/sub1/sub1_01.php">샹떼PC방</a></li>
      <li><a href="/page/sub1/sub1_03.php">연혁</a></li>
      <li><a href="/page/sub1/sub1_04.php">경영이념</a></li>
      <li><a href="/page/sub1/sub1_05.php">찾아오시는 길</a></li>
    </ul>
  </nav>
  <div class="inner">
    <h3 class="title">항상 변화를 꿈꾸는 PC방 프랜차이즈 ONLY.1 샹떼PC방</h3>
    <hr>
  </div>
  <iframe class="main-img" width="1500" height="844" src="https://www.youtube.com/embed/W1iNfqvGf90" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>co
  <div class="inner">
    <h4>We are creating a cultural space.</h4>
    <p>샹떼 PC방은 PC방 브랜드들 중 최초로 기존 PC방의 답답하고 어두운 이미지를 탈피함과 동시에<br>
      친구, 연인 및 남녀노소를 불문하고 모두가 즐길 수 있는 문화공간을 만드는데 최선을 다하고 있으며,<br>
      샹떼 PC방은 항상 변화를 꿈꾸는 PC방 프랜차이즈 Only.1 기업입니다.</p>
    <section class="grid">
      <article style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub1/sub1_01_grid_img_1.png')"><a href="/page/sub3/sub3_04.php#page1">
          <h5>최대 3억5천만원 대출</h5>
          <p>높은 승인율을 자랑하는 샹떼 대출!<br>
            소액부터 최고 3억5천만원까지<br>
            유리한 맞춤조건으로 대출 진행</p>
          <div class="more">자세히 보기</div>
        </a></article>
      <article style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub1/sub1_01_grid_img_2.png')"><a href="javascript:void(0);" onclick="alert('준비중입니다')">
          <h5>안심 재창업 119</h5>
          <p>목표매출 미달성시 창업비용을<br>
            100% 보장해드립니다.</p>
          <div class="more">자세히 보기</div>
        </a></article>
      <article style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub1/sub1_01_grid_img_3.png')"><a href="/page/sub3/sub3_04.php#page2">
          <h5>투자원금 보장제도</h5>
          <p>폐점률 0%에 도전!<br>
            원금은 보장받고 수익은 무한대로~</p>
          <div class="more">자세히 보기</div>
        </a></article>
      <article style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub1/sub1_01_grid_img_4.png')"><a href="/page/sub3/sub3_04.php#page4">
          <h5>샹떼PC방의 특별한 창업혜택</h5>
          <p>21년의 시간, 695명 점주의 선택!<br>
            샹떼PC방은 자신있습니다.</p>
          <div class="more">자세히 보기</div>
        </a></article>
    </section>
  </div>
</div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>