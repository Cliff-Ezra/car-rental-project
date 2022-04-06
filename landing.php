<?php
include './include/session.php'
?>

<?php
function getData($sql)
{
    $pdo = new Database();
    $conn = $pdo->connect($sql);

    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        foreach ($stmt as $row) {
            $image = 'images/' . $row['photo'];
            echo "
                <div class='car-container'>
                    <div class='car-img'>
                        <a href='branded.php?brand=" . $row['category_id'] . "'>
                            <img src='" . $image . "' alt='" . $row['name'] . "'>
                        </a>
                    </div>

                    <div class='car-info'>
                        <div class='title'>
                            <h3>" . $row['name'] . "</h3>
                        </div>
                    </div>
                </div>
            ";
        }
    } catch (PDOException $enter) {
        echo "There is some problem in the connection: " . $enter->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Landing Page</title>

    <link rel="stylesheet" href="./styles/landing.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">

    <script src="./javascript/navbar.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

</head>

<body>

    <?php
    include './include/header.php';
    ?>

    <!-- !LANDING IMAGE -->
    <div class="landing-container">
        <div class="landing-text">
            <h2 class="landing-header">Find The Best Cars to Rent</h2>
            <span class="landing-text">From as low as Ksh 1,000 per day with limited time offer</span>
        </div>
    </div>


    <!-- !CARS BY BRAND -->
    <div class="brand">
        <h2 class="brands-h">First Class Car Rental Services</h2>
        <span class="brand-p">Here are some of the car brands that we offer</span>
    </div>

    <div class="divider"></div>

    <div class="main">

        <?php
        $sqlOne = "SELECT * FROM rental.categories WHERE category_id = 1";
        getData($sqlOne);
        ?>

        <?php
        $sqlTwo = "SELECT * FROM rental.categories WHERE category_id = 2";
        getData($sqlTwo);
        ?>

        <?php
        $sqlThree = "SELECT * FROM rental.categories WHERE category_id = 3";
        getData($sqlThree);
        ?>

    </div>

    <div class="main">

        <?php
        $sqlFour = "SELECT * FROM rental.categories WHERE category_id = 4";
        getData($sqlFour);
        ?>

        <?php
        $sqlFive = "SELECT * FROM rental.categories WHERE category_id = 5";
        getData($sqlFive);
        ?>

        <?php
        $sqlSix = "SELECT * FROM rental.categories WHERE category_id = 6";
        getData($sqlSix);
        ?>

    </div>

    <!-- !CONTACT US -->
    <div class="customer-container">

        <div class="customer-text">
            <h2 class="customer-header">Our Fleet, Your Fleet</h2>
            <span class="customer-text">
                We know the difference is in the details and that’s why our car rental services, in the tourism
                <br>
                and business industry, stand out for their quality and good taste, to offer you an unique experience
            </span>
            <br><br>
            <span class="customer-number">
                Call Now (254)-344-4533-45
            </span>
        </div>

    </div>


    <div class="choose-container">

        <div class="choose-heading">
            <h2>Why Choose Us</h2>
            <div class="choose-text">
                <span>Explore Our First Class Rental Service</span>
            </div>
        </div>

    </div>

    <div class="choose-container2">
        <div class="item">
            <img class="chosse-svg" src="./svg/car2.svg" alt="" height="60px">
            <br>
            <span class="choose-heading2">
                Variety of Car Brands
            </span>
            <br>
            <span class="choose-text2">
                Lorem ipsum dolor sit amet, consectadipiscing elit. Aenean commodo ligula eget dolor.
            </span>
        </div>

        <div class="item">
            <img class="chosse-svg" src="./svg/happpy.svg" alt="" height="60px">
            <br>
            <span class="choose-heading2">
                Best Rate Guarantee
            </span>
            <br>
            <span class="choose-text2">
                Lorem ipsum dolor sit amet, consectadipiscing elit. Aenean commodo ligula eget dolor.
            </span>
        </div>

        <div class="item">
            <img class="chosse-svg" src="./svg/like.svg" alt="" height="60px">
            <br>
            <span class="choose-heading2">
                Awesome Customer Support
            </span>
            <br>
            <span class="choose-text2">
                Lorem ipsum dolor sit amet, consectadipiscing elit. Aenean commodo ligula eget dolor.
            </span>
        </div>
    </div>

    <div class="divider"></div>

    <?php
    include './include/footer.php';
    ?>

</body>

</html>