<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Model</title>

    <link rel="stylesheet" href="./styles2/category_add.css">

</head>

<body>

    <div class="flex">

        <div class="content">
            <form action="./modeladd.php" method="post" class="registerForm">
                <div class="title">
                    <h2>Add Model</h2>
                </div>

                <div class="ip">
                    <label>Category Id</label>
                    <input type="text" class="input" id="category_id" name="category_id" placeholder="Category ID" />
                    <br>
                </div>

                <br>

                <div class="ip">
                    <label>Name</label>
                    <input type="text" class="input" id="name" name="name" placeholder="Model Name" />
                    <br>
                </div>

                <br>

                <div class="ip">
                    <label for="photo">Model Photo</label>
                    <input type="file" id="photo" name="photo" accept="images/png, images/jpeg">
                </div>

                <br>

                <div class="ip">
                    <label>Passenger No.</label>
                    <input type="text" class="input" id="passenger" name="s1_passenger_no" placeholder="Number of Passenger" />
                    <br>
                </div>

                <br>

                <div class="ip">
                    <label>Transmission</label>
                    <input type="text" class="input" id="transmission" name="s2_transmission" placeholder="Type of Transmission" />
                    <br>
                </div>

                <br>

                <div class="ip">
                    <label>No. of Doors</label>
                    <input type="text" class="input" id="doors" name="s3_door_no" placeholder="No of Doors" />
                    <br>
                </div>

                <br>

                <div class="ip">
                    <label>Availability</label>
                    <input type="text" class="input" id="name" name="availability" placeholder="Cars Available" />
                    <br>
                </div>

                <br>

                <div class="ip">
                    <label>Price</label>
                    <input type="text" class="input" id="price" name="price" placeholder="Price in Ksh" />
                    <br>
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