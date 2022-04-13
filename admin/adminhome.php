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
                <span class="value">Ksh. 14.97k</span>
                <span class="content">Total Sales</span>
            </div>

            <div class="container-products">
                <span class="value">23</span>
                <span class="content">Number of Car Brands</span>
            </div>

        </div>

        <div class="row">

            <div class="container-users">
                <span class="value">2</span>
                <span class="content">Number of Users</span>
            </div>

            <div class="container-categories">
                <span class="value">23</span>
                <span class="content">Number of Products</span>
            </div>

        </div>
    </div>

</body>

</html>