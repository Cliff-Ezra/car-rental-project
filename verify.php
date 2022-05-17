<?php
include './include/session.php';
$conn = $pdo->connect();

// !USER
if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM user WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch();

        if ($row['numrows'] > 0) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user'] = $row['user_id'];    // !USER id and session id
                // var_dump($_SESSION);
                // echo "Hello";
            } else {
                $_SESSION['error'] = 'Incorrect password';
            }
        } else {
            $_SESSION['error'] = 'Email not found';
        }
    } catch (PDOException $enter) {
        echo "There is some problem in connection: " . $enter->getMessage();
    }
    header('location: landing.php');
}

// !ADMIN
if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM admin WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch();

        if ($row['numrows'] > 0) {
            if ($password === $row['password']) {
                $_SESSION['admin'] = $row['admin_id'];
            } else {
                $_SESSION['error'] = 'Incorrect password';
            }
        } else {
            $_SESSION['error'] = 'Email not found';
        }
    } catch (PDOException $enter) {
        echo "There is some problem in connection: " . $enter->getMessage();
    }
    header('location: signin.php');
}
