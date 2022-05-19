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

    <link rel="stylesheet" href="./styles2/edit_form.css">
    <link href="https://fonts.goC:\xampp\htdocs\main\Test2\landing.phpogleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    $pdo = new Database();
    $conn = $pdo->connect();

    try {
        $stmt = $conn->prepare("SELECT * FROM checking WHERE check_id = :check_id");
        $stmt->execute(['check_id' => $_GET['check_id']]);
        $check_id = $_GET['check_id'];

        foreach ($stmt as $row) {
            echo "
                <div class='flex'>
                    <div class='content'>
                        <form action='./user_verify_handler.php?check_id=" . $check_id . "' method='post' class='registerForm'>
                        
                            <div class = 'title'>
                                <h2>Choose Action To Admit/Reject</h2>
                            </div>

                            <div class='ip'>
                                <label>Name</label>
                                <input disabled='disabled' type='text' class='input' id='f_name' name='f_name' placeholder='Full Name' value='" . $row['f_name'] . "' / >
                                <br>
                            </div>

                            <div class='ip'>
                                <select name='status' class='input'>
                                    <option value=''>--Select Status--</option>
                                    <option value='accept'>Accept</option>
                                    <option value='deny'>Deny</option>
                                </select>
                            </div>

                            <br><br><br>
                        
                            <div class='bt'>
                                <input class='action1' type='submit' value='Confirm Changes' name='confirm'>
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