<?php
session_start();


include 'db_connection.php';

// Fetch products
$sql = "SELECT * FROM products ORDER BY created_at DESC";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H O M E</title>
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
            <a href="index.php " class="logo-img"><img src="images/NATURE WHITE LOGO.png"></a>
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
                    ?></a>

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
    <section class="main-home">

        <div class="main-text">

            <!-- <h1>N A T U R E <br> <div class="dec1">Clothing</div></h1> -->
            <h3>BE BETTER <span>EVERYDAY</span></h3>
            <!-- <h2>Shop the Latest</h2> -->

            <a href="unisex.php" class="main-btn">Shop Now <i class='bx bx-right-arrow-alt'></i></a>

        </div>
    </section>

    <div class="home-img">
        <img src="images/main-img.png" class="rounded mx-auto d-block" alt="...">
    </div>

    <!-- New arrival -->
    <div class="new-arrival-Text">
        <h2>FOUR NEW <span>ARRIVALS</span> PER WEEK </h2>
    </div>
    <div class="product-grid">
        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/offer5.png" alt="jacket" width="300" class="product-img default">
                <img src="images/offer5_back.png" alt="jacket" width="300" class="product-img hover">

                <p class="showcase-badge">Yeah !</p>

            </div>

            <div class="showcase-content">

                <a href="cart.php#newArrivals1" class="showcase-category">NATURE Clothing</a>
                <br><br>
                <a href="cart.php#newArrivals1">
                    <h3 class="showcase-title">A newly sewn one for gym wear this week...</h3>
                </a>

                <div class="price-box">
                    <p class="price">LKR.2500</p>
                </div>
                <div class="cartForOffers">
                    <a href="cart.php#newArrivals1"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/offer6.png" alt="jacket" width="300" class="product-img default">
                <img src="images/offer6_back.png" alt="jacket" width="300" class="product-img hover">

                <p class="showcase-badge">Aw!</p>

            </div>

            <div class="showcase-content">

                <a href="cart.php#newArrivals2" class="showcase-category">NATURE Clothing </a>
                <br><br>
                <a href="cart.php#newArrivals2">
                    <h3 class="showcase-title">A new stitch for the ladies this week...</h3>
                </a>


                <div class="price-box">
                    <p class="price">LKR.2000</p>
                </div>
                <div class="cartForOffers">
                    <a href="cart.php#newArrivals2"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/forIndex2.png" alt="jacket" width="300" class="product-img default">
                <img src="images/forIndex2_back.png" alt="jacket" width="300" class="product-img hover">

                <p class="showcase-badge">Uh-huh!</p>

            </div>

            <div class="showcase-content">

                <a href="cart.php#newArrivals3" class="showcase-category">NATURE Clothing </a>
                <br><br>
                <a href="cart.php#newArrivals3">
                    <h3 class="showcase-title">A new style for those who want to wear big...</h3>
                </a>



                <div class="price-box">
                    <p class="price">LKR.2200</p>
                </div>
                <div class="cartForOffers">
                    <a href="cart.php#newArrivals3"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/forIndex3_back.png" alt="jacket" width="300" class="product-img default">
                <img src="images/forIndex3.png" alt="jacket" width="300" class="product-img hover">

                <p class="showcase-badge">Gee!</p>

            </div>

            <div class="showcase-content">

                <a href="cart.php#newArrivals4" class="showcase-category">NATURE Clothing </a>
                <br><br>
                <a href="cart.php#newArrivals4">
                    <h3 class="showcase-title">The sporty short sewn this week for gym wear...</h3>
                </a>


                <div class="price-box">
                    <p class="price">LKR.2300</p>
                </div>
                <div class="cartForOffers">
                    <a href="cart.php#newArrivals4"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

    </div>

    <div class="home-post">
        <img src="images/home_post.png" alt="nature middle post">
    </div>
    <br><br>

    <div class="sport-wear-Text">
        <h2>SPORT <span>W</span>EAR</h2>
    </div>
    <div class="product-grid">
        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/sportWear1.png" alt="Nature clothes" width="300" class="product-img default">
                <img src="images/sportWear1_back.png" alt="Nature clothes" width="300" class="product-img hover">


            </div>

            <div class="showcase-content">

                <a href="cart.php#gymwear1" class="showcase-category">NATURE Clothing</a>
                <br><br>
                <a href="cart.php#gymwear1">
                    <h3 class="showcase-title">Sport Trouser For Men</h3>
                </a>

                <div class="price-box">
                    <p class="price">LKR.2900</p>
                </div>
                <div class="cartForSport">
                    <a href="cart.php#gymwear1"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/gymwear2.png" alt="Nature clothes" width="300" class="product-img default">
                <img src="images/gymwear_long sleev t shirt.png" alt="Nature clothes" width="300"
                    class="product-img hover">


            </div>

            <div class="showcase-content">

                <a href="cart.php#gymwear2" class="showcase-category">NATURE Clothing </a>
                <br><br>
                <a href="cart.php#gymwear2">
                    <h3 class="showcase-title">Leggings Men Tights Gym Wear </h3>
                </a>


                <div class="price-box">
                    <p class="price">LKR.6000</p>
                </div>
                <div class="cartForSport">
                    <a href="cart.php#gymwear2"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/sportWear3.png" alt="Nature clothes" width="300" class="product-img default">
                <img src="images/sportWear3_back.png" alt="Nature clothes" width="300" class="product-img hover">


            </div>

            <div class="showcase-content">

                <a href="cart.php#gymwear3" class="showcase-category">NATURE Clothing </a>
                <br><br>
                <a href="cart.php#gymwear3">
                    <h3 class="showcase-title">Men's Dri Fit Sports Pant - Bottom</h3>
                </a>



                <div class="price-box">
                    <p class="price">LKR.2500</p>
                </div>
                <div class="cartForSport">
                    <a href="cart.php#gymwear3"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/boxershorts4.png" alt="Nature clothes" width="300" class="product-img default">
                <img src="images/boxershorts4_back.png" alt="Nature clothes" width="300" class="product-img hover">

            </div>

            <div class="showcase-content">

                <a href="cart.php#gymwear4" class="showcase-category">NATURE Clothing </a>
                <br><br>
                <a href="cart.php#gymwear4">
                    <h3 class="showcase-title">Boxer Shorts for Women</h3>
                </a>


                <div class="price-box">
                    <p class="price">LKR.2200</p>
                </div>
                <div class="cartForSport">
                    <a href="cart.php#gymwear4"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/sportwear5.png" alt="Nature clothes" width="300" class="product-img default">
                <img src="images/sportwear5_back.png" alt="Nature clothes" width="300" class="product-img hover">

            </div>

            <div class="showcase-content">

                <a href="cart.php#gymwear5" class="showcase-category">NATURE Clothing </a>
                <br><br>
                <a href="cart.php#gymwear5">
                    <h3 class="showcase-title">Mens Running Dry Athletic Short with Liner </h3>
                </a>


                <div class="price-box">
                    <p class="price">LKR.3300</p>
                </div>
                <div class="cartForSport">
                    <a href="cart.php#gymwear5"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/sportwear6_back.png" alt="Nature clothes" width="300" class="product-img default">
                <img src="images/sportwear6.png" alt="Nature clothes" width="300" class="product-img hover">


            </div>

            <div class="showcase-content">

                <a href="cart.php#gymwear6" class="showcase-category">NATURE Clothing </a>
                <br><br>
                <a href="cart.php#gymwear7">
                    <h3 class="showcase-title">100% Cotton Unisex Bottom Trouser</h3>
                </a>


                <div class="price-box">
                    <p class="price">LKR.2500</p>
                </div>
                <div class="cartForSport">
                    <a href="cart.php#gymwear6"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/sportBra8.png" alt="Nature clothes" width="300" class="product-img default">
                <img src="images/sportBra8_back.png" alt="Nature clothes" width="300" class="product-img hover">


            </div>

            <div class="showcase-content">

                <a href="cart.php#gymwear7" class="showcase-category">NATURE Clothing </a>
                <br><br>
                <a href="cart.php#gymwear7">
                    <h3 class="showcase-title">Classic Sports Bras</h3>
                </a>


                <div class="price-box">
                    <p class="price">LKR.3000</p>
                </div>
                <div class="cartForSport">
                    <a href="cart.php#gymwear7"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

        <div class="showcase">
            <div class="showcase-banner">
                <img src="images/sportBra7.png" alt="Nature clothes" width="300" class="product-img default">
                <img src="images/sportBra7_back.png" alt="Nature clothes" width="300" class="product-img hover">


            </div>

            <div class="showcase-content">

                <a href="cart.php#gymwear8" class="showcase-category">NATURE Clothing </a>
                <br><br>
                <a href="cart.php#gymwear8">
                    <h3 class="showcase-title">Nature Special Sport Bras</h3>
                </a>


                <div class="price-box">
                    <p class="price">LKR.3500</p>
                </div>
                <div class="cartForSport">
                    <a href="cart.php#gymwear8"><i class="fa-solid fa-bag-shopping"></i></a>
                </div>
            </div>

        </div>

    </div><br><br>
    <div class="order_form_btn">
        <a href="order_form.php" class="order-btn">Online Oders <i class='bx bx-right-arrow-alt'></i></a>
    </div>

    <div class="wattsapp_btn">
        <a href="http://Wa.me/+94783498886" class="wattsapp-btn" target="_blank"><i class="fa-brands fa-whatsapp"></i>
            Whatsapp</a>
    </div>


    <br><br>
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