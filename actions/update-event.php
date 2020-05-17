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

$display_status = 'N';
if ($_POST['display_status']) {
    $display_status = $_POST['display_status'];
}

$query = "UPDATE events SET title=?, description=?, image_url=?, open_date=STR_TO_DATE(?, '%m/%d/%Y'), location=?, display_status=? WHERE id=?";
$stmt = $pdo->prepare($query);
try {
    $result = $stmt->execute([
        $_POST['title'],
        $_POST['description'],
        $_POST['image_url'],
        $_POST['open_date'],
        $_POST['location'],
        $display_status,
        $_GET['id']
    ]);
    header('Location: /admin/events.php');
} catch (PDOException $exception) {
    $previous = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previous);
}