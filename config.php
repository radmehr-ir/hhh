<?php
declare(strict_types=1);

// اطمینان از یکسان بودن منطقه‌ی زمانی PHP با ساعت سرور (جلوگیری از اختلاف زمانی در محاسبات OTP)
date_default_timezone_set('Asia/Tehran');

// --- موقت: نمایش خطاهای PHP برای عیب‌یابی (بعد از رفع مشکل حذف شود) ---
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// --- موقت: نوشتن خطاها در یک فایل مشخص داخل همین پوشه (چون display_errors
// ممکن است روی برخی هاست‌ها توسط تنظیمات سرور قفل شده باشد) ---
ini_set('log_errors', '1');
ini_set('error_log', __DIR__ . '/debug_errors.log');
register_shutdown_function(function () {
    $err = error_get_last();
    if ($err && in_array($err['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR], true)) {
        @file_put_contents(
            __DIR__ . '/debug_errors.log',
            date('Y-m-d H:i:s') . ' FATAL: ' . $err['message'] . ' in ' . $err['file'] . ' on line ' . $err['line'] . PHP_EOL,
            FILE_APPEND
        );
    }
});

define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('DB_NAME') ?: 'radmehr3_telegram_lite');
define('DB_USER', getenv('DB_USER') ?: 'radmehr3_telegram_lite');
define('DB_PASS', getenv('DB_PASS') ?: 'Radmehr1390');

define('APP_BASE_URL', getenv('APP_BASE_URL') ?: 'https://chat.radmehrweb.ir');

define('SMSIR_API_KEY', getenv('SMSIR_API_KEY') ?: 'jeFhLa4ipargWQ7S3yFim5IBOrMe4Oot8wuyilb4twysVvl0');
define('SMSIR_TEMPLATE_ID', (int) (getenv('SMSIR_TEMPLATE_ID') ?: 248498));
define('SMSIR_SEND_URL', 'https://api.sms.ir/v1/send/verify');

define('OTP_LENGTH', 5);
define('OTP_TTL_SECONDS', 120);
define('OTP_RESEND_COOLDOWN', 60);
define('OTP_MAX_ATTEMPTS', 5);
define('VERIFIED_TOKEN_TTL', 600);
define('SESSION_DAYS', 30);

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: https://chat.radmehrweb.ir');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Access-Control-Allow-Credentials: true');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

function json_out(array $data, int $code = 200): never {
    http_response_code($code);
    echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

function db(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        } catch (PDOException $e) {
            json_out(['ok' => false, 'error' => 'db_connection_failed'], 500);
        }
    }
    return $pdo;
}

function input_json(): array {
    $raw = file_get_contents('php://input');
    if ($raw === false || $raw === '') return [];
    $data = json_decode($raw, true);
    return is_array($data) ? $data : [];
}

function absolute_url(?string $path): ?string {
    if (!$path) return null;
    if (preg_match('#^https?://#i', $path)) return $path;
    return rtrim(APP_BASE_URL, '/') . '/' . ltrim($path, '/');
}
