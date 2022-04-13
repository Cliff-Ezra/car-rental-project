<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Edit Form</title>

    <link rel="stylesheet" href="./styles2/user_form.css">
    <link href="https://fonts.goC:\xampp\htdocs\main\Test2\landing.phpogleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    $pdo = new Database();
    $conn = $pdo->connect();

    try {
        $stmt = $conn->prepare("SELECT * FROM user WHERE user_id = :user_id");
        $stmt->execute(['user_id' => $_GET['user_id']]);
        $user_id = $_GET['user_id'];

        foreach ($stmt as $row) {
            echo "
                <div class='flex'>

                    <div class='content'>
                        <form action='./useredit.php?user_id=" . $user_id . "' method='post' class='registerForm'>
                            <div class='title'>
                                <h2>Edit User</h2>
                            </div>

                            <div class='ip'>
                                <label>First Name</label>
                                <input type='text' class='input' id='firstName' name='firstName' placeholder='First Name' value='" . $row['first_name'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Last Name</label>
                                <input type='text' class='input' id='lastName' name='lastName' placeholder='Last Name' value='" . $row['last_name'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Email</label>
                                <input type='text' class='input' id='email' name='email' placeholder='Email' value='" . $row['email'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Password</label>
                                <input type='password' class='input' id='password' name='password' placeholder='Password' value='" . $row['password'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Mobile</label>
                                <input type='text' class='input' id='mobile' name='mobile' placeholder='Mobile' value='" . $row['telephone'] . "' />
                                <br>
                            </div>

                            <div class='bt'>
                                <button class='action1' type='submit' name='edit'>Edit User</button>
                            </div>  

                        </form>
                    </div>
                </div>
                
                ";
        }
    } catch (PDOException $enter) {
        echo $enter->getMessage();
    }
    ?>

</body>

</html>