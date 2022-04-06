<?php include './include/session.php'; ?>

<?php

if (isset($_SESSION['user'])) {
    header('location: landing.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <link rel="stylesheet" href="./styles/signin.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <div class="flex">

        <form action="./verify.php" method="post" class="registerForm">

            <div class="image">
                <img src="./images/D_Login.jpg" alt="..." />
            </div>

            <div class="content">

                <form action="./register.php" method="post" class="registerForm">
                    <div class="title">
                        <h2>WELCOME BACK TO G CAR RENTALS</h2>
                    </div>

                    <br>

                    <div class="ip">
                        <label>Email</label>
                        <input type="email" class="input" id="email" name="email" placeholder="Email" />
                        <br>
                    </div>

                    <br>

                    <div class="ip">
                        <label>Password</label>
                        <input type="password" class="input" id="password" name="password" placeholder="Password" />
                    </div>

                    <div class="bt">
                        <input class="action1" type="submit" value="Sign In" name="login">
                    </div>

                    <div class="sign-in">
                        <p>Not a member? <a href="./signup.php">Join US</a> </p>
                    </div>
                </form>

            </div>

    </div>

</body>

</html>