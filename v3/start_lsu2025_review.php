<?
include "./common.php";
$mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");
ini_set('display_errors', 1);
$admin = $_GET['admin'];
$code = $_GET['code'];
$apply_user_email = $_POST['inputEmail'];




if ($admin == 'admin') {

} else if($_POST['inputEmail'] == 'parkdh0191@hanmail.net' || $_POST['inputEmail'] == 'sunhee.yu@epicgames.com' || $_POST['inputEmail'] == 'doeun.park@xa.epicgames.com' || $_POST['inputEmail'] == 'jinyoung.choi@epicgames.com' || $_POST['inputEmail'] == 'suyong.song@griff.co.kr' || $_POST['inputEmail'] == 'osh384@gmail.com' || $_POST['inputEmail'] == 'kwangsub.shin@epicgames.com' || $_POST['inputEmail'] == 'sunghyeon.hwang@griff.co.kr' || $_POST['inputEmail'] == 'ray.park@epicgames.com' || $_POST['inputEmail'] == 'sunhee.yu@gmail.com' || $_POST['inputEmail'] == 'dorn615@gmail.com' || $_POST['inputEmail'] == 'egoago@gmail.com' || $_POST['inputEmail'] == 'seunghwan.park@griff.co.kr' || $_POST['inputEmail'] == 'chany1220@gmail.com') {

} else if($_POST['inputEmail'] == 'dsmslove@naver.com' ) {

} else {
	if('2024-06-01 11:59:00' < date("Y-m-d H:i:s")){

	} else {
		echo '<script type="text/javascript">';
		echo "alert('지금은 시청시간이 아닙니다.');  self.close();";
		echo '</script>';exit();
	}
}

if ($admin == 'admin') {
	$obj[apply_user_name] = '관리자';
	// $track = $_GET['track'];
} else if ($code) {
	// $track = $_GET['track'];
	$sql = "select * from cb_unreal_2023_event_apply_live where apply_password = '".$code."' limit 1";
	$result = $mysqli -> query($sql);
	$obj = $result -> fetch_array();
	if(count($obj[0])){
	}else{
		echo '<script type="text/javascript">';
		echo "alert('등록된 정보가 존재하지 않습니다. 코드를 확인해 주세요.');  self.close();";
		echo '</script>';
		exit();
	}
} else {
	$num = $_POST['live'];
	// $track = $_POST['track_select'];
	if(!$num){
		echo '<script type="text/javascript">';
		echo "location.replace('/'); alert('정상적인 접근방식이 아닙니다.');";
		echo '</script>';
		exit();
	}
	$sql = "select * from cb_unreal_2023_event_apply where apply_user_email = '".$apply_user_email."' limit 1";
	$result = $mysqli -> query($sql);
	$obj = $result -> fetch_array();
	if(count($obj[0])){
	}else{
		echo '<script type="text/javascript">';
		echo "alert('라이브에 참가하거나 등록된 정보가 존재하지 않습니다. 이메일을 확인해 주세요.');  self.close();";
		echo '</script>';
		exit();
	}
}








$track = 1;
if($track == '1'){
  $track1 = 1;
} else if($track == '2'){
  $track2 = 2;
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>시작해요 트윈모션 & 언리얼 2025 다시보기</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background-color: #111;
			height: 100vh;
			overflow: hidden;
			margin: 0;
			padding: 0;
			word-break: keep-all;
		}
		a {color: #FF3097; text-decoration: none;}

		.main-container {
			height: calc(100vh - 70px); /* 네비게이션 높이만큼 빼기 */
			overflow: hidden;
		}

		.container {
			display: flex;
			height: 100%;
			gap: 1px;
		}

		/* 왼쪽 유튜브 영역 */
		.video-section {
			flex: 1;
			background-color: #000;
			display: flex;
			flex-direction: column;
			position: relative;
			min-width: 0;
		}

		.video-container {
			width: 100%;
			height: 100%;
			display: flex;
			flex-direction: column;
		}

		.youtube-embed {
			width: 100%;
			height: 100%;
			border: none;
		}

		.video-placeholder {
			width: 100%;
			height: 100%;
			background-color: #1a1a1a;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;

		}

		.play-icon {
			width: 80px;
			height: 80px;
			background-color: rgba(255, 255, 255, 0.1);
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			margin-bottom: 20px;
			cursor: pointer;
			transition: all 0.3s ease;
		}

		.play-icon:hover {
			background-color: rgba(255, 255, 255, 0.2);
			transform: scale(1.1);
		}

		.play-icon::after {
			content: '';
			width: 0;
			height: 0;
			
			border-top: 12px solid transparent;
			border-bottom: 12px solid transparent;
			margin-left: 5px;
		}

		.video-title {
			color: #FF3097;
			font-size: 18px;
			text-align: center;
			max-width: 80%;
		}

		/* 오른쪽 정보 패널 */
		.info-section {
			width: 380px;
			background-color: #222;
			display: flex;
			flex-direction: column;
			box-shadow: -2px 0 10px rgba(0,0,0,0.1);
		}

		.info-header {
			padding: 20px;
			background-color: #000;
			color: white;
			display: flex;
			justify-content: space-between;
			align-items: center;
			flex-wrap: wrap;
			gap: 10px;
		}

		.info-header h2 {
			font-size: 20px;
			font-weight: 600;
			margin: 0;
		}

		.file-controls {
			display: flex;
			gap: 10px;
			align-items: center;
		}
.down-button {
			background-color: #E929C6;
			color: white;
			border: none;
			padding: 8px 12px;
			border-radius: 4px;
			cursor: pointer;
			font-size: 10px;
			transition: background-color 0.3s;
		}

		.file-button {
			background-color: #553;
			color: white;
			border: none;
			padding: 8px 12px;
			border-radius: 4px;
			cursor: pointer;
			font-size: 10px;
			transition: background-color 0.3s;
		}

		.file-button:hover {
			background-color: #2980b9;
		}

		.file-button:disabled {
			background-color: #7f8c8d;
			cursor: not-allowed;
		}

		.file-status {
			font-size: 10px;
			color: #bdc3c7;
		}

		.info-content {
			flex: 1;
			overflow-y: auto;
			padding: 0;
		}

		.info-item {
			padding: 16px 20px;
			border-bottom: 1px solid #414141;
			transition: background-color 0.2s ease;
			cursor: pointer;
			background-color: #19191D;
		}

		.info-item:hover {
			background-color: #000;
		}

		.info-item:last-child {
			border-bottom: 1px;
		}

		.time-stamp {
			color: #FF7B1C;
			font-weight: 200;
			font-size: 14px;
			margin-bottom: 8px;
		}

		.category {
			color: #3498db;
			font-size: 12px;
			text-transform: uppercase;
			letter-spacing: 0.5px;
			margin-bottom: 6px;
		}

		.description {
			color: #fff;
			font-weight: bold;
			font-size: 14px;
			line-height: 1.4;
			margin-bottom: 8px;
		}

		.shortcut {
			background-color: #ecf0f1;
			color: #7f8c8d;
			font-size: 12px;
			padding: 4px 8px;
			border-radius: 4px;
			font-family: 'Courier New', monospace;
			display: inline-block;
		}

		/* 스크롤바 스타일링 */
		.info-content::-webkit-scrollbar {
			width: 6px;
		}

		.info-content::-webkit-scrollbar-track {
			background-color: #f1f1f1;
		}

		.info-content::-webkit-scrollbar-thumb {
			background-color: #c1c1c1;
			border-radius: 3px;
		}

		.info-content::-webkit-scrollbar-thumb:hover {
			background-color: #a8a8a8;
		}

		/* 네비게이션 박스 */
		.navigation-box {
			position: fixed;
			bottom: 0;
			left: 0;
			right: 0;
			height: 70px;
			background-color: #000;
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 30px;
			z-index: 1000;
			border-top: 1px solid #333;
		}

		.nav-button {
			width: 45px;
			height: 45px;
			border-radius: 50%;
			border: 1px solid #00D0FF;
			background-color: #000;
			color: #00D0FF;
			cursor: pointer;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 18px;
			font-weight: bold;
			transition: all 0.3s ease;
			text-decoration: none;
		}

		.nav-button:hover {
			background-color: #3498db;
			color: #000;
			transform: scale(1.1);
		}

		.nav-button:active {
			transform: scale(0.95);
		}

		.nav-button:disabled {
			border-color: #555;
			color: #555;
			cursor: not-allowed;
			transform: none;
		}

		.nav-button:disabled:hover {
			background-color: #000;
			color: #555;
			transform: none;
		}

		.week-label {
			font-size: 18px;
			font-weight: 600;
			color: white;
			min-width: 80px;
			text-align: center;
		}

		/* 반응형 네비게이션 */
		@media (max-width: 768px) {
			.main-container {
				height: calc(100vh - 60px);
			}
			
			.navigation-box {
				height: 60px;
				gap: 20px;
			}
			
			.nav-button {
				width: 40px;
				height: 40px;
				font-size: 16px;
			}
			
			.week-label {
				font-size: 16px;
				min-width: 70px;
			}
			
			/* 반응형 디자인 */
			@media (max-width: 768px) {
				.container {
					flex-direction: column;
				}
				
				.video-section {
					height: 50%;
				}
				
				.info-section {
					width: 100%;
					height: 50%;
				}
			}
		}
	</style>
</head>
<body>
	<div class="main-container">
		<div class="container">
		<!-- 왼쪽 유튜브 영역 -->
		<div class="video-section">
			<div class="video-container">
				<!-- 실제 YouTube 동영상을 넣을 때는 이 주석을 해제하고 VIDEO_ID를 바꾸세요 -->
				<iframe class="youtube-embed" 
						 src="https://www.youtube.com/embed/ZJNT8cCfKrA?autoplay=0&controls=1&rel=0&showinfo=0&modestbranding=1&enablejsapi=1"
						 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						 allowfullscreen>
				</iframe> 
				
				<!-- 임시 플레이스홀더 (실제 사용시 위의 iframe과 교체) -->
				<!-- <div class="video-placeholder">
					<div class="play-icon"></div>
					<div class="video-title">YouTube 동영상 영역<br><small style="font-size: 12px; opacity: 0.7;">iframe 코드로 교체하세요</small></div>
				</div> -->
			</div>
		</div>

		<!-- 오른쪽 정보 패널 -->
		<div class="info-section">
			<div class="info-header">
				<h2>1주차 자료집</h2>
				<div class="file-controls">
					<a href="https://unrealsummit16.cafe24.com/2025/start_twinunreal/lets_start_Twue1w.pdf" download target="_blank">
					<button class="down-button" id="Download">
					다운로드</button></a>
					<button class="file-button" id="refreshBtn">
					새로고침
					</button>
					<div class="file-status" id="fileStatus"> </div>
				</div>
			</div>
			<div class="info-content" id="infoContent">            </div>
		</div>
	</div>
	</div>

	<!-- 네비게이션 박스 -->
	<div class="navigation-box">
		<button class="nav-button" id="prevBtn" disabled title="이전 주차">
			‹
		</button>
		<div class="week-label" id="weekLabel">1주차 | 트윈모션 시작하기</div>
		<button class="nav-button" id="nextBtn" onclick="location.href='https://epiclounge.co.kr/start_lsu2025_review_v2.php'" title="다음 주차">
			›
		</button>
	</div>

	<script>
		// 고정된 구글 시트 URL
		const FIXED_SHEETS_URL = 'https://docs.google.com/spreadsheets/d/1TK0I21rHKBiRRSgfcbMNok12O_FNhhGj1vA6y_sDlAc/edit?usp=sharing';

		// 기본 데이터 (시트 로드 실패 시 사용)
		const defaultData = [
			{ time: "00:00:00", category: "인트로", description: "동영상 소개 및 개요 설명", shortcut: "Space: 재생/일시정지" },
			{ time: "00:02:15", category: "메인 콘텐츠", description: "핵심 내용 시작 - 첫 번째 주제에 대한 상세한 설명과 예시", shortcut: "→: 5초 앞으로" },
			{ time: "00:05:30", category: "예시", description: "실제 사례를 통한 설명 및 데모", shortcut: "←: 5초 뒤로" },
			{ time: "00:08:45", category: "심화 학습", description: "고급 기능과 팁, 효율적인 사용법", shortcut: "↑: 볼륨 높이기" }
		];

		// 시간 문자열을 초로 변환하는 함수 (HH:MM:SS 또는 MM:SS 지원)
		function timeToSeconds(timeStr) {
			const parts = timeStr.split(':').map(Number);
			if (parts.length === 3) {
				// HH:MM:SS 형식
				return parts[0] * 3600 + parts[1] * 60 + parts[2];
			} else if (parts.length === 2) {
				// MM:SS 형식 (하위 호환성)
				return parts[0] * 60 + parts[1];
			}
			return 0;
		}

		// YouTube iframe에 시간 이동 명령 보내기
		function seekToTime(seconds) {
			const iframe = document.querySelector('.youtube-embed');
			if (iframe) {
				iframe.contentWindow.postMessage(
					'{"event":"command","func":"seekTo","args":[' + seconds + ', true]}',
					'*'
				);
			}
		}

		// 정보 아이템 HTML 생성
		function createInfoItem(data) {
			return `
				<div class="info-item">
					<div class="time-stamp">${data.time}</div>
					<div class="category">${data.category || ''}</div>
					<div class="description">${data.description}</div>
					${data.shortcut ? `<div class="shortcut">${data.shortcut}</div>` : ''}
				</div>
			`;
		}

		// 정보 패널 렌더링
		function renderInfoPanel(data) {
			const infoContent = document.getElementById('infoContent');
			infoContent.innerHTML = data.map(createInfoItem).join('');
			
			// 클릭 이벤트 다시 바인딩
			bindClickEvents();
		}

		// 클릭 이벤트 바인딩
		function bindClickEvents() {
			document.querySelectorAll('.info-item').forEach(item => {
				item.addEventListener('click', function() {
					// 기존 선택 해제
					document.querySelectorAll('.info-item').forEach(i => {
						i.style.backgroundColor = '';
						i.style.borderLeft = '';
					});
					
					// 현재 선택 항목 하이라이트
					this.style.backgroundColor = '#1D1D1D';
					this.style.borderLeft = '5px solid #FF3097';
					
					// 시간 정보 가져오기 및 이동
					const timeStamp = this.querySelector('.time-stamp').textContent;
					const seconds = timeToSeconds(timeStamp);
					
					console.log(`${timeStamp} (${seconds}초)로 이동`);
					seekToTime(seconds);
					
					// 시각적 피드백
					this.style.transform = 'scale(0.95)';
					setTimeout(() => {
						this.style.transform = 'scale(1)';
					}, 150);
				});
			});
		}

		// 구글 시트 URL을 CSV URL로 변환
		function convertToCSVUrl(sheetsUrl) {
			try {
				// 구글 시트 ID 추출
				const match = sheetsUrl.match(/\/spreadsheets\/d\/([a-zA-Z0-9-_]+)/);
				if (match) {
					const sheetId = match[1];
					return `https://docs.google.com/spreadsheets/d/${sheetId}/export?format=csv&gid=0`;
				}
				throw new Error('올바른 구글 시트 URL이 아닙니다.');
			} catch (error) {
				throw error;
			}
		}

		// 구글 시트에서 데이터 로드
		async function loadGoogleSheets() {
			const refreshBtn = document.getElementById('refreshBtn');
			const status = document.getElementById('fileStatus');
			
			try {
				refreshBtn.disabled = true;
				refreshBtn.textContent = '로딩...';
				status.textContent = '데이터 로딩 중...';

				const csvUrl = convertToCSVUrl(FIXED_SHEETS_URL);
				
				const response = await fetch(csvUrl);
				if (!response.ok) {
					throw new Error(`HTTP ${response.status}: 시트를 불러올 수 없습니다.`);
				}
				
				const csvText = await response.text();
				const data = parseCSVData(csvText);
				
				if (data.length === 0) {
					throw new Error('시트에서 데이터를 찾을 수 없습니다.');
				}

				renderInfoPanel(data);
				status.textContent = ` (${data.length}개 항목)`;
				
				console.log('로드 완료:', data.length + '개 항목');
				
			} catch (error) {
				console.error('구글 시트 로드 오류:', error);
				status.textContent = '로드 실패 - 기본 데이터 사용';
				renderInfoPanel(defaultData);
				console.log('기본 데이터로 대체:', error.message);
			} finally {
				refreshBtn.disabled = false;
				refreshBtn.textContent = '새로고침';
			}
		}

		// CSV 데이터 파싱
		function parseCSVData(csvText) {
			const lines = csvText.split('\n').filter(line => line.trim());
			if (lines.length <= 1) return [];
			
			// 첫 번째 줄은 헤더로 건너뛰기
			const dataLines = lines.slice(1);
			
			return dataLines.map(line => {
				// CSV 파싱 (간단한 버전)
				const parts = parseCSVLine(line);
				return {
					time: (parts[0] || '00:00:00').trim(),
					category: (parts[1] || '').trim(),
					description: (parts[2] || '').trim(),
					shortcut: (parts[3] || '').trim()
				};
			}).filter(item => item.time); // 시간이 있는 것만 필터링
		}

		// CSV 라인 파싱 (간단한 구현)
		function parseCSVLine(line) {
			const result = [];
			let current = '';
			let inQuotes = false;
			
			for (let i = 0; i < line.length; i++) {
				const char = line[i];
				
				if (char === '"') {
					inQuotes = !inQuotes;
				} else if (char === ',' && !inQuotes) {
					result.push(current);
					current = '';
				} else {
					current += char;
				}
			}
			result.push(current);
			
			return result.map(item => item.replace(/^"|"$/g, ''));
		}

		// 이벤트 리스너 설정
		document.addEventListener('DOMContentLoaded', function() {
			const refreshBtn = document.getElementById('refreshBtn');

			// 새로고침 버튼
			refreshBtn.addEventListener('click', function() {
				loadGoogleSheets();
			});

			// 페이지 로드 시 자동으로 시트 데이터 로드
			setTimeout(() => loadGoogleSheets(), 500);
		});

		// 비디오 플레이 버튼 클릭
		const playButton = document.querySelector('.play-icon');
		if (playButton) {
			playButton.addEventListener('click', function() {
				this.style.transform = 'scale(0.95)';
				setTimeout(() => {
					this.style.transform = 'scale(1.1)';
				}, 150);
			});
		}
	</script>
	<script>
	  $(function() {
		setLogin();
		// 전화번호 숫자만 입력
		$("input:text[numberOnly]").on("keyup", function() {
			$(this).val($(this).val().replace(/[^0-9]/g,""));
		});
	  });
	
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
			var form = document.forms['login-form'];
			if ($('#login-form').valid()) { // test for validity
			  if (form.apply_user_name.value == "") {
				alert("이름을 입력해 주세요.");
				form.apply_user_name.focus();
				return false;
			  } else if (form.apply_user_phone.value == "") {
				alert("연락처를 입력해 주세요.");
				form.apply_user_phone.focus();
				return false;
			  } else if (form.apply_user_company.value == "") {
				alert("회사명을 입력해 주세요.");
				form.apply_user_company.focus();
				return false;
			  } else if (form.apply_user_depart.value == "") {
				alert("부서를 입력해 주세요.");
				form.apply_user_depart.focus();
				return false;
			  } else if (form.apply_user_grade.value == "") {
				alert("분류를 선택해 주세요.");
				form.apply_user_grade.focus();
				return false;
			  } else if (form.apply_content.value == "") {
				alert("내용을 입력해 주세요.");
				form.apply_content.focus();
				return false;
			  }
			  
			  var gsWin = window.open("about:blank", "winName");
			  form.target="winName";
			  form.submit();
			  
			  form.apply_user_name.value = '';
			  form.inputEmail.value = '';
			  form.apply_user_phone.value = '';
			  form.apply_user_company.value = '';
			  form.apply_user_depart.value = '';
			  form.apply_user_grade.value = '';
			  form.apply_content.value = '';
			} else {
				// do stuff if form is not valid
			}
		});
	  }
	</script>
</body>
</html>