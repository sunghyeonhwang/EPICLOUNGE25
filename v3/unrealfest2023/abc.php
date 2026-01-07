<?php
include_once "../common.php";

$result = sql_query("select * from cb_unreal_2023_event_apply where free_yn = 'N' and (apply_pay_status = 10 or apply_pay_status = 1) and send_sms_yn='N' limit 10");

$row_cnt = sql_fetch("select count(*) cnt from cb_unreal_2023_event_apply where free_yn = 'N' and (apply_pay_status = 10 or apply_pay_status = 1) and send_sms_yn='N'");
/*echo "<table>";
for ($i=1; $row=sql_fetch_array($result); $i++) {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$row['apply_user_name']."</td>";
    echo "<td>".$row['apply_user_email']."</td>";
    echo "<td>".$row['apply_user_phone']."</td>";
    echo "<td>".$row['apply_no']."</td>";
    echo "</tr>";
}
echo "</table>";*/

for ($i=1; $row=sql_fetch_array($result); $i++) {
    if($i <= 10){
        $ch = curl_init();
        $title = "언리얼 페스트 2023 서울";
        $message = "<언리얼 페스트 2023 서울> 체크인이 곧 오픈됩니다.\n\n아래 QR 코드를 준비해 주시고, 배치된 체크인 키오스크로 등록 확인 후, 입장해 주세요.\n\n4일간 진행되는 <언리얼 페스트 2023 서울>을 오프라인으로 만나보실 수 있는 단 하루! 오전 9시 30분부터 선착순 300분에게 언리얼 한정판 굿즈를 추가 증정하는 '얼리버드 체크인 이벤트'가 진행되니 많은 참여 부탁드립니다!\n\n- 일정: 8월 29일(화) 오전 10:30~18:00\n- 장소: 인터컨티넨탈 서울 코엑스 B1 하모니 볼룸\n- 체크인 시작: 9:30 부터 ";

        $sender = "023263701";                    //필수입력
        $username = "griff16";                //필수입력
        $key = "BaIpwA1FNBOYszC";           //필수입력
        $receiver = '{"name":"'.$row['apply_user_name'].'","mobile":"'.$row['apply_user_phone'].'"}';
        //$receiver = '{"name":"'.$row['apply_user_name'].'","mobile":"01029959522"}';
        $receiver = '['.$receiver.']';
        $sms_type = 'NORMAL'; // NORMAL - 즉시발송 / ONETIME - 1회예약 / WEEKLY - 매주정기예약 / MONTHLY - 매월정기예약
        $start_reserve_time = date('Y-m-d H:i:s'); //  발송하고자 하는 시간(시,분단위까지만 가능) (동일한 예약 시간으로는 200회 이상 API 호출을 할 수 없습니다.)
        $end_reserve_time = date('Y-m-d H:i:s'); //  발송이 끝나는 시간 1회 예약일 경우 $start_reserve_time = $end_reserve_time
        $remained_count = 1;
        $message = str_replace(' ', ' ', $message);  //유니코드 공백문자 치환
        $file = array();
        $file[] = array('attc' => 'https://epiclounge.co.kr/v3/unrealfest2023/qrdata/'.$row['apply_no'].'.jpg');
        $attaches = json_encode($file);
        $postvars = '"title":"'.$title.'"';
        $postvars = $postvars.', "message":"'.$message.'"';
        $postvars = $postvars.', "sender":"'.$sender.'"';
        $postvars = $postvars.', "username":"'.$username.'"';
        $postvars = $postvars.', "receiver":'.$receiver.'';
        $postvars = $postvars.', "key":"'.$key.'"';
        $postvars = $postvars.', "attaches":'.$attaches;                      //첨부파일이 있는 경우 주석해제 바랍니다.

        $postvars = '{'.$postvars.'}';      //JSON 데이터
        $url = "https://directsend.co.kr/index.php/api_v2/sms_change_word";         //URL
        $headers = array("cache-control: no-cache","content-type: application/json; charset=utf-8");
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $postvars);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
        curl_setopt($ch,CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        if(curl_errno($ch)){
            echo 'Curl error: ' . curl_error($ch);
            echo "<br />";
        }else{
            print_r($response);
            echo " :: ".$row['apply_user_name']." :: ".$row['apply_user_phone']." :: ".$row['apply_no']."<br />";
            sql_query("update cb_unreal_2023_event_apply set send_sms_yn = 'Y' where apply_no = '".$row['apply_no']."'");
        }
        curl_close ($ch);
    }else{

    }

}

echo $row_cnt["cnt"];
