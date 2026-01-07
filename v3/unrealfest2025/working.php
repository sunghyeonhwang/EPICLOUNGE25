<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>곧 오픈합니다</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			min-height: 100vh;
			background: linear-gradient(135deg, #2D42DD 0%, #AF47F6 100%);
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			display: flex;
			align-items: center;
			justify-content: center;
			overflow: hidden;
			position: relative;
		}

		.background-animation {
			position: absolute;
			width: 100%;
			height: 100%;
			overflow: hidden;
			z-index: 1;
		}

		.floating-shapes {
			position: absolute;
			background: rgba(255, 255, 255, 0.08);
			border-radius: 50%;
			animation: float ease-in-out infinite;
		}

		/* 랜덤 크기와 위치의 원들 */
		.shape1 { top: 5%; left: 8%; width: 120px; height: 120px; animation: float 8s ease-in-out infinite; animation-delay: 0s; }
		.shape2 { top: 15%; right: 12%; width: 80px; height: 80px; animation: float 6s ease-in-out infinite; animation-delay: 1.5s; }
		.shape3 { top: 35%; left: 5%; width: 60px; height: 60px; animation: float 7s ease-in-out infinite; animation-delay: 3s; }
		.shape4 { top: 25%; right: 25%; width: 140px; height: 140px; animation: float 9s ease-in-out infinite; animation-delay: 2s; }
		.shape5 { top: 55%; left: 15%; width: 90px; height: 90px; animation: float 5s ease-in-out infinite; animation-delay: 4s; }
		.shape6 { top: 45%; right: 8%; width: 110px; height: 110px; animation: float 7.5s ease-in-out infinite; animation-delay: 1s; }
		.shape7 { top: 75%; left: 25%; width: 70px; height: 70px; animation: float 6.5s ease-in-out infinite; animation-delay: 3.5s; }
		.shape8 { top: 65%; right: 30%; width: 50px; height: 50px; animation: float 8.5s ease-in-out infinite; animation-delay: 2.5s; }
		.shape9 { bottom: 25%; left: 8%; width: 100px; height: 100px; animation: float 7s ease-in-out infinite; animation-delay: 5s; }
		.shape10 { bottom: 15%; right: 15%; width: 85px; height: 85px; animation: float 6s ease-in-out infinite; animation-delay: 0.5s; }
		.shape11 { bottom: 35%; left: 35%; width: 65px; height: 65px; animation: float 9s ease-in-out infinite; animation-delay: 4.5s; }
		.shape12 { bottom: 5%; right: 5%; width: 130px; height: 130px; animation: float 5.5s ease-in-out infinite; animation-delay: 1.8s; }
		.shape13 { top: 8%; left: 40%; width: 75px; height: 75px; animation: float 7.2s ease-in-out infinite; animation-delay: 3.2s; }
		.shape14 { top: 60%; left: 45%; width: 55px; height: 55px; animation: float 8.8s ease-in-out infinite; animation-delay: 2.8s; }
		.shape15 { bottom: 40%; right: 45%; width: 95px; height: 95px; animation: float 6.8s ease-in-out infinite; animation-delay: 4.2s; }

		@keyframes float {
			0%, 100% { 
				transform: translateY(0px) rotate(0deg) scale(1); 
				opacity: 0.8;
			}
			50% { 
				transform: translateY(-30px) rotate(180deg) scale(1.1); 
				opacity: 0.4;
			}
		}

		.container {
			text-align: center;
			color: white;
			z-index: 10;
			position: relative;
			padding: 2rem;
			backdrop-filter: blur(10px);
			background: rgba(255, 255, 255, 0.1);
			border-radius: 20px;
			border: 1px solid rgba(255, 255, 255, 0.2);
			box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
			max-width: 600px;
			width: 90%;
			animation: slideIn 1s ease-out;
		}

		@keyframes slideIn {
			from {
				opacity: 0;
				transform: translateY(50px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.logo {
			margin-bottom: 2rem;
			animation: pulse 2s ease-in-out infinite;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.logo img {
			max-width: 300px;
			height: auto;
			filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.3));
		}

		@keyframes pulse {
			0%, 100% { transform: scale(1); }
			50% { transform: scale(1.05); }
		}

		.main-text {
			font-size: 2.5rem;
			font-weight: 300;
			margin-bottom: 0.5rem;
			letter-spacing: 2px;
		}

		.subtitle {
			font-size: 1.2rem;
			opacity: 0.9;
			margin-bottom: 3rem;
			line-height: 1.6;
		}

		.countdown {
			display: flex;
			justify-content: center;
			gap: 2rem;
			margin-bottom: 3rem;
			flex-wrap: wrap;
		}

		.time-unit {
			background: rgba(255, 255, 255, 0.15);
			padding: 1.5rem 1rem;
			border-radius: 15px;
			min-width: 100px;
			border: 1px solid rgba(255, 255, 255, 0.3);
			backdrop-filter: blur(5px);
			transition: transform 0.3s ease;
		}

		.time-unit:hover {
			transform: translateY(-5px);
		}

		.time-number {
			font-size: 3rem;
			font-weight: bold;
			display: block;
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
		}

		.time-label {
			font-size: 0.9rem;
			opacity: 0.8;
			text-transform: uppercase;
			letter-spacing: 1px;
			margin-top: 0.5rem;
		}

		.progress-bar {
			width: 100%;
			height: 8px;
			background: rgba(255, 255, 255, 0.2);
			border-radius: 10px;
			overflow: hidden;
			margin-bottom: 2rem;
		}

		.progress-fill {
			height: 100%;
			background: linear-gradient(90deg, #ff6b6b, #ffd93d);
			border-radius: 10px;
			transition: width 1s ease;
			box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
		}

		.notification {
			background: rgba(255, 255, 255, 0.1);
			padding: 1rem;
			border-radius: 10px;
			border-left: 4px solid #ffd93d;
			margin-top: 2rem;
			font-size: 1rem;
			line-height: 1.5;
		}

		.icon {
			font-size: 1.5rem;
			margin-right: 0.5rem;
		}

		@media (max-width: 768px) {
			.main-text {
				font-size: 2rem;
			}
			
			.countdown {
				gap: 1rem;
			}
			
			.time-unit {
				min-width: 80px;
				padding: 1rem 0.5rem;
			}
			
			.time-number {
				font-size: 2.5rem;
			}
			
			.logo img {
				max-width: 250px;
			}
		}

		.completed {
			font-size: 2rem;
			color: #4CAF50;
			font-weight: bold;
			animation: celebration 1s ease-in-out infinite alternate;
		}

		@keyframes celebration {
			from { transform: scale(1); }
			to { transform: scale(1.1); }
		}
	</style>
</head>
<body>
	<div class="background-animation">
		<div class="floating-shapes shape1"></div>
		<div class="floating-shapes shape2"></div>
		<div class="floating-shapes shape3"></div>
		<div class="floating-shapes shape4"></div>
		<div class="floating-shapes shape5"></div>
		<div class="floating-shapes shape6"></div>
		<div class="floating-shapes shape7"></div>
		<div class="floating-shapes shape8"></div>
		<div class="floating-shapes shape9"></div>
		<div class="floating-shapes shape10"></div>
		<div class="floating-shapes shape11"></div>
		<div class="floating-shapes shape12"></div>
		<div class="floating-shapes shape13"></div>
		<div class="floating-shapes shape14"></div>
		<div class="floating-shapes shape15"></div>
	</div>

	<div class="container">
		<div class="logo">
			<img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/member_top_text.svg" alt="로고" />
		</div>
		<h1 class="main-text">00시 15분 오픈 예정</h1>
		<p class="subtitle">
			<span class="icon">✨</span>
			새로운 경험을 준비하고 있습니다<br>
			<span class="icon">🕐</span>현재 시간: <span id="currentTime"></span>
		</p>

		<div class="progress-bar">
			<div class="progress-fill" id="progressFill"></div>
		</div>

		<div class="countdown" id="countdown">
			<!-- 동적으로 생성됩니다 -->
		</div>

		<div class="notification">
			<span class="icon">🔔</span>
			<strong>알림:</strong> 페이지가 자동으로 새로고침되어 최신 내용을 보여드릴 예정입니다.
		</div>
	</div>

	<script>
		// 오늘 00시 15분으로 설정
		const today = new Date();
		let targetTime = new Date(today);
		targetTime.setHours(0, 15, 0, 0); // 00시 15분 00초
		
		// 만약 현재 시간이 이미 00시 15분을 넘었다면 다음날 00시 15분으로 설정
		if (targetTime.getTime() <= today.getTime()) {
			targetTime.setDate(targetTime.getDate() + 1);
		}
		
		const endTime = targetTime.getTime();
		const totalDuration = endTime - new Date().getTime(); // 남은 시간 전체

		function updateCurrentTime() {
			const now = new Date();
			const timeString = now.toLocaleTimeString('ko-KR', {
				hour: '2-digit',
				minute: '2-digit',
				second: '2-digit',
				hour12: false
			});
			document.getElementById('currentTime').textContent = timeString;
		}

		function updateCountdown() {
			const now = new Date().getTime();
			const timeLeft = endTime - now;

			if (timeLeft > 0) {
				const hours = Math.floor(timeLeft / (1000 * 60 * 60));
				const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
				const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

				// 시간 단위 표시 업데이트
				if (hours > 0) {
					document.getElementById('countdown').innerHTML = `
						<div class="time-unit">
							<span class="time-number">${String(hours).padStart(2, '0')}</span>
							<div class="time-label">시간</div>
						</div>
						<div class="time-unit">
							<span class="time-number">${String(minutes).padStart(2, '0')}</span>
							<div class="time-label">분</div>
						</div>
						<div class="time-unit">
							<span class="time-number">${String(seconds).padStart(2, '0')}</span>
							<div class="time-label">초</div>
						</div>
					`;
				} else {
					document.getElementById('countdown').innerHTML = `
						<div class="time-unit">
							<span class="time-number">${String(minutes).padStart(2, '0')}</span>
							<div class="time-label">분</div>
						</div>
						<div class="time-unit">
							<span class="time-number">${String(seconds).padStart(2, '0')}</span>
							<div class="time-label">초</div>
						</div>
					`;
				}

				// 진행률 계산
				const elapsed = totalDuration - timeLeft;
				const progress = Math.max(0, (elapsed / totalDuration) * 100);
				document.getElementById('progressFill').style.width = progress + '%';
			} else {
				// 카운트다운 완료
				document.getElementById('countdown').innerHTML = '<div class="completed">🎉 오픈되었습니다! 🎉</div>';
				document.getElementById('progressFill').style.width = '100%';
				
				// 3초 후 페이지 새로고침
				setTimeout(() => {
					window.location.reload();
				}, 3000);
			}
		}

		// 현재 시간과 카운트다운 업데이트
		updateCurrentTime();
		updateCountdown();
		
		// 1초마다 업데이트
		setInterval(() => {
			updateCurrentTime();
			updateCountdown();
		}, 1000);

		// 페이지 로드 애니메이션
		window.addEventListener('load', () => {
			document.querySelector('.container').style.opacity = '1';
		});
	</script>
</body>
</html>