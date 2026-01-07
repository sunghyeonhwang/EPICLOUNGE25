<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
    var API_PATH = "<?= API_PATH ?>/<?= API_SUB_PATH ?>";
    var PAGE_MAIN = "<?= PAGE_MAIN ?>";
    var PAGE_LIVE_CHECKIN = "<?= PAGE_LIVE_CHECKIN ?>";
    var PAGE_LIVE = "<?= PAGE_LIVE ?>";
    var PAGE_REG_FORM = "<?= PAGE_REG_FORM ?>#registration";
    var APPLY_ORDER_NO = "<?= $APPLY_ORDER_NO ?>";
    var SEL_TRACK_COUNT = "<?= $SEL_TRACK_COUNT ?>";

    $(function() {
        init();
    });

    function init() {
        setLogin();
        if (APPLY_ORDER_NO) {
            sendData();
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
            if ($('#login-form').valid()) { // test for validity
                sendData();
            } else {
                // do stuff if form is not valid
            }
        });
    }

    function sendData() {
        var data = {};
        if (APPLY_ORDER_NO) {
            data = {
                apply_order_no: APPLY_ORDER_NO,
            };
        } else {
            data = {
                apply_user_email: $('#inputEmail').val(),
            };
        }

        $.ajax({
            type: "post",
            url: API_PATH + "/findApplyByEmail",
            dataType: "json",
            data: data,
            success: function(resp) {
                if (resp.success) {
                    $('#inputEmail').val('');
                    $.cookie('UJWT', resp.data.token, {
                        expires: 1
                    });

                    setTimeout(function() {
                        if (SEL_TRACK_COUNT > 1) {
                            setTrackPage();
                        } else {
                            location.href = PAGE_LIVE;
                        }
                    }, 500);
                } else {
                    if (resp.hasOwnProperty('data') && resp.data.hasOwnProperty('type') && resp.data.type === 'confirm') {
                        if (APPLY_ORDER_NO) {
                            if (confirm(resp.error)) {
                                location.href = PAGE_LIVE_CHECKIN;
                            } else {
                                location.href = PAGE_MAIN;
                            }
                        } else {
                            if (confirm(resp.error)) {
                                location.href = PAGE_REG_FORM;
                            } else {
                                $('#inputEmail').val('');
                            }
                        }
                    } else {
                        alert(resp.error);
                    }
                }

            },
            error: function(xhr, textStatus) {
                alert(textStatus + "/" + xhr.status);
            }
        });
    }

    function validateForm() {
        if (!(/^[a-zA-Z 가-힣]{1,50}$/i.test($('#userName').val()))) {
            alert("이름을 형식에 맞게 입력하세요.");
            $('#userName').focus();
            return false;
        }

        if ($('#contact-form').valid()) {
            return true;
        }

        return false;
    }

    function setTrackPage() {
        $('#areaChceckin').hide();
        $('#areaSelTrack').show();
    }

    function redirectGet(location, args) {
        var form = $('<form></form>');
        form.attr("method", "get");
        form.attr("action", location);

        // key value 형식으로 바꾼 후에 form 으로 변환
        $.each(args, function(key, value) {
            var field = $('<input></input>');

            field.attr("type", "hidden");
            field.attr("name", key);
            field.attr("value", value);

            form.append(field);
        });

        // 위에서 생성된 폼을 제출 한다
        $(form).appendTo('body').submit();
    }

    function openPage(iUri) {
        window.open(iUri, 'un_ytb');
    }
</script>