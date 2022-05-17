<?php
include './include/session.php';

if (isset($_POST['booking'])) {
    $days     = $_POST['days'];
    $date  = $_POST['date'];
    $modelID = $_POST['model_id'];

    $conn = $pdo->connect();

    $now = date('Y-m-d');

    // !For obtaining Model ID
    try {
        $stmt = $conn->prepare(
            "SELECT price FROM rental.models WHERE model_id = :model_id"
        );
        $stmt->execute(['model_id' => $modelID]);
        $price = $stmt->fetch();
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
        echo $e;
    }

    // !For obtaining User First Name
    // try {
    //     $stmt = $conn->prepare(
    //         "SELECT first_name FROM rental.user WHERE user_id = :user_id"
    //     );
    // } catch (PDOException $e) {
    //     $_SESSION['error'] = $e->getMessage();
    //     echo $e;
    // }

    var_dump($_POST);

    try {
        $stmt = $conn->prepare(
            "INSERT INTO bookings (user_id, model_id, price, first_name ,days, date, created_at) 
            VALUES (:user_id, :model_id, :price, :first_name, :days, :date, :created_at)"
        );

        $stmt->execute([
            'user_id' => $_SESSION['user'],
            'model_id' => $modelID,
            'price' => $price['price'],
            'first_name' => $user['first_name'],
            'days'      => $days,
            'date'      => $date,
            'created_at' => $now
        ]);

        $userid = $conn->lastInsertId();
        header('location: ./landing.php');
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
        echo $e;
    }
}
