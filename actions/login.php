<?php
require_once('../helpers.php');

$email = $_POST['email'];
$password = $_POST['password'];

if (login($email, $password)) {
    header('Location: /admin/index.php');
} else {
    $previous = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previous);
}