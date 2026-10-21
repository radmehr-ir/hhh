<?php
declare(strict_types=1);

// اطمینان از یکسان بودن منطقه‌ی زمانی PHP با ساعت سرور (جلوگیری از اختلاف زمانی در محاسبات OTP)
date_default_timezone_set('Asia/Tehran');

// Production-safe error handling: keep diagnostics in the host's protected PHP error log.
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('DB_NAME') ?: 'radmehr3_telegram_lite');
define('DB_USER', getenv('DB_USER') ?: 'radmehr3_telegram_lite');
define('DB_PASS', getenv('DB_PASS') ?: '');

define('APP_BASE_URL', getenv('APP_BASE_URL') ?: 'https://chat.radmehrweb.ir');

define('SMSIR_API_KEY', getenv('SMSIR_API_KEY') ?: '');
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
