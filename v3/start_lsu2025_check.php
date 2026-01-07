<?php
session_start();
$mysqli = new mysqli("localhost", "unrealengine", "Good121930!@", "unrealengine");

$apply_user_email = $_POST['inputEmail'] ?? '';
$live = $_POST['live'] ?? '';

// 이메일 유효성 검사
if (!$apply_user_email) {
	echo "<script>alert('이메일을 입력해주세요.'); history.back();</script>";
	exit();
}

$sql = "SELECT * FROM cb_unreal_2023_event_apply_live WHERE apply_user_email = '".$mysqli->real_escape_string($apply_user_email)."' LIMIT 1";
$result = $mysqli->query($sql);

if ($result && $result->num_rows > 0) {
	// 인증 성공 → 세션 설정
	$_SESSION['checked_in'] = true;
	$_SESSION['checked_email'] = $apply_user_email;

	// v1~v6로 이동
	header("Location: start_lsu2025_review_v1.php"); // 혹은 조건에 따라 v2~v6로 분기 가능
	exit();
} else {
	echo "<script>alert('라이브에 참석한 정보가 없습니다. 이메일을 다시 확인해 주세요.'); history.back();</script>";
	exit();
}
?>