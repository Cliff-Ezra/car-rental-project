<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Edit Form</title>

    <link rel="stylesheet" href="./styles2/edit_form.css">
    <link href="https://fonts.goC:\xampp\htdocs\main\Test2\landing.phpogleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    $pdo = new Database();
    $conn = $pdo->connect();

    try {
        $stmt = $conn->prepare("SELECT * FROM models WHERE model_id = :model_id");
        $stmt->execute(['model_id' => $_GET['model_id']]);
        $model_id = $_GET['model_id'];

        foreach ($stmt as $row) {
            echo "
                <div class='flex'>

                    <div class='content'>
                        <form action='./modeledit.php?model_id=" . $model_id . "' method='post' class='registerForm'>
                            <div class='title'>
                                <h2>Edit Model</h2>
                            </div>

                            <div class='ip'>
                                <label>Model ID</label>
                                <input type='text' class='input' id='model_id' name='model_id' placeholder='Model ID' value='" . $row['model_id'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Category ID</label>
                                <input type='text' class='input' id='category_id' name='category_id' placeholder='Model ID' value='" . $row['category_id'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Name</label>
                                <input type='text' class='input' id='name' name='name' placeholder='Name' value='" . $row['name'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Photo Path</label>
                                <input type='text' class='input' id='photo' name='photo' placeholder='Photo' value='" . $row['photo'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Passenger No.</label>
                                <input type='text' class='input' id='passenger' name='s1_passenger_no' placeholder='No of Passengers' value='" . $row['s1_passenger_no'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Transmission</label>
                                <input type='text' class='input' id='transmission' name='s2_transmission' placeholder='Type of Transmission' value='" . $row['s2_transmission'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>No. of Doors</label>
                                <input type='text' class='input' id='doors' name='s3_door_no' placeholder='No of Doors' value='" . $row['s3_door_no'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Availability</label>
                                <input type='text' class='input' id='availability' name='availability' placeholder='Cars available' value='" . $row['availability'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Price</label>
                                <input type='text' class='input' id='price' name='price' placeholder='Price in Ksh Ksh.' value='" . $row['price'] . "' />
                                <br>
                            </div>

                            <div class='ip'>
                                <label>Description</label>
                                <textarea class='input' id='description' cols='50' rows='10' name='description' placeholder='Description'> " . $row['description'] . " </textarea>
                                <br>
                            </div>

                            <div class='bt'>
                                <input class='action1' type='submit' value='Edit Category' name='edit'>    
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