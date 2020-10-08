<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "성공창업 문의";
  include_once(G5_PATH.'/head.php');
?>

<link rel="stylesheet" href="./css/sub4_02.css">

<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<div class="sub_container">
  <div class="main-vis" style="background-image: url('http://santepc.seung-ju.com/img/sub/sub_bg.png');">
    <h2>성공창업</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li><a href="/page/sub4/sub4_01.php">수익성 분석</a></li>
      <li class="on"><a href="/page/sub4/sub4_02.php">성공창업 문의</a></li>
      <li><a href="/page/sub4/sub4_03.php">추천점포 제휴문의</a></li>
      <li><a href="/page/sub4/sub4_04.php">리모델링 신청</a></li>
      <li><a href="/page/sub4/sub4_05.php">사업설명회 신청</a></li>
      <li><a href="/page/sub4/sub4_06.php">성공창업이야기</a></li>
    </ul>
  </nav>
  <div class="inner">
    <p class="title">PC방 성공창업, 샹떼PC방은 준비되어 있습니다.</p>
    <hr>

    <ul>
      <li>
        <div class="slide">
          <div class="rolling_list">
            <div class="slide_wrap slide_num1"><img src="img/sub4_slide1.jpg"></div>
            <div class="slide_wrap slide_num2"><img src="img/sub4_slide2.jpg"></div>
            <div class="slide_wrap slide_num3"><img src="img/sub4_slide1.jpg"></div>
            <div class="slide_wrap slide_num2"><img src="img/sub4_slide2.jpg"></div>
          </div>
          <script>
            $(document).ready(function (e) {
              $('.slide')({
              });
            });
            jQuery(function ($) {
              $('.sa-tableHeader > tbody tr:first-child').each(function () {
                var theadTh = $(this).closest('table').find('thead th');
                $(this).children().each(function (idx) {
                  $(this).attr('data-cell-header', theadTh.eq(idx).text());
                });
              });
            });
            var slider = $('.slide .rolling_list').bxSlider({
              mode: 'horizontal'
              , auto: true
              , autoHover: false
              , controls: true
              , pager: false
              , autoControls: false
              , pause: 5000
              , autoDelay: 0
              , touchEnabled: true
            });
          </script>
        </div>
        <a href="" class="green_btn">더 많은 혜택 확인하러가기</a>
      </li>
      <li>
        <div class="first">
          <dl>
            <dt>이름</dt>
            <dd><input type="text"></dd>
          </dl>
          <dl>
            <dt>연락처</dt>
            <dd>
              <select name="" id="">
                <option value="">010</option>
                <option value="">010</option>
                <option value="">010</option>
              </select>-
              <input type="text">-
              <input type="text">
            </dd>
          </dl>
          <dl>
            <dt>희망창업지역</dt>
            <dd>
              <select name="" id="sido">
                <option value="">서울특별시</option>
                <option value="">인천광역시</option>
                <option value="">부산광역시</option>
              </select>
              <select name="" id="gugun">
                <option value="">광진구</option>
                <option value="">남동구</option>
                <option value="">강북구</option>
              </select>
            </dd>
          </dl>
          <p>
            창업전문상담사의 휴대폰번호로 전화가 갑니다.<br>
            모르는 번호로 전화가 와도 받아주시면 감사하겠습니다.
          </p>
        </div>
        <div class="sec">
          <dl>
            <dt>
              개인정보 제공<br>및 활용 동의
            </dt>
            <dd>
              <p>
                1. 개인정보 수집범위 : 이름, 연락처<br>
                2. 개인정보 수집 및 이용목적 : 가맹문의 및 상담자료<br>
                3. 개인정보 수집 및 보유기간 : 이용자의 개인정보는 원칙적
                으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기
                하며, 보유기간은 최대 3년을 넘기지 않는 것을 원칙으로 한다.
              </p>
            </dd>
          </dl>
          <div class="agree">
            <input type="checkbox">
            <label for="">위의 '개인정보보호취급방침'에 동의합니다.</label>
          </div>
        </div>
        <div class="thir">
          <dl>
            <dt>자동등록방지</dt>
            <dd></dd>
          </dl>
        </div>
        <a href="" class="pink_btn">작성완료</a>
      </li>
    </ul>

  </div>

</div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>