<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="<?= JS_VIEW_PATH ?>/moment.min.js"></script>
<script src="<?= JS_VIEW_PATH ?>/reg_form.js"></script>
<script>
    var API_PATH = "<?= API_PATH ?>/<?= API_SUB_PATH ?>";
    var PAGE_MAIN = "<?= PAGE_MAIN ?>";
    var EVENT_TITLE = "<?= EVENT_TITLE ?>";

    $(function() {
        init();
    });

    function getProductElement(index, val) {
        return '<option value="' + index + '">' + val.name + '</option>';
        // return '<span><input type="checkbox" id="product-code-'+index+'" name="product-code" value="'+index+'"/><label for="product-code-'+index+'">'+val.name+'</label></span>'
    }

    function getPrice() {
        $.ajax({
            type: "post",
            url: API_PATH + "/getPrice",
            dataType: "json",
            data: "",
            success: function(resp) {
                if (resp.success) {
                    if (!resp.data) {
                        alert("사전 등록 기간이 아닙니다.");
                        regForm.close();
                        return;
                    }

                } else {
                    alert("정보를 가져오지 못했습니다.\n새로고침 해주세요.");
                }

            },
            error: function(xhr, textStatus) {
                alert(textStatus + "/" + xhr.status);
            }
        });
    }

    function init() {
        $("#inputJob").off('change').on('change', function() {
            setOption();
        });
        getPrice();

        jQuery.validator.setDefaults({
            debug: true,
            success: "valid"
        });

        $.validator.addMethod("userEmail", function(value, element) {
            return this.optional(element) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i.test(value);
        }, "이메일을 형식에 맞게 입력하세요.");
        $.validator.addMethod("userPhone", function(value, element) {
            return this.optional(element) || /^01[0-9][1-9]\d{3,4}\d{4}$/i.test(value);
        }, "등록 확인 및 시청 방법 안내 문자 발송을 위해 11자리 핸드폰 번호를 '-' 없이 정확히 입력해 주세요.");

        var validateOption = {
            // debug: true,
            ignore: '*:not([name])',
            onfocusout: function(element) {
                $(element).valid();
            },
            errorPlacement: function(error, element) {
                element.parent().next('.message').show();
            },
            rules: {
                inputName: {
                    required: true,
                    maxlength: 20
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
                inputCompany: {
                    required: true,
                    maxlength: 50
                },
                inputDepart: {
                    required: true,
                    maxlength: 30
                },
                inputGrade: {
                    required: true,
                    maxlength: 30
                },
                inputEx1: {
                    required: true
                },
                inputEx3: {
                    required: false,
                    maxlength: 100,
                    userEmail: true,
                    email: true,
                },
            },
            messages: {
                'product-code': {
                    required: '티켓 종류를 선택하세요.',
                },
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
                    required: '언리얼 엔진 아이디를 형식에 맞게 입력해주세요.',
                    maxlength: $.validator.format('언리얼 엔진 아이디를 {0}자 내로 입력하세요.'),
                    userEmail: "언리얼 엔진 아이디를 형식에 맞게 입력해주세요.",
                    email: "언리얼 엔진 아이디를 형식에 맞게 입력해주세요."
                },
            },
            highlight: function(element) {},
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

        $("#btnCancel").on("click", function(e) {
            e.preventDefault();
            location.href = PAGE_MAIN;
        });
        $("#btnRegist").on("click", function(e) {
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
        close: function(moveLink) {
            if (moveLink) {
                location.href = moveLink;
            } else {
                location.href = "/";
            }
        },
        send: function() {
            var productCode = 'N_P_01';
            var data = {
                apply_user_name: $('#inputName').val(),
                apply_user_email: $('#inputEmail').val(),
                apply_user_phone: $('#inputPhone').val(),
                apply_user_job: $('#inputJob').val(),
                apply_user_company: $('#inputCompany').val(),
                apply_user_depart: $('#inputDepart').val(),
                apply_user_grade: $('#inputGrade').val(),
                apply_user_ex1: $('#inputEx1').val(), // 산업 분야
                apply_user_ex3: $('#inputEx3').val(), // 언리얼 ID
                // apply_user_ex2: $('input[name="inputEx2-options"]:checked').val(),   // 참석여부
                apply_user_event_agree: ($('#cf2').is(":checked")) ? 1 : 0, // 이벤트 정보 수신 동의 여부
                apply_product_code: productCode,
            };

            $.ajax({
                type: "post",
                url: API_PATH + "/setReadyOrder",
                dataType: "json",
                data: data,
                success: function(resp) {
                    if (resp.success) {
                        alert('웨비나에 등록되었습니다.\n등록하신 메일로 시청 url을 발송해 드릴 예정이며, 해당 url을 통해 웨비나 시작 30분 전부터 접속하실 수 있습니다. ');
                        //                        regForm.close(PAGE_MAIN);
                        //regForm.close(PAGE_MAIN);
                        //PAGE_REG_SUCCESS
                        regForm.close("/thanks.html");
                    } else {
                        alert(resp.error);
                    }

                },
                error: function(xhr, textStatus) {
                    alert(textStatus + "/" + xhr.status);
                }
            });
        }
    }

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
</script>