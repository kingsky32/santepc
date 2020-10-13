<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<?php
  include_once('../../common.php');
  $bo_table = "content";
  $g5['title'] = "사업설명회 신청";
  include_once(G5_PATH.'/head.php');
?>

<link rel="stylesheet" href="./css/sub4_06.css">

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
      <li><a href="/page/sub4/sub4_05.php">사업설명회 신청</a></li>
      <li class="on"><a href="/bbs/board.php?bo_table=story_successful">성공창업이야기</a></li>
    </ul>
  </nav>
  <div class="inner">
    <p class="title">샹떼PC방을 믿고 선택하신, 성공창업이야기</p>
    <hr>
    <iframe id="player" type="text/html" width="870" height="460" src="http://www.youtube.com/embed/JLLrQRCtw50"
      frameborder="0"></iframe>
    <div class="wrap">
    <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a></li><?php } ?>
    <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
    <ul>

    <?php for ($i=0; $i<count($list); $i++) {

        $classes = array();
        
        $classes[] = 'gall_li';
        $classes[] = 'col-gn-'.$bo_gallery_cols;

        if( $i && ($i % $bo_gallery_cols == 0) ){
            $classes[] = 'box_clear';
        }

        if( $wr_id && $wr_id == $list[$i]['wr_id'] ){
            $classes[] = 'gall_now';
        }
     ?>
     <li>
     <a href="<?php echo $list[$i]['href'] ?>">
        <div>
            <?php
            $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

            if($thumb['src']) {
                $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
            } else {
                $img_content = '<span class="no_image">no image</span>';
            }

            echo $img_content;
            ?>
        </div>
        <div>
            <p><?php echo $list[$i]['subject'] ?></p>
            <span><?php echo $list[$i]['wr_1'] ?></span>
        </div>
        </a>
    </li>

    <?php
        }
     if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; }
     ?>
      </ul>
      <a href="/page/sub4/sub4_02.php" class="pink_btn">창업문의하고 창업혜택 받기!</a>
    </div>
  </div>
</div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
  include_once(G5_PATH.'/tail.php');
?>