<?php
$apply_user_email = $_POST['inputEmail'];
$apply_user_phone = $_POST['apply_user_phone'];
$mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");

$sql = "select count(*) from cb_unreal_2025_event2_apply where apply_user_email = '$apply_user_email' limit 1";
$result = $mysqli -> query($sql);
$obj = $result -> fetch_array();
if(!$obj[0]['count']){
  echo '<script type="text/javascript">';
  echo " alert('등록되지 않은 메일입니다.'); history.go(-1);";
  echo '</script>';
  exit();
};

$sql = "select count(*) from cb_unreal_2025_event2_apply where apply_user_phone = '$apply_user_phone' limit 1";
$result = $mysqli -> query($sql);
$obj = $result -> fetch_array();
if(!$obj[0]['count']){
  echo '<script type="text/javascript">';
  echo " alert('등록되지 않은 연락처입니다.'); history.go(-1);";
  echo '</script>';
  exit();
};

$sql = "select 
*
from cb_unreal_2025_event2_apply where apply_user_email = '$apply_user_email' and apply_user_phone = '$apply_user_phone' limit 1";
$result = $mysqli -> query($sql);
$obj = $result -> fetch_array();
if(count($obj[0])){
}else{
  echo '<script type="text/javascript">';
  echo " alert('이메일 혹은 전화번호를 확인해주세요.'); history.go(-1);";
  echo '</script>';
  exit();
}

$mysqli -> close();

?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <title>에픽라운지</title>

  <!-- CSS -->


    <link rel="stylesheet" href="../assets/css/nice-select.css">
  <link rel="stylesheet" href="../assets/css/event_start24.css">
    <link rel="stylesheet" href="../assets/css/font_0626.css">

  <!-- JS -->
  <script src="../assets/js/jquery-1.7.2.min.js"></script>
  <script src="../assets/js/jquery.nice-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

  <!--[if lt IE 9]>
  <script src="../assets/js/html5shiv.js"></script>
  <![endif]-->

  <!--[if IE 9]>
  <link rel="stylesheet" href="../assets/js/ie9.css">
  <![endif]-->

</head>

<body>
  <header class="header">
    <div class="inner-wrap">
      <div class="logo">
<a href="https://epiclounge.co.kr/start_lsu2024.php"><span class="blind">로고</span></a>
      </div>
      <div class="confirm">
      <!--  <p>이미 등록을 하셨나요?</p>
        <div class="btn-group">
          <a href="application_confirm.html" class="md sky">등록 확인</a>-->
        </div>
      </div>
    </div>
  </header>
  
  <div class="container modify">
      <h1 class="event-title"><img src="/assets/img/event_0626/top_logo.svg" alt="시작해요 언리얼 UEFN" /></h1>
      <div class="contents-wrap">
      <div class="content-head pd">
        <div class="info-text"><span>등록정보</span></div>
      </div>
      <form id="login-form" name="login-form" action="findApplyByEmail.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="mode" value="modify" />
        <input type="hidden" name="apply_no" value="<?=$obj['apply_no']?>" />
        <div class="content-box">
            <!--<div class="section">
                <h2 class="section-title">선택티켓</h2>
                <div class="form-wrap">
                    <?php if ($obj['team_yn'] == "Y"){ ?>
                        <div class="top_ticket team_ticket">
                            <div class="ticket_wrap">
                                <div class="team_ticket_1"><span>오프라인+온라인</span></div>
                                <div class="team_ticket_2">단체등록</div>
                                <div class="team_ticket_3">* 단체 등록 신청서 내에 기재된 정보와 입력 정보가 상이한 경우,<br />등록은 완료되었을지라도 오프라인 행사에 참여하실 수 없습니다.</div>
                            </div>
                        </div>
                    <?php }else{ ?>
                        <ul>
                            <li>
                                <?php if($obj["free_yn"] == "Y"){ ?>

                                    <div class="top_ticket free_ticket">
                                        <div class="ticket_wrap">
                                            <div class="free_ticket_1"><span>온라인</span></div>
                                            <div class="free_ticket_2">FREE</div>
                                        </div>
                                    </div>
                                <?}else{?>

                                    <div class="top_ticket price_ticket">
                                        <div class="ticket_wrap">
                                            <div class="price_ticket_1"><span>오프라인+온라인</span></div>
                                            <div class="price_ticket_2">30,000원</div>
                                            <div class="price_ticket_3">60,000</div>
                                            <div class="price_ticket_4">*얼리버드 특별 50% 할인가(~8월6일까지)</div>
                                        </div>
                                    </div>
                                <?}?>
                            </li>
                        </ul>
                    <?php } ?>
					<div class="ticket_no_modi_text"><p>*본인 인증 정보는 수정할 수 없습니다.</p></div>
                </div>
            </div>-->
          <div class="section">
            <h2 class="section-title">기본 정보</h2>
            <div class="form-wrap">
              <ul>
                <li>
                  <h3><span class="red-dot">이름</span></h3>
                  <div class="wrap">
                      <?=$obj['apply_user_name']?>
                  </div>
                </li>
                <li>
                  <h3><span class="red-dot">이메일</span></h3>
                  <div class="wrap">
                    <input type="text" id="inputEmail" name="inputEmail" placeholder="이메일을 입력해 주세요." value="<?=$obj['apply_user_email']?>">
                  </div>
                </li>
                <li>
                  <h3><span class="red-dot">연락처</span></h3>
                  <div class="wrap">
                      <?=$obj['apply_user_phone']?>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="section">
            <h2 class="section-title">추가 정보</h2>
            <div class="form-wrap">
              <ul>
                <li>
                  <h3><span class="red-dot">소속</span></h3>
                  <div class="wrap">
                    <select name="apply_user_job" id="apply_user_job">
                      <option><?=$obj['apply_user_job']?></option>
                      <option>직장인</option>
                      <option>학생/교육기관</option>
                      <option>인디/프리랜서</option>
                      <option>기타</option>
                    </select>
                  </div>
                </li>
                <li class="select-category office <?php if($obj['apply_user_job'] == '직장인') { echo active; }?>">
                  <h3><span class="red-dot">회사명</span></h3>
                  <div class="wrap">
                    <input type="text" name="apply_user_company1" placeholder="회사명을 입력해 주세요." value="<?php if($obj['apply_user_job'] == '직장인') { echo $obj['apply_user_company']; }?>">
                  </div>
                </li>
                <li class="select-category office <?php if($obj['apply_user_job'] == '직장인') { echo active; }?>">
                  <h3><span class="red-dot">부서</span></h3>
                  <div class="wrap">
                    <input type="text" name="apply_user_depart1" placeholder="부서를 입력해 주세요." value="<?php if($obj['apply_user_job'] == '직장인') { echo $obj['apply_user_depart']; }?>">
                  </div>
                </li>
                <li class="select-category office <?php if($obj['apply_user_job'] == '직장인') { echo active; }?>">
                  <h3><span class="red-dot">직무</span></h3>
                  <div class="wrap">
                    <select name="apply_user_grade1" id="apply_user_grade">
                      <?php if($obj['apply_user_job'] == '직장인') { ?>
                      <option><?=$obj['apply_user_grade']?></option>
                      <?php } ?>
                      <option value=''>선택</option>
                      <option>비주얼아트</option>
                      <option>프로그래밍</option>
                      <option>프로덕션</option>
                      <option>엔지니어링</option>
                      <option>설계</option>
                      <option>기획</option>
                      <option>R&amp;D</option>
                      <option>IT</option>
                      <option>감독/PD</option>
                      <option>비즈니스/마케팅</option>
                      <option>C-level</option>
                      <option>기타</option>
                    </select>
                  </div>
                </li>
                <li class="select-category professor <?php if($obj['apply_user_job'] == '학생/교육기관') { echo active; }?>">
                  <h3>학교/기관</h3>
                  <div class="wrap">
                    <input type="text" name="apply_user_company3" placeholder="학교/기관" value="<?php if($obj['apply_user_job'] == '학생/교육기관') { echo $obj['apply_user_company']; }?>">
                  </div>
                </li>
                <li class="select-category professor <?php if($obj['apply_user_job'] == '학생/교육기관') { echo active; }?>">
                  <h3>학과/분야</h3>
                  <div class="wrap">
                    <input type="text" name="apply_user_depart3" placeholder="학과/분야" value="<?php if($obj['apply_user_job'] == '학생/교육기관') { echo $obj['apply_user_depart']; }?>">
                  </div>
                </li>
                <li class="select-category professor <?php if($obj['apply_user_job'] == '학생/교육기관') { echo active; }?>">
                  <h3>구분</h3>
                  <div class="wrap">
                    <select name="apply_user_grade3" id="">
                      <?php if($obj['apply_user_job'] == '학생/교육기관') { ?>
                      <option><?=$obj['apply_user_grade']?></option>
                      <?php } ?>
                            <option >대학생</option>
                            <option>대학원생</option>
                            <option >교수</option>
                            <option>강사</option>
                            <option >원장</option>
                            <option >조교</option>
                            <option >교사</option>
                            <option >기타</option>
                    </select>
                  </div>
                </li>
                <li class="select-category other <?php if($obj['apply_user_job'] == '인디/프리랜서') { echo active; }?>">
                  <h3>직장/학교</h3>
                  <div class="wrap">
                    <input type="text" name="apply_user_company4" placeholder="직장/학교(없는 경우, 해당없음으로 기재해 주세요)" value="<?php if($obj['apply_user_job'] == '인디/프리랜서') { echo $obj['apply_user_company']; }?>">
                  </div>
                </li>
                <li class="select-category other <?php if($obj['apply_user_job'] == '인디/프리랜서') { echo active; }?>">
                  <h3>부서/학과</h3>
                  <div class="wrap">
                    <input type="text" name="apply_user_depart4" placeholder="부서/학과(없는 경우, 해당없음으로 기재해 주세요)" value="<?php if($obj['apply_user_job'] == '인디/프리랜서') { echo $obj['apply_user_depart']; }?>">
                  </div>
                </li>
                <li class="select-category other <?php if($obj['apply_user_job'] == '인디/프리랜서') { echo active; }?>">
                  <h3>직무</h3>
                  <div class="wrap">
                    <select name="apply_user_grade4" id="">
                      <?php if($obj['apply_user_job'] == '인디/프리랜서') { ?>
                      <option><?=$obj['apply_user_grade']?></option>
                      <?php } ?>
                      <option value=''>선택</option>
                      <option>비주얼아트</option>
                      <option>프로그래밍</option>
                      <option>프로덕션</option>
                      <option>엔지니어링</option>
                      <option>설계</option>
                      <option>기획</option>
                      <option>R&amp;D</option>
                      <option>IT</option>
                      <option>감독/PD</option>
                      <option>비즈니스/마케팅</option>
                      <option>C-level</option>
                      <option>기타</option>
                    </select>
                  </div>
                </li>
                <li class="select-category etc <?php if($obj['apply_user_job'] == '기타') { echo active; }?>">
                  <h3>기타 항목1</h3>
                  <div class="wrap">
                    <input type="text" name="apply_user_company5" placeholder="추가정보(없는 경우, 없음)" value="<?php if($obj['apply_user_job'] == '기타') { echo $obj['apply_user_company']; }?>">
                  </div>
                </li>
                <li class="select-category etc <?php if($obj['apply_user_job'] == '기타') { echo active; }?>">
                  <h3>기타 항목2</h3>
                  <div class="wrap">
                    <input type="text" name="apply_user_depart5" placeholder="추가정보(없는 경우, 없음)" value="<?php if($obj['apply_user_job'] == '기타') { echo $obj['apply_user_depart']; }?>">
                  </div>
                </li>
                <li class="select-category etc <?php if($obj['apply_user_job'] == '기타') { echo active; }?>">
                  <h3>기타 항목3</h3>
                  <div class="wrap">
                    <select name="apply_user_grade5" id="">
                      <?php if($obj['apply_user_job'] == '기타') { ?>
                      <option><?=$obj['apply_user_grade']?></option>
                      <?php } ?>
                      <option value=''>선택</option>
                      <option>비주얼아트</option>
                      <option>프로그래밍</option>
                      <option>프로덕션</option>
                      <option>엔지니어링</option>
                      <option>설계</option>
                      <option>기획</option>
                      <option>R&amp;D</option>
                      <option>IT</option>
                      <option>감독/PD</option>
                      <option>비즈니스/마케팅</option>
                      <option>C-level</option>
                      <option>기타</option>
                    </select>
                  </div>
                </li>
                <li>
                  <h3><span class="red-dot">산업/관심 분야</span></h3>
                  <div class="wrap">
                    <select name="apply_sector" id="apply_sector">
                      <option><?=$obj['apply_sector']?></option>
                      <option value=''>선택</option>
                      <option>게임</option>
                      <option>건축</option>
                      <option>자동차&amp;운송</option>
                        <option>영화&amp;TV</option>
                      <option>방송&amp;라이브 이벤트</option>
                      <option>제조</option>
                      <option>소프트웨어&amp;툴 개발</option>
                      <option>VR/AR</option>
                      <option>교육</option>
                      <option>기타</option>
                    </select>
                  </div>
                </li>
              </ul>
            </div>
          </div>
<!--
            <div class="section">
                <h2 class="section-title"><span class="red-dot">관심분야</span></h2>
                <div class="form-wrap session">
                    <ul>
                        <li>
                            <input type="checkbox" name="apply_user_ex1"  class="ex_chk"  id="day1" value="1" <?=$obj["apply_user_ex1"]?"checked":""?>>
                            <label for="day1" class="day1">8월 29일 (화) - 공통</label>
                            <input type="checkbox" name="apply_user_ex2"  class="ex_chk"  id="day2" value="2" <?=$obj["apply_user_ex2"]?"checked":""?>>
                            <label for="day2" class="day2">8월 30일 (수) - 게임</label>
                            <br />
                            <input type="checkbox" name="apply_user_ex3"   class="ex_chk"  id="day3" value="3" <?=$obj["apply_user_ex3"]?"checked":""?>>
                            <label for="day3" style="width: 100%">영화 & TV / 라이브 이벤트 / 애니메이션</label>
                            <br />
                            <input type="checkbox" name="apply_user_ex4" class="ex_chk"    id="day4" value="4" <?=$obj["apply_user_ex4"]?"checked":""?>>
                            <label for="day4" style="width: 100%">9월 1일 (금) - AEC/자동차/시뮬레이션</label>
                            <br />
                        </li>
                    </ul>
                    <script>
                        $(document).ready(function(){
                            $(".ex_chk").change(function(){
                                if($(".ex_chk").length == $(".ex_chk:checked").length) {
                                    $("#all_session").prop("checked", true);
                                }else {
                                    $("#all_session").prop("checked", false);
                                }
                            });
                        });
                    </script>
                </div>
            </div>-->

            <?
            if($obj["free_yn"] == "Y"){
                ?>
                <!--<div class="section offline_wait">
                    <h2 class="section-title">오프라인 대기 선택</h2>
                    <p class="section-content">오프라인 행사 참여를 원하시면 체크해주세요.취소 발생시 우선 연락을 드립니다.</p>
                    <div class="form-wrap ">
                        <ul>
                            <li>
                                <input type="checkbox" name="wait_yn"  id="wait_yn" value="Y" <?=$obj["wait_yn"] == "Y"?"checked":""?>>
                                <label for="wait_yn" class="day1">오프라인 행사장 대기자 등록</label>
                            </li>
                        </ul>
                    </div>

                </div>--><?
            }
            ?>
        </div>
        <div class="btn-group">
          <a href="javascript:;" onclick="history.back(-1);" class="lg half gray" >취소</a>
          <a href="javascript:;" id="btnLoginAction" class="lg half sky" >수정완료</a>
          
        </div>
      </form>
    </div>
  </div>
  
  <script>
    // 세션선택
    $("#all_session").on("change", function(){
      if ($("#all_session").prop("checked")) {
        $(".session input[type=checkbox]").prop("checked", true);
      } else {
        $(".session input[type=checkbox]").prop("checked", false);
      }
    });
    
    $('select').niceSelect();
  </script>
  <script>
    $(function() {
      setLogin();
      // 전화번호 숫자만 입력
      $("input:text[numberOnly]").on("keyup", function() {
          $(this).val($(this).val().replace(/[^0-9]/g,""));
      });
    });
    function cancle(val) {
      if(confirm('등록을 취소하시겠습니까?')){
        location.replace('/v2/cancel.php?mode2=del2&no='+val);
      }
    }
    function setLogin() {
        $.validator.addMethod("userEmail", function(value, element) {
            return this.optional(element) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i.test(value);
        }, "이메일을 형식에 맞게 입력하세요.");

        $('#login-form').validate({
            debug: true,
            onfocusout: function(element) {
                $(element).valid();
            },
            errorPlacement: function(error, element) {
                element.parent().next('.warning').show();
            },
            rules: {
                inputEmail: {
                    required: true,
                    maxlength: 50,
                    userEmail: true,
                    email: true
                },
                // inputEmail2: {
                //     required: true,
                //     maxlength: 50,
                //     userEmail: true,
                //     email: true
                // },
            },
            highlight: function(element) {},
            unhighlight: function(element) {
                $(element).parent().next('.warning').hide();
            },
            messages: {
                inputEmail: {
                    required: "이메일을 입력하세요.",
                    maxlength: $.validator.format('이메일은 {0}자 내로 입력하세요.'),
                    email: "이메일을 형식에 맞게 입력하세요."
                },
                inputEmail2: {
                    required: "이메일을 입력하세요.",
                    maxlength: $.validator.format('이메일은 {0}자 내로 입력하세요.'),
                    email: "이메일을 형식에 맞게 입력하세요."
                },
            },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    alert(validator.errorList[0].message);
                    validator.errorList[0].element.focus();
                }
            }
        });

        $("#btnLoginAction").on("click", function(e) {
            var form = document.forms['login-form'];

            if ($('#login-form').valid()) { // test for validity
                form.submit();
            } else {
                // do stuff if form is not valid
            }
        });
        $("#btnLoginAction").on("click", function(e) {
          var form = document.forms['login-form'];
          if (form.apply_user_job.value == "") {
            alert("부문을 입력해 주세요..");
            form.apply_user_job.focus();
            return false;
          } else if (form.apply_sector.value == "") {
            alert("산업/관심분야를 선택해주세요.");
            form.apply_user_job.focus();
            return false;
         // } else if (!form.apply_user_ex1.checked && !form.apply_user_ex2.checked && !form.apply_user_ex3.checked && !form.apply_user_ex4.checked) {
           // alert("세션을 한가지 이상 선택해 주세요.");
            //form.apply_user_ex1.focus();
            //return false;
          } else if (form.apply_user_job.value == "직장인") {
            if (form.apply_user_company1.value == "") {
              alert("회사명을 입력해 주세요.");
              form.apply_user_company1.focus();
              return false;
            } else if (form.apply_user_depart1.value == "") {
              alert("부서를 입력해 주세요.");
              form.apply_user_depart1.focus();
              return false;
            } else if (form.apply_user_grade1.value == "") {
              alert("직무를 선택해 주세요");
              form.apply_user_grade1.focus();
              return false;
            } 
          } else if (form.apply_user_job.value == "학생") {
            if (form.apply_user_company2.value == "") {
              alert("학교명을 입력해 주세요.");
              form.apply_user_company2.focus();
              return false;
            } else if (form.apply_user_depart2.value == "") {
              alert("학과명을 입력해 주세요");
              form.apply_user_depart2.focus();
              return false;
            } else if (form.apply_user_grade2.value == "") {
              alert("학년을 선택해 주세요");
              form.apply_user_grade2.focus();
              return false;
            } 
          } else if (form.apply_user_job.value == "교수") {
            if (form.apply_user_company3.value == "") {
              alert("학교/기관을 입력해 주세요.");
              form.apply_user_company3.focus();
              return false;
            } else if (form.apply_user_depart3.value == "") {
              alert("학과/분야를 입력해 주세요.");
              form.apply_user_depart3.focus();
              return false;
            } else if (form.apply_user_grade3.value == "") {
              alert("구분을 선택해 주세요.");
              form.apply_user_grade3.focus();
              return false;
            } 
          } else if (form.apply_user_job.value == "인비/프리랜서") {
            if (form.apply_user_company4.value == "") {
              alert("직장/학교를 입력해 주세요.");
              form.apply_user_company4.focus();
              return false;
            } else if (form.apply_user_depart4.value == "") {
              alert("부서/학과를 입력해 주세요.");
              form.apply_user_depart4.focus();
              return false;
            } else if (form.apply_user_grade4.value == "") {
              alert("직무를 선택해 주세요.");
              form.apply_user_grade4.focus();
              return false;
            } 
          } else if (form.apply_user_job.value == "기타") {
            if (form.apply_user_company5.value == "") {
              alert("추가정보를 입력해 주세요.");
              form.apply_user_company5.focus();
              return false;
            } else if (form.apply_user_depart5.value == "") {
              alert("추가정보를 입력해 주세요.");
              form.apply_user_depart5.focus();
              return false;
            } else if (form.apply_user_grade5.value == "") {
              alert("추가정보를 입력해 주세요.");
              form.apply_user_grade5.focus();
              return false;
            } 
          } 
          
          
          // else if (form.apply_product_name.value == "") {
          //   alert("상품을 선택해주세요.");
          //   form.apply_title.focus();
          //   return false;
          // }

          if ($('#login-form').valid()) { // test for validity
              form.submit();
          } else {
              // do stuff if form is not valid
          }
      });
    }
    
    $("#apply_user_job").on("change", function() {
      var selected = $("#apply_user_job").siblings(".nice-select").find(".selected").text();
      switch (selected) {
        case "직장인":
          $(".select-category").removeClass("active");
          $(".select-category.office").addClass("active");
          break;
        case "학생":
          $(".select-category").removeClass("active");
          $(".select-category.student").addClass("active");
          break;
        case "학생/교육기관":
          $(".select-category").removeClass("active");
          $(".select-category.professor").addClass("active");
          break;
        case "인디/프리랜서":
          $(".select-category").removeClass("active");
          $(".select-category.other").addClass("active");
          break;
        default:
          $(".select-category").removeClass("active");
          $(".select-category.etc").addClass("active");
          break;
      }
    });
  </script>

</body>

</html>
