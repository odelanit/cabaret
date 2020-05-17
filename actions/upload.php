<?php
$filename = $_FILES['upload']['name'];
$file_type = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
$check = getimagesize($_FILES["upload"]["tmp_name"]);
if($check !== false) {
    $year = date('Y');
    $month = date('m');
    $day = date('d');
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $filename = substr(str_shuffle($permitted_chars), 0, 16) . '.' . $file_type;
    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    $dst_directory = $doc_root . sprintf('/uploads/%s/%s/%s', $year, $month, $day);
    if (!file_exists($dst_directory)) {
        mkdir($dst_directory, 0755, true);
    }
    $dst_path = sprintf('/uploads/%s/%s/%s/%s', $year, $month, $day, $filename);
    $result = move_uploaded_file($_FILES['upload']['tmp_name'], $doc_root . $dst_path);
    if ($result) {
        $data = [
            'url' => $dst_path,
            'uploaded' => true
        ];
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        $data = [
            'uploaded' => false
        ];
        header('Content-Type: application/json');
        http_response_code(400);
        echo json_encode($data);
    }
} else {
    $data = [
        'uploaded' => false
    ];
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode($data);
}