<?php
include './include2/session.php';

var_dump($_POST);

if (isset($_POST['edit'])) {
    $category_id = $_GET['category_id'];

    $name        = $_POST['name'];
    $photo       = $_POST['photo'];
    $description = $_POST['description'];

    $pdo = new Database();
    $conn = $pdo->connect();

    $stmt = $conn->prepare("SELECT name, photo, description FROM categories WHERE category_id = :category_id");
    $stmt->execute(['category_id' => $category_id]);
    $row = $stmt->fetch();

    try {
        $stmt = $conn->prepare(
            "UPDATE categories SET name = :name, photo = :photo, description = :description WHERE category_id = :category_id"
        );

        $stmt->execute([
            'name'        => $name,
            'photo'       => $photo,
            'description' => $description,
            'category_id' => $category_id
        ]);
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
} else {
    echo "Could'nt update";
}
header('location: ./categories.php');