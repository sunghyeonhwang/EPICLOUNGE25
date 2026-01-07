<?php
session_start();

if (!isset($_SESSION['checked_in']) || $_SESSION['checked_in'] !== true) {
	echo "<script>alert('비정상적인 접근입니다. 체크인을 먼저 해주세요.'); location.href='https://epiclounge.co.kr/v3/replay25_check_in.html';</script>";
	exit();
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>시작해요 트윈모션 & 언리얼 2025 다시보기</title>
	<link rel="stylesheet" href="start_lsu2025.css" />

</head>
<body>
	<div class="main-container">
		<div class="container">
		<!-- 왼쪽 유튜브 영역 -->
		<div class="video-section">
			<div class="video-container">
				<!-- 실제 YouTube 동영상을 넣을 때는 이 주석을 해제하고 VIDEO_ID를 바꾸세요 -->
				<iframe class="youtube-embed" 
						 src="https://www.youtube.com/embed/w6Z6YkUpp7o?autoplay=0&controls=1&rel=0&showinfo=0&modestbranding=1&enablejsapi=1"
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
				<h2>3주차 자료집</h2>
				<div class="file-controls">
					<a href="https://unrealsummit16.cafe24.com/2025/start_twinunreal/lets_start_Twue3w.pdf" download target="_blank">
					<button class="down-button" id="Download">
					다운로드</button></a>
					<button class="file-button" id="refreshBtn">
						새로고침
					</button>
					<div class="file-status" id="fileStatus">데이터 로딩 중...</div>
				</div>
			</div>
			<div class="info-content" id="infoContent">            </div>
		</div>
	</div>
	</div>

	<!-- 네비게이션 박스 -->
	<div class="navigation-box">
		<button class="nav-button" id="prevBtn" onclick="location.href='https://epiclounge.co.kr/start_lsu2025_review_v2.php'" title="이전 주차">
			‹
		</button>
		<div class="week-label" id="weekLabel">3주차 | 트윈모션에서 제품 시각화 및 인터랙션 고도화하기</div>
		<button class="nav-button" id="nextBtn" onclick="location.href='https://epiclounge.co.kr/start_lsu2025_review_v4.php'" title="다음 주차">
			›
		</button>
	</div>

	<script>
		// 고정된 구글 시트 URL
		const FIXED_SHEETS_URL = 'https://docs.google.com/spreadsheets/d/1bBfQ2clr8tEEDT5FeycolK-kiRsR2j-wXH_EImbTCg0/edit?usp=sharing';

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
</body>
</html>