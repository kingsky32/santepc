<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "인테리어";
  include_once(G5_PATH.'/head.php');
?>
<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->
<script src="js/jquery.bxslider.min.js"></script> <!-- 슬라이드 -->

<script>
	jQuery(document).ready(function($) {
		$window = $(window);

        // 다음 섹션이 브라우저 하단으로부터 200px 만큼 보여질때
        var delayPosition = 10,
            // 현재 브라우저의 높이값
            windowheight; 

        // 브라우저의 크기가 변하면 대상 엘리먼트의 위치값을 다시 할당
        $window.on('resize', function() {
        	insertTargetPosition();
        });
        // 스크롤이 이동할때
        $window.on('scroll', function() {
          // 현재의 위치 = 스크롤이 이동한 값 + 윈도우 높이 - 처음에 선언한 지연 위치값(200);
          var position = $window.scrollTop() + windowheight - delayPosition;

          // 아직 활성화되지 않은 타겟 엘리먼트를 순회하여
          $('.target-section.ready').each(function() {
            // 활성화되어 있지 않고 타겟의 위차값이 현재 위치값보다 작으면
            if(!$(this).hasClass('active') && $(this).data('offsetTop') < position) {
              // 활성화
              $(this).addClass('active');
              // 활성화 된 엘리먼트는 이후 타겟에서 제외
              $(this).removeClass('ready');
          }
      });
      });

        function insertTargetPosition() {
          windowheight = $window.height(); // 브라우저의 높이값 할당
          $('.target-section').each(function() { // 모든 대상 엘리먼트에
            $(this).data('offsetTop', ($(this).offset().top)); // 각자의 위치 값을 할당
        });
      }

      (function init() {
          // 최초 진입시 각 섹션의 위치값을 할당
          // 컨텐츠 중에 이미지 파일이 있거나 비동기로 가져오는 값이 있다면, 대상 요소들이 모두 불러진 후에
          // 각 섹션의 위치값을 다시 할당해 줘어야 합니다.
          insertTargetPosition();
      })();
  });
</script>

<link rel="stylesheet" href="./css/sub5_01.css">
<div class="sub_container">
  <div class="main-vis" style="background-image: url('<?php echo G5_IMG_URL ?>/sub/sub_bg.png');">
    <h2>인테리어</h2>
  </div>
  <nav class="lnb">
    <ul>
		<li class='on'><a href="/page/sub5/sub5_01.php">샹떼 인테리어</a></li>
		<li><a href="/page/sub5/sub5_021.php">인테리어 컨셉소개</a></li>
      <li><a href="/page/sub5/sub5_021.php">VR</a></li>
    </ul>
  </nav>
  <div class="inner">
			<div class="target-section ready section0">
				<p class="title">본사 직접 시공, 고급자재 사용으로 확실한 마무리</p>
				<hr>
				<p>
					샹떼 PC방은 PC방 1세대부터 지금까지 PC방 인테리어를 이끌어 나가고 있습니다.<br>
					샹떼 PC방은 국가에서 인증한 디자인 연구 개발 부서를 보유하고 있습니다.<br>
					세련되고 트렌디한 디자인은 물론, 고객의 동선을 고려한 설계로 고객들에게 매장 이용 시 편리함을 제공하고 있습니다.
				</p>
			</div>
			<ul class="target-section ready section1">
				<li>
					<img src="./img/inte1.png">
					<p>본사 직접 시공</p>
				</li>
				<li>
					<img src="./img/inte2.png">
					<p>고급 자재 사용</p>
				</li>
				<li>
					<img src="./img/inte3.png">
					<p>확실한 마무리</p>
				</li>
			</ul>
		</div>
		<div class="slide">
			<div class="rolling_list">
				<div class="slide_wrap slide_num1">
					<div class="text">
						<span>01</span>
						<p class="en">Metalic</p>
						<p class="ko">메탈릭</p>
						<a href="">인테리어 자세히 보기</a>
					</div>
					<div class="img">
						<img src="./img/metalic.jpg">
					</div>
				</div>
				<div class="slide_wrap slide_num2">
					<div class="text">
						<span>02</span>
						<p class="en">Urban Violet</p>
						<p class="ko">어반바이올렛</p>
						<a href="">인테리어 자세히 보기</a>
					</div>
					<div class="img">
						<img src="./img/UrbanViolet.jpg">
					</div>
				</div>
				<div class="slide_wrap slide_num3">
					<div class="text">
						<span>03</span>
						<p class="en">Urban Modern</p>
						<p class="ko">어반모던</p>
						<a href="">인테리어 자세히 보기</a>
					</div>
					<div class="img">
						<img src="./img/UrbanModern.jpg">
					</div>
				</div>
				<div class="slide_wrap slide_num4">
					<div class="text">
						<span>04</span>
						<p class="en">E-Station</p>
						<p class="ko">이스테이션</p>
						<a href="">인테리어 자세히 보기</a>
					</div>
					<div class="img">
						<img src="./img/E-Station.jpg">
					</div>
				</div>
				<div class="slide_wrap slide_num5">
					<div class="text">
						<span>05</span>
						<p class="en">Roasting</p>
						<p class="ko">로스팅</p>
						<a href="">인테리어 자세히 보기</a>
					</div>
					<div class="img">
						<img src="./img/Roasting.jpg">
					</div>
				</div>
				<div class="slide_wrap slide_num6">
					<div class="text">
						<span>06</span>
						<p class="en">Caramel Latte</p>
						<p class="ko">카라멜라떼</p>
						<a href="">인테리어 자세히 보기</a>
					</div>
					<div class="img">
						<img src="./img/CaramelLatte.jpg">
					</div>
				</div>
				<div class="slide_wrap slide_num7">
					<div class="text">
						<span>07</span>
						<p class="en">New antique</p>
						<p class="ko">뉴엔틱</p>
						<a href="">인테리어 자세히 보기</a>
					</div>
					<div class="img">
						<img src="./img/Newantique.jpg">
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function(e){
					$('.slide')({
					});
				});	
				jQuery(function($){
					$('.sa-tableHeader > tbody tr:first-child').each(function(){
						var theadTh = $(this).closest('table').find('thead th');
						$(this).children().each(function(idx){
							$(this).attr('data-cell-header', theadTh.eq(idx).text());
						});
					});
				});
				var slider = $('.slide .rolling_list').bxSlider({
					mode: 'horizontal'	
					,auto: false			
					,autoHover: false	
					,controls: true	
					,pager: true		
					,autoControls: false  
					,pause:5000  
					,autoDelay:0 
					,touchEnabled:true
					,mode:'fade'
					,captions: false
					,pager: true
					,pagerType: 'short'
					,onSlideAfter: function(){    
						$('.counter').text((slider.getCurrentSlide()+1)+'/'+slider.getSlideCount());   
					}
				});
			</script>
		</div>
	</div>

</div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>