<?php
  include_once('../../common.php');
  $bo_table = "content";
  include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');

  $captcha_html = '';
  $captcha_js   = '';
  if ($is_guest) {
      $captcha_html = captcha_html();
      $captcha_js   = chk_captcha_js();
  }

  $g5['title'] = "사업설명회 신청";
  include_once(G5_PATH.'/head.php');
?>

<link rel="stylesheet" href="./css/sub4_05.css">

<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<div class="sub_container">
  <div class="main-vis" style="background-image: url('/img/sub/sub_bg.png');">
    <h2>성공창업</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li><a href="/page/sub4/sub4_01.php">수익성 분석</a></li>
      <li><a href="/page/sub4/sub4_02.php">성공창업 문의</a></li>
      <li><a href="/page/sub4/sub4_03.php">추천점포 제휴문의</a></li>
      <li><a href="/page/sub4/sub4_04.php">리모델링 신청</a></li>
      <li class="on"><a href="/page/sub4/sub4_05.php">사업설명회 신청</a></li>
      <li><a href="/bbs/board.php?bo_table=story_successful">성공창업이야기</a></li>
    </ul>
  </nav>
  <div class="inner">
    <p class="title">사업설명회 신청</p>
    <hr>
    <form action="" name="fwrite" id="fwrite" method="post">
      <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>" id="uid">
      <input type="hidden" name="w" value="<?php echo $w ?>" id="w">
      <input type="hidden" name="bo_table" value="business_presentatio" id="bo_table">
      <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>" id="wr_id">
      <input type="hidden" name="wr_subject" value="사업설명회 신청" id="wr_subject">
      <input type="hidden" name="wr_email" value="" id="wr_email">
      <input type="hidden" name="wr_homepage" value="" id="wr_homepage">
      <input type="hidden" name="wr_content" value="사업설명회 신청" id="wr_content">
      <div class="wrap">
        <div>
          <dl>
            <dt>이름</dt>
            <dd><input type="text" name="wr_name" id="wr_name"></dd>
          </dl>
          <dl>
            <dt>연락처</dt>
            <dd>
              <select name="" id="num1">
                <option value="010">010</option>
                <option value="010">010</option>
                <option value="010">010</option>
              </select>&nbsp;-&nbsp;
              <input type="text" id="num2" maxlength="4">&nbsp;-&nbsp;
              <input type="text" id="num3" maxlength="4">
            </dd>
          </dl>

          <dl>
            <dt>방문희망날짜</dt>
            <dd>
              <input type="date" id="wr_5" name="wr_5" placeholder="날짜선택">
            </dd>
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
          <div class="agree">
            <input type="checkbox" id="agree">
            <label for="agree">위의 ‘개인정보보호취급방침’에 동의합니다.</label>
          </div>
        </div>
      </div>
      <dl class="captcha">
        <dt>자동등록방지</dt>
        <dd><?php echo $captcha_html ?></dd>
      </dl>
      <a href="" class="pink_btn btn_submit">작성완료</a>
    </form>
  </div>
</div>

<script>
  $(function () {
    $('.btn_submit').click(function (e) {
      e.preventDefault();

      if ($.trim($('#wr_name').val()) == '') {
        alert("이름을 입력하세요.");
        $('#wr_name').focus();
        return false;
      }

      if ($.trim($('#num2').val()) == '') {
        alert("연락처를 입력하세요.");
        $('#num2').focus();
        return false;
      }

      if ($.trim($('#num3').val()) == '') {
        alert("연락처를 입력하세요.");
        $('#num3').focus();
        return false;
      }

      if ($.trim($('#wr_5').val()) == '') {
        alert("방문희망날짜를 선택해주세요.");
        $('#wr_5').focus();
        return false;
      }

      if (!$('#agree').is(":checked")) {
        alert("개인정보보호취급방침에 동의해주세요.");
        $('#agree').focus();
        return false;
      }

      var token = get_write_token(fwrite.bo_table.value);
      if (!token) {
        alert("토큰 정보가 올바르지 않습니다.");
        return false;
      }

      var wr_1 = $("#num1").val() + $("#num2").val() + $("#num3").val();

      $.ajax({
        url: g5_bbs_url + "/ajax.write_update.php",
        type: "POST",
        data: {
          "uid": fwrite.uid.value,
          "w": fwrite.w.value,
          "bo_table": fwrite.bo_table.value,
          "wr_id": fwrite.wr_id.value,
          "wr_subject": fwrite.wr_subject.value,
          "wr_name": fwrite.wr_name.value,
          "wr_1": wr_1,
          "wr_5": fwrite.wr_5.value,
          "wr_email": fwrite.wr_email.value,
          "wr_homepage": fwrite.wr_homepage.value,
          "wr_content": fwrite.wr_content.value,
          "captcha_key": fwrite.captcha_key.value,
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
          $("#fwrite")[0].reset();
        }
      });
    });
  });


</script>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>