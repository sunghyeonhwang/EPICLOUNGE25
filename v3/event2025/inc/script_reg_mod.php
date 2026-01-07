<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="<?= JS_VIEW_PATH ?>/reg_form.js"></script>
<script>
    var PAGE_MAIN = "<?= PAGE_MAIN ?>";
    var PAGE_REG_SUCCESS = "<?= PAGE_REG_SUCCESS ?>";
    var API_PATH = "<?= API_PATH ?>/<?= API_SUB_PATH ?>";
    var nowStep = 1;
    $(function() {
        init();
    });

    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            if (decodeURIComponent(pair[0]) == variable) {
                return decodeURIComponent(pair[1]);
            }
        }
    }

    function getData() {
        var data = {
            apply_user_email: getQueryVariable('email'),
            apply_user_phone: getQueryVariable('phone'),
        };
        $.ajax({
            type: "post",
            url: API_PATH + "/findApply",
            dataType: "json",
            data: data,
            success: function(resp) {
                if (resp.success) {
                    $('#inputApplyNo').val(resp.data.apply_no);

                    $('#inputName').val(resp.data.apply_user_name);
                    $('#inputEmail').val(resp.data.apply_user_email);
                    $('#inputPhone').val(resp.data.apply_user_phone);
                    $('#inputJob').val(resp.data.apply_user_job).trigger('change');
                    $('#inputCompany').val(resp.data.apply_user_company);
                    $('#inputDepart').val(resp.data.apply_user_depart);
                    $('#inputEx1').val(resp.data.apply_user_ex1);
                    $('#inputEx3').val(resp.data.apply_user_ex3);
                    if (resp.data.apply_user_ex2 && resp.data.apply_user_ex2 == 'Y') {
                        $('input[name="inputEx2-options"]:eq(0)').prop('checked', true);
                    } else {
                        $('input[name="inputEx2-options"]:eq(1)').prop('checked', true);
                    }
                    if (resp.data.apply_user_event_agree && resp.data.apply_user_event_agree == '1') {
                        $('#cf2').prop('checked', true);
                    }
                    setTimeout(function() {
                        $('#inputGrade').val(resp.data.apply_user_grade);
                    }, 100);
                } else {
                    alert("비정상적으로 접근하였습니다.");
                    location.href = PAGE_MAIN;
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
        getData();

        $.validator.addMethod("userEmail", function(value, element) {
            return this.optional(element) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i.test(value);
        }, "이메일을 형식에 맞게 입력하세요.");
        $.validator.addMethod("userPhone", function(value, element) {
            return this.optional(element) || /^01[0-9][1-9]\d{3,4}\d{4}$/i.test(value);
        }, "참가확인 문자 발송을 위해서 11자리 핸드폰번호를 '-' 없이 정확히 기재해 주세요. ");

        $('#registration-form').validate({
            debug: true,
            onfocusout: function(element) {
                $(element).valid();
            },
            errorPlacement: function(error, element) {
                element.parent().next('.warning').show();
            },
            rules: {
                inputName: {
                    required: true,
                    maxlength: 20
                },
                inputEmail: {
                    required: true,
                    maxlength: 50,
                    userEmail: true
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
                inputName: {
                    required: '이름을 입력하세요.',
                    maxlength: $.validator.format('이름은 {0}자 내로 입력하세요.')
                },
                inputEmail: {
                    required: '이메일을 입력하세요.',
                    maxlength: $.validator.format('이메일은 {0}자 내로 입력하세요.'),
                },
                inputPhone: {
                    required: '참가확인 문자 발송을 위해서 ' - ' 없이 정확히 기재해 주세요.',
                },
                inputCompany: {
                    required: '직장/학교를 입력하세요.',
                    maxlength: $.validator.format('직장/학교는 {0}자 내로 입력하세요.')
                },
                inputDepart: {
                    required: '부서/학과를 입력하세요.',
                    maxlength: $.validator.format('부서/학과는 {0}자 내로 입력하세요.')
                },
                inputGrade: {
                    required: '직무/학년을 입력하세요.',
                    maxlength: $.validator.format('직무/학년은 {0}자 내로 입력하세요.')
                },
                inputEx1: {
                    required: '산업분야는 필수 항목입니다.',
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
                $(element).parent().next('.warning').hide();
            },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    alert(validator.errorList[0].message);
                    validator.errorList[0].element.focus();
                }
            }
        });

        $("#btnRegist").on("click", function(e) {
            e.preventDefault();

            if ($('#registration-form').valid()) { // test for validity
                // if (!$('#cf2').is(":checked")) {
                //     alert('언리얼 엔진 및 에픽게임즈의 뉴스, 설문조사, 행사 및 이벤트 정보 수신에 동의해주세요.');
                //     return;
                // }

                var data = {
                    apply_no: $('#inputApplyNo').val(),
                    apply_user_name: $('#inputName').val(),
                    apply_user_email: $('#inputEmail').val(),
                    apply_user_phone: $('#inputPhone').val(),
                    apply_user_job: $('#inputJob').val(),
                    apply_user_company: $('#inputCompany').val(),
                    apply_user_depart: $('#inputDepart').val(),
                    apply_user_grade: $('#inputGrade').val(),
                    apply_user_ex1: $('#inputEx1').val(), // 산업 분야
                    apply_user_ex3: $('#inputEx3').val(), // 언리얼ID
                    // apply_user_ex2: $('input[name="inputEx2-options"]:checked').val(),   // 참석여부
                    apply_user_event_agree: ($('#cf2').is(":checked")) ? 1 : 0, // 이벤트 정보 수신 동의 여부
                };

                $.ajax({
                    type: "post",
                    url: API_PATH + "/updateApply",
                    dataType: "json",
                    data: data,
                    success: function(resp) {
                        if (resp.success) {
                            alert("수정되었습니다.");
                            location.href = PAGE_MAIN;
                        } else {
                            alert(resp.error);
                        }

                    },
                    error: function(xhr, textStatus) {
                        alert(textStatus + "/" + xhr.status);
                    }
                });
            } else {
                // do stuff if form is not valid
            }
        });

        $("#btnCancel").on("click", function(e) {
            e.preventDefault();

            if (!confirm("신청 취소 하시겠습니까?")) {
                return;
            }

            var data = {
                apply_user_email: $('#inputEmail').val(),
                apply_user_phone: $('#inputPhone').val(),
            };

            $.ajax({
                type: "post",
                url: API_PATH + "/cancelApplyRequest",
                dataType: "json",
                data: data,
                success: function(resp) {
                    if (resp.success) {
                        alert("신청 취소되었습니다.");
                        location.href = PAGE_MAIN;
                    } else {
                        alert(resp.error);
                    }

                },
                error: function(xhr, textStatus) {
                    alert(textStatus + "/" + xhr.status);
                }
            });
        });
    }
</script>