<?php
include './include2/session.php';

var_dump($_POST);

if (isset($_POST['edit'])) {
    $user_id = $_GET['user_id'];

    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName  = $_POST['lastName'];
    $telephone = $_POST['mobile'];

    $pdo = new Database();
    $conn = $pdo->connect();

    $stmt = $conn->prepare("SELECT * FROM user WHERE user_id = :user_id");
    $stmt->execute(['user_id' => $user_id]);
    $row = $stmt->fetch();

    if ($password = $row['password']) {
        $password = $row['password'];
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    try {
        $stmt = $conn->prepare(
            "UPDATE user SET email = :email, password = :password, first_name = :first_name, last_name = :last_name, telephone = :telephone WHERE user_id = :user_id"
        );

        $stmt->execute([
            'email'      => $email,
            'password'   => $password,
            'first_name' => $firstName,
            'last_name'  => $lastName,
            'telephone'  => $telephone,
            'user_id'    => $user_id
        ]);
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
} else {
    // echo $enter->getMessage();
    echo "Couldnt update";
}
header('location: ./users.php');
?>
