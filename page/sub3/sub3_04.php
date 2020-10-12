<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "이달의 창업혜택";
  include_once(G5_PATH.'/head.php');
?>

<link rel="stylesheet" href="./css/sub3_04.css">

<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<div class="sub_container">
  <div class="main-vis" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub_bg.png');">
    <h2>창업혜택</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li class="on"><a href="#page1">창업대출</a></li>
      <li><a href="#page2">안심창업시스템</a></li>
      <li><a href="#page3">성공 마케팅 전략</a></li>
      <li><a href="#page4">이달의 창업혜택</a></li>
      <li><a href="#page5">정보공개서 신청</a></li>
    </ul>
  </nav>
  <section id="section-01">
    <div class="inner">
      <h3 class="title" id="page1">높은 승인율을 자랑하는 샹떼PC방의 창업대출</h3>
      <hr>
      <section>
        <article>
          <img src="<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_01.png" alt="img">
        </article>
        <article>
          <p>소액부터 최고 한도 3억 5천만원까지<br>유리한 맞춤조건으로 대출을 진행해드립니다.</p>
          <a href="" class="pink_btn">나의 대출한도 조회하기</a>
          <span>*개인신용도에 따라 차이가 발생할 수 있습니다.</span>
        </article>
      </section>
    </div>
  </section>
  <section id="section-02">
    <div class="inner">
      <h3 class="title" id="page2">불안감은 내려놓고, 샹떼PC방에서 안심하고 창업하세요!</h3>
      <hr>
      <h5>가맹점이 있어야 본사가 산다</h5>
      <p>각 가맹점의 목표 매출을 설정하여 오픈 후 목표 매출을 달성하지 못하면<br>
        본사에서 인수 후 재창업을 할 수 있도록 보장해주는 제도입니다.</p>
      <img src="<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_02.png" alt="img">
      <a href="" class="pink_btn">안심창업스쿨 문의하기</a>
    </div>
  </section>
  <section id="section-03">
    <div class="inner">
      <h3 class="title" id="page3">업계 최고의 전문가팀으로 구성된 샹떼PC방의 성공마케팅 전략</h3>
      <hr>
      <section>
        <article>
          <span>Online</span>
          <div class="thumb">
            <img src="<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_03.png" alt="img">
          </div>
          <div class="text">
            <img src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_icon_check.png" alt="check">
            <p>초기 매장 안정화를 위해<br>
              인스타그램, 페이스북 등 SNS를 통한<br>
              홍보 마케팅 진행</p>
          </div>
        </article>
        <article>
          <span>Offline</span>
          <div class="thumb">
            <img src="<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_04.png" alt="img">
          </div>
          <div class="text">
            <img src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_icon_check.png" alt="check">
            <p>오픈 홍보물 - 전단지, 배너, 현수막 등<br>
              동네 상권 맞춤 오프라인 마케팅 진행</p>
          </div>
        </article>
        <article>
          <span>Promotion</span>
          <div class="thumb">
            <img src="<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_05.png" alt="img">
          </div>
          <div class="text">
            <img src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_icon_check.png" alt="check">
            <p>단골 고객 확보 및 가맹점 매출 상승을<br>
              위해 시즌별 게임대회 및<br>
              인기 연예인, 유명 BJ 프로모션 진행</p>
          </div>
        </article>
      </section>
    </div>
  </section>
  <section id="section-04" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_06.png');">
    <div class="inner">
      <article>
        <p>
          <b>게임하기 좋은 환경,</b>
          샹떼PC방의 완벽한 세팅!
        </p>
        <span>샹떼 창업패키지</span>
      </article>
      <article>
        <p>21년의 시간, 695명 점주가 선택한 PC방 창업 노하우<br>
          <b>지금 창업문의하고 창업혜택 받으세요!</b></p>
          <form action="" name="fwrite1" id="fwrite1" method="post">
          <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>" id="uid">
          <input type="hidden" name="w" value="<?php echo $w ?>" id="w">
          <input type="hidden" name="bo_table" value="start_up_inquiry" id="bo_table">
          <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>" id="wr_id">
          <input type="hidden" name="wr_subject" value="창업문의" id="wr_subject">
          <input type="hidden" name="wr_content" value="창업문의" id="wr_content">
          <input type="hidden" name="wr_homepage" value="" id="wr_homepage">
          <input type="hidden" name="wr_email" value="" id="wr_email">
          <div class="input-area">
            <input type="text" name="wr_name" class="name" value="<?php echo $name ?>" id="wr_name" placeholder="이름" required>
            <select name="wr_2" id="wr_2" class="place">
              <option value="가맹희망지역" disabled>가맹희망지역</option>
              <option value="가맹희망지역">가맹희망지역</option>
              <option value="가맹희망지역">가맹희망지역</option>
            </select>
            <input type="text" id="wr_1" name="wr_1" class="tel" placeholder="연락처">
            <div class="info">
              <input type="checkbox" id="info"><label for="info">개인정보취급방침에 동의 <a href="">[전문보기]</a></label>
            </div>
          </div>
          <button type="submit" class="btn_submit_1">창업문의<br>신청하기</button>
        </form>
      </article>
    </div>
  </section>
  <script>
    $(function () {
    $('.btn_submit_1').click(function (e) {
      e.preventDefault();

      if ($.trim($('#wr_name').val()) == '') {
        alert("이름을 입력하세요.");
        $('#wr_name').focus();
        return false;
      }

      if ($.trim($('#wr_1').val()) == '') {
        alert("연락처를 입력하세요.");
        $('#num2').focus();
        return false;
      }

      if (!$('#info').is(":checked")) {
        alert("개인정보보호취급방침에 동의해주세요.");
        $('#info').focus();
        return false;
      }

      var token = get_write_token(fwrite1.bo_table.value);
      if (!token) {
        alert("토큰 정보가 올바르지 않습니다.");
        return false;
      }

      $.ajax({
        url: g5_bbs_url + "/ajax.write_update.php",
        type: "POST",
        data: {
          "uid": fwrite1.uid.value,
          "w": fwrite1.w.value,
          "bo_table": fwrite1.bo_table.value,
          "wr_id": fwrite1.wr_id.value,
          "wr_subject": fwrite1.wr_subject.value,
          "wr_name": fwrite1.wr_name.value,
          "wr_1": fwrite1.wr_1.value,
          "wr_2": fwrite1.wr_2.value,
          "wr_email": fwrite1.wr_email.value,
          "wr_homepage": fwrite1.wr_homepage.value,
          "wr_content": fwrite1.wr_content.value,
          "token": token,
        },
        dataType: "text",
        error: function (xhr, status, error) {
          switch (xhr.status) {
            case 400:
              alert('자동등록방지 숫자가 틀렸습니다.');
              break;
            default:
              alert(error);
          }
        },
        async: false,
        cache: false,
        success: function (data) {
          alert("등록완료!");
          $("#fwrite1")[0].reset();
        }
      });
    });
  });
  </script>
  <section id="section-05">
    <div class="inner" id="page4">
      <section>
        <article>
          <img src="<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_07.png" alt="img">
          <p>전좌석 게이밍<br>
            마우스/키보드/모니터</p>
        </article>
        <article>
          <img src="<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_08.png" alt="img">
          <p>천정형 프리미엄 냉난방기<br>
            100% 무상지원</p>
        </article>
        <article>
          <img src="<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_09.png" alt="img">
          <p>RTX 2080 SUPER<br>
            본사 20% 지원</p>
        </article>
        <article>
          <img src="<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_10.png" alt="img">
          <p>효율적인 PC방 운영,<br>
            무인정산기 초도비용지원</p>
        </article>
      </section>
      <div class="list">
        <ul>
          <li><span class="no">1</span>가계약금 100% 면제</li>
          <li><span class="no">2</span>가맹비, 교육비, 물류보증비 100% 면제</li>
          <li><span class="no">3</span>대형 카페테리아 및 흡연부스 무상 시공</li>
          <li><span class="no">4</span>화재배상보험 1년 무상 대납</li>
          <li><span class="no">5</span>투자원금보장제도 지원</li>
          <li><span class="no">6</span>매장 오픈 교육 및 전문 슈퍼바이저 지원</li>
        </ul>
        <ul>
          <li><span class="no">7</span>다양한 먹거리 shop in shop 무상 시공</li>
          <li><span class="no">8</span>오픈 홍보 SET 무상 지원(전단지, 현수막, X배너)</li>
          <li><span class="no">9</span>온라인 홍보 마케팅 지원</li>
          <li><span class="no">10</span>전 좌석 고급 장패드 무상 제공</li>
          <li><span class="no">11</span>매장 내 카페 사운드 무상 설치</li>
          <li><span class="no">12</span>최신 복합기 무상 지원</li>
        </ul>
        <ul>
          <li><span class="no">13</span>전 매장 듀얼 네트워크 Wifi 설치(LG전용)</li>
          <li><span class="no">14</span>Full HD급 CCTV(스마트폰 연동) 무상 설치</li>
          <li><span class="no">15</span>7.1채널 진동 게이밍 헤드셋 + 헤드셋 거치대</li>
          <li><span class="no">16</span>인텔 9세대 정품 CPU + 16GB 메모리카드</li>
          <li><span class="no">17</span>전좌석 3 in 1 고속충전기 지원</li>
          <li><span class="no">18</span>노하드 설치비 100% 지원</li>
        </ul>
      </div>
    </div>
  </section>
  <section id="section-06" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_11.png')">
    <div class="inner" id="page5">
      <article>
        <h5>No.1 브랜드를 넘어<b>Only 1 브랜드를 지향합니다.</b></h5>
        <p class="sub">샹떼PC방에서는 공정거래위원회에 등록된 <b>‘정보공개서’ 원본</b>을<br>
          확인하실 수 있도록 도와드립니다.</p>
        <p class="info"><b>* 정보공개서란?</b>
          공정거래위원회에서 가맹사업법에 따른 70여가지 기재사항이 담긴 정보입니다.<br>
          프랜차이즈 가맹점에 대한 매출이 담겨있기 때문에 창업을 시작하기 전,<br>
          본사 가맹본부에 요청하여 ‘정보공개서’원본을 꼭 확인하셔야합니다.</p>
        <img src="<?php echo G5_IMG_URL ?>/sub/sub3/sub3_04_img_12.png" alt="img">
      </article>
      <article>
        <p>정보공개서 신청하기</p>
        <form action="" name="fwrite2" id="fwrite2" method="post">
          <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>" id="uid">
          <input type="hidden" name="w" value="<?php echo $w ?>" id="w">
          <input type="hidden" name="bo_table" value="information_disclosu" id="bo_table">
          <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>" id="wr_id">
          <input type="hidden" name="wr_subject" value="정보공개서 신청하기" id="wr_subject">
          <input type="hidden" name="wr_content" value="정보공개서 신청하기" id="wr_content">
          <input type="hidden" name="wr_homepage" value="" id="wr_homepage">
          <input type="hidden" name="wr_email" value="" id="wr_email">
          <div class="input-area">
            <input type="text" id="name" placeholder="이름">
            <select name="place" id="place">
              <option value="가맹희망지역" disabled>가맹희망지역</option>
              <option value="가맹희망지역">가맹희망지역</option>
              <option value="가맹희망지역">가맹희망지역</option>
            </select>
            <input type="text" id="tel" placeholder="연락처">
            <div class="info">
              <input type="checkbox" id="info2"><label for="info2">개인정보취급방침에 동의 <a href="">[전문보기]</a></label>
            </div>
          </div>
          <button class="btn_submit_2">창업문의<br>신청하기</button>
        </form>
        <script>
          $(function () {
    $('.btn_submit_2').click(function (e) {
      e.preventDefault();

      if ($.trim($('#name').val()) == '') {
        alert("이름을 입력하세요.");
        $('#name').focus();
        return false;
      }

      if ($.trim($('#tel').val()) == '') {
        alert("연락처를 입력하세요.");
        $('#num2').focus();
        return false;
      }

      if (!$('#info2').is(":checked")) {
        alert("개인정보보호취급방침에 동의해주세요.");
        $('#info2').focus();
        return false;
      }

      var token = get_write_token(fwrite2.bo_table.value);
      if (!token) {
        alert("토큰 정보가 올바르지 않습니다.");
        return false;
      }

      $.ajax({
        url: g5_bbs_url + "/ajax.write_update.php",
        type: "POST",
        data: {
          "uid": fwrite2.uid.value,
          "w": fwrite2.w.value,
          "bo_table": fwrite2.bo_table.value,
          "wr_id": fwrite2.wr_id.value,
          "wr_subject": fwrite2.wr_subject.value,
          "wr_name": $("#name").val(),
          "wr_1": $("#tel").val(),
          "wr_2": $("#place").val(),
          "wr_email": fwrite2.wr_email.value,
          "wr_homepage": fwrite2.wr_homepage.value,
          "wr_content": fwrite2.wr_content.value,
          "token": token,
        },
        dataType: "text",
        error: function (xhr, status, error) {
          switch (xhr.status) {
            case 400:
              alert('자동등록방지 숫자가 틀렸습니다.');
              break;
            default:
              alert(error);
          }
        },
        async: false,
        cache: false,
        success: function (data) {
          alert("등록완료!");
          $("#fwrite2")[0].reset();
        }
      });
    });
  });
        </script>
      </article>
    </div>
  </section>
</div>

<script>
  $(window).on('scroll', function () {
    const scrollTop = $(window).scrollTop();
    if (scrollTop >= 3700.640625){
      $('.sub_container .lnb ul li').removeClass('on');
      $('.sub_container .lnb ul li').eq(4).addClass('on');
    } else if (scrollTop >= 3117.453125) {
      $('.sub_container .lnb ul li').removeClass('on');
      $('.sub_container .lnb ul li').eq(3).addClass('on');
    } else if (scrollTop >= 2225.453125) {
      $('.sub_container .lnb ul li').removeClass('on');
      $('.sub_container .lnb ul li').eq(2).addClass('on');
    } else if (scrollTop >= 1116) {
      $('.sub_container .lnb ul li').removeClass('on');
      $('.sub_container .lnb ul li').eq(1).addClass('on');
    } else {
      $('.sub_container .lnb ul li').removeClass('on');
      $('.sub_container .lnb ul li').eq(0).addClass('on');
    }
  });

  $('#gnb ul > li:nth-child(3) a').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      'scrollTop': $($(this).attr('href').slice(-6)).offset().top - 100
    }, 500);
  });

  $('.lnb li a').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      'scrollTop': $($(this).attr('href')).offset().top - 100
    }, 500);
  });

</script>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>