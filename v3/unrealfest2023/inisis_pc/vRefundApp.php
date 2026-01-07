<?php
require_once('../../common.php');

$BANK_CODE = array(
    '03' => '기업은행',
    '04' => '국민은행',
    '05' => '외환은행',
    '07' => '수협중앙회',
    '11' => '농협중앙회',
    '20' => '우리은행',
    '23' => 'SC 제일은행',
    '31' => '대구은행',
    '32' => '부산은행',
    '34' => '광주은행',
    '37' => '전북은행',
    '39' => '경남은행',
    '53' => '한국씨티은행',
    '71' => '우체국',
    '81' => '하나은행',
    '88' => '신한은행',
    '89' => '케이뱅크',
    '90' => '카카오뱅크',
    '92' => '토스뱅크',
    'D1' => '동양종합금융증권',
    'D2' => '현대증권',
    'D3' => '미래에셋증권',
    'D4' => '한국투자증권',
    'D5' => '우리투자증권',
    'D6' => '하이투자증권',
    'D7' => 'HMC 투자증권',
    'D8' => 'SK 증권',
    'D9' => '대신증권',
    'DA' => '하나대투증권',
    'DB' => '굿모닝신한증권',
    'DC' => '동부증권',
    'DD' => '유진투자증권',
    'DE' => '메리츠증권',
    'DF' => '신영증권'
);

$apply_user_email = $_POST['apply_user_email'];
$apply_user_phone = $_POST['apply_user_phone'];

$sql = "select * from cb_unreal_2023_event_apply where apply_user_email = '$apply_user_email' and apply_user_phone = '$apply_user_phone' limit 1";
$RData = sql_fetch($sql);

?>
<form action="vRefund.php" method="post" id="refundform">
    <!--<input type="text" name="apply_user_email" value="<?php /*=$apply_user_email*/?>"/>
    <input type="text" name="apply_user_phone" value="<?php /*=$apply_user_phone*/?>"/>-->
    계좌번호 : <input type="text" name="refundAcctNum" value=""/><br/>
    예금주 : <input type="text" name="refundAcctName" value=""/><br/>
    은행 : <select name="refundBankCode">
        <option value="">은행선택</option>
        <?
        foreach ($BANK_CODE as $key => $value) {
            echo "<option value='" . $key . "'>" . $value . "</option>";
        }
        ?>

    </select>
    <input type="submit" />

</form>

<script>
    function alert_refund(){
        if(confirm("위의 정보로 환불을 신청하시겠습니까? 계좌번호와 예금주를 다시 한번 확인하여주세요.")){
            document.getElementById("refundform").submit();
        }
    }
</script>