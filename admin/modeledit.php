<?php
include './include2/session.php';

var_dump($_POST);

if (isset($_POST['edit'])) {
    $model_id = $_GET['model_id'];

    $model_id          = $_POST['model_id'];
    $category_id       = $_POST['category_id'];
    $name              = $_POST['name'];
    $photo             = $_POST['photo'];
    $s1_passenger_no   = $_POST['s1_passenger_no'];
    $s2_transmission   = $_POST['s2_transmission'];
    $s3_door_no        = $_POST['s3_door_no'];
    $availability      = $_POST['availability'];
    $price             = $_POST['price'];
    $description       = $_POST['description'];

    $pdo = new Database();
    $conn = $pdo->connect();

    $stmt = $conn->prepare("SELECT model_id, category_id, name, photo, s1_passenger_no, s2_transmission, s3_door_no, availability, price, description FROM models WHERE model_id = :model_id");
    $stmt->execute(['model_id' => $model_id]);
    $row = $stmt->fetch();

    try {
        $stmt = $conn->prepare(
            "UPDATE models SET model_id = :model_id, category_id =:category_id, name = :name, photo = :photo, s1_passenger_no= :s1_passenger_no, s2_transmission= :s2_transmission, s3_door_no = :s3_door_no, availability = :availability, price = :price, description = :description WHERE model_id = :model_id"
        );

        $stmt->execute([
            'model_id'          => $model_id,
            'category_id'       => $category_id,
            'name'              => $name,
            'photo'             => $photo,
            's1_passenger_no'   => $s1_passenger_no,
            's2_transmission'   => $s2_transmission,
            's3_door_no'        => $s3_door_no,
            'availability'      => $availability,
            'price'             => $price,
            'description'       => $description,
            'model_id'          => $model_id
        ]);
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
} else {
    echo "Could'nt update";
}
header('location: ./models.php');