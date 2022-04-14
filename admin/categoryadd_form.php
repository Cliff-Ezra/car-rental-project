<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>

    <link rel="stylesheet" href="./styles2/category_add.css">

</head>

<body>

    <div class="flex">

        <div class="content">
            <form action="./categoryadd.php" method="post" class="registerForm">
                <div class="title">
                    <h2>ADD A CATEGORY</h2>
                </div>

                <div class="ip">
                    <label>Name</label>
                    <input type="text" class="input" id="name" name="name" placeholder="Category Name" />
                    <br>
                </div>

                <br>

                <div class="ip">
                    <label for="photo">Category Image</label>
                    <input type="file" id="photo" name="photo" accept="images/png, images/jpeg">
                </div>

                <br>

                <div class="ip">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="70" rows="10" class="description"></textarea>
                    <br>
                </div>

                <br>

                <div class="bt">
                    <input class="action1" type="submit" value="Create" name="create">
                </div>
        </div>

        </form>

    </div>



</body>

</html>