<?php
include './include2/session.php';

var_dump($_POST);

if (isset($_POST['confirm'])) {
    $check_id = $_GET['check_id'];

    // $f_name   = $_POST['f_name'];
    $status   = $_POST['status'];

    $pdo = new Database();
    $conn = $pdo->connect();

    $stmt = $conn->prepare("SELECT status FROM checking WHERE check_id = :check_id");
    $stmt->execute([ 'check_id' => $check_id]);
    $row = $stmt->fetch();

    try {
        $stmt = $conn->prepare(
            "UPDATE checking SET status = :status WHERE check_id = :check_id"
        );

        $stmt->execute([
            // 'f_name'   => $f_name,
            'status'   => $status,
            'check_id' => $check_id
        ]);
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
}  else {
    echo "Could'nt update";
}
header('location: ./unconfirmed_users.php');