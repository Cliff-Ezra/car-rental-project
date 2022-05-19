<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./styles2/header2.css">

</head>


<body>

    <?php
    include 'C:\xampp\htdocs\main\Test2\admin\include2\header2.php';
    ?>

    <!-- !DASHBOARD CONTENT -->
    <div id="page-wrap">
        <section class="directory">
            <h2 class="directory-title">Dashboard</h2>

            <ol class="breadcrumb">
                <li><a href="./adminhome.php">Home</a></li>
                <img src="./svg/directory.svg" alt="">
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <div class="row">

            <div class="container-sales">
                <a href="./unapproved_orders.php">
                    <?php
                    $stmt = $conn->prepare("SELECT * FROM bookings");
                    $stmt->execute();

                    $total = 0;
                    foreach ($stmt as $row) {
                        $subtotal = $row['price'] * $row['days'];
                        $total += $subtotal;
                    }

                    echo "<span class='value'> $total </span>"
                    ?>
                    <br><br>
                    <span class="content">Total Sales</span>
                </a>
            </div>

            <div class="container-products">
                <a href="./categories.php">
                    <?php
                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM categories");
                    $stmt->execute();
                    $row = $stmt->fetch();

                    echo "<span class='value'>" . $row['numrows'] . "</span>"
                    ?>
                    <br><br>
                    <span class="content">Number of Car Categories</span>
                </a>
            </div>

        </div>

        <div class="row">

            <div class="container-users">
                <a href="./users.php">
                    <?php
                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM user");
                    $stmt->execute();
                    $row = $stmt->fetch();

                    echo "<span class='value'>" . $row['numrows'] . "</span>"
                    ?>
                    <br><br>
                    <span class="content">Number of Users</span>
                </a>
            </div>

            <div class="container-categories">
                <a href="./categories.php">
                    <?php
                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM models");
                    $stmt->execute();
                    $row = $stmt->fetch();

                    echo "<span class='value'>" . $row['numrows'] . "</span>"
                    ?>
                    <br><br>
                    <span class="content">Number of Car Models</span>
                </a>
            </div>

        </div>
    </div>

</body>

</html>