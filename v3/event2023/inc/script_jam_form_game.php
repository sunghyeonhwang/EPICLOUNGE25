<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="<?=JS_VIEW_PATH?>/moment.min.js"></script>
<script src="<?=JS_VIEW_PATH?>/reg_form.js"></script>
<script>
    var API_PATH = "<?=API_PATH?>/<?=API_SUB_PATH?>";
    var PAGE_MAIN = "<?=PAGE_MAIN?>";
    var EVENT_TITLE = "<?=EVENT_TITLE?>";

    $(function() {
        init();
    });

    function init(){
        jQuery.validator.setDefaults({
            debug: true,
            success: "valid"
        });

        $.validator.addMethod("userEmail", function (value, element) {
            return this.optional(element) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i.test(value);
        }, "이메일을 형식에 맞게 입력하세요.");
        $.validator.addMethod("userPhone", function (value, element) {
            return this.optional(element) || /^01[0-9][1-9]\d{3,4}\d{4}$/i.test(value);
        }, "11자리 핸드폰 번호를 '-' 없이 정확히 입력해 주세요.");

        var validateOption = {
            // debug: true,
            ignore: '*:not([name])',
            onfocusout: function(element) { $(element).valid(); },
            errorPlacement: function(error, element) {
                element.parent().next('.message').show();
            },
            rules: {
                inputDepart: {
                    required: true,
                },
                inputProjectName: {
                    required: true,
                },
                inputProjectVersion: {
                    required: true,
                },
                inputProjectFile: {
                    required: true,
                },
                inputIntro: {
                    required: true,
                },
                inputHowToUse: {
                    required: true,
                },
                inputAssetFrom: {
                    required: true,
                },

                inputMem01Name, inputMem02Name: {
                    required: true,
                },
                inputCompany: {
                    required: true,
                    maxlength: 50
                },
                inputEmail: {
                    required: true,
                    maxlength: 50,
                    userEmail: true,
                    email: true,
                },
                inputPhone: {
                    required: true,
                    userPhone: true
                },
                'inputEx2-options': {
                    required: true
                },
            },
            messages: {
                inputName: {
                    required: '이름을 입력하세요.',
                    maxlength: $.validator.format('이름은 {0}자 내로 입력하세요.')
                },
                inputEmail: {
                    required: '이메일을 입력하세요.',
                    maxlength: $.validator.format('이메일은 {0}자 내로 입력하세요.'),
                    email: "이메일을 형식에 맞게 입력하세요."
                },
                inputPhone: {
                    required: "등록 확인 및 시청 방법 안내 문자 발송을 위해 11자리 핸드폰 번호를 '-' 없이 정확히 입력해 주세요.",
                },
                inputCompany: {
                    required: '직장/학교를 입력하세요.',
                    maxlength: $.validator.format('직장/학교는 {0}자 내로 입력하세요.')
                },
                inputDepart: {
                    required: '부서/학과/분야를 입력하세요.',
                    maxlength: $.validator.format('부서/학과/분야는 {0}자 내로 입력하세요.')
                },
                inputGrade: {
                    required: '직무/학년/구분은 필수 항목입니다.',
                    maxlength: $.validator.format('직무/학년/구분은 {0}자 내로 입력하세요.')
                },
                inputEx1: {
                    required: '관심분야는 필수 항목입니다.',
                },
                inputEx3: {
                    required: '관심 트랙은 필수 항목입니다.',
                },
                'inputEx2-options': {
                    required: EVENT_TITLE + ' 참석 여부는 필수 항목입니다.',
                },
            },
            highlight: function(element) {
            },
            unhighlight: function(element) {
                $(element).parent().next('.message').hide();
            },
            invalidHandler: function(form, validator) {
                 var errors = validator.numberOfInvalids();
                 if (errors) {
                     alert(validator.errorList[0].message);
                     validator.errorList[0].element.focus();
                 }
            }
        };
        var thisForm = $("#registration-form");
        thisForm.validate(validateOption);

        $("#btnCancel").on("click", function(e){
            e.preventDefault();
            location.href = PAGE_MAIN;
        });
        $("#btnRegist").on("click", function(e){
            e.preventDefault();
            if (thisForm.valid()) {
                // if (!$('#cf2').is(":checked")) {
                //     alert('언리얼 엔진 및 에픽게임즈의 뉴스, 설문조사, 행사 및 이벤트 정보 수신에 동의해주세요.');
                //     return;
                // }
                regForm.send();
            }
        });

    }

    var regForm = {
        close: function(moveLink){
            if (moveLink) {
                location.href = moveLink;
            } else {
                location.href = "/";
            }
        },
        send: function(){
            var productCode = 'N_P_01';
            var data = {
                apply_depart: $('#inputDepart').val(),
                apply_project_name: $('#inputProjectName').val(),
                apply_project_version: $('#inputProjectVersion').val(),
                apply_project_file: $('#inputProjectFile').val(),
                apply_intro: $('#inputIntro').val(),
                apply_how_to_use: $('#inputHowToUse').val(),
                apply_asset_from: $('#inputAssetFrom').val(),

                apply_mem01_name: $('#inputMem01Name').val(),
                apply_mem01_company: $('#inputMem01Company').val(),
                apply_mem01_email: $('#inputMem01Email').val(),
                apply_mem01_phone: $('#inputMem01Phone').val(),

                apply_mem02_name: $('#inputMem02Name').val(),
                apply_mem02_company: $('#inputMem02Company').val(),
                apply_mem02_email: $('#inputMem02Email').val(),
                apply_mem02_phone: $('#inputMem02Phone').val(),

                apply_mem03_name: $('#inputMem03Name').val(),
                apply_mem03_company: $('#inputMem03Company').val(),
                apply_mem03_email: $('#inputMem03Email').val(),
                apply_mem03_phone: $('#inputMem03Phone').val(),

                apply_mem04_name: $('#inputMem04Name').val(),
                apply_mem04_company: $('#inputMem04Company').val(),
                apply_mem04_email: $('#inputMem04Email').val(),
                apply_mem04_phone: $('#inputMem04Phone').val(),

                apply_mem05_name: $('#inputMem05Name').val(),
                apply_mem05_company: $('#inputMem05Company').val(),
                apply_mem05_email: $('#inputMem05Email').val(),
                apply_mem05_phone: $('#inputMem05Phone').val(),

                apply_user_job: $('#inputJob').val(),
                apply_user_depart: $('#inputDepart').val(),
                apply_user_grade: $('#inputGrade').val(),
                apply_user_ex1: $('#inputEx1').val(),           // 산업 분야
                // apply_user_ex2: $('input[name="inputEx2-options"]:checked').val(),   // 참석여부
                apply_event_agree: ($('#cf2').is(":checked")) ? 1 : 0, // 이벤트 정보 수신 동의 여부
            };

            $.ajax({
                type:"post",
                url: API_PATH+"/setReadyOrder",
                dataType:"json",
                data:data,
                success:function(resp){
                    if (resp.success) {
                        alert('언리얼 서밋 온라인 2020에 등록되었습니다.\n 오후 1시부터, 시청하기 버튼을 눌러 언리얼 서밋 온라인 2020에 참가해주세요 \n - 언리얼 서밋 온라인 2020 사무국 ');
                        regForm.close(PAGE_MAIN);
                    } else {
                        alert(resp.error);
                    }

                }, error:function(xhr,textStatus){
                    alert(textStatus+"/"+xhr.status);
                }
            });
        }
    }
</script>