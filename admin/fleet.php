<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Users</title>

    <link rel="stylesheet" href="./styles2/fleet.css">
    <link rel="stylesheet" href="./styles2/header2.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->

</head>

<body>

    <?php
    include 'C:\xampp\htdocs\main\Test2\admin\include2\header2.php';
    ?>

    <div id="page-wrap">
        <section class="directory">
            <h2 class="directory-title">Fleet</h2>

            <ol class="breadcrumb">
                <li> <a href="./adminhome.php">Home</a> </li>
                <img src="./svg/directory.svg" alt="">
                <li class="active">Fleet</li>
            </ol>
        </section>

        <div class="row">

            <div class="container-categories">
                <span class="content">Car Categories</span>
                <a href="./categories.php">
                    <img src="./svg/categories.svg" alt="" height="200px">
                </a>
            </div>

            <div class="container-brand">
                <span class="content">Car Models</span>
                <a href="./models.php">
                    <img src="./svg/brand.svg" alt="" height="200px">
                </a>
            </div>

        </div>
    </div>
</body>