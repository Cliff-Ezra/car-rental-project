<?php
include './include/session.php'
?>

<?php
// function fetchData($header)
// {
//     // var_dump($header);
//     $pdo = new Database();
//     $conn = $pdo->connect($header);

//     $categoryPH = $_GET['brand'];

//     try {
//         $stmt = $conn->prepare("SELECT photo, name, description FROM categories WHERE categories.category_id = :categoryPH");
//         $stmt->execute([':categoryPH' => $categoryPH]);

//         foreach ($stmt as $row) {
//             $image = 'images/' . $row['photo'];
//             echo "
//             <div class='brand-container' style='background-image: url(' " . $image . " ');'>
//                 <div class='brand-text'>
//                     <h2>" . $row['name'] . "</h2>
//                     <span>" . $row['description'] . "</span>
//                 </div>
//             ";
//         }
//     } catch (PDOException $enter) {
//         echo "There is some problem in the connection: " . $enter->getMessage();
//     }
// }

?>


<!-- !FOR PAGE CONTENT -->
<?php
function getData($model)
{
    $pdo = new Database();
    $conn = $pdo->connect($model);

    $categoryID = $_GET['brand'];

    try {
        $stmt = $conn->prepare("SELECT model_id, category_id, name, photo, s1_passenger_no, s2_transmission, s3_door_no, price, description
        FROM rental.models
        WHERE models.category_id = :categoryID");
        $stmt->execute([':categoryID' => $categoryID]);

        foreach ($stmt as $row) {
            $image = 'images/' . $row['photo'];
            echo "
            <div class='car-container'>
                <div class='car-img'>
                    <a href='book.php?model=" . $row['model_id'] . "'>
                        <img src='" . $image . "' alt='" . $row['name'] . "'>
                    </a>
                </div>

                <div class='car-info'>
                    <div class='title'>
                        <h3>" . $row['name'] . "</h3>
                    </div>
                    <div class='content'>
                        <img src='./svg/passenger.svg' alt=''>
                        <p>" . $row['s1_passenger_no'] . "</p>
                        <img src='./svg/gear.svg' alt=''>
                        <p>" . $row['s2_transmission'] . "</p>
                            <img src='./svg/door.svg' alt=''>
                        <p>" . $row['s3_door_no'] . "</p>
                    </div>
                    <div class='price'>
                        <p>KSH " . $row['price'] . "</p>
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
    <title>Brand Cars</title>

    <link rel="stylesheet" href="./styles/branded.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <script src="./javascript/navbar.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

</head>

<body>
    <?php
    include './include/header.php';
    ?>

    <!-- !MAIN CONTENT -->

    <div class="brand-container" style="background-image: url(./images/01Audi-A4-Avant.jpg)">
    </div>

    <div class="context">
        <div class="brand-text1">
        </div>
    </div>

    <?php
    // $header = "SELECT photo, name, description FROM categories WHERE categories.category_id = ':categoryPH';";
    // fetchData($header);
    ?>

    <!-- <div class='context'>f
        <div class='brand-text1'>
            <h1 class='brand-header1'>" . $row['name'] . "</h1>
            <h3 class='brand-text'>" . $row['description'] . "</h3>
        </div>
    </div> -->

    <div class="main">

        <?php
        $model = "SELECT * FROM rental.models WHERE models.category_id = ':categoryID';";
        getData($model);
        ?>

    </div>

    <div class="divider"></div>

    <?php
    include './include/footer.php';
    ?>
</body>
</html>