<?php
include './include/session.php';

if (isset($_POST['submit'])) {
    $f_name     = $_POST['f_name'];
    $id_num  = $_POST['id_num'];
    $dob = $_POST['dob'];

    $phone_num  = $_POST['phone_num'];
    $email = $_POST['email'];

    $kra_pin = $_POST['kra_pin'];
    $license = $_POST['license'];

    $county = $_POST['county'];
    $address = $_POST['address'];

    $crime = $_POST['crime'];

    $agree = $_POST['agree'];



    $conn = $pdo->connect();

    $now = date('Y-m-d');

    var_dump($_POST);

    try {
        $stmt = $conn->prepare(
            "INSERT INTO checking (f_name, id_num, dob, phone_num, email, kra_pin, license, county, address, crime, agree, created_at) 
            VALUES (:f_name, :id_num, :dob, :phone_num, :email, :kra_pin, :license, :county, :address, :crime, :agree, :created_at)"
        );

        $stmt->execute([
            'f_name'     => $f_name,
            'id_num'  => $id_num,
            'dob' => $dob,
            'phone_num'  => $phone_num,
            'email' => $email,
            'kra_pin' => $kra_pin,
            'license' => $license,
            'county' => $county,
            'address' => $address,
            'crime' => $crime,
            'agree' => $agree,
            'created_at' => $now
        ]);

        $userid = $conn->lastInsertId();
        header('location: ./landing.php');
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
        echo $e;
    }
}
