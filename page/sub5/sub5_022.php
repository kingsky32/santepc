<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "VR";
  include_once(G5_PATH.'/head.php');
?>
<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->
<script src="js/jquery.bxslider.min.js"></script>
<link rel="stylesheet" href="./css/sub5_02.css">
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
				<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->
				<link rel="stylesheet" href="./css/sub5_02.css">
				<div class="sub_container">
					<div class="main-vis" style="background-image: url('/img/sub/sub_bg.png');">
						<h2>인테리어</h2>
					</div>
					<nav class="lnb">
						<ul>
							<li><a href="/page/sub5/sub5_01.php">샹떼 인테리어</a></li>
							<li class="on"><a href="/page/sub5/sub5_02.php">인테리어 컨셉소개</a></li>
							<li><a href="/page/sub5/sub5_03.php">VR</a></li>
						</ul>
					</nav>
					<div class="inner">
						<p class="title">인테리어 컨셉 소개</p>
						<hr>
						<ul class="tab">
							<li><a href="/page/sub5/sub5_021.php">메탈릭</a></li>
							<li class="on"><a href="/page/sub5/sub5_022.php">어반바이올렛</a></li>
							<li><a href="/page/sub5/sub5_023.php">어반모던</a></li>
							<li><a href="/page/sub5/sub5_024.php">이스테이션</a></li>
							<li><a href="/page/sub5/sub5_025.php">로스팅</a></li>
							<li><a href="/page/sub5/sub5_026.php">카라멜라떼</a></li>
							<li><a href="/page/sub5/sub5_027.php">뉴엔틱</a></li>
						</ul>
					</div>
				</div>
				<div class="target-section section"></div>
				<div class="target-section ready section0" id="UrbanViolet">
					<div class="content">
						<h4 class="black">어반바이올렛</h4>
						<span>Concept</span>
						<p class="black">트랜디 컬러 바이올렛으로 포인트를 주어<br>고급스러운 공간을 연출한 프리미엄 인테리어 컨셉입니다.</p>
					</div>
				</div>


				<div class="target-section ready section1">
					<div class="content">
						<span>Urban Violet</span>
						<ul>
							<li><img src="img/UrbanViolet1.jpg"></li>
							<li><img src="img/UrbanViolet2.jpg"></li>
							<li><img src="img/UrbanViolet3.jpg"></li>
						</ul>
					</div>
				</div>




				<div class="slide" id="UrbanViolet"> 
					<div class="rolling_list">
					<script>
						for(let i = 1; i <= 11; i ++) {
							document.write('<div class="slide_wrap slide_num' + i + '"><img src="img/02_urban-violet/' + i + '.jpg"></div>');
						}
					</script>
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
						,auto: true		
						,autoHover: false
						,controls: true	
						,pager: false	
						,autoControls: false
						,pause:5000  
						,autoDelay:0 
						,touchEnabled:true
					});
				</script>



				<div class="inner">
					<ul class="interior_concept">
						<li>
							<ol>
								<li>
									<span>Metalic</span>
									<b>메탈릭</b>
									<p>금속 재질의 마감제로<br>강렬함과 세련된 공간 연출</p>
									<a href="">자세히 보기</a>
								</li>
								<li><img src="img/metalic_thumb.jpg"></li>
							</ol>
						</li>
							<!-- <li>
							<ol>
								<li>
									<span>Urban Violet</span>
									<b>어반바이올렛</b>
									<p>트랜디컬러 바이올렛의<br>포인트로 고급스러운 공간 연출 </p>
									<a href="">자세히 보기</a>
								</li>
								<li><img src="img/UrbanViolet_thumb.jpg"></li>
							</ol>
						</li> -->
						<li>
							<ol>
								<li>
									<span>Urban Modern</span>
									<b>어반모던</b>
									<p>모던한 고급스러움은 물론<br>카페 이상의 편안한 분위기</p>
									<a href="">자세히 보기</a>
								</li>
								<li><img src="img/UrbanModern_thumb.jpg"></li>
							</ol>
						</li>
						<li>
							<ol>
								<li>
									<span>E-Station</span>
									<b>이스테이션</b>
									<p>빈티지한 레트로 감성을<br>현대의 감수성으로 재해석</p>
									<a href="">자세히 보기</a>
								</li>
								<li><img src="img/E-Station_thumb.jpg"></li>
							</ol>
						</li>
						<li>
							<ol>
								<li>
									<span>Roasting</span>
									<b>로스팅</b>
									<p>카페 인테리어의 정석<br>원목 마감제의 고급스러움</p>
									<a href="">자세히 보기</a>
								</li>
								<li><img src="img/Roasting_thumb.jpg"></li>
							</ol>
						</li>
						<li>
							<ol>
								<li>
									<span>Caramel Latte</span>
									<b>카라멜라떼</b>
									<p>은은한 브라운 컬러와 화이트의 조화<br>달콤함과 부드러움을 표현</p>
									<a href="">자세히 보기</a>
								</li>
								<li><img src="img/CaramelLatte_thumb.jpg"></li>
							</ol>
						</li>
						<li>
							<ol>
								<li>
									<span>New antique</span>
									<b>뉴엔틱</b>
									<p>따뜻하고 고급스러운 마감제<br>고풍스러운 느낌</p>
									<a href="">자세히 보기</a>
								</li>
								<li><img src="img/Newantique_thumb.jpg"></li>
							</ol>
						</li>
					</ul>
				</div>
			</div> 
		</div>


		<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->ㄹ
<?php
  include_once(G5_PATH.'/tail.php');
?>