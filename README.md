# EPICLOUNGE26 프로젝트 구조 및 가이드

이 프로젝트는 Unreal Engine 관련 이벤트(Unreal Fest, Unreal Summit 등)를 관리하기 위한 웹 플랫폼으로, 그누보드 5(G5) 프레임워크를 기반으로 구축되었습니다.

## 서버 환경

- **Language**: PHP 7.0
- **Database**: MariaDB 10.x
- **Framework**: GnuBoard 5 (G5)
- **Hosting**: Cafe24
- **Asset Hosting (Images/Videos)**: [https://unrealsummit16.cafe24.com/](https://unrealsummit16.cafe24.com/)

## /v3 디렉토리 구조 및 기능

`/v3` 폴더는 애플리케이션의 핵심 로직과 자산을 포함하고 있습니다.

### 주요 디렉토리

- **`adm/`**: 관리자 인터페이스 및 관리 도구.
- **`bbs/`**: 게시판 시스템 (G5 코어).
- **`data/`**: 사용자 업로드 파일, 캐시, 세션 데이터 및 DB 생성 파일.
- **`lib/`**: 핵심 PHP 라이브러리 및 유틸리티 함수.
- **`plugin/`**: 외부 플러그인 (SEO, 소셜 로그인, 에디터 등).
- **`skin/`**: 게시판 및 기타 모듈의 프론트엔드 디자인 템플릿.
- **`theme/`**: 사이트 전반의 테마 설정.
- **`assets/`**: 프론트엔드용 CSS, JavaScript, 이미지 등 정적 자산.

### 주요 기능 파일

- **이벤트 신청 관련**:
  - `application_form.html`: 메인 이벤트 등록 신청서.
  - `application_confirm.html`: 등록 확인 페이지.
  - `application_modify.html`: 사용자 정보 수정 페이지.
  - `application_cert.html`: 수료증 발급 로직.
- **이벤트 랜딩 페이지**:
  - `index_*.php`: 특정 이벤트에 맞춤화된 다양한 랜딩 페이지 (예: `index_lounge.php`, `index_chall.php`).
  - `unrealfest*.php`: 언리얼 페스트 전용 페이지.
  - `unrealsummit*.php`: 언리얼 서밋 전용 페이지.
- **라이브 스트리밍**:
  - `live_channel*.html`: 실시간 이벤트 방송을 위한 전용 페이지.

---

---

## 최근 업데이트 내역 (2026.01)

### 1. 관리자 UI/UX 전면 개편 (Modernization)

- **현대적인 다크 테마 적용**: Slate 900 기반의 세련된 다크 모드 사이드바 디자인 (`admin_modern_sidebar.css`).
- **아코디언 메뉴 (Collapsible)**: 이벤트 관리 등 계층 구조가 복잡한 메뉴를 접고 펼 수 있는 아코디언 기능 구현.
- **SVG 아이콘 시스템**: 각 메뉴 카테고리별 직관적인 SVG 아이콘 도입으로 가독성 향상.
- **세련된 타이포그래피**: `Inter Tight` (영문/숫자) 및 `Noto Sans KR` (한글) 웹 폰트 적용.
- **레이아웃 최적화**: 사이드바 너비를 확장(280px)하고 반응형 요소를 강화하여 고해상도 환경에 최적화.

### 2. 신규 기능 및 관리 도구 고도화

- **주소변환기 (Bitly API v4) 고도화**:
  - 긴 URL을 Bitly API를 통해 즉시 단축 주소로 변환하는 기능.
  - 변환 히스토리 관리 (날짜, 원본 주소, 변환 주소, 메모 기능).
  - 리스트 내 복사/삭제 기능 분리 및 UI 사용성 개선.
- **메뉴 클린화**: `admin.menu*.php` 파일 내의 노후된 인라인 스타일 및 비정상 HTML 코드를 제거하여 유지보수성 향상.

### 3. 메인 비주얼 (Hero Section) 리팩토링 (`index_revnew.php`)

- **Cinematic Hero 디자인**:
  - 기존 정적 슬라이더에서 **영상 중심의 시네마틱 히어로 섹션**으로 전면 개편.
  - 몰입감 있는 전체 화면(Full-width) 디자인 및 세련된 타이포그래피/레이아웃 적용.
- **Swiper.js v11 도입**:
  - 기존 노후화된 Slick Slider를 제거하고 현대적인 **Swiper.js**(`fade` 이펙트)로 교체.
  - 무한 루프(Loop) 시의 끊김 없는(Seamless) 부드러운 전환 구현.
- **GSAP 애니메이션 고도화**:
  - **Ken Burns 효과**: CSS 대신 GSAP을 사용하여 슬라이드 전환 시 배경이 부드럽게 확대되는 시네마틱 모션 구현 (Transition 충격 완화).
  - **텍스트/이미지 모션**: 슬라이드 활성화 시 타이틀과 버튼이 부드럽게 페이드인 되는 인터랙션 적용.
- **UX/UI 최적화**:
  - 네비게이션(Relative Positioning) 개선으로 자연스러운 스크롤 경험 제공.
  - 반응형 이미지 사이즈 최적화 및 고해상도 에셋(SVG/PNG) 구조 복원.
  - 하단 섹션(News 등)과의 간격 및 레이아웃 정합성 확보.

---

## /v3/adm 디렉토리 및 메뉴 구조

관리자 패널은 `admin.menu*.php` 파일에 정의된 여러 모듈로 구성됩니다. 현재 현대적인 UI 프레임워크가 적용되어 있습니다.

### 주요 메뉴군 (GNB)

1. **100 - 환경설정** (Icon: Settings)
   - 기본 환경 설정, 관리 권한 설정, 테마/메뉴 설정 및 팝업 레이어 관리.
2. **200 - 회원관리** (Icon: Users)
   - 회원 목록, 등록 상세 정보 및 접속자 통계 관리.
3. **300 - 게시판관리** (Icon: Clipboard)
   - 게시판 생성/관리, 그룹 설정 및 1:1 문의 관리.
4. **400/500 - 삭제**
   - ~~커머스 기능 (영카트 연동).~~
5. **600 - 리소스관리** (Icon: Layers)
   - 사이트 메인 비주얼, 새소식, 다시보기, 무료콘텐츠 및 백서 관리.
6. **700 - 이벤트관리 [핵심]** (Icon: Calendar)
   - **UE57 / 시작해요 25 / UE FEST 25**: 연도별/이벤트별 통합 관리 (신청목록, 라이브 접속 로그, 잔여석, 쿠폰 등).
   - **챌린지 시리즈**: 언리얼 챌린지 이벤트 데이터 관리.
7. **900 - 주소변환기** (Icon: Link)
   - Bitly API를 활용한 URL 단축 및 변환 작업 관리.

### 핵심 관리 자산

- **`css/admin_modern_sidebar.css`**: 관리자 페이지의 핵심 모던 디자인 시스템 정의.
- **`admin.head.php`**: GNB 렌더링, 아코디언 로직 및 SVG 아이콘 주입 처리.
- **`service_bitly_ajax.php`**: Bitly API 서버 측 연동 스크립트.
- **`export_excel.php`**: 신청자 명단 및 로그 데이터를 엑셀로 추출하는 도구.
