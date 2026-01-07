<script>
    $(function() {
        init();
    });

    function init(){
        setFilterEvent();
    }

    function setFilterEvent(){
        $('.r-list').children().on('click', function(){
            // active remove
            $(this).parents('div').children().removeClass('active');
            // active 상태 변경
            $(this).addClass('active');

            // 현재 선택된 필터 값 체크
            var selDiv = $('.filter-div').children('span.active').data('value');
            var selPro = $('.filter-pro').children('span.active').data('value');
            var selEvent = $('.filter-event').children('span.active').data('value');
            var selYear = $('.filter-year').children('span.active').data('value');

            $('.result-list li').hide().filter(function(){
                var thisDiv = String($(this).data('div'));
                var thisPro = String($(this).data('pro'));
                var thisEvent = String($(this).data('event'));
                var thisYear = String($(this).data('year'));
                if (
                    (thisDiv.indexOf(selDiv) >= 0 || (selDiv === 'all' && String(thisDiv).length > 0)) &&
                    (thisPro.indexOf(selPro) >= 0 || (selPro === 'all' && String(thisPro).length > 0)) &&
                    (thisEvent.indexOf(selEvent) >= 0 || (selEvent === 'all' && String(thisEvent).length > 0)) &&
                    (thisYear.indexOf(selYear) >= 0 || (selYear === 'all' && String(thisYear).length > 0))
                ) {
                    return true;
                }

                return false;
            }).show();

        });
    }
</script>