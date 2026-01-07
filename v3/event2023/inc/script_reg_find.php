
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>
    var PAGE_MAIN = "<?=PAGE_MAIN?>";
    var PAGE_REG_MOD = "<?=PAGE_REG_MOD?>";
    var API_PATH = "<?=API_PATH?>/<?=API_SUB_PATH?>";
    var EVENT_TITLE = "<?=EVENT_TITLE?>";
    $(function() {
        init();
    });

    function init(){
        $.validator.addMethod("userEmail", function (value, element) {
            return this.optional(element) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i.test(value);
        }, "이메일을 형식에 맞게 입력하세요.");
        $.validator.addMethod("userPhone", function (value, element) {
            return this.optional(element) || /^01[0-9][1-9]\d{3,4}\d{4}$/i.test(value);
        }, "참가확인 문자 발송을 위해서 11자리 핸드폰번호를 '-' 없이 정확히 기재해 주세요. ");

        $('#registration-form').validate({
            debug: true,
            onfocusout: function(element) { $(element).valid(); },
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
                inputPhone: {
                    required: true,
                    userPhone: true
                }
            },
            highlight: function(element) {
            },
            unhighlight: function(element) {
                $(element).parent().next('.warning').hide();
            },
            messages: {
                inputEmail: {
                    required: "이메일을 입력하세요.",
                    maxlength: $.validator.format('이메일은 {0}자 내로 입력하세요.'),
                    email: "이메일을 형식에 맞게 입력하세요."
                },
                inputPhone: {
                    required: "참가확인 문자 발송을 위해서 '-' 없이 정확히 기재해 주세요.",
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

        $("#btnSubmit").on("click", function(e){
            if ($('#registration-form').valid()) {   // test for validity
                var data = {
                    apply_user_email: $('#inputEmail').val(),
                    apply_user_phone: $('#inputPhone').val(),
                };

                $.ajax({
                    type:"post",
                    url: API_PATH+"/findApply",
                    dataType:"json",
                    data:data,
                    success:function(resp){
                        if (resp.success) {
                            if (confirm("고객님은 "+ EVENT_TITLE +"에 등록이 되어있습니다.\n등록 정보를 수정하시겠습니까?")) {
                                location.href = "<?=PAGE_REG_MOD?>?area="+ resp.data.apply_product_code +"&email=" + resp.data.apply_user_email + "&phone=" + resp.data.apply_user_phone + "#registration";
                            } else {
                                location.href = PAGE_MAIN;
                            }
                        } else {
                            alert("등록된 정보가 존재하지 않습니다. 이메일/전화번호를 확인해주세요.");
                        }

                    }, error:function(xhr,textStatus){
                        alert(textStatus+"/"+xhr.status);
                    }
                });
            } else {
                // do stuff if form is not valid
            }
        });
    }
</script>