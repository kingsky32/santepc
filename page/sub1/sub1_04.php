<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "경영이념";
  include_once(G5_PATH.'/head.php');
?>
<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<link rel="stylesheet" href="./css/sub1_04.css">

<div class="sub_container">
  <div class="main-vis" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub_bg.png');">
    <h2>브랜드 소개</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li><a href="/page/sub1/sub1_01.php">상떼PC방</a></li>
      
      <li><a href="/page/sub1/sub1_03.php">연혁</a></li>
      <li class="on"><a href="/page/sub1/sub1_04.php">경영이념</a></li>
      <li><a href="/page/sub1/sub1_05.php">찾아오시는 길</a></li>
    </ul>
  </nav>
  <div class="inner">
    <p class="title">이 시대의 진정한 PC방 게임문화를 만들어 나갑니다.<br>
    PC방을 ‘문화’로 만들기 위해 항상 앞장서겠습니다.</p>
    <hr>
    <section>
      <article>
        <img src="<?php echo G5_IMG_URL ?>/sub/sub1/sub1_04_img_01.png" alt="img">
      </article>
      <article>
        <h5>Dream</h5>
        <span>상떼의 꿈</span>
        <p>모든 PC방이 샹떼처럼 게임, 카페 그리고 맛있는 음식까지<br>
          즐기는 문화공간이 되면 좋겠습니다.<br>
          모두가 즐길 수 있는 PC방, 샹떼가 실현시키겠습니다.</p>
          <a href="" class="more">문화공간 상떼 인테리어 더보기</a>
      </article>
    </section>
    <section>
      <article>
        <img src="<?php echo G5_IMG_URL ?>/sub/sub1/sub1_04_img_02.png" alt="img">
      </article>
      <article>
        <h5>Franchise</h5>
        <span>투명한 가맹사업</span>
        <p>본사의 이득만을 생각하는 가맹사업은 결국 몰락합니다.<br>
          본사와 가맹점은 ‘상생관계’입니다.<br>
          샹떼는 항상 투명한 가맹사업으로 본사와 가맹점의 성공을 추구합니다.</p>
          <a href="" class="more">샹떼PC방 정보공개서 확인하기</a>
        <p class="notice"><b>※ 꼭 알아두세요!</b>
          ‘정보공개서’는 창업을 위한 가장 기본적인 참고 자료이며, 예비 창업자분의 중요한 선택 기준입니다.<br>
          믿을 수 있는 정보공개서를 제공하지 않는 업체는 주의하시기를 바랍니다.</p>
      </article>
    </section>
    <section>
      <article>
        <img src="<?php echo G5_IMG_URL ?>/sub/sub1/sub1_04_img_03.png" alt="img">
      </article>
      <article>
        <h5>Success</h5>
        <span>함께하는 성장, 그리고 성공</span>
        <p>샹떼의 꿈, 혼자서는 불가능합니다.<br>
          본사와 협력업체, 그리고 전 가맹점이 함께 만들고,<br>
          함께 성장해 나갑니다.</p>
          <a href="" class="more">점주님의 성공창업이야기 바로가기</a>
      </article>
    </section>
   
  </div>
  <section>

  </section>
</div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>