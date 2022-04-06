<!-- !NAVBAR -->
<header class="header-nav">
    <nav class="flex-nav">

        <!-- !First Item in the navbar (LOGO) -->
        <div class="logo">
            <img src="./images/logo.png" alt="">
        </div>

        <!-- !Second Item in the navbar (LINKS) -->
        <div class="top-navbar" id="my-topnav">

            <a href="\main\Test2\landing.php" class="nav-item">Home</a>

            <div class="dropdown">
                <button class="dropbtn">Cars</button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Pages</button>
                <div class="dropdown-content">
                    <a href="#">About Us</a>
                    <a href="#">Services</a>
                    <a href="#">Contact Us</a>
                    <a href="#">FAQ's</a>
                </div>
            </div>

            <a href="#contact" class="nav-item">Contact</a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <img src="./svg/menu.svg" alt="" height="18px">
            </a>
        </div>

        <!-- !Third Item in the navbar (BUTTONS) -->
        <?php
        if (isset($_SESSION['user'])) {
            echo '
            <div class="auth-btn-php">
                <a href="#" >Hello, ' .  $user['first_name'] . '</a>
                <a href="logout.php">Log Out</a>
            </div>
            ';
        } else {
            echo '
            <div class="auth-btn">
            <button class="register"> <a href="signup.php">Register as User</a> </button>
            <button class="login"> <a href="signin.php">Login as User</a></button>
            </div>
            ';
        }
        ?>

    </nav>
</header>