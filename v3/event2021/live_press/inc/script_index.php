<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="<?=JS_VIEW_PATH?>/moment.min.js"></script>
<script>
    var API_PATH = "<?=API_PATH?>/<?=API_SUB_PATH?>";
    var PAGE_MAIN = "<?=PAGE_MAIN?>";
    var SURVEY_OPEN_TIME = "<?=$SEL_DATA['survey_open_time']?>";
    var SURVEY_LINK = "<?=$SEL_DATA['survey_link']?>";

    $(function() {
        init();
    });

    function init(){
        changeBoxStatus();
        setInterval(function(){ changeBoxStatus(); }, 1000);
        setInterval(function(){ checkOpenSurvey(); }, 1000);
    }

    function checkOpenSurvey() {
        var nowTime = moment().format('HHmmss');
        if (nowTime == SURVEY_OPEN_TIME) {
            popupOpen(SURVEY_LINK);
        }
    }
    function changeBoxStatus() {
        var nowTime = moment().format('HHmmss');
        $('.box-deco').each(function(index, item){
            if ($(item).data('end') < nowTime) {
                $(item).removeClass().addClass('end-box');
            }
        });

        $('.box-deco').each(function(index, item){
            var qnalink = '';
            if ($(item).data('start') <= nowTime && !$(item).hasClass('yellow-box')) {
                $(item).addClass('yellow-box');
                qnalink = $(item).data('qnalink');

                if (qnalink) {
                    $("#idQnaLink").off("click").on("click", function(e){
                        e.preventDefault();
                        popupOpen(qnalink, 'uQna');
                    });
                } else {
                    $("#idQnaLink").off("click").on("click", function(e){
                        e.preventDefault();
                        alert("QnA링크 정보를 가져오지 못하였습니다. 새로고침 해주세요.");
                    });
                }
                return false;
            }
        });
    }
</script>