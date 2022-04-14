<?php
include './include2/session.php';

var_dump($_POST);

if (isset($_POST['create'])) {

    $name        = $_POST['name'];
    $photo       = $_POST['photo'];
    $description = $_POST['description'];

    $conn = $pdo->connect();

    $now = date('Y-m-d');

    try {
        $stmt = $conn->prepare(
            "INSERT INTO categories (name, photo, description) 
            VALUES (:name, :photo, :description)"
        );

        $stmt->execute([
            'name'        => $name,
            'photo'       => $photo,
            'description' => $description,
        ]);

        $categoryid = $conn->lastInsertId();
        header('location: ./categories.php');
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
}
