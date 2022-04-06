<?php
include './include2/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="./styles2/adminhome.css">

</head>

<header class="header">

    <div>
        <span></span>
    </div>

    <div class="nav-button">

        <a href="./logout.php">Log Out</a>

    </div>

    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="logo">
                <a href="#" class="nav-link">
                    <span class="link-text logo-text">G Car Rentals</span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="angle-double-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
                        <g class="fa-group">
                            <path fill="currentColor" d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z" class="fa-secondary"></path>
                            <path fill="currentColor" d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z" class="fa-primary"></path>
                        </g>
                    </svg>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img src="./svg/01user.svg" height="50rem" width="50rem" alt="">
                    <span class="link-text">
                        <!-- User -->
                        <?php
                        if (isset($_SESSION['user'])) {
                            echo '
                                  <span class="link-text"> <a href="#" >' .  $user['first_name'] . '</a> </span>
                                ';
                        } else {
                            echo '<span class="link-text">User</span>';
                        }
                        ?>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img src="./svg/02explore.svg" height="50rem" width="50rem" alt="">
                    <span class="link-text">Explore</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img src="./svg/03location.svg" height="50rem" width="50rem" alt="">
                    <span class="link-text">Location</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img src="./svg/04favorite.svg" height="50rem" width="50rem" alt="">
                    <span class="link-text">Favorites</span>
                </a>
            </li>
            <li class="nav-item" id="themeButton">
                <a href="#" class="nav-link">
                    <img class="img_footer" src="./svg/05chat.svg" height="40rem" width="40rem" alt="">
                    <span class="link-text">Contact</span>
                </a>
            </li>
        </ul>

    </nav>

</header>

<body>

    <!-- <?php
            include './Test2/admin/include2/header2.php';
            ?> -->



    <div id="img-wrap">

        <div class="landing-img-container">
            <img class="landing-img" src="./images/landing-img.png" alt="" width="100%">
        </div>

    </div>

    <div id="page-wrap">

        <div class="container">

            <div class="landing-img-container">
                <img class="landing-img" src="./images/landing-img.png" alt="" width="100%">
            </div>

        </div>

        <h1>WELCOME ADMIN</h1>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
            consectetur explicabo repellendus neque vel consequatur fugiat.
            Itaque, sequi assumenda laboriosam, atque omnis, cum modi alias fuga
            esse nemo animi incidunt perferendis natus. Rem quaerat, tenetur ipsam
            officia quas voluptas nobis voluptatibus, doloremque eum minima velit
            deleniti odit? Fugit, deserunt nisi.
        </p>

        <h1>WELCOME ADMIN</h1>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
            consectetur explicabo repellendus neque vel consequatur fugiat.
            Itaque, sequi assumenda laboriosam, atque omnis, cum modi alias fuga
            esse nemo animi incidunt perferendis natus. Rem quaerat, tenetur ipsam
            officia quas voluptas nobis voluptatibus, doloremque eum minima velit
            deleniti odit? Fugit, deserunt nisi.
        </p>

    </div>


</body>

</html>