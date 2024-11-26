<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- cdnjs link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- box-icon link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="# " class="logo-img"><img src="images/NATURE WHITE LOGO.png"></a>
        </div>
        <ul id="menuList">
            <li><a href="index.php" class="active">HOME</a></li>
            <li><a href="products_list.php">PRODUCTS</a></li>
            <li><a href="Customization.php">CUSTOMIZATION</a></li>
            <li><a href="offers.php">OFFERS</a></li>
            <li><a href="about.php">ABOUT</a></li>

            <div class="nav-icon">

                <a href="NatureLoginSignin/login.php">
                    <?php
                    if (isset($_SESSION["username"])) {
                        echo $_SESSION["username"] . ' !';
                        echo '<a href="NatureLoginSignin/Includes/logout.inc.php" class="main-btn">Logout</i></a>';
                    } else {
                        echo '<a href="NatureLoginSignin/login.php"><i class="fa-solid fa-user"></i></a>';
                    }
                    ?>
                    <!-- <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a> -->
            </div>
        </ul>

        <div class="menu-icon">
            <i class="fa-solid fa-bars" id="menuIcon" onclick="toggleMenu()"></i>
        </div>

    </nav>

    <!-- ABOUT SECTION -->
    <section class="about_page">

        <div class="description_about">
            <div class="global-headline">
                <h2 class="sub-headline">
                    R e a d
                </h2>
                <h3 class="headline headline-dark">Our Story</h3>

            </div>
            <div class="Horizontal"></div>
            <p>"Yasith Wijesuriya is an undergraduate student pursuing his academic goals while actively engaging in
                entrepreneurial endeavors. During a part-time role as a graphic designer, he encountered a friend
                involved in the t-shirt printing and sales industry.</p>
            <p>Inspired by this connection, Wijesuriya conceived the idea of establishing a brand named "NATURE" and
                subsequently formed a partnership with his friend in 2024. Today, the brand is actively marketed and
                gaining significant popularity among consumers.</p>
            <div class="Horizontal2"></div>

            <div class="about_img">
                <img class="animate-top" src="images/about_fullsuit.png" alt="bread">
                <div class="about-img-discribe">
                    <p>Yasith Wijesuriya (Chairman Of ~ NATURE CLOTHING ~)</p>
                </div>
            </div>

        </div>
        <br><br>


        <div class="thanku">
            <p>අප සමග එක්වූවාට ස්තූති , Mr / Ms</p>
        </div>
        <div class="customerName">
            <?php

            if (isset($_SESSION["username"])) {
                echo $_SESSION["username"] . ' !';
            } else {
                echo '<i class="fa-solid fa-person"></i>';
            }
            ?>
        </div>


    </section>


    <!-- footer -->
    <footer>
        <div class="rowForFooter">
            <div class="colF">
                <img src="images/NATURE WHITE LOGO.png" class="logoForFooter">
            </div>
            <div class="colF">
                <h3>ONLINE STORE <div class="underline"><span></span></div>
                </h3>
                <p>+94 78 349 8886</p>
                <p class="email-id">@natureClothing@gmail.com</p>
                <p>Gampaha , Sri Lanka</p>
            </div>
            <div class="colF">
                <h3>LINKS <div class="underline"><span></span></div>
                </h3>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="products_list.php">PRODUCTS</a></li>
                    <li><a href="Customization.php">CUSTOMIZATION</a></li>
                    <li><a href="offers.php">OFFERS</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </div>
            <div class="colF">
                <h3>NEWSLETTER <div class="underline"><span></span></div>
                </h3>
                <form action="https://formsubmit.co/yasithwijesuriyauniversity2002@gmail.com" method="POST"
                    target="_blank">
                    <i class="far fa-envelope"></i>
                    <input type="email" name="email" placeholder="Enter Your Email id" required>
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=61563603164967&mibextid=ZbWKwL" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <i class="fab fa-twitter"></i>
                    <a href="http://Wa.me/+94783498886" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <i class="fab fa-pinterest"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright"> 2024 © NATURE Clothing | All rights reserved</p>
    </footer>


    <script src="script.js"></script>
</body>

</html>