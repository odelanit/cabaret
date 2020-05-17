<?php
require_once('../vendor/autoload.php');

require_once('../config.php');
session_start();

$host = '127.0.0.1';
$port = "3306";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s;port=%s", $host, DB_NAME, $charset, $port);
try {
    $pdo = new \PDO($dsn, DB_USER, DB_PASSWORD, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$id_token = $_POST['id_token'];
$client = new Google_Client(['client_id' => GOOGLE_CLIENT_ID]);
$payload = $client->verifyIdToken($id_token);
if ($payload) {
    // Check if user exists
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([
        $payload['email']
    ]);
    $user = $stmt->fetch();
    list($user, $domain) = explode('@', $payload['email']);

    if ($user && $domain == 'iu.edu') {
        $_SESSION['user'] = $user['id'];
    } else {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $random_password = substr(str_shuffle($permitted_chars), 0, 16);
        if ($domain == 'iu.edu') {
            $query = 'INSERT INTO users (username, email, password) VALUES (?, ?, ?)';
            $stmt = $pdo->prepare($query);
            $result = $stmt->execute([
                $payload['name'],
                $payload['email'],
                password_hash($random_password, PASSWORD_DEFAULT)
            ]);

            $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
            $stmt->execute([
                $payload['email']
            ]);
            $user = $stmt->fetch();
            $_SESSION['user'] = $user['id'];
        }
    }

    $data = [
        'message' => 'Success logged in with google.'
    ];
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    $data = [
        'message' => 'Invalid ID token.'
    ];
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode($data);
}