<?php
include './include2/session.php';

if (isset($_POST['delete'])) {
    $user_id = $_GET['user_id'];

    $pdo = new Database();
    $conn = $pdo->connect();

    try {
        $stmt = $conn->prepare("DELETE FROM user WHERE user_id = :user_id");
        $stmt->execute(["user_id" => $user_id]);
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
}
header('location: ./users.php');