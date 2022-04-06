<?php
include './include/session.php'
?>

<?php
function getData($model)
{
    $pdo = new Database();
    $conn = $pdo->connect($model);

    $modelID = $_GET['model'];

    try {
        $stmt = $conn->prepare("SELECT model_id, category_id, name, photo, s1_passenger_no, s2_transmission, s3_door_no, price, availability
        FROM rental.models
        WHERE models.model_id = :modelID");
        $stmt->execute([':modelID' => $modelID]);

        foreach ($stmt as $row) {
            $image = 'images/' . $row['photo'];
            echo "
                <section class='brand'>
                    <div class='column'>
                        <img src='" . $image . "' alt='" . $row['name'] . "'>
                    </div>
                <div class='column2'>
                    <h2>KSH " . $row['price'] . "</h2>
                    <span class='payment-details'>Per Day</span>
                </div>
                </section>

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
                    <div class='details'>
                        <img src='./svg/car.svg' alt=''>
                        <p>Number of cars available: " . $row['availability'] . "</p>
                    </div>
                    <div class='bt'>
                        <a href='#'>
                            <button class='action1'>Book now</button>
                        </a>
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
    <title>Book Vehicle</title>

    <link rel="stylesheet" href="./styles/book.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <script src="./javascript/navbar.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
</head>

<body>

    <?php
    include './include/header.php';
    ?>

    <?php
    $model = "SELECT * FROM rental.models WHERE models.model_id = ':modelID';";
    getData($model);
    ?>

    <!-- !BOOKING DETAILS -->
    <div class="booking-details">
        <h2 class="booking-title">Refueling</h2>
        <p class="booking-info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi illo sapiente cumque ullam delectus
            fugit! Repellat beatae, ducimus dignissimos quo, culpa sint laudantium aut at eveniet qui eos asperiores.
            Vitae ipsa et minima dolorem totam sint placeat ducimus, reprehenderit itaque. Amet ullam in, non expedita
            voluptas, soluta omnis est quasi nihil aspernatur, quae inventore aut. Eaque dolorum officiis ipsum?
            Ipsa corporis eos dicta iusto ipsum officiis in illo, eum pariatur possimus magni saepe, labore mollitia
            similique. Ipsa eum nihil, sed reiciendis vero laborum. Minus doloremque quia illo laborum optio!
            Reprehenderit deleniti excepturi vitae dolorum hic optio sapiente a magni error corrupti id maxime nulla
            harum accusamus reiciendis nemo ipsam voluptatem laborum cum dignissimos, atque fuga nostrum? Esse, earum
            laboriosam?
        </p>
    </div>

    <div class="booking-details">
        <h2 class="booking-title">Car Wash</h2>
        <p class="booking-info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi illo sapiente cumque ullam delectus
            fugit! Repellat beatae, ducimus dignissimos quo, culpa sint laudantium aut at eveniet qui eos asperiores.
            Vitae ipsa et minima dolorem totam sint placeat ducimus, reprehenderit itaque. Amet ullam in, non expedita
            voluptas, soluta omnis est quasi nihil aspernatur, quae inventore aut. Eaque dolorum officiis ipsum?
            Ipsa corporis eos dicta iusto ipsum officiis in illo, eum pariatur possimus magni saepe, labore mollitia
            similique. Ipsa eum nihil, sed reiciendis vero laborum. Minus doloremque quia illo laborum optio!
            Reprehenderit deleniti excepturi vitae dolorum hic optio sapiente a magni error corrupti id maxime nulla
            harum accusamus reiciendis nemo ipsam voluptatem laborum cum dignissimos, atque fuga nostrum? Esse, earum
            laboriosam?
        </p>
    </div>

    <div class="booking-details">
        <h2 class="booking-title">No Smoking</h2>
        <p class="booking-info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi illo sapiente cumque ullam delectus
            fugit! Repellat beatae, ducimus dignissimos quo, culpa sint laudantium aut at eveniet qui eos asperiores.
            Vitae ipsa et minima dolorem totam sint placeat ducimus, reprehenderit itaque. Amet ullam in, non expedita
            voluptas, soluta omnis est quasi nihil aspernatur, quae inventore aut. Eaque dolorum officiis ipsum?
            Ipsa corporis eos dicta iusto ipsum officiis in illo, eum pariatur possimus magni saepe, labore mollitia
            similique. Ipsa eum nihil, sed reiciendis vero laborum. Minus doloremque quia illo laborum optio!
            Reprehenderit deleniti excepturi vitae dolorum hic optio sapiente a magni error corrupti id maxime nulla
            harum accusamus reiciendis nemo ipsam voluptatem laborum cum dignissimos, atque fuga nostrum? Esse, earum
            laboriosam?
        </p>
    </div>

    <div class="divider1"></div>

    <!-- !FEATURES -->
    <div class="features">
        <h2 class="feature-title">Included</h2>

        <div class="features-wrapper">
            <div class="feature-list">
                <ul>
                    <li>Audio Input</li>
                    <li>Bluetooth</li>
                    <li>Heated Seats</li>
                </ul>
            </div>

            <div class="feature-list">
                <ul>
                    <li>All Wheel Drive</li>
                    <li>USB Input</li>
                    <li>FM Radio</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="divider1"></div>

    <div class="features">
        <h2 class="feature-title">Not Included</h2>

        <div class="features-wrapper">
            <div class="feature-list">
                <ul>
                    <li>GPS Navigation</li>
                    <li>Sunroof</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- !REVIEWS -->
    <div class="reviews">
        <h2 class="reviews-header">Reviews</h2>
    </div>

    <div class="divider2"></div>

    <div class="reviews-wrapper">
        <div class="id">
            <img src="./images/empty_user.png" alt="">
            <div class="id-info">
                <p class="name">John Doe</p>
                <p class="date-time">January 23, 2017 at 6:46 am</p>
            </div>
        </div>

        <div class="review-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi illo sapiente cumque ullam
                delectus fugit! Repellat beatae, ducimus dignissimos quo, culpa sint laudantium aut at eveniet qui eos
                asperiores. Vitae ipsa et minima dolorem totam sint placeat ducimus, reprehenderit itaque. Amet ullam
                in,
                non expedita voluptas, soluta omnis est quasi nihil aspernatur, quae inventore aut. Eaque dolorum
                officiis
                ipsum? Ipsa corporis eos dicta iusto ipsum officiis in illo, eum pariatur possimus magni saepe, labore
                mollitia similique. Ipsa eum nihil, sed reiciendis vero laborum. Minus doloremque quia illo laborum
                optio!
                Reprehenderit deleniti excepturi vitae dolorum hic optio sapiente a magni error corrupti id maxime nulla
                harum accusamus reiciendis nemo ipsam voluptatem laborum cum dignissimos, atque fuga nostrum? Esse,
                earum
                laboriosam?
            </p>

        </div>
    </div>

    <div class="reviews-wrapper">
        <div class="id">
            <img src="./images/empty_user.png" alt="">
            <div class="id-info">
                <p class="name">John Doe</p>
                <p class="date-time">January 23, 2017 at 6:46 am</p>
            </div>
        </div>

        <div class="review-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi illo sapiente cumque ullam
                delectus fugit! Repellat beatae, ducimus dignissimos quo, culpa sint laudantium aut at eveniet qui eos
                asperiores. Vitae ipsa et minima dolorem totam sint placeat ducimus, reprehenderit itaque. Amet ullam
                in,
                non expedita voluptas, soluta omnis est quasi nihil aspernatur, quae inventore aut. Eaque dolorum
                officiis
                ipsum? Ipsa corporis eos dicta iusto ipsum officiis in illo, eum pariatur possimus magni saepe, labore
                mollitia similique. Ipsa eum nihil, sed reiciendis vero laborum. Minus doloremque quia illo laborum
                optio!
                Reprehenderit deleniti excepturi vitae dolorum hic optio sapiente a magni error corrupti id maxime nulla
                harum accusamus reiciendis nemo ipsam voluptatem laborum cum dignissimos, atque fuga nostrum? Esse,
                earum
                laboriosam?
            </p>

        </div>
    </div>

    <div class="reviews-wrapper">
        <div class="id">
            <img src="./images/empty_user.png" alt="">
            <div class="id-info">
                <p class="name">John Doe</p>
                <p class="date-time">January 23, 2017 at 6:46 am</p>
            </div>
        </div>

        <div class="review-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi illo sapiente cumque ullam
                delectus fugit! Repellat beatae, ducimus dignissimos quo, culpa sint laudantium aut at eveniet qui eos
                asperiores. Vitae ipsa et minima dolorem totam sint placeat ducimus, reprehenderit itaque. Amet ullam
                in,
                non expedita voluptas, soluta omnis est quasi nihil aspernatur, quae inventore aut. Eaque dolorum
                officiis
                ipsum? Ipsa corporis eos dicta iusto ipsum officiis in illo, eum pariatur possimus magni saepe, labore
                mollitia similique. Ipsa eum nihil, sed reiciendis vero laborum. Minus doloremque quia illo laborum
                optio!
                Reprehenderit deleniti excepturi vitae dolorum hic optio sapiente a magni error corrupti id maxime nulla
                harum accusamus reiciendis nemo ipsam voluptatem laborum cum dignissimos, atque fuga nostrum? Esse,
                earum
                laboriosam?
            </p>
        </div>
    </div>

    <!-- !WRITE REVIEWS -->
    <div class="reviews">
        <h2 class="reviews-header">Write A Review</h2>
    </div>

    <div class="divider2"></div>

    <div class="form-wrapper">
        <form action="" class="review-form">
            <label for="comment" class="comment-label">Comment</label>
            <textarea name="comment" id="comment" cols="50" rows="10" class="comment-area"></textarea>

            <div class="details">
                <div class="align">
                    <label for="name" class="comment-label">Name*</label>
                    <input type="text" name="name" id="name" placeholder="Please Write Your Full Name" required class="input">
                </div>

                <div class="align">
                    <label for="email" class="comment-label">Email*</label>
                    <input type="email" name="email" id="email" placeholder="Please Write Your Email" required class="input">
                </div>

                <div class="align">
                    <label for="website" class="comment-label">Website</label>
                    <input type="text" name="website" id="website" placeholder="Please Write Your Website" class="input">
                </div>
            </div>

            <div class="bt">
                <input class="action2" type="submit" value="Review" name="review">
            </div>
        </form>
    </div>

    <div class="divider"></div>

    <?php
    include './include/footer.php';
    ?>

</body>

</html>