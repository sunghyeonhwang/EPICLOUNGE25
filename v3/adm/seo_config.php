<?php
$sub_menu = '900200';
include_once ('./_common.php');

auth_check($auth[$sub_menu], 'r');

$g5['title'] = 'SEO 설정 관리';
include_once (G5_ADMIN_PATH . '/admin.head.php');

// DB 테이블 생성 (존재하지 않을 경우)
$sql = " SHOW TABLES LIKE 'v3_seo_config' ";
$row = sql_fetch($sql);
if (!isset($row['Tables_in_' . G5_DB_NAME . ' (v3_seo_config)'])) {
    $sql = " CREATE TABLE IF NOT EXISTS `v3_seo_config` (
      `seo_id` int(11) NOT NULL AUTO_INCREMENT,
      `seo_page` varchar(50) NOT NULL DEFAULT 'default',
      `seo_title` varchar(255) NOT NULL,
      `seo_description` text NOT NULL,
      `seo_keywords` text NOT NULL,
      `seo_og_image` varchar(255) NOT NULL,
      PRIMARY KEY (`seo_id`),
      UNIQUE KEY `seo_page` (`seo_page`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 ";
    sql_query($sql);

    // 기본 데이터 삽입
    $sql = " INSERT INTO `v3_seo_config` (`seo_page`, `seo_title`, `seo_description`, `seo_keywords`, `seo_og_image`) VALUES
    ('default', 'EPIC LOUNGE 2025', '언리얼 엔진 개발자들을 위한 에픽 라운지입니다.', 'Unreal Engine, Epic Games, 언리얼 서밋', 'https://epiclounge.co.kr/img/og_image.png') ";
    sql_query($sql);
}

// 폼 처리
if ($w == 'u') {
    $seo_id = $_POST['seo_id'];
    $seo_title = $_POST['seo_title'];
    $seo_description = $_POST['seo_description'];
    $seo_keywords = $_POST['seo_keywords'];
    $seo_og_image = $_POST['seo_og_image'];

    $sql = " UPDATE `v3_seo_config`
                SET seo_title = '{$seo_title}',
                    seo_description = '{$seo_description}',
                    seo_keywords = '{$seo_keywords}',
                    seo_og_image = '{$seo_og_image}'
              WHERE seo_id = '{$seo_id}' ";
    sql_query($sql);
    alert('사이트 SEO 설정이 수정되었습니다.', './seo_config.php');
}

// 데이터 조회 (기본값)
$seo = sql_fetch(" SELECT * FROM v3_seo_config WHERE seo_page = 'default' ");
?>

<div class="local_desc01 local_desc">
    <p>사이트의 기본 SEO(검색 엔진 최적화) 메타 태그 정보를 설정합니다.</p>
</div>

<form name="fseoconfig" id="fseoconfig" action="./seo_config.php" method="post">
<input type="hidden" name="w" value="u">
<input type="hidden" name="seo_id" value="<?php echo $seo['seo_id']; ?>">

<div class="tbl_frm01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?></caption>
    <colgroup>
        <col class="grid_4">
        <col>
    </colgroup>
    <tbody>
    <tr>
        <th scope="row"><label for="seo_title">사이트 타이틀 (Title)</label></th>
        <td>
            <input type="text" name="seo_title" value="<?php echo $seo['seo_title']; ?>" id="seo_title" class="frm_input" size="80">
            <span class="frm_info">브라우저 탭에 표시되는 제목입니다.</span>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="seo_description">사이트 설명 (Meta Description)</label></th>
        <td>
            <textarea name="seo_description" id="seo_description" class="frm_input" style="width:100%; height:80px;"><?php echo $seo['seo_description']; ?></textarea>
             <span class="frm_info">검색 결과에 노출되는 사이트 요약 설명입니다.</span>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="seo_keywords">키워드 (Meta Keywords)</label></th>
        <td>
            <input type="text" name="seo_keywords" value="<?php echo $seo['seo_keywords']; ?>" id="seo_keywords" class="frm_input" size="80">
            <span class="frm_info">콤마(,)로 구분하여 입력해주세요. (예: 언리얼, 에픽게임즈, UFest)</span>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="seo_og_image">OG 이미지 URL (SNS 공유)</label></th>
        <td>
            <input type="text" name="seo_og_image" value="<?php echo $seo['seo_og_image']; ?>" id="seo_og_image" class="frm_input full_width" size="80">
            <span class="frm_info">카카오톡, 페이스북 등 공유 시 표시될 썸네일 이미지의 전체 URL을 입력하세요.</span>
            <?php if ($seo['seo_og_image']) { ?>
            <div style="margin-top:10px;"><img src="<?php echo $seo['seo_og_image']; ?>" width="200" alt="OG Image Preview"></div>
            <?php } ?>
        </td>
    </tr>
    </tbody>
    </table>
</div>

<div class="btn_fixed_top">
    <input type="submit" value="확인" class="btn_submit btn">
</div>

</form>

<?php
include_once (G5_ADMIN_PATH . '/admin.tail.php');
?>
