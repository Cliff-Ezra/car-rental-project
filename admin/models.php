<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Models</title>

    <link rel="stylesheet" href="./styles2/models.css">
    <link rel="stylesheet" href="./styles2/header2.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <?php
    include 'C:\xampp\htdocs\main\Test2\admin\include2\header2.php';
    ?>

    <div id="page-wrap">
        <section class="directory">
            <h2 class="directory-title">Models</h2>

            <ol class="breadcrumb">
                <li> <a href="./adminhome.php">Home</a> </li>
                <img src="./svg/directory.svg" alt="">
                <li> <a href="./fleet.php">Fleet</a> </li>
                <img src="./svg/directory.svg" alt="">
                <li class="active">Models</li>
            </ol>
        </section>
    </div>

    <div class="add-btn">
        <button> <a href="./modeladd_form.php">Add Model</a> </button>
    </div>

    <div class="table">

        <form action="./">
            <table>
                <tr>
                    <th>Model ID</th>
                    <th>Category ID</th>
                    <th>Name</th>
                    <th>Passenger No.</th>
                    <th>Transmission</th>
                    <th>Door No.</th>
                    <th>Availability</th>
                    <th>Price</th>
                    <th>Edit Model</th>
                    <th>Delete Model</th>
                </tr>


                <?php
                $pdo = new Database();
                $conn = $pdo->connect();

                try {
                    $stmt = $conn->prepare("SELECT * FROM models");
                    $stmt->execute();
                    foreach ($stmt as $row) {

                        $_SESSION['model_id'] = $row['model_id'];

                        echo "
                <tr>
                    <td> $row[model_id]</td>
                    <td> $row[category_id] </td>
                    <td> $row[name] </td>
                    <td> $row[s1_passenger_no] </td>
                    <td> $row[s2_transmission] </td>
                    <td> $row[s3_door_no] </td>
                    <td> $row[availability] </td>
                    <td> $row[price] </td>
                    
                    <form action='modeledit_form.php?model_id=" . $row['model_id'] . "' method='post'>
                    <td> <button class='btn-delete' data-id= '$row[model_id]' name='edit'> <a href='modeledit_form.php?model_id=" . $row['model_id'] . "'> Edit </a> </button> </td>
                    </form>

                    <form action='modeldelete.php?model_id=" . $row['model_id'] . "' method='post'>
                    <td> <button class='btn-delete' data-id= '$row[model_id]' name='delete'>Delete</a></button> </td>
                    </form>

                </tr>
                ";
                    }
                } catch (PDOException $enter) {
                    echo $enter->getMessage();
                }
                ?>

                <div class="empty">
                </div>

            </table>
        </form>

</body>

</html>