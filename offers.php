<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O F F E R S</title>
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
    <style>
        form .product-se-btn {
            font-size: 16px;
            color: black;
            margin-right: -80px;
            margin-top: 40px;

        }

        form #pro-se-input {
            width: 200px;
            color: black;
            font-weight: 700;
            margin-top: 40px;
        }
    </style>
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
                    <div class="search">
                        <form action="search_results.php" method="GET">
                            <input type="text" name="query" class="pro-se-input" id="pro-se-input"
                                placeholder="Search products..." required>
                            <div class="search-icon-hr">
                                <hr>
                            </div>
                            <button type="submit" class="product-se-btn">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>

                    <script>
                        const search = document.querySelector('.search');
                        const input = document.querySelector('.input');
                        const btn = document.querySelector('.btn');
                        const userIcon = document.querySelector('.user-icon');
                        const cartIcon = document.querySelector('.cart-icon');

                        btn.addEventListener('click', () => {
                            const isActive = search.classList.toggle('active');
                            input.focus();

                            // Hide or show icons based on the search bar state
                            if (isActive) {
                                userIcon.style.display = 'none';
                                cartIcon.style.display = 'none';
                            } else {
                                userIcon.style.display = 'inline-block';
                                cartIcon.style.display = 'inline-block';
                            }
                        });

                        // Optional: Close the search bar when clicking outside
                        document.addEventListener('click', (event) => {
                            if (!search.contains(event.target) && !btn.contains(event.target)) {
                                search.classList.remove('active');
                                userIcon.style.display = 'inline-block';
                                cartIcon.style.display = 'inline-block';
                            }
                        });
                    </script>

            </div>

            </div>

            </div>
        </ul>

        <div class="menu-icon">
            <i class="fa-solid fa-bars" id="menuIcon" onclick="toggleMenu()"></i>
        </div>

    </nav>
    <div class="festivalDeco">
        <center><video src="video/snowFlakes for christmas.mp4" autoplay muted loop></video></center>
    </div>

    <main>

        <div class="product-featured">
            <div class="bell-icon">
                <img src="images/christmasBell.png" alt="jacket design" class="showcase-img">
            </div>
            <h2 class="title">CHRISTMAS SPECIALS</h2>
            <div class="showcase-wrapper has-scrollbar">
                <div class="showcase-container">
                    <div class="showcase">
                        <div class="showcase-banner">
                            <img src="images/trend4.jpg" id="jacket1" class="showcase-img">
                        </div>
                        <div class="showcase-content">

                            <a href="unisex.php">
                                <h3 class="showcase-title">FRONT LOGO PRINT</h3>
                            </a>
                            <p class="showcase-desc">
                                නත්තල් සමයේ ඔබේ ආදරය සහ සතුට ප්‍රකාශ කිරීමට අපගේ ටී-ෂර්ට් වඩාත් සුදුසුයි. විශේශ වට්ටම්
                                සහිත අපේ ටී-ෂර්ට් ඔබේ නත්තල ප්‍රීතිමත් කරනු ඇත...
                            </p>
                            <div class="price-box">
                                <p class="price">LKR.1500</p>

                                <p class="offer">LKR.1800</s>
                                </p>
                            </div>

                            <button class="add-cart-btn">add to cart</button>
                            <div class="showcase-status">
                                <div class="wrapper">
                                    <p>already sold: <b>30</b></p>
                                    <p>available: <b>40</b></p>
                                </div>

                                <div class="showcase-status-bar"></div>
                            </div>

                            <div class="countdown-box">
                                <p class="countdown-desc">
                                    Hurry Up! offer ends in:
                                </p>
                                <div class="countdown">
                                    <div class="countdown-content">
                                        <p class="display-number">36</p>
                                        <p class="display-text">Days</p>
                                    </div>

                                    <div class="countdown-content">
                                        <p class="display-number">24</p>
                                        <p class="display-text">Hours</p>
                                    </div>

                                    <div class="countdown-content">
                                        <p class="display-number">59</p>
                                        <p class="display-text">Minutes</p>
                                    </div>

                                    <div class="countdown-content">
                                        <p class="display-number">00</p>
                                        <p class="display-text">Seconds</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="showcase-container">
                    <div class="showcase">
                        <div class="showcase-banner">
                            <img src="images/offer5_back.png" id="jacket2" class="showcase-img">
                        </div>
                        <div class="showcase-content">

                            <a href="unisex.php">
                                <h3 class="showcase-title">Logo Back-print Tshirts</h3>
                            </a>
                            <p class="showcase-desc">
                                "Bring the whole family together in matching Christmas t-shirts! Create lasting memories
                                with our adorable family sets. Whether you're celebrating at home or attending a holiday
                                party, our family tees are the perfect way to spread holiday cheer."
                            </p>
                            <div class="price-box">
                                <p class="price">LKR.1600</p>
                                <p class="offer">LKR.2000</p>
                            </div>

                            <button class="add-cart-btn">add to cart</button>
                            <div class="showcase-status">
                                <div class="wrapper">
                                    <p>already sold: <b>15</b></p>
                                    <p>available: <b>22</b></p>
                                </div>

                                <div class="showcase-status-bar"></div>
                            </div>

                            <div class="countdown-box">
                                <p class="countdown-desc">
                                    Hurry Up! offer ends in:
                                </p>
                                <div class="countdown">
                                    <div class="countdown-content">
                                        <p class="display-number">31</p>
                                        <p class="display-text">Days</p>
                                    </div>

                                    <div class="countdown-content">
                                        <p class="display-number">24</p>
                                        <p class="display-text">Hours</p>
                                    </div>

                                    <div class="countdown-content">
                                        <p class="display-number">59</p>
                                        <p class="display-text">Minutes</p>
                                    </div>

                                    <div class="countdown-content">
                                        <p class="display-number">60</p>
                                        <p class="display-text">Seconds</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="play">
            <center><video src="video/shirts.mp4" width="1000" autoplay muted loop></video></center>
        </div>

        <!--offer product grid--->
        <div class="product-main">
            <h2 class="title">Offer <span>products</span></h2>
            <div class="product-grid">
                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="images/offer5.png" alt="jacket" width="300" class="product-img default">
                        <img src="images/offer5_back.png" alt="jacket" width="300" class="product-img hover">

                        <p class="showcase-badge">15%</p>

                    </div>

                    <div class="showcase-content">

                        <a href="#" class="showcase-category">NATURE OFFERS </a>
                        <a href="#">
                            <h3 class="showcase-title">Gym wear - Back print B</h3>
                        </a>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <div class="price-box">
                            <p class="price">Rs.2200</p>
                            <span class="offer">Rs.2500</span>
                        </div>
                        <div class="cartForOffers">
                            <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>

                </div>

                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="images/offer2.png" alt="jacket" width="300" class="product-img default">
                        <img src="images/offer2_back.png" alt="jacket" width="300" class="product-img hover">

                        <p class="showcase-badge angle blue">sale</p>

                    </div>

                    <div class="showcase-content">

                        <a href="#" class="showcase-category">NATURE OFFERS </a>
                        <a href="#">
                            <h3 class="showcase-title">Small Printed B t-shirts</h3>
                        </a>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <div class="price-box">
                            <p class="price">Rs.1900</p>
                            <span class="offer">Rs.2300</span>

                        </div>
                        <div class="cartForOffers">
                            <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>


                </div>

                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="images/offer3.png" alt="jacket" width="300" class="product-img default">
                        <img src="images/offer3_back.png" alt="jacket" width="300" class="product-img hover">

                        <p class="showcase-badge angle blue">sale</p>

                    </div>

                    <div class="showcase-content">

                        <a href="#" class="showcase-category">NATURE OFFERS </a>
                        <a href="#">
                            <h3 class="showcase-title">Golden Collar t-shirts</h3>
                        </a>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <div class="price-box">
                            <p class="price">Rs.1900</p>
                            <span class="offer">Rs.2300</span>
                        </div>
                        <div class="cartForOffers">
                            <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>

                </div>

                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="images/offer6.png" alt="jacket" width="300" class="product-img default">
                        <img src="images/offer6_back.png" alt="jacket" width="300" class="product-img hover">

                        <p class="showcase-badge angle blue">sale</p>

                    </div>

                    <div class="showcase-content">

                        <a href="#" class="showcase-category">NATURE OFFERS </a>
                        <a href="#">
                            <h3 class="showcase-title">Nature Crop-Top(Black & White)</h3>
                        </a>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <div class="price-box">
                            <p class="price">Rs.1900</p>
                            <span class="offer">Rs.2300</span>
                        </div>
                        <div class="cartForOffers">
                            <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>

                </div>

                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="images/pic2.jpg" alt="jacket" width="300" class="product-img default">
                        <img src="images/pic3.jpg" alt="jacket" width="300" class="product-img hover">

                        <p class="showcase-badge">15%</p>

                    </div>

                    <div class="showcase-content">

                        <a href="#" class="showcase-category">NATURE OFFERS </a>
                        <a href="#">
                            <h3 class="showcase-title">Over Size Printed t-shirts</h3>
                        </a>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <div class="price-box">
                            <p class="price">Rs.2200</p>
                            <span class="offer">Rs.2500</span>
                        </div>
                        <div class="cartForOffers">
                            <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>

                </div>

                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="images/offer4.png" alt="jacket" width="300" class="product-img default">
                        <img src="images/offer4_back.png" alt="jacket" width="300" class="product-img hover">

                        <p class="showcase-badge angle blue">sale</p>



                    </div>

                    <div class="showcase-content">

                        <a href="#" class="showcase-category">NATURE OFFERS </a>
                        <a href="#">
                            <h3 class="showcase-title">Printed sky blue t-shirts</h3>
                        </a>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <div class="price-box">
                            <p class="price">Rs.1900</p>
                            <span class="offer">Rs.2300</span>
                        </div>
                        <div class="cartForOffers">
                            <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>

                </div>

                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="images/offer1.png" alt="jacket" width="300" class="product-img default">
                        <img src="images/offer1_back.png" alt="jacket" width="300" class="product-img hover">

                        <p class="showcase-badge angle pink">new</p>

                    </div>

                    <div class="showcase-content">

                        <a href="#" class="showcase-category">NATURE OFFERS </a>
                        <a href="#">
                            <h3 class="showcase-title">Printed Olive t-shirts</h3>
                        </a>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <div class="price-box">
                            <p class="price">Rs.1900</p>
                            <span class="offer">Rs.2300</span>
                        </div>
                        <div class="cartForOffers">
                            <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>

                </div>

                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="images/pic4.jpg" alt="jacket" width="300" class="product-img default">
                        <img src="images/pic5.jpg" alt="jacket" width="300" class="product-img hover">

                        <p class="showcase-badge angle blue">sale</p>

                    </div>

                    <div class="showcase-content">

                        <a href="#" class="showcase-category">NATURE OFFERS </a>
                        <a href="#">
                            <h3 class="showcase-title">Over Size Printed t-shirts</h3>
                        </a>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <div class="price-box">
                            <p class="price">Rs.1900</p>
                            <span class="offer">Rs.2300</span>
                        </div>
                        <div class="cartForOffers">
                            <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </main>
    <br><br>
    <div class="order_form_btn">
        <a href="order_form.php" class="order-btn">Online Oders <i class='bx bx-right-arrow-alt'></i></a>
    </div>

    <div class="wattsapp_btn">
        <a href="http://Wa.me/+94783498886" class="wattsapp-btn" target="_blank"><i class="fa-brands fa-whatsapp"></i>
            Whatsapp</a>
    </div>


    <br><br>

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
                <form>
                    <i class="far fa-envelope"></i>
                    <input type="email" placeholder="Enter Your Email id" required>
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
        <p class="copyright"> 2024 © NATURE Clothing | All rights reserved </p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="script.js"></script>
</body>

</html>
<!-- yasith -->