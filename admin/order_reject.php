<?php
include './include2/session.php';

if (isset($_POST['reject'])) {
    $booking_id = $_GET['booking_id'];

    $pdo = new Database();
    $conn = $pdo->connect();

    try {
        $stmt = $conn->prepare("DELETE FROM bookings WHERE booking_id = :booking_id");
        $stmt->execute(["booking_id" => $booking_id]);
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
}
header('location: ./unapproved_orders.php');