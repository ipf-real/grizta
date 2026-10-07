<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method tidak diizinkan.']);
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];

if ($name === '') {
    $errors[] = 'Nama wajib diisi.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email tidak valid.';
}

if ($message === '') {
    $errors[] = 'Pesan tidak boleh kosong.';
}

if (!empty($errors)) {
    echo json_encode([
        'success' => false,
        'message' => implode(' ', $errors),
    ]);
    exit;
}

$logLine = sprintf(
    "[%s] %s <%s>: %s\n",
    date('Y-m-d H:i:s'),
    $name,
    $email,
    str_replace("\n", ' ', $message)
);

file_put_contents(__DIR__ . '/messages.log', $logLine, FILE_APPEND);

echo json_encode([
    'success' => true,
    'message' => "Makasih $name, pesanmu sudah kami terima!",
]);
