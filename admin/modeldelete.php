<?php
include './include2/session.php';

var_dump($_POST);

if (isset($_POST['delete'])) {
    $model_id = $_GET['model_id'];

    $pdo = new Database();
    $conn = $pdo->connect();

    try {
        $stmt = $conn->prepare("DELETE FROM models WHERE model_id = :model_id");
        $stmt->execute(["model_id" => $model_id]);
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
}
header('location: ./models.php');
