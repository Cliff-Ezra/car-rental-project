<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Edit Form</title>

    <link rel="stylesheet" href="./styles2/edit_form.css">
    <link href="https://fonts.goC:\xampp\htdocs\main\Test2\landing.phpogleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    $pdo = new Database();
    $conn = $pdo->connect();

    try {
        $stmt = $conn->prepare("SELECT * FROM categories WHERE category_id = :category_id");
        $stmt->execute(['category_id' => $_GET['category_id']]);
        $category_id = $_GET['category_id'];

        foreach ($stmt as $row) {
            echo "
                <div class='flex'>

                    <div class='content'>
                        <form action='./categoryedit.php?category_id=" . $category_id . "' method='post' class='registerForm'>
                            <div class='title'>
                                <h2>Edit Category</h2>
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