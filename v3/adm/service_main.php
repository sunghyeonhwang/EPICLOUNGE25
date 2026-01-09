<?php
$sub_menu = '900210';
include_once ('./_common.php');

auth_check_menu($auth, $sub_menu, 'r');

$g5['title'] = 'Bit.ly 주소 변환 관리';
include_once ('./admin.head.php');

// DB 테이블 생성
$table_name = G5_TABLE_PREFIX . 'bitly_logs';
$table_exists = sql_query(" select 1 from $table_name limit 1 ", false);
if (!$table_exists) {
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
$total_count = isset($row['cnt']) ? $row['cnt'] : 0;

$rows = 25;
$total_page = ceil($total_count / $rows);
if ($page < 1) {
    $page = 1;
}
$from_record = ($page - 1) * $rows;

if ($total_count > 0) {
    $sql = " select * $sql_common order by bl_id desc limit $from_record, $rows ";
    $result = sql_query($sql);
}

// 순번 계산용
$num = $total_count - ($page - 1) * $rows;
?>

<style>
/* Modern Bitly Admin Styles */
.bitly_container { margin: 20px 0; font-family: 'Pretendard', -apple-system, BlinkMacSystemFont, system-ui, Roboto, sans-serif; }
.bitly_card { background: #fff; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.03); padding: 30px; margin-bottom: 30px; border: 1px solid #edf2f7; }
.bitly_card_title { font-size: 20px; font-weight: 700; color: #1a202c; margin-bottom: 25px; display: flex; align-items: center; border-bottom: 2px solid #3498db; padding-bottom: 10px; width: fit-content; }
.bitly_card_title i { margin-right: 10px; color: #3498db; }

.local_desc01 { background: #ebf8ff; border: 1px solid #bee3f8; border-left: 5px solid #3182ce; padding: 18px 25px; border-radius: 8px; margin-bottom: 30px; }
.local_desc01 p { color: #2a4365; font-weight: 500; margin: 0; line-height: 1.6; }

.frm_table { width: 100%; border-collapse: separate; border-spacing: 0 10px; }
.frm_table th { text-align: left; padding: 15px 20px; color: #4a5568; font-weight: 600; width: 220px; vertical-align: top; padding-top: 18px; font-size: 16px; }
.frm_table td { padding: 10px 20px; }

.modern_input { width: 100%; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 16px; color: #000 !important; transition: all 0.2s; background: #fff; box-sizing: border-box; -webkit-appearance: none; -moz-appearance: none; appearance: none; }
input.modern_input { padding: 12px 18px; }
select.modern_input { height: 50px; line-height: 50px; padding: 0 45px 0 18px; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%234a5568' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 15px center; background-size: 20px; }
.modern_input option { color: #000; background: #fff; padding: 10px; }
.modern_input:focus { border-color: #3498db; background: #fff; box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1); outline: none; }
.modern_textarea { min-height: 100px; resize: vertical; }

.result_card { background: #f0f7ff; border: 2px solid #3182ce; border-radius: 10px; padding: 20px; margin-top: 20px; display: none; }
.result_flex { display: flex; align-items: center; justify-content: space-between; }
.result_label { font-weight: 800; color: #2c5282; font-size: 16px; text-transform: uppercase; margin-bottom: 8px; display: block; }
.result_url { font-size: 22px; font-weight: 700; color: #2b6cb0; text-decoration: none; }
.btn_copy_big { background: #3182ce; color: #fff; border: none; padding: 10px 25px; border-radius: 6px; font-weight: 700; cursor: pointer; transition: 0.2s; }
.btn_copy_big:hover { background: #2c5282; }

.history_card { padding: 0; overflow: hidden; }
.history_header { padding: 25px 30px; border-bottom: 1px solid #edf2f7; display: flex; justify-content: space-between; align-items: center; }
.history_header h2 { margin: 0; font-size: 20px; font-weight: 700; color: #1a202c; }

.modern_table { width: 100%; border-collapse: collapse; }
.modern_table th { background: #f7fafc; padding: 15px 20px; font-size: 15px; font-weight: 700; color: #4a5568; text-transform: uppercase; border-bottom: 2px solid #edf2f7; text-align: left; }
.modern_table td { padding: 15px 20px; font-size: 16px; border-bottom: 1px solid #edf2f7; vertical-align: middle; }
.modern_table tr:hover { background: #f8fafc; }

.td_num { width: 60px; color: #a0aec0; text-align: center; }
.td_datetime { width: 160px; color: #718096; font-size: 14px; }
.td_short { font-weight: 700; color: #3182ce; }
.td_memo { font-weight: 600; color: #2d3748; }
.td_long { color: #718096; font-size: 14px; max-width: 300px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }

.btn_mng { padding: 6px 14px; border-radius: 4px; font-size: 14px; font-weight: 600; cursor: pointer; border: 1px solid transparent; transition: 0.2s; }
.btn_copy_small { background: #ebf8ff; color: #3182ce; border-color: #bee3f8; }
.btn_copy_small:hover { background: #3182ce; color: #fff; }
.btn_del_small { background: #fff5f5; color: #e53e3e; border-color: #feb2b2; }
.btn_del_small:hover { background: #e53e3e; color: #fff; }

.empty_state { padding: 60px; text-align: center; color: #a0aec0; }
.empty_state i { font-size: 40px; margin-bottom: 15px; display: block; opacity: 0.3; }

.btn_submit_block { background: #3182ce; color: #fff; border: none; padding: 14px 40px; border-radius: 8px; font-size: 18px; font-weight: 700; cursor: pointer; transition: 0.2s; width: 100%; margin-top: 10px; }
.btn_submit_block:hover { background: #2b6cb0; box-shadow: 0 4px 12px rgba(49, 130, 206, 0.2); }
</style>

<div class="bitly_container">
    <div class="local_desc01">
        <p><i class="fa fa-info-circle"></i> <b>정확한 분석을 위해 단축 URL을 사용하세요.</b><br>긴 원본 링크를 깔끔한 단축 주소로 변환하여 배포하고, 추후 관리 및 트래킹에 활용할 수 있습니다.</p>
    </div>

    <!-- 변환 폼 카드 -->
    <div class="bitly_card">
        <div class="bitly_card_title"><i class="fa fa-link"></i> 단축 주소 생성</div>
        
        <form name="fbitly" id="fbitly">
            <table class="frm_table">
                <tbody>
                <tr>
                    <th scope="row"><label for="long_url">원본 긴 URL (Long URL)</label></th>
                    <td>
                        <input type="text" name="long_url" id="long_url" required class="modern_input" placeholder="https://example.com/very/long/url/path">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="memo">관리용 메모 (Memo)</label></th>
                    <td>
                        <textarea name="memo" id="memo" class="modern_input modern_textarea" placeholder="이 링크의 용도나 배포처를 기록하세요."></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="domain">변환 도메인 선택</label></th>
                    <td>
                        <select name="domain" id="domain" class="modern_input">
                            <option value="link.epiclounge.co.kr" selected>link.epiclounge.co.kr (Branded)</option>
                            <option value="bit.ly">bit.ly (Standard)</option>
                        </select>
                    </td>
                </tr>
                </tbody>
            </table>

            <div style="max-width:300px; margin: 0 auto;">
                <input type="submit" value="단축 URL 생성하기" class="btn_submit_block">
            </div>
        </form>

        <!-- 결과 알림 영역 -->
        <div id="tr_result" class="result_card">
            <span class="result_label"><i class="fa fa-check-circle"></i> 변환이 완료되었습니다!</span>
            <div class="result_flex">
                <span id="bitly_result" class="result_url"></span>
                <button type="button" id="btn_copy_main" class="btn_copy_big">URL 복사하기</button>
            </div>
        </div>
    </div>

    <!-- 내역 카드 -->
    <div class="bitly_card history_card">
        <div class="history_header">
            <h2><i class="fa fa-history"></i> 변환 내역 목록</h2>
            <div style="font-size:15px; color:#718096;">Total: <b><?php echo number_format($total_count); ?></b> items</div>
        </div>
        
        <div class="tbl_wrap">
            <table class="modern_table">
                <thead>
                <tr>
                    <th scope="col" style="text-align:center;">No</th>
                    <th scope="col">생성 일시</th>
                    <th scope="col">단축 주소</th>
                    <th scope="col">메모</th>
                    <th scope="col">원본 주소</th>
                    <th scope="col" style="text-align:center;">관리</th>
                </tr>
                </thead>
                <tbody id="bitly_log_list">
                <?php
                $i = 0;
                if (isset($result) && $result) {
                    for ($i = 0; $row = sql_fetch_array($result); $i++) {
                        ?>
                <tr data-id="<?php echo $row['bl_id']; ?>">
                    <td class="td_num"><?php echo $num--; ?></td>
                    <td class="td_datetime"><?php echo date("Y.m.d H:i:s", strtotime($row['bl_datetime'])); ?></td>
                    <td class="td_short">
                        <a href="<?php echo $row['bl_short_url']; ?>" target="_blank"><?php echo $row['bl_short_url']; ?></a>
                    </td>
                    <td class="td_memo"><?php echo get_text($row['bl_memo']); ?></td>
                    <td><div class="td_long" title="<?php echo get_text($row['bl_long_url']); ?>"><?php echo get_text($row['bl_long_url']); ?></div></td>
                    <td style="text-align:center; white-space:nowrap;">
                        <button type="button" class="btn_mng btn_copy_small btn_copy_list" data-url="<?php echo $row['bl_short_url']; ?>">복사</button>
                        <button type="button" class="btn_mng btn_del_small btn_del_list" data-id="<?php echo $row['bl_id']; ?>">삭제</button>
                    </td>
                </tr>
                <?php
                    }
                }

                if ($i == 0)
                    echo '<tr><td colspan="6" class="empty_state"><i class="fa fa-folder-open-o"></i> 변환된 내역이 아직 없습니다.</td></tr>';
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="paging_container" style="margin-bottom:50px;">
        <?php
        include_once (G5_LIB_PATH . '/common.lib.php');
        echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'] . '?page=');
        ?>
    </div>
</div>

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

        if(!long_url.match(/^(http|https):\/\//i)) {
            if(confirm("입력하신 URL에 http:// 또는 https:// 가 빠져있습니다.\nhttps:// 를 자동으로 붙여서 변환할까요?")) {
                long_url = "https://" + long_url;
                $("#long_url").val(long_url);
            } else {
                return false;
            }
        }

        $(".btn_submit_block").val("변환 요청 중...").prop("disabled", true);
        $("#tr_result").hide();

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
                $(".btn_submit_block").val("단축 URL 생성하기").prop("disabled", false);
                if(data.success) {
                    $("#bitly_result").text(data.short_url);
                    $("#btn_copy_main").attr("data-url", data.short_url);
                    $("#tr_result").slideDown();
                    
                    // 리스트 상단에 즉시 추가
                    var now = new Date();
                    var datetime = now.getFullYear() + "." + ("0" + (now.getMonth() + 1)).slice(-2) + "." + ("0" + now.getDate()).slice(-2) + " " + ("0" + now.getHours()).slice(-2) + ":" + ("0" + now.getMinutes()).slice(-2) + ":" + ("0" + now.getSeconds()).slice(-2);
                    
                    var new_row = '<tr data-id="' + data.bl_id + '">' +
                        '<td class="td_num">New</td>' +
                        '<td class="td_datetime">' + datetime + '</td>' +
                        '<td class="td_short"><a href="' + data.short_url + '" target="_blank">' + data.short_url + '</a></td>' +
                        '<td class="td_memo">' + (memo ? memo.replace(/</g, "&lt;").replace(/>/g, "&gt;") : "") + '</td>' +
                        '<td><div class="td_long">' + long_url.replace(/</g, "&lt;").replace(/>/g, "&gt;") + '</div></td>' +
                        '<td style="text-align:center; white-space:nowrap;">' + 
                        '<button type="button" class="btn_mng btn_copy_small btn_copy_list" data-url="' + data.short_url + '">복사</button> ' +
                        '<button type="button" class="btn_mng btn_del_small btn_del_list" data-id="' + data.bl_id + '">삭제</button>' +
                        '</td>' +
                        '</tr>';
                    
                    $("#bitly_log_list").prepend(new_row);
                    $(".empty_state").closest("tr").remove();
                    
                    // 폼 초기화
                    $("#long_url, #memo").val("");
                } else {
                    alert("에러: " + data.error);
                }
            },
            error: function() {
                $(".btn_submit_block").val("단축 URL 생성하기").prop("disabled", false);
                alert("서버 통신 에러가 발생했습니다.");
            }
        });
    });

    // 삭제 버튼 클릭
    $(document).on("click", ".btn_del_list", function() {
        if(!confirm("정말 이 내역을 삭제하시겠습니까?")) return;

        var bl_id = $(this).data("id");
        var $tr = $(this).closest("tr");

        $.ajax({
            url: "./service_bitly_ajax.php",
            type: "POST",
            data: { mode: "delete", bl_id: bl_id },
            dataType: "json",
            success: function(data) {
                if(data.success) {
                    $tr.fadeOut(function() { $(this).remove(); });
                } else {
                    alert("에러: " + data.error);
                }
            },
            error: function() {
                alert("서버 통신 중 에러가 발생했습니다.");
            }
        });
    });

    // 복사 버튼 이벤트
    $(document).on("click", "#btn_copy_main, .btn_copy_list", function() {
        var text = $(this).attr("data-url") || $("#bitly_result").text();
        if(!text || text.indexOf("http") !== 0) return;

        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(text).select();
        document.execCommand("copy");
        $temp.remove();
        
        // 버튼 텍스트 일시적 변경 피드백
        var $btn = $(this);
        var originalText = $btn.text();
        $btn.text("복사됨!").css("background", "#276749").css("color", "#fff");
        setTimeout(function() {
            $btn.text(originalText).css("background", "").css("color", "");
        }, 1500);
    });
});
</script>

<?php
include_once ('./admin.tail.php');
?>
