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
			  </div>
			  <div class="right_box">
			  	<h4 class="h4">등록 관리</h4>
				<ul class="bu">
					<li>정보 변경 및 수정: 발송된 링크를 통해 가능합니다.</li>
					<li>등록 취소: 고객센터를 통해서만 가능합니다.</li>
				</ul>
			  	<h4 class="h4">고객 센터</h4>
				<ul class="bu">
					<li>문의: 02-326-3701 (평일 09:00-18:00)</li>
				</ul>
			  </div>
			 </div>
			  <ul class="bu">
					<li class="yellow_bl"><em class="em_b_yellow">단체 신청후 개별 참가자가 반드시 별도 등록을 진행해야 등록이 완료됩니다!</em></li>
					<li class="red_bl"><em class="em_b_red">참고 : </em>개별 참가자는 받은 쿠폰번호로 추가 결제 없이 등록 가능합니다.</li>
				</ul>
			
		</div>

		<div class="member_cont_box">
		<h3 class="h3">참가자 정보</h3>
			<form action="" name="" id="">
				<fieldset>
					<table class="team_view_table">
						<thead>
							<tr>
								<th scope="th"></th>
								<th scope="th">연락처<em class="em_red">*</em></th>
								<th scope="th">이메일<em class="em_red">*</em></th>
								<th scope="th">티켓선택<em class="em_red">*</em></th>
							</tr>
						</thead>

						<tbody>
                        <?php
                        $i = 0;
                        $sum_price = 0;
                        while($row = sql_fetch_array($rdata)){
                            $i++;
                            switch ($row["coupon_type"]) {
                                case '25':
                                    $sum_price += 60000;
                                    break;
                                case '26':
                                    $sum_price += 30000;
                                    break;
                                case '25#26':
                                    $sum_price += 30000;
                                    break;
                            }
                            $sum_price += $row["coupon_price"];
                        ?>
                            <tr>
                                <td><?=$i ++ ?></td>
                                <td class="text_left"><?=$row["user_phone"]?></td>
                                <td class="text_left"><?=$row["user_email"]?></td>
                                <td class="text_left"><?=$row["coupon_type"]=="25#26"?"양일권":$row["coupon_type"]."일권"?></td>
                            </tr>
                        <?php
                        }

                        ?>
						</tbody>
					</table>

		
		<span class="bd_line"></span>
		<h3 class="h3">추가 정보</h3>
		  <div class="member_form_box">
			  <div class="member_form_list">
				  <label>회사명<em class="em_red">*</em></label>
					<span class="intext_d"><?=$rdata_once["coupon_name"]?></span>
			  </div>
			  <div class="member_form_list">
				  <label>담당자<em class="em_red">*</em></label>
                  <span class="intext_d"><?=$rdata_once["creator_name"]?></span>
			  </div>

			  <div class="member_form_list">
				  <label>담당자 전화번호<em class="em_red">*</em></label>
                  <span class="intext_d"><?=$rdata_once["creator_phone"]?></span>
			  </div>
			  <div class="member_form_list">
				  <label>결제수단<em class="em_red">*</em></label>
					<span class="intext_d">입금</span>
			  </div>
		  </div>
		<span class="bd_line"></span>
			<h3 class="h3">사업자등록증 업로드<em class="em_red">*</em></h3>
                    <span class="intext_d"><a href="/v3/unrealfest2025/student/<?=$rdata_once["creator_file"]?>" target="_blank"><?=$rdata_once["creator_filename"]?></a></span>
		<span class="bd_line"></span>
			<h3 class="h3">결제 예정금액</h3>
			<span class="intext_d type2"><?=number_format($sum_price)?>원</span>
			
	
		<div class="ft_btn_box ">
			<a href="#n" class="btn_cancle" onclick="fn_modify()" >수정</a>
                      <button type="button" onclick="fn_complete()" name="" id="" class="btn_1">단체 정보 입력 확인</button>
                  </div>
              </fieldset>
          </form>
      </div>
  </div>
  </div>
<?php
include_once "member_footer.php";
?>


      <script>

          function fn_complete(){
              var coupon_key = "<?=$coupon_key?>";
              location.href = "/v3/unrealfest2025/application_team_step3.php?coupon_key="+coupon_key;
          }
          function fn_modify(){
              var coupon_key = "<?=$coupon_key?>";
              location.href = "/v3/unrealfest2025/application_team_step1.php?coupon_key="+coupon_key;
          }
      </script>
<!-- 휴대폰 본인확인 팝업 처리결과 정보 = phone_popup3 에서 값 입력 -->
<form name="" method="post" class="hidden">
    
</form>
</body>

</html>
