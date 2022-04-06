<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="stylesheet" href="./styles/signup.css">
    <link href="https://fonts.goC:\xampp\htdocs\main\Test2\landing.phpogleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <div class="flex">

        <div class="image">
            <img src="./images/C_register.jpg" alt="..." />
        </div>

        <div class="content">
            <form action="./register.php" method="post" class="registerForm">
                <div class="title">
                    <h2>JOIN G CAR RENTALS</h2>
                </div>

                <div class="ip">
                    <label>First Name</label>
                    <input type="text" class="input" id="firstName" name="firstName" placeholder="First Name" />
                    <br>
                </div>

                <br>

                <div class="ip">
                    <label>Last Name</label>
                    <input type="text" class="input" id="lastName" name="lastName" placeholder="Last Name" />
                    <br>
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
                    <br>
                </div>

                <br>

                <div class="ip">
                    <label>Mobile</label>
                    <input type="text" class="input" id="mobile" name="mobile" placeholder="Mobile" />
                    <br>
                </div>

                <div class="terms">
                    <p>**By creating an account, you agree to G Car Rental's Privacy Policy and Terms of Use.**</p>
                </div>

                <br>

                <div class="bt">
                    <input class="action1" type="submit" value="Register" name="signup">
                </div>

                <div class="sign-in">
                    <p>Already have an account? <a href="./signin.php">Login</a> </p>
                </div>
        </div>

        </form>

    </div>

</body>

</html>