<?php
/**
 * send_message.php
 * Menerima data dari form kontak (dikirim via fetch() di script.js)
 * dan mengembalikan respons dalam format JSON.
 *
 * Ini contoh sederhana. Untuk beneran mengirim email, kamu bisa
 * ganti bagian "TODO" di bawah dengan fungsi mail() atau PHPMailer.
 */

header('Content-Type: application/json');

// Hanya izinkan method POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method tidak diizinkan.']);
    exit;
}

// Ambil & bersihkan input
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validasi sederhana
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

// TODO: simpan ke database atau kirim email pakai mail()/PHPMailer
// Contoh dasar (butuh server mail aktif, biasanya belum jalan di localhost):
//
// $to      = 'hello@riya.dev';
// $subject = "Pesan baru dari $name";
// $body    = "$message\n\nBalas ke: $email";
// mail($to, $subject, $body);

// Untuk sekarang, kita cuma simpan ke file log sebagai contoh belajar
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
