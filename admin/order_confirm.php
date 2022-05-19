<?php
// include './include/session.php';

if (isset($_POST['confirm'])) {
    $days     = $_POST['days'];
    $date  = $_POST['date'];
    $modelID = $_POST['model_id'];

    $conn = $pdo->connect();

    $now = date('Y-m-d');

    // !For obtaining price
    try {
        $stmt = $conn->prepare(
            "SELECT price, name FROM rental.models WHERE model_id = :model_id"
        );
        $stmt->execute(['model_id' => $modelID]);
        $price = $stmt->fetch();
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
        echo $e;
    }

    // !For obtaining model name
    try {
        $stmt = $conn->prepare(
            "SELECT name FROM rental.models WHERE model_id = :model_id"
        );
        $stmt->execute(['model_id' => $modelID]);
        $name  = $stmt->fetch();
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
        echo $e;
    }

    // !For obtaining total price
    // try {
    //     $stmt = $conn->prepare(
    //         "SELECT * FROM rental.bookings WHERE booking_id = :booking_id"
    //     );
    //     $stmt->execute(['booking_id' => $modelID]);
    //     foreach ($stmt as $row) {
    //         $subtotal = $row['price'] * $row['days'];
    //         $total += $subtotal;
    //     }
    //     $total = 0;
    // } catch (PDOException $e) {
    //     $_SESSION['error'] = $e->getMessage();
    //     echo $e;
    // }

    echo "<br>";
    var_dump($_POST);

    try {
        $stmt = $conn->prepare(
            "INSERT INTO bookings (user_id, model_id, price, first_name, name, days, date, created_at) 
            VALUES (:user_id, :model_id, :price, :first_name, :name, :days, :date, :created_at)"
        );

        $stmt->execute([
            'user_id'    => $_SESSION['user'],
            'model_id'   => $modelID,
            'price'      => $price['price'],
            'first_name' => $user['first_name'],
            'name'       => $name['name'],
            'days'       => $days,
            'date'       => $date,
            'created_at' => $now
        ]);

        $userid = $conn->lastInsertId();
        header('location: ./landing.php');
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
        echo $e;
    }
}
