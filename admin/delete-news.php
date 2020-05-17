<?php
require_once('../helpers.php');
if (!checkUser()) {
    header('Location: /login.php');
}

require_once('../config.php');

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

$query = 'DELETE FROM news WHERE id=?';
$stmt = $pdo->prepare($query);
try {
    $result = $stmt->execute([
        $_GET['id'],
    ]);
    header('Location: /admin/news.php');
} catch (PDOException $exception) {
    $previous = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previous);
}