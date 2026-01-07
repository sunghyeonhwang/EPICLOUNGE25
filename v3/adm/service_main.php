<?php
$sub_menu = '900100';
include_once('./_common.php');

auth_check_menu($auth, $sub_menu, 'r');

$g5['title'] = 'Bit.ly 주소 변환기';
include_once('./admin.head.php');

// 비틀리 토큰을 config.php 등에 저장해두고 사용하시는 것이 좋습니다.
// 우선은 아래 변수에 직접 입력하여 테스트해보세요.
$bitly_token = ''; 
?>

<div class="local_desc01 local_desc">
    <p>
        긴 URL 주소를 Bit.ly를 이용해 짧은 주소로 변환합니다.<br>
        <strong>참고:</strong> 이 기능을 사용하려면 Bit.ly Generic Access Token이 필요합니다.
    </p>
</div>

<div class="config_contents">
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
                    <th scope="row">변환 결과</th>
                    <td>
                        <div id="bitly_result" style="font-weight:bold; color:#0055ff; font-size:1.2em; min-height: 30px;">
                            변환된 주소가 여기에 표시됩니다.
                        </div>
                        <button type="button" id="btn_copy" class="btn_02" style="display:none; margin-top:10px;">주소 복사하기</button>
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

<script>
$(function() {
    $("#fbitly").on("submit", function(e) {
        e.preventDefault();

        var long_url = $("#long_url").val();
        if(!long_url) {
            alert("URL을 입력해주세요.");
            return false;
        }

        $("#bitly_result").text("변환 중...").css("color", "#666");
        $("#btn_copy").hide();

        $.ajax({
            url: "./service_bitly_ajax.php",
            type: "POST",
            data: { long_url: long_url },
            dataType: "json",
            success: function(data) {
                if(data.success) {
                    $("#bitly_result").text(data.short_url).css("color", "#0055ff");
                    $("#btn_copy").show();
                } else {
                    $("#bitly_result").text("에러: " + data.error).css("color", "#ff0000");
                }
            },
            error: function() {
                $("#bitly_result").text("서버 통신 에러가 발생했습니다.").css("color", "#ff0000");
            }
        });
    });

    $("#btn_copy").on("click", function() {
        var text = $("#bitly_result").text();
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(text).select();
        document.execCommand("copy");
        $temp.remove();
        alert("주소가 복사되었습니다.");
    });
});
</script>

<?php
include_once('./admin.tail.php');
?>
