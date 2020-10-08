<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "수익성 분석";
  include_once(G5_PATH.'/head.php');
?>
<link rel="stylesheet" href="./css/sub4_01.css">

<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<div class="sub_container">
  <div class="main-vis" style="background-image: url('http://santepc.seung-ju.com/img/sub/sub_bg.png');">
    <h2>성공창업</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li class="on"><a href="/page/sub4/sub4_01.php">수익성 분석</a></li>
      <li><a href="/page/sub4/sub4_02.php">성공창업 문의</a></li>
      <li><a href="/page/sub4/sub4_03.php">추천점포 제휴문의</a></li>
      <li><a href="/page/sub4/sub4_04.php">리모델링 신청</a></li>
      <li><a href="/page/sub4/sub4_05.php">사업설명회 신청</a></li>
      <li><a href="/page/sub4/sub4_06.php">성공창업이야기</a></li>
    </ul>
  </nav>
  <div class="inner">
    <p class="title">21년간의 PC방 운영 노하우와 데이터, 정확한 수익성 분석</p>
    <hr>
    <p>아래 옵션을 선택 해 주세요.</p>
  </div>
  <section id="option">
    <div class="inner">
      <ul>
        <li>
          <p>PC 대수</p>
          <select name="" id="">
            <option value="">선택</option>
            <option value="">선택</option>
            <option value="">선택</option>
          </select>
        </li>
        <li>
          <p>가동율</p>
          <select name="" id="">
            <option value="">선택</option>
            <option value="">선택</option>
            <option value="">선택</option>
          </select>
        </li>
        <li>
          <p>시간당 PC 요금</p>
          <select name="" id="">
            <option value="">선택</option>
            <option value="">선택</option>
            <option value="">선택</option>
          </select>
        </li>
        <li>
          <p>운영 시간</p>
          <select name="" id="">
            <option value="">선택</option>
            <option value="">선택</option>
            <option value="">선택</option>
          </select>
        </li>
      </ul>
    </div>
    <a href="" class="pink_btn">결과보기</a>
  </section>


  <section id="revenue">
    <div class="inner">
      <p>매출 분석</p>
      <table>
        <thead class="title">
          <tr>
            <th>항목</th>
            <th>세부내역</th>
            <th>금액</th>
            <th>비고</th>
          </tr>
        </thead>
        <tbody class="content">
          <tr>
            <td rowspan="2">PC 매출 분석</td>
            <td>평균 일 매출</td>
            <td>777,600</td>
            <td></td>
          </tr>
          <tr>
            <td>월 매출</td>
            <td>23,328,000</td>
            <td></td>
          </tr>
          <tr>
            <td>식음료 매출 분석</td>
            <td>월 매출</td>
            <td>4,665,600</td>
            <td></td>
          </tr>
          <tr>
            <td colspan="2">소계</td>
            <td>27,993,600</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>



  <section id="spend">
    <div class="inner">
      <p>비용 지출 분석</p>
      <table>
        <thead class="title">
          <tr>
            <th>항목</th>
            <th>세부내역</th>
            <th>금액</th>
            <th>비고</th>
          </tr>
        </thead>
        <tbody class="content">
          <tr>
            <td>식음료 구입비</td>
            <td>과자, 음료 등</td>
            <td>2,332,800</td>
            <td></td>
          </tr>
          <tr>
            <td>임대료</td>
            <td>매장 월임대료</td>
            <td>2,000,000</td>
            <td></td>
          </tr>
          <tr>
            <td>전용선비</td>
            <td>월 인터넷 사용요금</td>
            <td>600,000</td>
            <td></td>
          </tr>
          <tr>
            <td>유료 게임비</td>
            <td>유료 온라인 게임</td>
            <td>2,000,000</td>
            <td></td>
          </tr>
          <tr>
            <td>인건비</td>
            <td>아르바이트</td>
            <td>5,421,600</td>
            <td></td>
          </tr>
          <tr>
            <td>공과금</td>
            <td>전기, 수도요금 등</td>
            <td>1,500,000</td>
            <td></td>
          </tr>
          <tr>
            <td>기타운영비</td>
            <td>소모품, 잡비 등</td>
            <td>500,000</td>
            <td></td>
          </tr>

          <tr>
            <td colspan="2">소계</td>
            <td>14,414,400</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>


  <section id="total">
    <div class="inner">
      <p>총 수익 분석</p>
      <table>
        <thead class="title">
          <tr>
            <th>항목</th>
            <th>금액</th>
          </tr>
        </thead>
        <tbody class="content">
          <tr>
            <td>총 수익 (월 평균 매출액 - 월 평균 지출액)</td>
            <td>13,579,200</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</div>

</div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>