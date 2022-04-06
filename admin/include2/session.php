<?php

include '/xampp/htdocs/main/Test2/include/DB.php';
session_start();

if (!isset($_SESSION['admin']) || trim($_SESSION['admin']) == '') {
    header('location: ../landing.php');
    exit();
}

$conn = $pdo->connect();

$stmt = $conn->prepare("SELECT * FROM admin WHERE admin_id=:id");
$stmt->execute(['id' => $_SESSION['admin']]);
$admin = $stmt->fetch();