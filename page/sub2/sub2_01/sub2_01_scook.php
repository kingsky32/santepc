<?php
  include_once('../../../common.php');
  $bo_table = "content";
  $g5['title'] = "Scook";
  include_once(G5_PATH.'/head.php');
?>
<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->

<link
  rel="stylesheet"
  type="text/css"
  href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
/>
<link rel="stylesheet" href="../css/sub2_01_scook.css" />

<script
  type="text/javascript"
  src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>

<div id="popup1" class="popup">
  <div class="popup-container">
    <div class="slider">
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">매콤한 비빔냉면과 바삭한 돈가스의 조합!</span>
            <h5>비빔냉면<br />돈가스</h5>
          </div>
          <img class="food" src="./img/비빔냉면돈가스.png" alt="비빔냉면돈가스" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">매콤달콤 진한 양념이 쫄면에 쏘옥~</span>
            <h5>쫄볶이</h5>
          </div>
          <img class="food" src="./img/쫄볶이-매콤달콤2.png" alt="쫄볶이-매콤달콤2" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">고소한 치즈와 소시지의 풍미가 느껴지는</span>
            <h5>비엔나<br />치즈라면</h5>
          </div>
          <img class="food" src="./img/라면-비엔나치즈.png" alt="라면-비엔나치즈" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">쫄깃한 떡과 만두를 넣어 든든하게</span>
            <h5>떡만두<br />라면</h5>
          </div>
          <img class="food" src="./img/라면-떡만두.png" alt="라면-떡만두" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">김치를 넣어 칼칼하고 얼큰하게 즐기는</span>
            <h5>김치찌개<br />라면</h5>
          </div>
          <img class="food" src="./img/라면-오모가리김치.png" alt="라면-오모가리김치" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">비냉 + 삼겹살의 꿀조합!</span>
            <h5>둥지비빔냉면<br />삼겹살</h5>
          </div>
          <img class="food" src="./img/둥지비빔냉면-오븐삼겹살.png" alt="둥지비빔냉면-오븐삼겹살" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">화끈하게 매운 불닭볶음면에 오븐구이 삼겹살!</span>
            <h5>불닭볶음면<br />삼겹살</h5>
          </div>
          <img class="food" src="./img/붉닭볶음면-오븐삼겹살.png" alt="붉닭볶음면-오븐삼겹살" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">매콤새콤한 비빔면에 오븐구이 삼겹살!</span>
            <h5>비빔면<br />삼겹살</h5>
          </div>
          <img class="food" src="./img/비빔면-오븐삼겹살.png" alt="비빔면-오븐삼겹살" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">매콤달콤한 국물과 쫄깃한 떡!</span>
            <h5>떡볶이</h5>
          </div>
          <img class="food" src="./img/떡볶이-매콤달콤.png" alt="떡볶이-매콤달콤" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">부드러운 크림소스로 부드러운</span>
            <h5>매콤크림<br />떡볶이</h5>
          </div>
          <img class="food" src="./img/떡볶이-매콤크림.png" alt="떡볶이-매콤크림" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">매콤달콤 춘장 비법소스로 맛을 낸</span>
            <h5>상하이짜장<br />떡볶이</h5>
          </div>
          <img class="food" src="./img/떡볶이-상하이짜장.png" alt="떡볶이-상하이짜장" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">부드러운 크림소스로 부드러운</span>
            <h5>매콤크림<br />라볶이살</h5>
          </div>
          <img class="food" src="./img/라볶이-매콤크림.png" alt="라볶이-매콤크림" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">면류</span>
            <span class="bio">매콤달콤 춘장 비법소스로 맛을 낸</span>
            <h5>상하이짜장<br />라볶이</h5>
          </div>
          <img class="food" src="./img/라볶이-상하이짜장.png" alt="라볶이-상하이짜장" />
        </div>
      </div>
    </div>
    <div class="popup-navigation">
      <div class="popup-prev" onclick="onPopupNavigation('#popup5')">'음료' 메뉴보기</div>
      <div class="popup-next" onclick="onPopupNavigation('#popup2')">'밥류' 메뉴보기</div>
    </div>
  </div>
</div>

<div id="popup2" class="popup">
  <div class="popup-container">
    <div class="slider">
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">달콤한 간장과 마요소스에 바삭한 치킨</span>
            <h5>치킨마요<br />덮밥</h5>
          </div>
          <img class="food" src="./img/마요-치킨.png" alt="마요-치킨" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">달콤한 간장과 마요소스에 스팸이 듬뿍</span>
            <h5>스팸마요<br />덮밥</h5>
          </div>
          <img class="food" src="./img/스팜마요덮밥.png" alt="스팜마요덮밥" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">달콤한 간장과 마요소스에 등심돈가스</span>
            <h5>등심돈가스<br />마요덮밥</h5>
          </div>
          <img class="food" src="./img/마요-등심돈가스.png" alt="마요-등심돈가스" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">달콤한 간장과 마요소스에 치즈돈가스</span>
            <h5>치즈돈가스<br />마요덮밥</h5>
          </div>
          <img class="food" src="./img/마요-치즈돈가스.png" alt="마요-치즈돈가스" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">매콤한 치즈불닭에 고소한 모짜렐라 치즈~</span>
            <h5>치즈불닭<br />덮밥</h5>
          </div>
          <img class="food" src="./img/덮밥-치즈불닭.png" alt="덮밥-치즈불닭" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">도톰하고 담백한 베이컨을 가득 얹은</span>
            <h5>베이컨<br />덮밥</h5>
          </div>
          <img class="food" src="./img/덮밥-베이컨.png" alt="덮밥-베이컨" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">직화구이로 맛과 향을 더한 석쇠불고기</span>
            <h5>석쇠불고기<br />덮밥<br />바베큐맛</h5>
          </div>
          <img class="food" src="./img/석쇠불고기-바베큐맛.png" alt="석쇠불고기-바베큐맛" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">직화구이로 맛과 향을 더한 석쇠불고기</span>
            <h5>석쇠불고기<br />덮밥<br />매콤바베큐맛</h5>
          </div>
          <img class="food" src="./img/석쇠불고기-매콤바베큐맛.png" alt="석쇠불고기-매콤바베큐맛" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">쫄깃하고 담백한 산적구이에 매콤한 소스를 얹은</span>
            <h5>불타는<br />산적구이<br />덮밥</h5>
          </div>
          <img class="food" src="./img/덮밥-불타는산적구이.png" alt="덮밥-불타는산적구이" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">부드러운 소고기로 달콤 고소한</span>
            <h5>소불고기<br />덮밥</h5>
          </div>
          <img class="food" src="./img/덮밥-소불고기.png" alt="덮밥-소불고기" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">매콤한 김치볶음밥에 스팸이 가득~</span>
            <h5>스팸김치<br />덮밥</h5>
          </div>
          <img class="food" src="./img/덮밥-스팜김치.png" alt="덮밥-스팜김치" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">오돌오돌 씹히는 맛에 매콤한</span>
            <h5>오돌뼈<br />덮밥</h5>
          </div>
          <img class="food" src="./img/덮밥-오돌뼈.png" alt="덮밥-오돌뼈" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">큼직한 고기가 듬뿍 들어간</span>
            <h5>제육덮밥</h5>
          </div>
          <img class="food" src="./img/덮밥-제육.png" alt="덮밥-제육" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">부드러운 닭가슴살과 깊고 풍부한 카레의 맛</span>
            <h5>치킨카레<br />덮밥</h5>
          </div>
          <img class="food" src="./img/덮밥-치킨커리.png" alt="덮밥-치킨커리" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">달콤한 양념의 갈비살에 김치의 단짠 조화!</span>
            <h5>떡갈비김치<br />덮밥</h5>
          </div>
          <img class="food" src="./img/덮밥-떡갈비김치덮밥.png" alt="덮밥-떡갈비김치덮밥" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">중독성있는 매운 맛과 까르보나라의 고소함을 더한</span>
            <h5>까르보불닭<br />볶음밥</h5>
          </div>
          <img class="food" src="./img/까르보불닭볶음밥_조리.png" alt="까르보불닭볶음밥_조리" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">매콤하고 아삭한 김치로 볶은</span>
            <h5>김치볶음밥</h5>
          </div>
          <img class="food" src="./img/볶음밥-김치.png" alt="볶음밥-김치" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">탱탱한 낙지와 매콤한 소스</span>
            <h5>낙지볶음밥</h5>
          </div>
          <img class="food" src="./img/볶음밥-낙지.png" alt="볶음밥-낙지" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">매콤달콤 돼지 갈비살로 든든하게</span>
            <h5>매운갈비찜<br />볶음밥</h5>
          </div>
          <img class="food" src="./img/볶음밥-매운갈비찜.png" alt="볶음밥-매운갈비찜" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">탱글한 새우가 듬뿍 들어간</span>
            <h5>새우볶음밥</h5>
          </div>
          <img class="food" src="./img/볶음밥-새우.png" alt="볶음밥-새우" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">부드러운 소고기로 달콤 고소한</span>
            <h5>소불고기<br />볶음밥</h5>
          </div>
          <img class="food" src="./img/볶음밥-소불고기.png" alt="볶음밥-소불고기" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">매콤한 김치볶음밥에 스팸이 가득~</span>
            <h5>스팸김치<br />볶음밥</h5>
          </div>
          <img class="food" src="./img/볶음밥-스팜김치.png" alt="볶음밥-스팜김치" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">매콤한 김치볶음밥에 참치가 가득~</span>
            <h5>참치김치<br />볶음밥</h5>
          </div>
          <img class="food" src="./img/볶음밥-참치김치.png" alt="볶음밥-참치김치" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">달달한 데리야끼 소스와 부드러운 닭가슴살!</span>
            <h5>치킨데리야끼<br />볶음밥</h5>
          </div>
          <img class="food" src="./img/볶음밥-치킨데리야끼.png" alt="볶음밥-치킨데리야끼" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">부드러운 닭가슴살과 깊고 풍부한 카레의 맛</span>
            <h5>치킨카레<br />볶음밥</h5>
          </div>
          <img class="food" src="./img/볶음밥-치킨카레.png" alt="볶음밥-치킨카레" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">매콤한 김치볶음밥과 고기산적</span>
            <h5>고기산적<br />도시락</h5>
          </div>
          <img class="food" src="./img/도시락-고기산적.png" alt="도시락-고기산적" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">매콤한 김치볶음밥과 깻잎동그랑땡</span>
            <h5>깻잎동그랑땡<br />도시락</h5>
          </div>
          <img class="food" src="./img/도시락-깻잎동그랑땡.png" alt="도시락-깻잎동그랑땡" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">부드러운 계란 속 볶음밥과 달콤한 소스!</span>
            <h5>오므라이스</h5>
          </div>
          <img class="food" src="./img/오므라이스.png" alt="오므라이스" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">밥류</span>
            <span class="bio">입 안에서 톡톡 터지는 맛</span>
            <h5>날치알<br />주먹밥</h5>
          </div>
          <img class="food" src="./img/알밥.png" alt="알밥" />
        </div>
      </div>
    </div>
    <div class="popup-navigation">
      <div class="popup-prev" onclick="onPopupNavigation('#popup1')">'면류' 메뉴보기</div>
      <div class="popup-next" onclick="onPopupNavigation('#popup3')">'튀김류' 메뉴보기</div>
    </div>
  </div>
</div>

<div id="popup3" class="popup">
  <div class="popup-container">
    <div class="slider">
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">한 입 간편하게 즐길 수 있는</span>
            <h5>팝콘치킨</h5>
          </div>
          <img class="food" src="./img/치킨팝콘.png" alt="치킨팝콘" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">문어가 쏙쏙~ 겉바속촉 간편식</span>
            <h5>타코야끼</h5>
          </div>
          <img class="food" src="./img/타코야끼.png" alt="타코야끼" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">쭈욱~ 늘어나는 모짜렐라 치즈</span>
            <h5>치즈스틱</h5>
          </div>
          <img class="food" src="./img/치즈스틱.png" alt="치즈스틱" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">매콤한 비빔냉면과 바삭한 돈가스의 조합!</span>
            <h5>비빔냉면<br />돈가스</h5>
          </div>
          <img class="food" src="./img/겉바속촉치즈볼5알(조리).png" alt="겉바속촉치즈볼5알(조리)" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">달콤한 허니버터에 갈릭소스가 듬뿍~</span>
            <h5>허니버터갈릭<br />감자튀김</h5>
          </div>
          <img class="food" src="./img/허니버터갈릭감자튀김.png" alt="허니버터갈릭감자튀김" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">감칠맛 나는 어니언 치즈 소스를 얹은 감자튀김</span>
            <h5>어니언치즈<br />감자튀김</h5>
          </div>
          <img class="food" src="./img/어니언지즈감자튀김.png" alt="어니언지즈감자튀김" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">달달한 고구마가 들어간 치즈볼</span>
            <h5>고구마<br />치즈볼</h5>
          </div>
          <img class="food" src="./img/고구마치즈볼.png" alt="고구마치즈볼" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">바삭바삭한 치킨이 땡기는 날</span>
            <h5>후라이드<br />치킨</h5>
          </div>
          <img class="food" src="./img/치킨-후라이드.png" alt="치킨-후라이드" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">매콤달콤한 소스를 입힌 치킨</span>
            <h5>양념치킨</h5>
          </div>
          <img class="food" src="./img/치킨-양념.png" alt="치킨-양념" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">중독성 강한 화끈하게 매운 맛</span>
            <h5>불닭치킨</h5>
          </div>
          <img class="food" src="./img/치킨-불닭.png" alt="치킨-불닭" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">달콤 고소한 크림을 얹은 까르보나라 치킨</span>
            <h5>까르보나라<br />치킨</h5>
          </div>
          <img class="food" src="./img/치킨-까르보.png" alt="치킨-까르보" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">튀김류</span>
            <span class="bio">바삭하고 쫀득쫀득한~</span>
            <h5>찹쌀탕수육</h5>
          </div>
          <img class="food" src="./img/찹쌀탕수육2.png" alt="찹쌀탕수육2" />
        </div>
      </div>
    </div>
    <div class="popup-navigation">
      <div class="popup-prev" onclick="onPopupNavigation('#popup2')">'밥류' 메뉴보기</div>
      <div class="popup-next" onclick="onPopupNavigation('#popup4')">'스낵류' 메뉴보기</div>
    </div>
  </div>
</div>

<div id="popup4" class="popup">
  <div class="popup-container">
    <div class="slide">
      <div class="slide-container">
        <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
        <div class="text">
          <span class="kind">스낵류</span>
          <span class="bio">바삭한 페스츄리를 덮은 수제 소시지</span>
          <h5>회오리<br />핫도그</h5>
        </div>
        <img class="food" src="./img/회오리핫도그.png" alt="회오리핫도그" />
      </div>
    </div>
    <div class="slider">
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">추억간식 못난이 핫도그 속 모짜렐라 치즈가 듬뿍~</span>
            <h5>모짜감자<br />핫도그</h5>
          </div>
          <img class="food" src="./img/모짜감자찰핫도그(깐것).png" alt="모짜감자찰핫도그(깐것)" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">긴 소시지에 돌돌 말린 페스츄리!</span>
            <h5>마약<br />핫도그</h5>
          </div>
          <img class="food" src="./img/마약핫도그.png" alt="마약핫도그" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">유럽 정통 핫도그 스타일의 리얼 핫도그!</span>
            <h5>갈릭디핑<br />핫도그</h5>
          </div>
          <img class="food" src="./img/리얼핫도그-갈릭디핑.png" alt="리얼핫도그-갈릭디핑" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">유럽 정통 핫도그 스타일의 리얼 핫도그!v</span>
            <h5>불닭<br />핫도그</h5>
          </div>
          <img class="food" src="./img/리얼핫도그-불닭.png" alt="리얼핫도그-불닭" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">유럽 정통 핫도그 스타일의 리얼 핫도그!</span>
            <h5>스파이시마요<br />핫도그</h5>
          </div>
          <img
            class="food"
            src="./img/리얼핫도그-체다치즈 copy.png"
            alt="리얼핫도그-체다치즈 copy"
          />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">유럽 정통 핫도그 스타일의 리얼 핫도그!</span>
            <h5>청고추<br />핫도그</h5>
          </div>
          <img class="food" src="./img/리얼핫도그-청고추.png" alt="리얼핫도그-청고추" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">유럽 정통 핫도그 스타일의 리얼 핫도그!</span>
            <h5>체다치즈<br />핫도그</h5>
          </div>
          <img class="food" src="./img/리얼핫도그-체다치즈.png" alt="리얼핫도그-체다치즈" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">유럽 정통 핫도그 스타일의 리얼 핫도그!</span>
            <h5>타르타르<br />핫도그</h5>
          </div>
          <img class="food" src="./img/리얼핫도그-타르타르.png" alt="리얼핫도그-타르타르" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">유럽 정통 핫도그 스타일의 리얼 핫도그!</span>
            <h5>홀그레인<br />머스타드<br />핫도그</h5>
          </div>
          <img
            class="food"
            src="./img/리얼핫도그-홀그레인머스타드.png"
            alt="리얼핫도그-홀그레인머스타드"
          />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">빅사이즈의 소시지</span>
            <h5>빅찰도그</h5>
          </div>
          <img class="food" src="./img/빅찰도그.png" alt="빅찰도그" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">두툼한 고기와 육즙 가득한</span>
            <h5>떡갈비<br />맛바</h5>
          </div>
          <img class="food" src="./img/떡갈비맛바.png" alt="떡갈비맛바" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">크고 긴~ 수제 소시지</span>
            <h5>치즈빅<br />소시지</h5>
          </div>
          <img class="food" src="./img/치즈빅소시지.png" alt="치즈빅소시지" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">쫄깃한 빵 속 빅사이즈의 소시지</span>
            <h5>치즈빅<br />핫도그</h5>
          </div>
          <img class="food" src="./img/치즈빅핫도그-.png" alt="치즈빅핫도그-" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">부드러운 순살 리얼 닭꼬치</span>
            <h5>리얼<br />닭꼬치</h5>
          </div>
          <img class="food" src="./img/리얼닭꼬치.png" alt="리얼닭꼬치" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">소시지와 떡을 번갈아 먹는 재미</span>
            <h5>소떡소떡</h5>
          </div>
          <img class="food" src="./img/소떡소떡2.png" alt="소떡소떡2" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">소시지와 떡을 번갈아 먹는 재미</span>
            <h5>치즈<br />소떡소떡</h5>
          </div>
          <img class="food" src="./img/소떡소떡2.png" alt="소떡소떡2" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">달콤한 데리야끼 소스 닭꼬치</span>
            <h5>데리야끼<br />닭꼬치</h5>
          </div>
          <img class="food" src="./img/리얼닭꼬치-데리야끼.png" alt="리얼닭꼬치-데리야끼" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">스낵류</span>
            <span class="bio">화끈하게 매운 불닭볶음 맛 닭꼬치!</span>
            <h5>불닭맛<br />닭꼬치</h5>
          </div>
          <img class="food" src="./img/리얼닭꼬치-불닭.png" alt="리얼닭꼬치-불닭" />
        </div>
      </div>
    </div>
    <div class="popup-navigation">
      <div class="popup-prev" onclick="onPopupNavigation('#popup3')">'튀김류' 메뉴보기</div>
      <div class="popup-next" onclick="onPopupNavigation('#popup5')">'음료' 메뉴보기</div>
    </div>
  </div>
</div>

<div id="popup5" class="popup">
  <div class="popup-container">
    <div class="slider">
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>아메리카노</h5>
          </div>
          <img class="food" src="./img/커피-아메리카노.png" alt="커피-아메리카노" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>아이스<br />원조커피</h5>
          </div>
          <img class="food" src="./img/커피-아이스커피믹스.png" alt="커피-아이스커피믹스" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>흑당버블<br />라떼</h5>
          </div>
          <img class="food" src="./img/흑당버블라떼.png" alt="흑당버블라떼" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>흑당버블<br />밀크티</h5>
          </div>
          <img class="food" src="./img/흑당버블밀크티.png" alt="흑당버블밀크티" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>카라멜<br />마끼아또</h5>
          </div>
          <img class="food" src="./img/커피-카라멜마끼아또.png" alt="커피-카라멜마끼아또" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>카페라떼</h5>
          </div>
          <img class="food" src="./img/커피-카페라떼.png" alt="커피-카페라떼" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>초코라떼</h5>
          </div>
          <img class="food" src="./img/커피-초코라떼.png" alt="커피-초코라떼" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>복숭아티</h5>
          </div>
          <img class="food" src="./img/복숭아티.png" alt="복숭아티" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>딸기<br />스무디</h5>
          </div>
          <img class="food" src="./img/간편스무디-딸기.png" alt="간편스무디-딸기" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>파인애플<br />스무디</h5>
          </div>
          <img class="food" src="./img/간편스무디-파인애플.png" alt="간편스무디-파인애플" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>망고<br />스무디</h5>
          </div>
          <img class="food" src="./img/스무디-망고.png" alt="스무디-망고" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>베리믹스<br />스무디</h5>
          </div>
          <img class="food" src="./img/스무디-베리믹스.png" alt="스무디-베리믹스" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>키위<br />스무디</h5>
          </div>
          <img class="food" src="./img/스무디-키위.png" alt="스무디-키위" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>풋사과<br />에이드</h5>
          </div>
          <img class="food" src="./img/간편에이드_풋사과에이드.png" alt="간편에이드_풋사과에이드" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>레몬<br />에이드</h5>
          </div>
          <img class="food" src="./img/에이드-레몬2.png" alt="에이드-레몬2" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>오렌지<br />에이드</h5>
          </div>
          <img class="food" src="./img/오렌지-에이드.png" alt="오렌지-에이드" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>자몽<br />에이드</h5>
          </div>
          <img class="food" src="./img/에이드-자몽2.png" alt="에이드-자몽2" />
        </div>
      </div>
      <div class="slide">
        <div class="slide-container">
          <img class="logo" src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
          <div class="text">
            <span class="kind">음료</span>
            <span class="bio">시원하게 즐기는 샹떼PC방만의 음료메뉴!</span>
            <h5>청포도<br />에이드</h5>
          </div>
          <img class="food" src="./img/에이드-청포도.png" alt="에이드-청포도" />
        </div>
      </div>
    </div>
    <div class="popup-navigation">
      <div class="popup-prev" onclick="onPopupNavigation('#popup4')">'스낵류' 메뉴보기</div>
      <div class="popup-next" onclick="onPopupNavigation('#popup1')">'면류' 메뉴보기</div>
    </div>
  </div>
</div>

<div class="sub_container">
  <div class="main-vis" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub_bg.png')">
    <h2>성공 경쟁력</h2>
  </div>
  <nav class="lnb">
    <ul>
      <li class="on"><a href="/page/sub2/sub2_01.php#page1">PC방 전문상권분석</a></li>
      <li><a href="/page/sub2/sub2_01.php#page2">Shop In Shop 시스템</a></li>
      <li><a href="/page/sub2/sub2_01.php#page3">전용F&amp;B</a></li>
      <li><a href="/page/sub2/sub2_01.php#page4">특화된 전용 책상</a></li>
      <li><a href="/page/sub2/sub2_01.php#page5">가맹관리 시스템</a></li>
      <li><a href="/page/sub2/sub2_01.php#page6">전문 PC관리 시스템</a></li>
    </ul>
  </nav>
  <section class="section-01">
    <div class="inner">
      <img src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook.png" alt="logo" />
      <h3 class="title">간편한 + 맛을 동시에 잡은 <b>샹떼 전용먹거리 '스쿡'</b></h3>
      <p>
        브랜드 인지도 1위, PC매출 1위!<br />
        이제는 먹거리 매출도 샹떼PC방이 No.1 입니다.
      </p>
      <iframe
        width="880"
        height="495"
        src="https://www.youtube.com/embed/HbgCeXGlREA"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
      <span>Delicious . Appetizing . Yummy . Tasty</span>
    </div>
  </section>
  <section class="section-02">
    <div class="inner">
      <article>
        <div class="thumb">
          <img src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook_img_01.png" alt="logo" />
        </div>
        <p>
          본사의 차별화된 경영관리<br />
          및 지원 시스템을 통한<br />
          최고 품질의 식자재를 유통
        </p>
      </article>
      <article>
        <div class="thumb">
          <img src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook_img_02.png" alt="logo" />
        </div>
        <p>
          모든 식자재는 균일한 맛과<br />
          위생포장, 초보자도 쉽게 조리 가능한<br />
          전문 교육/운영 시스템
        </p>
      </article>
      <article>
        <div class="thumb">
          <img src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook_img_03.png" alt="logo" />
        </div>
        <p>
          가맹점 편의에 맞게 구축,<br />
          재고 부담없는 일일배송 시스템으로<br />
          신속한 물류배송을 진행
        </p>
      </article>
      <article>
        <div class="thumb">
          <img src="<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook_img_04.png" alt="logo" />
        </div>
        <p>
          전문 슈퍼바이저의<br />
          정기적 방문으로 메뉴의 맛과<br />
          위생관리, 정기교육 진행통
        </p>
      </article>
    </div>
  </section>
  <section class="section-03">
    <div class="inner">
      <article>
        <span>ONLY. 1 SANTE</span>
        <h4><b>매출로 보답</b>하는<br />‘스쿡’의 경쟁력</h4>
        <p>
          먹거리 판매의 만족스러운 수익성,<br />
          실제 먹거리 매출 공개!
        </p>
      </article>
      <article class="order">
        <div>
          <span>수원 OO점 판매 총 주문금액</span>
          <p>31,000,000원</p>
        </div>
        <div>
          <span>은평 OO점 판매 총 주문금액</span>
          <p>18,000,000원</p>
        </div>
        <div>
          <span>강원 OO점 판매 총 주문금액</span>
          <p>16,500,000원</p>
        </div>
        <div>
          <span>전남 OO점 판매 총 주문금액</span>
          <p>16,000,000원</p>
        </div>
      </article>
    </div>
  </section>
  <section class="section-04">
    <h3 class="title">100여가지의 스쿡의 다양한 메뉴</h3>
    <hr />
    <section>
      <article
        style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook_img_05.png')"
      >
        <div class="inner">
          <div class="text">
            <span>PC방 대표 인기매뉴</span>
            <h5>면류</h5>
            <button onclick="openPopup('#popup1')">메뉴 보기</button>
          </div>
        </div>
      </article>
      <article
        style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook_img_06.png')"
      >
        <div class="inner">
          <div class="text">
            <span>든든한 한 끼 뚝딱!</span>
            <h5>밥류</h5>
            <button onclick="openPopup('#popup2')">메뉴 보기</button>
          </div>
        </div>
      </article>
      <article
        style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook_img_07.png')"
      >
        <div class="inner">
          <div class="text">
            <span>빠삭하고 맛있는</span>
            <h5>튀김류</h5>
            <button onclick="openPopup('#popup3')">메뉴 보기</button>
          </div>
        </div>
      </article>
      <article
        style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook_img_08.png')"
      >
        <div class="inner">
          <div class="text">
            <span>간편하게 즐기는</span>
            <h5>스낵류</h5>
            <button onclick="openPopup('#popup4')">메뉴 보기</button>
          </div>
        </div>
      </article>
      <article
        style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub2/sub2_01_scook_img_09.png')"
      >
        <div class="inner">
          <div class="text">
            <span>함께 먹으면 더 맛있는</span>
            <h5>음료</h5>
            <button onclick="openPopup('#popup5')">메뉴 보기</button>
          </div>
        </div>
      </article>
    </section>
  </section>
</div>

<script>
  $("#popup1 .slider").slick();
  $("#popup2 .slider").slick();
  $("#popup3 .slider").slick();
  $("#popup4 .slider").slick();
  $("#popup5 .slider").slick();

  function openPopup(e) {
    $(e).fadeIn();
    $("#popup1 .slider").slick("refresh");
    $("#popup2 .slider").slick("refresh");
    $("#popup3 .slider").slick("refresh");
    $("#popup4 .slider").slick("refresh");
    $("#popup5 .slider").slick("refresh");
  }

  function onPopupNavigation(e) {
    $(".popup").hide();
    $(e).show();
    $("#popup1 .slider").slick("refresh");
    $("#popup2 .slider").slick("refresh");
    $("#popup3 .slider").slick("refresh");
    $("#popup4 .slider").slick("refresh");
    $("#popup5 .slider").slick("refresh");
  }

  $("body").on("click", function (e) {
    if (e.target.classList.contains("popup")) {
      $(".popup").fadeOut();
    }
  });
</script>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>
