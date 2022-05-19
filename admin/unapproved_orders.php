<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <link rel="stylesheet" href="./styles2/unapproved_orders.css">
    <link rel="stylesheet" href="./styles2/header2.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <?php
    include 'C:\xampp\htdocs\main\Test2\admin\include2\header2.php';
    ?>

    <div id="page-wrap">
        <section class="directory">
            <h2 class="directory-title">Orders</h2>

            <ol class="breadcrumb">
                <li> <a href="./adminhome.php">Home</a> </li>
                <img src="./svg/directory.svg" alt="">
                <!-- <li> <a href="./fleet.php">Orders</a> </li> -->
                <!-- <img src="./svg/directory.svg" alt=""> -->
                <li class="active">Orders</li>
            </ol>
        </section>
    </div>

    <!-- <div class="add-btn">
        <button> <a href="./categoryadd_form.php">Add Category</a> </button>
    </div> -->

    <div class="table">

        <form action="./">
            <table>
                <tr>
                    <th>Date of Order</th>
                    <th>Ordered By</th>
                    <th>Model Name</th>
                    <th>No. of Days</th>
                    <th>Pick up Date</th>
                    <th>Cost Per Day</th>
                    <th>Order Status</th>
                    <th>Reject Order</th>
                    <th>Edit Status</th>
                </tr>


                <?php
                $pdo = new Database();
                $conn = $pdo->connect();

                try {
                    $stmt = $conn->prepare("SELECT * FROM bookings");
                    $stmt->execute();
                    foreach ($stmt as $row) {

                        $_SESSION['booking_id'] = $row['booking_id'];

                        echo "
                <tr>

                    <td> $row[created_at]</td>
                    <td> $row[first_name] </td>
                    <td> $row[name] </td>
                    <td> $row[days] </td>
                    <td> $row[date] </td>
                    <td> $row[price] </td>
                    <td> $row[status] </td>
                    
                  
                    <form action='order_reject.php?booking_id=" . $row['booking_id'] . "' method='post'>
                    <td> <button class='btn-delete' data-id= '$row[booking_id]' name='reject'>Reject</button> </td>
                    </form>

                    <form action='order_verify_form.php?booking_id=" . $row['booking_id'] . "' method='post'>
                    <td> <button class='btn-delete' data-id= '$row[booking_id]' name='edit'> <a href='order_verify_form.php?booking_id=" . $row['booking_id'] . "'> Verify </a> </button> </td>
                    </form>        

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