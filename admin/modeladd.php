<?php
include './include2/session.php';

var_dump($_POST);

if (isset($_POST['create'])) {

    $category_id       = $_POST['category_id'];
    $name              = $_POST['name'];
    $photo             = $_POST['photo'];
    $s1_passenger_no   = $_POST['s1_passenger_no'];
    $s2_transmission   = $_POST['s2_transmission'];
    $s3_door_no        = $_POST['s3_door_no'];
    $availability      = $_POST['availability'];
    $price             = $_POST['price'];
    $description       = $_POST['description'];

    $conn = $pdo->connect();

    $now = date('Y-m-d');

    try {
        $stmt = $conn->prepare(
            "INSERT INTO models ( category_id, name, photo, s1_passenger_no, s2_transmission, s3_door_no, availability, price ,description) 
            VALUES (:category_id, :name, :photo, :s1_passenger_no, :s2_transmission, :s3_door_no, :availability, :price, :description)"
        );

        $stmt->execute([
            'category_id'       => $category_id,
            'name'              => $name,
            'photo'             => $photo,
            's1_passenger_no'   => $s1_passenger_no,
            's2_transmission'   => $s2_transmission,
            's3_door_no'        => $s3_door_no,
            'availability'      => $availability,
            'price'             => $price,
            'description'       => $description,
        ]);

        $modelid = $conn->lastInsertId();
        header('location: ./models.php');
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
}