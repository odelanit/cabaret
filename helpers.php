<?php
require_once('config.php');

function is_url($url) {
    if ($url == $_SERVER['SCRIPT_NAME']) {
        return true;
    } else {
        return false;
    }
}

function login($email, $password) {
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
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([
        $email
    ]);
    $user = $stmt->fetch();
    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user'] = $user['id'];
        return true;
    } else {
        return false;
    }
}

function checkUser() {
    session_start();
    if (!empty($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

function logout() {
    session_start();
    $_SESSION['user'] = '';
    session_destroy();
}