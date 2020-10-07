<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "찾아오시는 길";
  include_once(G5_PATH.'/head.php');
?>
<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<link rel="stylesheet" href="./css/sub1_05.css">

<div class="sub_container">
  <div class="main-vis" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub_bg.png');">
    <h2>브랜드 소개</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li><a href="/page/sub1/sub1_01.php">상떼PC방</a></li>
      <li><a href="/page/sub1/sub1_02.php">브랜드 경쟁력</a></li>
      <li><a href="/page/sub1/sub1_03.php">연혁</a></li>
      <li><a href="/page/sub1/sub1_04.php">경영이념</a></li>
      <li class="on"><a href="/page/sub1/sub1_05.php">찾아오시는 길</a></li>
    </ul>
  </nav>
  <div class="inner">
    <h3 class="title">Location</h3>
    <div class="map">
      <img src="<?php echo G5_IMG_URL ?>/sub/sub1/sub1_05_map.png" alt="map">
    </div>
    <div class="inner">
      <h5 class="addr">강남구 봉은사로 317 아모제논현빌딩 8층 (논현동 277-35)</h5>
      <section class="tel">
        <article>대표전화. <b>02-1544-1271</b></article>
        <article>팩스번호. <b>02-571-1955</b></article>
      </section>
      <section class="route-container">
        <article>
          <div class="icon">
            <img src="<?php echo G5_IMG_URL ?>/sub/sub1/sub1_05_subway.png" alt="subway">
            <span>SUBWAY</span>
          </div>
          <div class="route">
            <h5>지하철 이용하시는 경우</h5>
            <p>
              <span class="sin-bun-dang-sun">신분당선</span>
              <span class="gu-ho-sun">9호선</span>
              선정릉역 하차 후 1번출구에서 150m 직진
            </p>
          </div>
        </article>
        <article>
          <div class="icon">
            <img src="<?php echo G5_IMG_URL ?>/sub/sub1/sub1_05_bus.png" alt="bus">
            <span>BUS</span>
          </div>
          <div class="route">
            <h5>버스 이용하시는 경우</h5>
            <p>선정릉역1번출구.시니어프라자&nbsp; <b class="grey">|</b> &nbsp;<span class="ji-sun">지선</span> 3412,6411</p>
            <p>한국토지주택공사앞&nbsp; <b class="grey">|</b> &nbsp;<span class="gan-sun">간선</span> 342, 472, <span class="ji-sun">지선</span> 3426, 4412</p>
          </div>
        </article>
      </section>
    </div>
  </div>
</div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>