<?php

include 'DB.php';
session_start();

if (isset($_SESSION['admin'])) {
    header('location: admin\adminhome.php');
}

if (isset($_SESSION['user'])) {
    $conn = $pdo->connect();

    try {
        $stmt = $conn->prepare("SELECT * FROM user WHERE user_id = :id");
        $stmt->execute(['id' => $_SESSION['user']]);
        $user = $stmt->fetch();
    } catch (PDOException $enter) {
        echo "There is some problem in the connection: " . $enter->getMessage();
    }
}
