<?php
include_once ('./_common.php');
include_once (G5_LIB_PATH . '/r2.lib.php');

if (!defined('R2_ACCESS_KEY_ID') || !defined('R2_ACCOUNT_ID')) {
    die(json_encode(['error' => 'R2 설정이 올바르지 않습니다.']));
}

if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    die(json_encode(['error' => '파일 업로드 에러: ' . ($_FILES['file']['error'] ?? 'No file')]));
}

$file = $_FILES['file'];
$content_type = $file['type'];

// 실제 MIME 타입 검증 (서버 측)
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$detected_type = finfo_file($finfo, $file['tmp_name']);
finfo_close($finfo);

// 파일 크기 검증 (100MB 제한)
if ($file['size'] > 100 * 1024 * 1024) {
    die(json_encode(['error' => '파일 크기는 100MB 이하여야 합니다.']));
}

// 허용된 MIME 타입 검증 (더 넓은 범위)
$allowed_types = [
    'image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp', 'image/svg+xml',
    'video/mp4', 'video/webm', 'video/quicktime', 'video/x-msvideo', 'video/mpeg'
];

// MIME 타입이 정확히 일치하지 않으면 파일 확장자로도 체크
$file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
$allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'mp4', 'webm', 'mov', 'avi', 'mpeg'];

$is_valid = in_array($detected_type, $allowed_types) || in_array($file_ext, $allowed_extensions);

if (!$is_valid) {
    error_log('R2 Upload - Invalid file type. Detected: ' . $detected_type . ', Extension: ' . $file_ext);
    die(json_encode(['error' => '허용되지 않는 파일 형식입니다. (감지된 타입: ' . $detected_type . ')']));
}

// 경로 분류 (이미지 vs 영상)
$sub_path = 'others/';  // 기본값
if (strpos($detected_type, 'image') !== false || in_array($file_ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'])) {
    $sub_path = 'main_image/';
} else if (strpos($detected_type, 'video') !== false || in_array($file_ext, ['mp4', 'webm', 'mov', 'avi', 'mpeg'])) {
    $sub_path = 'main_movie/';
}

$filename = $sub_path . time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', basename($file['name']));
$file_path = $file['tmp_name'];

// SVG 파일의 경우 명시적으로 Content-Type 설정
$upload_content_type = $detected_type;
if ($file_ext === 'svg') {
    $upload_content_type = 'image/svg+xml';
}

// R2 Upload logic (S3 API compatible)
try {
    $result_url = r2_upload_file($file_path, $filename, $upload_content_type);
    echo json_encode(['url' => $result_url]);
} catch (Exception $e) {
    error_log('R2 Upload Error: ' . $e->getMessage());
    echo json_encode(['error' => 'R2 업로드 실패: ' . $e->getMessage()]);
}
?>
