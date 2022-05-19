<?php
include './include2/session.php';

var_dump($_POST);

if (isset($_POST['edit'])) {
    $booking_id = $_GET['booking_id'];

    // $first_name   = $_POST['first_name'];
    $status       = $_POST['status'];

    $pdo = new Database();
    $conn = $pdo->connect();

    $stmt = $conn->prepare("SELECT  status FROM bookings WHERE booking_id = :booking_id");
    $stmt->execute(['booking_id' => $booking_id]);
    $row = $stmt->fetch();

    try {
        $stmt = $conn->prepare(
            "UPDATE bookings SET status = :status WHERE booking_id = :booking_id"
        );

        $stmt->execute([
            // 'first_name'   => $first_name,
            'status'   => $status,
            'booking_id' => $booking_id
        ]);
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
} else {
    echo "Could'nt update";
}
header('location: ./unapproved_orders.php');
