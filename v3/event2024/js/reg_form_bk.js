function setOption(){
    var selVal = $('#inputJob option:selected').val();
    if (selVal == '직장인') {
        $('#inputCompany').attr('placeholder', '직장');
        $('#inputDepart').attr('placeholder', '부서');

        setSelect($('#inputGrade'), '직무', ['비주얼아트','프로그래밍','프로덕션','엔지니어링','설계','기획','R&D','IT','감독/PD','비즈니스/마케팅','C-level','기타']);
        return;
    }
    if (selVal == '학생') {
        $('#inputCompany').attr('placeholder', '학교');
        $('#inputDepart').attr('placeholder', '학과');

        setSelect($('#inputGrade'), '학년', [4,3,2,1]);

        return;
    }
    if (selVal == '교직원') {
        $('#inputCompany').attr('placeholder', '학교/기관');
        $('#inputDepart').attr('placeholder', '학과/분야');

        setSelect($('#inputGrade'), '구분', ['교수','강사','원장','조교','교사','기타']);
        return;
    }
    if (selVal == '인디/프리랜서') {
        $('#inputCompany').attr('placeholder', '직장/학교(없는 경우, 해당없음으로 기재해 주세요)');
        $('#inputDepart').attr('placeholder', '부서/학과(없는 경우, 해당없음으로 기재해 주세요)');
        setSelect($('#inputGrade'), '직무', ['비주얼아트','프로그래밍','프로덕션','엔지니어링','설계','기획','R&D','IT','감독/PD','비즈니스/마케팅','C-level','기타']);
        return;
    }
    if (selVal == '기타') {
        $('#inputCompany').attr('placeholder', '직장/학교(없는 경우, 해당없음으로 기재해 주세요)');
        $('#inputDepart').attr('placeholder', '부서/학과(없는 경우, 해당없음으로 기재해 주세요)');
        setSelect($('#inputGrade'), '직무', ['비주얼아트','프로그래밍','프로덕션','엔지니어링','설계','기획','R&D','IT','감독/PD','비즈니스/마케팅','C-level','기타']);
        return;
    }

    $('#inputCompany').attr('placeholder', ' 위의 선택 항목을 먼저 골라주세요');
    $('#inputDepart').attr('placeholder', '위의 선택 항목을 먼저 골라주세요');
    setSelect($('#inputGrade'), '추가선택', []);
}
function setSelect(target, firstVal, options) {
    var $frag = $(document.createDocumentFragment());
    $frag.append(getSelectElement(firstVal, ''));
    $.each(options, function(index, val){
        $frag.append(getSelectElement(val));
    });
    target.html($frag).trigger('change');
}
function getSelectElement(outVal, inVal = undefined){
    if (inVal === undefined) {
        return '<option>'+outVal+'</option>';
    }
    return '<option value="'+inVal+'">'+outVal+'</option>';
}