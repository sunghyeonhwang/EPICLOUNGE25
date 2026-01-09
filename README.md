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

### 4. 메인 비주얼 네비게이션 및 디자인 고도화 (2026.01.08)

- **디자인 실험 및 적용**:
  - **Material Design**: 헤더(Header) 및 서브 메뉴에 Glassmorphism(Blur + 투명도) 및 Soft Shadow 적용.
  - **버튼 스타일링**: Outline 스타일(1px Border) 및 반응형 호버 효과 적용.
- **네비게이션 인터페이스 고도화 시도**:
  - **Analog Clock Navigation**: 슬라이드 시간을 시각적으로 보여주는 아날로그 시계 형태의 SVG 페이지네이션 구현 시도.
  - **Shrinking Progress Bar**: 시간이 지남에 따라 줄어드는 막대형 프로그레스 바 구현 시도.
  - **최종 결정**: 다양한 실험 끝에 시인성과 사용자 경험을 위해 가장 직관적인 **기본 Dot 스타일**로 복구.
- **슬라이드 타이밍 최적화**:
  - 첫 번째 슬라이드(UE57) 15초, 이후 슬라이드 7초로 노출 시간 차등 적용.

### 5. 관리자 비주얼 관리 도구 개편 (2026.01.08)

- **어드민 메인 비주얼 관리 (`visual_main.php`) 리팩토링**:
  - **Flat UI 디자인 시스템 적용**: 기존 테이블 레이아웃을 버리고 모던한 **카드형 UI**로 전면 개편. 그림자를 제거하고 테두리(Border)와 배경색 조합을 통한 Clean 스코핑 적용.
  - **드래그 앤 드롭 순서 변경**: jQuery UI Sortable을 연동하여 카드를 드래그하여 직관적으로 순서를 변경하고, DB 내 `vm_order`가 자동 동기화되도록 구현.
  - **필드 및 기능 최적화**:
    - 미디어 타입을 Video로 고정하고 불필요한 선택 옵션 제거.
    - 노출 상태를 아이폰 스타일의 **토글 스위치**로 직관화.
    - 노출 시간 설정을 '초' 단위로 입력 가능하게 개선 (백엔드에서 밀리초 자동 변환).
  - **시인성 강화**:
    - 업로드 버튼에 대비되는 배경색(#707070) 적용 및 전용 아이콘 배치.
    - 미리보기 영역 배경을 어둡게(#333) 처리하여 화이트 톤 에셋 확인 용이하게 개선.
    - 우측 삭제 버튼을 레드 톤(#EF4444)으로 강조하여 오클릭 방지.
  - **대시보드 요약 정보**: 상단에 전체/노출/숨김 슬라이드 개수를 한눈에 보는 요약 섹션 추가.
  - **피그마 매뉴얼 연동**: 운영 편의를 위해 상단에 피그마 수정 템플릿 바로가기 버튼 및 복사하기 기능 링크 배치.
- **안정성 및 유지보수성 확보**:
  - `admin.head.php` 인클루드 위치 최적화로 세션 끊김 방지 및 관리자 메뉴 정합성 확보.
  - CSS Scope를 `.vm-container`로 제한하여 관리자 공통 디자인(로그인 등) 간섭 원천 차단.
  - `admin.menu900.php` 메뉴 하이라이트 오류(ID 불일치) 수정.

### 6. Cloudflare R2 통합 및 파일 업로드 시스템 구축 (2026.01.09)

- **Cloudflare R2 Object Storage 통합**:

  - **AWS S3 호환 API 연동**: Cloudflare R2 버킷(`epiclounge-assets`)을 AWS S3 Signature Version 4 인증 방식으로 연동하여 안전하게 파일 업로드.
  - **r2_config.php 설정 파일**:
    - Account ID, Access Key, Secret Key 등 R2 API 인증 정보 중앙 관리.
    - 커스텀 도메인(`files.epiclounge.co.kr`) 및 기본 경로(`mainvisual`) 설정.
    - `.gitignore`에 등록하여 보안 유지.
  - **r2_uploader.php 업로드 핸들러**:
    - PHP 7 호환 cURL 기반 S3 API 직접 구현 (AWS SDK 불사용).
    - MIME 타입 검증(`finfo`) 및 파일 확장자 이중 체크로 보안 강화.
    - 이미지(`main_image/`), 영상(`main_movie/`), 기타(`others/`) 자동 분류 업로드.
    - 파일 크기 제한 (100MB) 및 허용 파일 타입 화이트리스트 검증.
    - S3 Virtual-Hosted-Style 엔드포인트 구조 적용 (`bucket.account_id.r2.cloudflarestorage.com`).

- **비주얼 관리 UI 파일 업로드 기능 통합**:

  - **AJAX 기반 R2 업로드**:
    - `visual_main.php`에서 "R2 업로드" 버튼 클릭 시 파일 선택 후 즉시 R2 버킷에 업로드.
    - 업로드 완료 시 URL을 입력 필드에 자동 입력하고 초록색 하이라이트 피드백 제공.
    - 페이지 리로드 없이 미리보기 영역을 동적으로 업데이트 (`update_preview()` 함수).
  - **동적 미리보기 시스템**:
    - 업로드한 이미지/영상을 즉시 미리보기 영역에 렌더링.
    - 영상의 경우 재생/일시정지 컨트롤 버튼 제공 (`toggle_vid()` 함수).
    - 파일 확장자 기반 타입 판별 (mp4, webm, jpg, png, gif, webp, svg 등).

- **데이터베이스 구조 자동 검증 및 복구**:

  - **동적 스키마 검증**:
    - `visual_main.php` 로드 시 `v3_visual_main` 테이블 존재 여부 확인 (`SHOW TABLES`).
    - 테이블이 없으면 전체 구조를 자동 생성 (11개 컬럼 포함).
  - **누락 컬럼 자동 추가**:
    - `SHOW COLUMNS`로 현재 테이블 구조 확인.
    - `vm_bg_type`, `vm_title_img`, `vm_title_text`, `vm_reg_dt` 등 누락된 컬럼 자동 `ALTER TABLE` 실행.
    - 기존 데이터 보존하면서 스키마 업그레이드 가능.
  - **에러 처리**:
    - ERROR 1050 (테이블 중복 생성) 및 ERROR 1054 (Unknown column) 완전 해결.
    - `@sql_query()`로 경고 억제 처리.

- **슬라이드 추가 프로세스 개선**:

  - **AJAX 기반 슬라이드 추가**:
    - 기존 GET 방식의 페이지 리다이렉트 제거.
    - `visual_main_process.php` 생성하여 POST 기반 AJAX 엔드포인트 구현.
    - JSON 응답 (`success`, `message`, `vm_id`) 반환.
  - **페이지 깜박임 제거**:
    - `add_new_slide()` 함수에서 AJAX 요청 후 `location.reload()`로 새 슬라이드 표시.
    - 기존 GET 방식의 `alert()` 팝업 및 페이지 전환 깜박임 완전 제거.
  - **순서 자동 관리**:
    - 새 슬라이드 추가 시 기존 슬라이드의 `vm_order`를 +1씩 자동 증가.
    - 신규 슬라이드는 항상 첫 번째(`vm_order = 1`) 위치에 삽입.

- **보안 및 에러 처리**:

  - **XSS/SQL Injection 방지**:
    - 파일명 sanitize (`preg_replace('/[^a-zA-Z0-9._-]/', '')`).
    - URL 파라미터 검증 및 `clean_xss_tags()` 활용.
  - **상세 에러 로깅**:
    - R2 업로드 실패 시 HTTP 상태 코드 및 응답 본문 로깅 (`error_log()`).
    - MySQL 에러 번호 및 메시지를 JSON 응답에 포함하여 디버깅 용이.
  - **권한 체크**:
    - 모든 관리자 페이지에서 로그인 여부 확인 (`$member['mb_id']`).
    - AJAX 엔드포인트에서도 동일한 권한 검증 수행.

- **Cafe24 DNS 연동 및 커스텀 도메인 설정**:

  - **DNS CNAME 레코드 설정**:
    - Cafe24 호스팅 DNS에 `files` 서브도메인 추가.
    - CNAME 값: `pub-e146610a86e7463197d2876a9fc65330.r2.dev` (R2 Public Development URL).
  - **Cloudflare R2 Custom Domain 연결**:
    - R2 버킷 설정에서 `files.epiclounge.co.kr` 커스텀 도메인 연결.
    - DNS 전파 후 `https://files.epiclounge.co.kr/mainvisual/...` 형식으로 파일 접근 가능.
  - **Public Access 설정**:
    - R2 버킷의 Public Access 허용 및 CORS 정책 설정 완료.

- **파일 경로 체계**:

  - **R2 버킷 구조**:
    ```
    epiclounge-assets/
    └── mainvisual/
        ├── main_image/     # 이미지 파일 (jpg, png, gif, webp, svg)
        ├── main_movie/     # 영상 파일 (mp4, webm, mov, avi)
        └── others/         # 기타 파일
    ```
  - **타임스탬프 파일명**:
    - 업로드 시 파일명 앞에 Unix timestamp 추가 (`time() . '_' . filename`).
    - 동일 파일명 충돌 방지 및 버전 관리 용이.

- **신규 파일**:

  - `v3/adm/r2_config.php`: R2 API 인증 정보 및 커스텀 도메인 설정.
  - `v3/adm/r2_uploader.php`: R2 S3 API 업로드 핸들러 (cURL 기반).
  - `v3/adm/visual_main_process.php`: 슬라이드 추가 AJAX 엔드포인트.

- **수정된 파일**:
  - `v3/adm/visual_main.php`:
    - DB 스키마 자동 검증 및 복구 로직 추가 (라인 28-68).
    - R2 업로드 AJAX 통합 (라인 569-642).
    - 동적 미리보기 업데이트 함수 추가 (라인 647-695).
    - 슬라이드 추가 AJAX 함수 구현 (라인 612-634).
  - `.gitignore`: `v3/adm/r2_config.php` 추가하여 API 키 보안 유지.

### 7. 메인 비주얼 슬라이드 고도화 및 최적화 (2026.01.09)

- **UX/UI 사용성 개선**:

  - **반응성 강화**: 슬라이드 전환 속도(`speed: 800ms`)와 텍스트 등장 애니메이션(`duration: 0.5s`)을 대폭 단축하여 쾌적한 조작감 제공.
  - **네비게이션 클릭 수정**: 헤더와 겹침 현상으로 인해 클릭되지 않던 좌우 화살표 버튼의 `z-index` 레이어링 문제 해결.
  - **페이지네이션 개선**:
    - 하단 도트(Bullets)의 클릭 감도 향상: `pointer-events: auto` 적용 및 투명 패딩(Transparent Border) 기법으로 클릭 유효 영역(Hit Area) 확장.
    - 활성 상태(Active) 시 도트 크기가 비정상적으로 커지는 렌더링 오류 수정 (`background-clip` 속성 보존).

- **디자인 및 타이포그래피 리파인**:
  - **메인 타이틀 폰트 교체**: `High1Daylily` 서체 적용 (Weight: 700, Size: 48px)으로 브랜드 아이덴티티 강화 및 가독성 확보.
  - **서브메뉴 스타일링**: Glassmorphism 효과를 위한 백그라운드 불투명도 및 블러 처리 최적화.

### 8. SEO 및 마케팅 관리 시스템 고도화 (2026.01.09)

- **SEO/마케팅 모듈 모듈화 및 격리**:
  - **`marketing_head.php` / `marketing_body.php`**: 기존 `index.php` 등에 산재해있던 GA4, GTM, Meta Pixel 등 트래킹 스크립트와 메타 태그를 전용 파일로 분리.
  - **유연한 적용**: `head.sub26.php` 및 특정 테스트 페이지(`index_test.php`)에만 적용하여 기존 서비스 간섭 최소화.
- **공유 썸네일(OG Image) Cloudflare R2 연동**:
  - **직접 업로드 기능**: 관리자 `seo_config.php`에서 로컬 파일 선택 시 Cloudflare R2 버킷(`epiclounge-assets/mainvisual/og_image/`)으로 자동 전송.
  - **r2.lib.php 공용 라이브러리**: R2 업로드 로직을 함수화하여 프로젝트 전반에서 재사용 가능하도록 구현.
  - **자동 주소 입력**: 업로드 성공 시 연결된 커스텀 도메인(`files.epiclounge.co.kr`)의 URL이 입력 필드에 자동 반영.

### 9. 주소변환기(Bitly) UI/UX 전면 개편 (2026.01.09)

- **인터페이스 현대화**:
  - **Card-based Layout**: 정적인 테이블 기반에서 세련된 카드 레이아웃으로 변경하여 가독성 강화.
  - **입력폼 최적화**: 폰트 크기 상향(16px), 여백 확장 및 커스텀 셀렉트 박스 스타일 적용으로 사용성 개선.
- **도메인 관리 편의성**:
  - **기본 도메인 설정**: 브랜디드 도메인(`link.epiclounge.co.kr`)을 기본값으로 설정.
  - **실시간 피드백**: 변환 성공 시 결과 카드가 애니메이션과 함께 나타나며, 복사 버튼 클릭 시 "복사됨!" 피드백 제공.
- **가독성 및 안정성**:
  - **타이포그래피 보정**: 전체 폰트를 2px씩 상향하여 관리 업무 효율 증대.
  - **렌더링 버그 수정**: 일부 환경에서 선택된 텍스트가 안 보이던 현상 해결 (색상 강제 고정 및 안정적인 정렬 방식 적용).

### 10. 메인 페이지 UI 및 메뉴 성능 최적화 (2026.01.09 - Phase 2)

- **이벤트 섹션 UI 고도화 (`index_test.php`)**:
  - **프리미엄 호버 효과**: 이벤트 썸네일에 마우스를 올릴 때 미세한 확대(Scale) 및 광택(Shimmer) 효과가 적용되는 인터랙션 구현.
  - **디자인 정합성 확보**: 불필요한 그림자(Shadow)를 제거하고 둥근 모서리(Rounded Corners, 10px)를 적용하여 깔끔한 Editorial 스타일 완성.
  - **배경 다크 그라데이션**: `.event_sec`에만 부드러운 다크 그라데이션 선언으로 섹션 간 구분감 및 고급감 부여.
- **네비게이션 메뉴 성능 최적화 (`common26.js`)**:
  - **애니메이션 방식 변경**: 기존 `slideDown`/`slideUp` 방식을 `fadeIn`/`fadeOut`으로 교체하여 브라우저 연산 부하 감소.
  - **반응 속도 개선**: 애니메이션 지속 시간을 300ms에서 **150ms**로 단축하여 즉각적인 피드백(Snappy Feel) 제공.
  - **안전한 스크립트 연결**: 기존 서비스의 안정성을 위해 `common.js`는 원복하고, `index_test.php`에서만 최적화된 **`common26.js`**를 사용하도록 분리 관리.
- **관리자 메뉴 최적화 (`admin.menu700.php`)**:
  - **메뉴 리파인**: 현재 사용하지 않는 'UE57', '챌린지 25' 메뉴를 주석 처리하여 관리 효율 증대.
  - **우선순위 조정**: '언리얼챌린지' 메뉴를 이벤트 관리 최상단으로 이동 배치.
- **시스템 안정성 확보**:
  - **최적화 시도 및 안정적 원복**: Swiper 통합, JS `defer` 처리, 이미지 레이지 로딩 등의 경량화 작업을 테스트했으나, 기존 레거시 구조와의 호환성을 고려하여 가장 안정적인 상태로 원복 완료.


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
