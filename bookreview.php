<?php
include './include/session.php';

var_dump($_POST);

if (isset($_POST['post'])) {

    // $modelID = $_GET['model'];

    $comment     = $_POST['comment'];
    $full_name  = $_POST['full_name'];
    $email       = $_POST['email'];
    $website     = $_POST['website'];

    $conn = $pdo->connect();

    $now = date('Y-m-d');

    try {
        $stmt = $conn->prepare(
            "INSERT INTO book_review (comment, full_name, email, website) 
            VALUES (:comment, :full_name, :email, :website)"
        );

        $stmt->execute([
            'comment'       => $comment,
            'full_name'     => $full_name,
            'email'         => $email,
            'website'       => $website,
        ]);

        $reviewid = $conn->lastInsertId();
        header('location: ./landing.php');
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
}