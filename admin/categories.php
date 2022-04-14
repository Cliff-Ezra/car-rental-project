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

    <link rel="stylesheet" href="./styles2/categories.css">
    <link rel="stylesheet" href="./styles2/header2.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <?php
    include 'C:\xampp\htdocs\main\Test2\admin\include2\header2.php';
    ?>

    <div id="page-wrap">
        <section class="directory">
            <h2 class="directory-title">Categories</h2>

            <ol class="breadcrumb">
                <li> <a href="./adminhome.php">Home</a> </li>
                <img src="./svg/directory.svg" alt="">
                <li> <a href="./fleet.php">Fleet</a> </li>
                <img src="./svg/directory.svg" alt="">
                <li class="active">Categories</li>
            </ol>
        </section>
    </div>

    <div class="add-btn">
        <button> <a href="./categoryadd_form.php">Add Category</a> </button>
    </div>

    <div class="table">

        <form action="./">
            <table>
                <tr>
                    <th>Category ID</th>
                    <th>Car Category</th>
                    <th>Photo Path</th>
                    <th>Description</th>
                    <th>Edit Category</th>
                    <th>Delete Category</th>
                </tr>


                <?php
                $pdo = new Database();
                $conn = $pdo->connect();

                try {
                    $stmt = $conn->prepare("SELECT * FROM categories");
                    $stmt->execute();
                    foreach ($stmt as $row) {

                        $_SESSION['category_id'] = $row['category_id'];

                        echo "
                <tr>
                    <td> $row[category_id]</td>
                    <td> $row[name] </td>
                    <td> $row[photo] </td>
                    <td> $row[description] </td>
                    
                    <form action='categoryedit_form.php?category_id=" . $row['category_id'] . "' method='post'>
                    <td> <button class='btn-delete' data-id= '$row[category_id]' name='edit'> <a href='categoryedit_form.php?category_id=" . $row['category_id'] . "'> Edit </a> </button> </td>
                    </form>

                    <form action='userdelete.php?category_id=" . $row['category_id'] . "' method='post'>
                    <td> <button class='btn-delete' data-id= '$row[category_id]' name='delete'> <a href='userdelete.php?category_id=" . $row['category_id'] . "'> Delete</a></button> </td>
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