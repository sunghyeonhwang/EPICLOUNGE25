<script src="<?=JS_VIEW_PATH?>/jquery-ui.js"></script>
<script src="<?=JS_VIEW_PATH?>/bootstrap.min.js"></script>
<script src="<?=JS_VIEW_PATH?>/wow.min.js"></script>
<script src="<?=JS_VIEW_PATH?>/jquery.bxslider.js"></script>
<script src="<?=JS_VIEW_PATH?>/layout.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script>
    function getQueryVariable2(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            if (decodeURIComponent(pair[0]) == variable) {
                return decodeURIComponent(pair[1]);
            }
        }
    }
    $( document ).ready(function() {
        var MAIN_API_PATH = "<?=API_PATH?>";
        var dataTc = {
            tc: getQueryVariable2('tc')
        };

        if (dataTc.tc) {
            $.cookie('tc', dataTc.tc);
            $.ajax({
                type: "get",
                url: MAIN_API_PATH + "/trackcode",
                dataType: "json",
                data: dataTc,
                success:function(resp){
                }, error:function(xhr,textStatus){
                    //alert(textStatus+"/"+xhr.status);
                }
            });
        }
    });
</script>