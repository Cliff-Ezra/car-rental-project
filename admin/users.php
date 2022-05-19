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

    <link rel="stylesheet" href="./styles2/users.css">
    <link rel="stylesheet" href="./styles2/header2.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <?php
    include 'C:\xampp\htdocs\main\Test2\admin\include2\header2.php';
    ?>

    <div id="page-wrap">
        <section class="directory">
            <h2 class="directory-title">Users</h2>

            <ol class="breadcrumb">
                <li> <a href="./adminhome.php">Home</a> </li>
                <img src="./svg/directory.svg" alt="">
                <li> <a href="./system_users.php">System Users</a> </li>
                <img src="./svg/directory.svg" alt="">
                <li class="active">Confirmed Users</li>
            </ol>
        </section>
    </div>

    <div class="table">

        <form action="./">
            <table>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Edit User</th>
                    <th>Delete User</th>
                </tr>


                <?php
                $pdo = new Database();
                $conn = $pdo->connect();

                try {
                    $stmt = $conn->prepare("SELECT * FROM user");
                    $stmt->execute();
                    foreach ($stmt as $row) {

                        $_SESSION['user_id'] = $row['user_id'];

                        echo "
                <tr>
                    <td> $row[user_id]</td>
                    <td> $row[first_name] </td>
                    <td> $row[last_name] </td>
                    <td> $row[email] </td>
                    <td> $row[telephone] </td>
                    
                    <form action='useredit_form.php?user_id=" . $row['user_id'] . "' method='post'>
                    <td> <button class='btn-delete' data-id= '$row[user_id]' name='edit'> <a href='useredit_form.php?user_id=" . $row['user_id'] . "'> Edit </a> </button> </td>
                    </form>

                    <form action='userdelete.php?user_id=" . $row['user_id'] . "' method='post'>
                    <td> <button class='btn-delete' data-id= '$row[user_id]' name='delete'> <a href='userdelete.php?user_id=" . $row['user_id'] . "'> Delete</a></button> </td>
                    </form>

                </tr>
                ";
                    }
                } catch (PDOException $enter) {
                    echo $enter->getMessage();
                }
                ?>

            </table>
        </form>

</body>

</html>