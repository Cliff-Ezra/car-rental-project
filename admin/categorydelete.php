<?php
include './include2/session.php';

if (isset($_POST['delete'])) {
    $category_id = $_GET['category_id'];

    $pdo = new Database();
    $conn = $pdo->connect();

    try {
        $stmt = $conn->prepare("DELETE FROM user WHERE category_id = :category_id");
        $stmt->execute(["category_id" => $category_id]);
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
}
header('location: ./categories.php');
