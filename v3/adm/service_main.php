<?php
$sub_menu = '900100';
include_once('./_common.php');

auth_check_menu($auth, $sub_menu, 'r');

$g5['title'] = 'Bit.ly 주소 변환 관리';
include_once('./admin.head.php');

// DB 테이블 생성 (없을 경우를 대비)
$table_name = G5_TABLE_PREFIX . 'bitly_logs';
if(!sql_query(" DESC $table_name ", false)) {
    sql_query(" CREATE TABLE IF NOT EXISTS `$table_name` (
        `bl_id` int(11) NOT NULL AUTO_INCREMENT,
        `bl_long_url` text NOT NULL,
        `bl_short_url` varchar(255) NOT NULL,
        `bl_memo` text NOT NULL,
        `bl_datetime` datetime NOT NULL,
        PRIMARY KEY (`bl_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ", true);
}

// 페이징 설정
$sql_common = " from $table_name ";
$row = sql_fetch(" select count(*) as cnt $sql_common ");
$total_count = $row['cnt'];

$rows = 25;
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) { $page = 1; } // 페이지가 없으면 첫 페이지 (1페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

$sql = " select * $sql_common order by bl_id desc limit $from_record, $rows ";
$result = sql_query($sql);
?>

<div class="local_desc01 local_desc">
    <p>
        긴 URL 주소를 Bit.ly를 이용해 짧은 주소로 변환하고 내역을 관리합니다.
    </p>
</div>

<div class="config_contents" style="margin-bottom:30px;">
    <form name="fbitly" id="fbitly">
        <div class="tbl_frm01 tbl_wrap">
            <table>
                <caption>Bit.ly 주소 변환</caption>
                <colgroup>
                    <col class="grid_4">
                    <col>
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row"><label for="long_url">원본 URL</label></th>
                    <td>
                        <input type="text" name="long_url" id="long_url" required class="required frm_input" size="80" placeholder="https://example.com/very/long/url/path">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="memo">내용(메모)</label></th>
                    <td>
                        <textarea name="memo" id="memo" class="frm_input" style="width:100%; height:60px;" placeholder="URL에 대한 설명을 입력하세요."></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row">단축 도메인</th>
                    <td>
                        <select name="domain" id="domain" class="frm_input">
                            <option value="bit.ly">bit.ly (기본)</option>
                            <option value="link.epiclounge.co.kr" selected>link.epiclounge.co.kr (커스텀)</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">변환 결과</th>
                    <td>
                        <div id="bitly_result" style="font-weight:bold; color:#0055ff; font-size:1.2em; min-height: 30px; display:inline-block; vertical-align:middle;">
                            변환된 주소가 여기에 표시됩니다.
                        </div>
                        <button type="button" id="btn_copy_main" class="btn_02" style="display:none; margin-left:10px;">주소 복사하기</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="btn_confirm01 btn_confirm">
            <input type="submit" value="주소 변환하기" class="btn_submit" accesskey="s">
        </div>
    </form>
</div>

<h2 class="h2_frm">변환 내역 리스트</h2>
<div class="tbl_head01 tbl_wrap">
    <table>
        <caption>변환 내역 리스트</caption>
        <thead>
        <tr>
            <th scope="col">고유번호</th>
            <th scope="col">변환 날짜/시간</th>
            <th scope="col">내용(메모)</th>
            <th scope="col">원본 긴 주소</th>
            <th scope="col">변환 주소</th>
            <th scope="col">관리</th>
        </tr>
        </thead>
        <tbody id="bitly_log_list">
        <?php
        for ($i=0; $row=sql_fetch_array($result); $i++) {
            $bg = 'bg'.($i%2);
        ?>
        <tr class="<?php echo $bg; ?>">
            <td class="td_num"><?php echo $row['bl_id']; ?></td>
            <td class="td_datetime"><?php echo $row['bl_datetime']; ?></td>
            <td style="padding-left:10px;"><?php echo get_text($row['bl_memo']); ?></td>
            <td style="padding-left:10px; font-size:0.9em; color:#666; max-width:300px; word-break:break-all;"><?php echo get_text($row['bl_long_url']); ?></td>
            <td class="td_url">
                <a href="<?php echo $row['bl_short_url']; ?>" target="_blank" class="short_url"><?php echo $row['bl_short_url']; ?></a>
            </td>
            <td class="td_mng td_show">
                <button type="button" class="btn_03 btn_copy_list" data-url="<?php echo $row['bl_short_url']; ?>">복사</button>
            </td>
        </tr>
        <?php
        }
        if ($i == 0)
            echo '<tr><td colspan="6" class="empty_table">내역이 없습니다.</td></tr>';
        ?>
        </tbody>
    </table>
</div>

<?php 
// 페이징 함수 호출 (그누보드 기본 함수 사용)
include_once(G5_LIB_PATH.'/common.lib.php');
echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?page=');
?>

<script>
$(function() {
    // 폼 제출 (변환)
    $("#fbitly").on("submit", function(e) {
        e.preventDefault();

        var long_url = $("#long_url").val().trim();
        var domain = $("#domain").val();
        var memo = $("#memo").val();
        
        if(!long_url) {
            alert("URL을 입력해주세요.");
            return false;
        }

        // Bitly API는 반드시 http:// 또는 https:// 가 포함되어야 합니다.
        if(!long_url.match(/^(http|https):\/\//i)) {
            if(confirm("입력하신 URL에 http:// 또는 https:// 가 빠져있습니다.\nhttps:// 를 자동으로 붙여서 변환할까요?")) {
                long_url = "https://" + long_url;
                $("#long_url").val(long_url);
            } else {
                return false;
            }
        }

        $("#bitly_result").text("변환 중...").css("color", "#666");
        $("#btn_copy_main").hide();

        $.ajax({
            url: "./service_bitly_ajax.php",
            type: "POST",
            data: { 
                long_url: long_url,
                domain: domain,
                memo: memo
            },
            dataType: "json",
            success: function(data) {
                if(data.success) {
                    $("#bitly_result").text(data.short_url).css("color", "#0055ff");
                    $("#btn_copy_main").attr("data-url", data.short_url).show();
                    
                    // 리스트 새로고침 (간단하게 페이지 새로고침 또는 목록 맨 위에 추가 가능)
                    // 여기서는 깔끔하게 페이지를 새로고침하여 최신 내역을 보여줍니다.
                    if(confirm("변환되었습니다. 리스트에서 확인하시겠습니까?")) {
                        location.reload();
                    }
                } else {
                    $("#bitly_result").text("에러: " + data.error).css("color", "#ff0000");
                }
            },
            error: function() {
                $("#bitly_result").text("서버 통신 에러가 발생했습니다.").css("color", "#ff0000");
            }
        });
    });

    // 복사 버튼 이벤트 (메인 결과)
    $(document).on("click", "#btn_copy_main, .btn_copy_list", function() {
        var text = $(this).attr("data-url") || $("#bitly_result").text();
        if(!text || text.indexOf("http") !== 0) return;

        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(text).select();
        document.execCommand("copy");
        $temp.remove();
        alert("주소가 복사되었습니다: " + text);
    });
});
</script>

<?php
include_once('./admin.tail.php');
?>
