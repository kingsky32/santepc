<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "리모델링 신청";
  include_once(G5_PATH.'/head.php');
  ?>

<link rel="stylesheet" href="./css/sub4_04.css">

<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<div class="sub_container">
  <div class="main-vis" style="background-image: url('http://santepc.seung-ju.com/img/sub/sub_bg.png');">
    <h2>성공창업</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li><a href="/page/sub4/sub4_01.php">수익성 분석</a></li>
      <li><a href="/page/sub4/sub4_02.php">성공창업 문의</a></li>
      <li><a href="/page/sub4/sub4_03.php">추천점포 제휴문의</a></li>
      <li class="on"><a href="/page/sub4/sub4_04.php">리모델링 신청</a></li>
      <li><a href="/page/sub4/sub4_05.php">사업설명회 신청</a></li>
      <li><a href="/page/sub4/sub4_06.php">성공창업이야기</a></li>
    </ul>
  </nav>
  <div class="inner">
    <p class="title">리모델링 신청</p>
    <hr>
    <div class="wrap">
      <div>
        <dl>
          <dt>이름</dt>
          <dd><input type="text"></dd>
        </dl>
        <dl>
          <dt>이메일 주소</dt>
          <dd><input type="text"></dd>
        </dl>
      </div>
      <div>
        <dl>
          <dt>연락처</dt>
          <dd>
            <select name="" id="">
              <option value="">010</option>
              <option value="">010</option>
              <option value="">010</option>
            </select>&nbsp;-&nbsp;
            <input type="text">&nbsp;-&nbsp;
            <input type="text">
          </dd>
        </dl>
        <dl>
          <dt>점포평수</dt>
          <dd><input type="text"><span>평</span></dd>
        </dl>
      </div>
      <div>
        <dl>
          <dt>희망창업지역</dt>
          <dd>
            <input type="text">
            <button>주소검색</button>
          </dd>
        </dl>
        <dl>
          <dd><input type="text"><input type="text" placeholder="상세주소"></dd>
        </dl>
      </div>
      <div>
        <dl>
          <dt>상담희망내용</dt>
          <dd><textarea name="" id="" cols="30" rows="10"></textarea></dd>
        </dl>
      </div>
      <div>
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
        <dl>
          <dt>자동등록방지</dt>
          <dd></dd>
        </dl>
      </div>
      <div class="agree">
        <input type="checkbox">
        <label for="">위의 ‘개인정보보호취급방침’에 동의합니다.</label>
      </div>
      <a href="" class="pink_btn">작성완료</a>
    </div>
  </div>

</div>
<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>