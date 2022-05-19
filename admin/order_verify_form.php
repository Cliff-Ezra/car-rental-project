<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>

    <link rel="stylesheet" href="./styles2/edit_form.css">
    <link href="https://fonts.goC:\xampp\htdocs\main\Test2\landing.phpogleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    $pdo = new Database();
    $conn = $pdo->connect();

    try {
        $stmt = $conn->prepare("SELECT * FROM bookings WHERE booking_id = :booking_id");
        $stmt->execute(['booking_id' => $_GET['booking_id']]);
        $booking_id = $_GET['booking_id'];

        foreach ($stmt as $row) {
            echo "
                <div class='flex'>
                    <div class='content'>
                         <form action='./order_verify_handler.php?booking_id=" . $booking_id . "' method='post' class='registerForm'>
                        
                            <div class = 'title'>
                                <h2>Choose Action On User Order</h2>
                            </div>

                            <div class='ip'>
                                <label>Name</label>
                                <input disabled='disabled' type='text' class='input' id='f_name' name='first_name' placeholder='Full Name' value='" . $row['first_name'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Car Model</label>
                                <input disabled='disabled' type='text' class='input' id='name' name='name' placeholder='Full Name' value='" . $row['name'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Price</label>
                                <input disabled='disabled' type='text' class='input' id='price' name='price' placeholder='Full Name' value='" . $row['price'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <select name='status' class='input'>
                                    <option value=''>--Select Status--</option>
                                    <option value='complete'>Completed payment</option>
                                    <option value='pending'>Pending payment</option>
                                </select>
                            </div>

                            <br><br><br>
                        
                            <div class='bt'>
                                <input class='action1' type='submit' value='Confirm Changes' name='edit'>
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