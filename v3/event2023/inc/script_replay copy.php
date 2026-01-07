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
            var selEvent = $('.filter-event').children('span.active').data('value');
            var selYear = $('.filter-year').children('span.active').data('value');

            // console.log('sel >>>>>>>>> ', selDiv, selEvent, selYear);
            $('.result-list li').hide().filter(function(){
                var thisDiv = $(this).data('div');
                var thisEvent = $(this).data('event');
                var thisYear = $(this).data('year');
                // console.log('this >>>>> ', thisDiv, thisEvent, thisYear);
                if (
                    (selDiv === thisDiv || (selDiv === 'all' && String(thisDiv).length > 0)) &&
                    (selEvent === thisEvent || (selEvent === 'all' && String(thisEvent).length > 0)) &&
                    (selYear === thisYear || (selYear === 'all' && String(thisYear).length > 0))
                ) {
                    // console.log('this true **** ', thisDiv, thisEvent, thisYear);

                    return true;
                }
                return false;
            }).show();

        });
    }
</script>