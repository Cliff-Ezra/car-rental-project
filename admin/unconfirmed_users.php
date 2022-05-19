<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

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
            <h2 class="directory-title">Background Checks</h2>

            <ol class="breadcrumb">
                <li> <a href="./adminhome.php">Home</a> </li>
                <img src="./svg/directory.svg" alt="">
                <li> <a href="./system_users.php">System Users</a> </li>
                <img src="./svg/directory.svg" alt="">
                <li class="active">Background Checks</li>
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
                    <th>Full Name</th>
                    <th>ID No.</th>
                    <th>DOB</th>
                    <th>Phone No.</th>
                    <th>Email</th>
                    <th>KRA Pin</th>
                    <th>License</th>
                    <th>County</th>
                    <th>Address</th>
                    <th>Crime</th>
                    <th>Status</th>
                    <th>Edit Status</th>
                </tr>


                <?php
                $pdo = new Database();
                $conn = $pdo->connect();

                try {
                    $stmt = $conn->prepare(
                        "SELECT * FROM checking"
                    );
                    $stmt->execute();
                    foreach ($stmt as $row) {

                        $_SESSION['check_id'] = $row['check_id'];

                        echo "
                <tr>

                    <td> $row[f_name]</td>
                    <td> $row[id_num] </td>
                    <td> $row[dob] </td>
                    <td> $row[phone_num] </td>
                    <td> $row[email] </td>
                    <td> $row[kra_pin] </td>
                    <td> $row[license] </td>
                    <td> $row[county] </td>
                    <td> $row[address] </td>
                    <td> $row[crime] </td>
                    <td> $row[status] </td>
                    

                    <form action='user_verify_form.php?check_id=" . $row['check_id'] . "' method='post'>
                    <td> <button class='btn-delete' data-id= '$row[check_id]' name='edit'> <a href='user_verify_form.php?check_id=" . $row['check_id'] . "'> Edit </a> </button> </td>
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