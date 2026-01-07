<?php
include_once "../common.php";
include_once "member_header.php";
$coupon_key = $_GET['coupon_key'];
$rdata = sql_query("select * from cb_unreal_2025_event2_coupon where creator_gcode='{$coupon_key}'");
$cnt = sql_fetch("select count(*)  cnt from cb_unreal_2025_event2_coupon where creator_gcode='{$coupon_key}'");
$rdata_once = sql_fetch("select * from cb_unreal_2025_event2_coupon where creator_gcode='{$coupon_key}' limit 1");
//ini_set('display_errors', 1);


$current_time = new DateTime();
$target_time = new DateTime('2025-07-23 23:59:59');

if ($current_time <= $target_time) {
    // Before or equal to target time (2025-07-23 23:59:59)
    $is_early_bird = "Y";
} else {
    // After target time
    $is_early_bird = "N";
}

if($_SERVER["REMOTE_ADDR"] == "59.26.254.32"){
    //$is_early_bird = "N";
}

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
			<div class="member_team_step3">
				<strong><em class="em_b_purple"><?=$rdata_once["creator_name"]?></em>님, 단체 등록 신청이 완료되었습니다.</strong><br />
				입금 완료 후, 등록하신<em class="em_b_purple"><?=($cnt["cnt"])?>명</em>의 참가자에게 개별 문자로 등록 링크와 쿠폰 번호가 발송됩니다.<br />각 참가자는 해당 링크에 접속해 정보를 입력해야 등록이 최종 완료되니, 이 점 유의해 주세요.			</div>
		<span class="bd_line"></span>
		<h3 class="h3">입금정보</h3>
            <span class="intext_d type2">국민은행: 989837-00-004185 (주)그리프</span>
	
		<span class="bd_line"></span>
			<h3 class="h3">결제 예정금액</h3>
            <?php
            $i = 0;
            $sum_price = 0;
            while($row = sql_fetch_array($rdata)) {
                $i++;
                switch ($row["coupon_type"]) {
                    case '25':
                        if($is_early_bird == "Y"){
                            $sum_price += 30000;
                        }else if($is_early_bird == "N" ){
                            $sum_price += 60000;
                        }
                        break;
                    case '26':
                        if($is_early_bird == "Y"){
                            $sum_price += 30000;
                        }else if($is_early_bird == "N" ){
                            $sum_price += 60000;
                        }
                        break;
                    case '25#26':
                        if($is_early_bird == "Y"){
                            $sum_price += 60000;
                        }else if($is_early_bird == "N" ){
                            $sum_price += 120000;
                        }
                        break;
                }
            $sum_price += $row["coupon_price"];
            }
            ?>
			<span class="intext_d type2"><?=number_format($sum_price)?>원</span>


            <script>
                function fn_move_main(){
                    location.href = "https://epiclounge.co.kr/v3/unrealfest2025/index.html";
                }
            </script>
		<div class="ft_btn_box type2">
            <button type="button" onclick="fn_move_main()"  name="" id="" class="btn_1" />확인</button>
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
</body>

</html>
