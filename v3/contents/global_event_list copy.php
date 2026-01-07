<?php 
include_once('../common.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:type" content="website">
    <meta property="og:title" content="에픽게임즈">
    <meta property="og:description" content="에픽게임즈">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <title>에픽게임즈</title>
    <link rel="stylesheet" href="/v3/resource/css/sub.css">
    <script src="/v3/resource/js/jquery-3.4.1.min.js"></script>
    <script src="/v3/resource/js/slick.min.js"></script>
    <script src="/v3/resource/js/ScrollTrigger.min.js"></script>
    <script src="/v3/resource/js/jquery.menu.min.js"></script>
    <script src="/v3/resource/js/jquery.responsive.min.js"></script>
    <script src="/v3/resource/js/common.js"></script>
    <script src="/v3/resource/js/sub.js"></script>

	
</head>
<body>
<?php include '../inc/common_header.php'; ?>

<div id="sub_visual" class="event_vi">
	<h2>이벤트</h2>
	<p>언리얼 엔진의 다양한 이벤트를 소개합니다.</p>
</div>
<div class="tab_menu event_tab">
	<div class="wrap">
		<ul>
			<li <?=empty($_GET["status"]) ? 'class="on"':""?>><a href="?status=&category=<?=$_GET[category]?>">전체</a></li>
			<li <?=$_GET["status"] == "진행중" ? 'class="on"':""?>><a href="?status=진행중&category=<?=$_GET[category]?>">진행중</a></li>
			<li <?=$_GET["status"] == "예고" ? 'class="on"':""?>><a href="?status=예고&category=<?=$_GET[category]?>">예고</a></li>
			<li <?=$_GET["status"] == "종료" ? 'class="on"':""?>><a href="?status=종료&category=<?=$_GET[category]?>">종료</a></li>
			<li <?=$_GET["status"] == "결과발표" ? 'class="on"':""?>><a href="?status=결과발표&category=<?=$_GET[category]?>">결과발표</a></li>
		</ul>
	</div>
</div>

<div class="event_list">
	<div class="wrap">
<div class="event_list_wrap">
<?

	$where = "";
	if($_GET[status]){
		$where .= " and  status = '{$_GET[status]}'";
	}
	if($_GET[category]){
		$where .= " and  category = '{$_GET[category]}'";
	}
	$sql_list = 
		" select * from v3_rsc_global_event_bbs 
		  where 1=1 and display_yn='Y' " 
		  . $where . "
		  order by ordr desc, rsc_bbs_idx desc ";
	$result2 = sql_query($sql_list);
    for ($j=0; $row_list=sql_fetch_array($result2); $j++) {
?>
	<div class="event_list_box">
		<a href="./global_event_view.php?rsc_bbs_idx=<?=$row_list["rsc_bbs_idx"]?>&status=<?=$_GET[status]?>&category=<?=$_GET[category]?>">
			<span class="event_time">
				<span class="time_cate"><?=$row_list["status"]?></span> <!-- 진행중이면 텍스트 바뀜 -->
				<span class="time_text"><?=str_replace("-",".",$row_list["sdate"])?> - <?=str_replace("-",".",$row_list["edate"])?></span>
			</span>
			<span class="event_title">
				<?=$row_list["title"]?>
			</span>
			<span class="event_img">
				<?php
				$bimg_str = "";
				$bimg = G5_DATA_PATH."/event/{$row_list['thumb_img']}";
				if (file_exists($bimg)  && $row_list['thumb_img'] ) {
					$size = @getimagesize($bimg);
					if($size[0] && $size[0] > 750)
						$width = 750;
					else
						$width = $size[0];

					$bimg_str = G5_DATA_URL.'/event/'.$row_list['thumb_img'];
				}
				if ($bimg_str) {
					?><img src="<?=$bimg_str?>" width="1150" /><?
				}else{
					?><img src="/v3/resource/images/sub/global_event_list_img.jpg" width="1150"/><?
				}
				?>
				
			</span>
		</a>
	</div><!-- event_list_box -->

<?
	}
?>
	</div><!-- wrap -->
	</div><!-- wrap -->
	
</div><!-- event_list -->
<?php include '../inc/common_footer.php'; ?>
</body>
</html>