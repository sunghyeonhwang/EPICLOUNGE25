<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="<?=JS_VIEW_PATH?>/moment.min.js"></script>
<script>
    var API_PATH = "<?=API_PATH?>/<?=API_SUB_PATH?>";
    var PAGE_MAIN = "<?=PAGE_MAIN?>";
    var ableClickWrite = true;
    var WRITE_LIMIT_TIME = 1000;
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
        }, "휴대폰 번호를 11자리 '-' 없이 정확히 기재해 주세요. ");

        var validateOption = {
            // debug: true,
            ignore: '*:not([name])',
            onfocusout: function(element) { $(element).valid(); },
            errorPlacement: function(error, element) {
                element.parent().next('.message').show();
            },
            rules: {
                inputDiv: {
                    required: true,
                },
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
                inputContent: {
                    required: true
                },
            },
            messages: {
                inputDiv: {
                    required: '질문 분류를 선택하세요.',
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
                    required: "휴대폰 번호를 '-' 없이 정확히 기재해 주세요.",
                },
                inputCompany: {
                    required: '직장을 입력하세요.',
                    maxlength: $.validator.format('직장을 {0}자 내로 입력하세요.')
                },
                inputDepart: {
                    required: '부서를 입력하세요.',
                    maxlength: $.validator.format('부서를 {0}자 내로 입력하세요.')
                },
                inputContent: {
                    required: '질문 내용은 필수 항목입니다.',
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
            if (!ableClickWrite) {
                alert(WRITE_LIMIT_TIME/1000 + '초 내에 연속 작성이 불가능합니다.');
                return;
            }

            if (thisForm.valid()) {
                // if (!$('#cf2').is(":checked")) {
                //     alert('개인정보 수집 활용에 동의해주세요.');
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
            ableClickWrite = false;
            var data = {
                contact_user_name: $('#inputName').val(),
                contact_user_email: $('#inputEmail').val(),
                contact_user_phone: $('#inputPhone').val(),
                contact_user_company: $('#inputCompany').val(),
                contact_user_depart: $('#inputDepart').val(),
                contact_div: $('#inputDiv').val(),
                contact_content: $('#inputContent').val(),
            };

            $.ajax({
                type:"post",
                url: API_PATH+"/saveContact",
                dataType:"json",
                data:data,
                success:function(resp){
                    if (resp.success) {
                        alert("등록이 완료되었습니다");
                        regForm.close(PAGE_MAIN);
                    } else {
                        alert(resp.error);
                    }
                    setTimeout(function () {
                        ableClickWrite = true;
                    }, WRITE_LIMIT_TIME);

                }, error:function(xhr,textStatus){
                    ableClickWrite = true;
                    alert(textStatus+"/"+xhr.status);
                }
            });
        }
    }
</script>