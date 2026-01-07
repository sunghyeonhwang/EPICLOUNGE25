<?php
include_once "../common.php";
include_once "member_header.php";

$coupon_key = $_GET['coupon_key'];
$rdata = sql_query("select * from cb_unreal_2025_event2_coupon where creator_gcode='{$coupon_key}'");
$rdata_once = sql_fetch("select * from cb_unreal_2025_event2_coupon where creator_gcode='{$coupon_key}' limit 1");
?>
<script type="text/javascript">
    //    document.getElementById('header_list_1').className = "active";

	//	var body = document.body;
	//	body.classList.add("modal_on");

</script>
  <div class="memeber_container">
      <div class="wrap">
       
	   <div class="member_title_box">
			<h3 class="title"><img src="/v3/unrealfest2025/images/member_top_text.svg" /></h3>
		</div>
		<div class="team_add_box1">
			  <h3 class="h3">단체 등록하기</h3>
			  <div class="lr_box">
			 <div class="left_box">
         <h4 class="h4">결제 후 안내</h4>
         <ul class="bu">
           <li>결제 확인 후 등록된 전화번호/이메일로 안내 문자와 쿠폰번호가 발송됩니다.</li>
           <li>양일권, 25일권, 26일권 쿠폰이 상이하오니 확인 부탁드립니다.</li>
         </ul>
         <ul class="bu">
           <li class="yellow_bl"><em class="em_b_yellow">단체 신청후 개별 참가자가 반드시 별도 등록을 진행해야 등록이 완료됩니다!</em></li>
           <li class="red_bl"><em class="em_b_red">참고 : </em>개별 참가자는 받은 쿠폰번호로 추가 결제 없이 등록 가능합니다.</li>
         </ul>
         
       </div>
			  <div class="right_box">
			  	<h4 class="h4">등록 관리</h4>
                <ul class="bu">
                  <li>정보 변경 및 수정: 발송된 링크를 통해 가능합니다.</li>
                  <li>모든 취소는 고객센터를 통한 접수만 가능하며, 얼리버드 50% 할인 티켓의 경우 해당 기간 내에만 취소하실 수 있습니다.</li>
                </ul>
			  	<h4 class="h4">고객 센터</h4>
				<ul class="bu">
					<li>문의: 02-326-3701 (평일 09:00-18:00)</li>
				</ul>
        
			  </div>
		  </div>
        
		</div>

		<div class="member_cont_box">
		<h3 class="h3">참가자 정보</h3>
			<form action="#" name="frmMember" id="frmMember" enctype="multipart/form-data">
				<fieldset>
                    <input type="hidden" name="coupon_key" value="<?=$coupon_key?>" />
					<table class="team_view_table">
						<thead>
							<tr>
								<th scope="th"></th>
								<th scope="th">연락처<em class="em_red">*</em></th>
								<th scope="th">이메일<em class="em_red">*</em></th>
								<th scope="th">티켓선택<em class="em_red">*</em></th>
								<th scope="th">&nbsp; 삭제</th>
							</tr>
						</thead>

						<tbody>
                        <?php
                        $i = 0;
                        $sum_price = 0;
                        while($row = sql_fetch_array($rdata)){
                            $i++;
                            ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><input type="text" class="intext type_phone" name="team_member_ph[]"  id="team_member_ph_1" placeholder="휴대전화" value="<?=$row["user_phone"]?>"/></td>
                                <td><input type="text" class="intext type_email" name="team_member_mail[]"  id="team_member_mail_1" placeholder="이메일을 정확히 입력해 주세요" value="<?=$row["user_email"]?>"/></td>
                                <td>
                                    <select class="intext sel_date" id="team_member_tic_1" name="team_member_date[]">
                                        <option value="" class="sel_n">양일권, 25일권, 26일권 선택</option>
                                        <option value="25#26" <?=$row["coupon_type"] == "25#26"?"selected=true":""?>>양일권</option>
                                        <option value="25" <?=$row["coupon_type"] == "25"?"selected=true":""?>>25일권</option>
                                        <option value="26" <?=$row["coupon_type"] == "26"?"selected=true":""?>>26일권</option>
                                    </select>
                                </td>
                                <td>
                                </td>
                            </tr>

                            <?php
                        }

                        ?>
                        <?
                        if($i == 0){
                            ?>

                            <tr>
                                <td>1</td>
                                <td><input type="text" class="intext type_phone" name="team_member_ph[]"  id="team_member_ph_1" placeholder="휴대전화" /></td>
                                <td><input type="text" class="intext type_email" name="team_member_mail[]"  id="team_member_mail_1" placeholder="이메일을 정확히 입력해 주세요" /></td>
                                <td>
                                    <select class="intext sel_date" id="team_member_tic_1" name="team_member_date[]">
                                        <option value="" class="sel_n">양일권, 25일권, 26일권 선택</option>
                                        <option value="25#26">양일권</option>
                                        <option value="25">25일권</option>
                                        <option value="26">26일권</option>
                                    </select>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <?
                        }
                        ?>

						</tbody>
					</table>
					<button type="button" class="add_btn">인원추가 (최대 50명)</button>
		  <script>
$(document).ready(function () {
    $('.type_phone').on('input', function () {
        let value = $(this).val().replace(/[^0-9]/g, '');
        if (value.length > 3 && value.length <= 7) {
            value = value.substr(0, 3) + '-' + value.substr(3);
        } else if (value.length > 7) {
            value = value.substr(0, 3) + '-' + value.substr(3, 4) + '-' + value.substr(7);
        }
        $(this).val(value);
    });
    const maxRows = 50;

	// 번호 다시 매기기
	function updateRowNumbers() {
		$('table tbody tr').each(function (index) {
			$(this).find('td:first').text(index + 1);

			// 각 input/select의 id도 업데이트
			$(this).find('input[id^="team_member_ph_"]').attr('id', 'team_member_ph_' + (index + 1));
			$(this).find('input[id^="team_member_mail_"]').attr('id', 'team_member_mail_' + (index + 1));
			$(this).find('select[id^="team_member_tic_"]').attr('id', 'team_member_tic_' + (index + 1));
		});
	}

	// 삭제 버튼 이벤트
	$('table').on('click', '.del_btn', function () {
		$(this).closest('tr').remove();
		updateRowNumbers();
	});

	// 추가 버튼 이벤트
	$('.add_btn').click(function () {
		const rowCount = $('table tbody tr').length;
		if (rowCount >= maxRows) {
			alert('최대 50명까지만 추가할 수 있습니다.');
			return;
		}

		const newIndex = rowCount + 1;
		const newRow = `
			<tr>
				<td>${newIndex}</td>
				<td><input type="text" class="intext type_phone" name="team_member_ph[]" id="team_member_ph_${newIndex}" placeholder="휴대전화" /></td>
				<td><input type="text" class="intext type_email" name="team_member_mail[]"  id="team_member_mail_${newIndex}" placeholder="이메일을 정확히 입력해 주세요" /></td>
				<td>
					<select class="intext sel_date" name="team_member_date[]" id="team_member_tic_${newIndex}">
						<option value="" class="sel_n">양일권, 25일권, 26일권 선택</option>
						<option value="25#26">양일권</option>
						<option value="25">25일권</option>
						<option value="26">26일권</option>
					</select>
				</td>
				<td><button type="button" class="del_btn">삭제</button></td>
			</tr>
		`;

		$('table tbody').append(newRow);


        $('.type_phone').on('input', function () {
            let value = $(this).val().replace(/[^0-9]/g, '');
            if (value.length > 3 && value.length <= 7) {
                value = value.substr(0, 3) + '-' + value.substr(3);
            } else if (value.length > 7) {
                value = value.substr(0, 3) + '-' + value.substr(3, 4) + '-' + value.substr(7);
            }
            $(this).val(value);
        });
	});
});
</script>
		
		<span class="bd_line"></span>
		<h3 class="h3">추가 정보</h3>
		  <div class="member_form_box">
			  <div class="member_form_list">
				  <label for="apply_company_name">회사명<em class="em_red">*</em></label>
				  <input type="text" class="intext" name="apply_company_name" id="apply_company_name" placeholder="회사명을 입력해주세요." value="<?=$rdata_once["coupon_name"]?>"   />
			  </div>
			  <div class="member_form_list">
				  <label for="apply_user_name">담당자<em class="em_red">*</em></label>
                  <input type="text" class="intext " name="apply_user_name" id="apply_user_name"
                         value="<?=$rdata_once["creator_name"]?>" required placeholder="이름을 입력해주세요."/>
              </div>

              <div class="member_form_list">
                  <label for="apply_user_phone">담당자 전화번호<em class="em_red">*</em></label>
                  <input type="text" class="intext type_phone" name="apply_user_phone" id="apply_user_phone"
                         value="<?=$rdata_once["creator_phone"]?>" placeholder="전화번호를 정확히 입력해주세요."/>
              </div>
			  <div class="member_form_list">
				  <label for="apply_user_phone">결제수단<em class="em_red">*</em></label>
					<span class="intext_d">입금</span>
			  </div>
		  </div>
		<span class="bd_line"></span>
			<h3 class="h3">사업자등록증 업로드<em class="em_red">*</em></h3>
			  <div class="member_form_box">
				  <div class="member_form_file">
						<span class="file_name">Max 2MB, 이미지 파일</span>
						<input type="file" id="team_file_1" name="team_file_1" />
						<label for="team_file_1">파일추가</label>
				  </div>
				</div>
				<script>
				$(document).ready(function () {
					$('#team_file_1').on('change', function () {
						const fileName = $(this).prop('files')[0]?.name || '파일이 선택되지 않았습니다.';
						$(this).siblings('.file_name').text(fileName);
					});
				});
				</script>


				
		<span class="bd_line"></span>
		<h3 class="h3">약관동의</h3>
		<div class="memeber_agree">
			<ul>
				<li><input type="checkbox" id="ch_agree1" name="ch_agree1" /><label for="ch_agree1">단체등록 약관에 동의합니다.</label></li>
			</ul>
		  </div>
		<div class="ft_btn_box ">
			<a href="#n" class="btn_cancle">이전</a>
                      <button type="button" onclick="fn_submit()" name="" id="" class="btn_1">등록하기</button>
                  </div>
              </fieldset>
          </form>
      </div>
  </div>
  </div>
<?php
include_once "member_footer.php";
?>


<!-- 휴대폰 본인확인 팝업 처리결과 정보 = phone_popup3 에서 값 입력 -->
<form name="" method="post" class="hidden">
    
</form>
<script>
    function fn_submit(){
        if ($('.sel_date').filter(function () {
            return this.value === "";
        }).length > 0) {
            alert("티켓을 선택해주세요.");
            return false;
        }

        if (!$('#apply_user_name').val() || !$('#apply_company_name').val() || !$('#apply_user_phone').val()) {
            alert("담당자 정보를 모두 입력해주세요.");
            return false;
        }

        const phoneRegex = /^01[016789]-?[0-9]{3,4}-?[0-9]{4}$/;
        const invalidPhoneNumbers = $('.type_phone').filter(function () {
            return !phoneRegex.test($(this).val().replace(/-/g, ''));
        });

        if (invalidPhoneNumbers.length > 0) {
            alert("올바른 휴대폰 번호를 입력해주세요.");
            invalidPhoneNumbers.first().focus();
            return false;
        }

        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        const invalidEmails = $('.type_email').filter(function () {
            return !emailRegex.test($(this).val());
        });

        if (invalidEmails.length > 0) {
            alert("올바른 이메일 주소를 입력해주세요.");
            invalidEmails.first().focus();
            return false;
        }

        if (!$('#ch_agree1').is(':checked')) {
            alert("단체등록 약관에 동의해주세요.");
            return false;
        }

        if (!$('#team_file_1').get(0).files[0]) {
            alert("사업자등록증을 업로드해주세요.");
            return false;
        }

        const allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'];
        const fileName = $('#team_file_1').get(0).files[0].name;
        const fileExtension = fileName.split('.').pop().toLowerCase();

        if (!allowedExtensions.includes(fileExtension)) {
            alert("허용된 파일 형식이 아닙니다.\n다음 확장자만 등록 가능합니다: " + allowedExtensions.join(', '));
            return false;
        }

        const fileSize = $('#team_file_1').get(0).files[0].size;
        const maxSize = 10 * 1024 * 1024; // 10MB in bytes
        if (fileSize > maxSize) {
            alert("파일 크기는 10MB를 초과할 수 없습니다.");
            return false;
        }


        const formData = new FormData(document.getElementById('frmMember'));

        $.ajax({
            url: 'application_team_step1_proc.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (response) {
                try {
                    if (response.result === "success") {
                        window.location.href = 'application_team_step2.php?coupon_key=' + response.coupon_serial;
                    } else {
                        alert(response.message || '처리 중 오류가 발생했습니다.');
                    }
                } catch (e) {
                    console.error('JSON parsing error:', e);
                    alert('데이터 처리 중 오류가 발생했습니다.');
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', status, error);
                alert('서버 통신 중 오류가 발생했습니다.');
            }
        });
    }
</script>
</body>

</html>
