<?php
include 'db_connection.php';

// Fetch products
$sql = "SELECT * FROM products ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Our Products</title>
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
        nav ul {
            display: flex;
            gap: 20px;
            padding-right: -100px;
            margin: 0px 0px 0px -190px;
        }

        nav ul li {
            list-style-type: none;
        }

        ul .nav-icon {
            margin-right: 20px;
            padding-left: 30px;
        }

        ul .nav-icon a {
            color: white;
            font-weight: bold;
            margin-right: 30px;
            padding-right: -20px;
            transition: 0.3s ease;
        }

        .nav-icon .container p {
            position: relative;
            color: crimson;
            font-weight: 700;
            margin: -20px -60px 0px 105px;
        }

        .logo img {
            width: 180px;
            height: auto;
            position: fixed;
            margin: -65px -20px 0px -150px;
            padding-right: 20px;
        }

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


        .pro-container .pro .upload-pro {
            justify-content: space-between;
            padding-top: 0px;
            display: inline;
            flex-wrap: wrap;

            margin: auto;

        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="index.php" class="logo-img"><img src="images/NATURE WHITE LOGO.png"></a>
        </div>

        <ul id="menuList">
            <li><a href="index.php">HOME</a></li>
            <li><a href="products_list.php" class="active">PRODUCTS</a></li>
            <li><a href="Customization.php">CUSTOMIZATION</a></li>
            <li><a href="offers.php">OFFERS</a></li>
            <li><a href="about.php">ABOUT</a></li>

            <div class="nav-icon">
                <div class="container">
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


    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>

        <section id="product1" class="section-p1">
            <div class="pro-container">
                <div class="pro">
                    <img src="images/forWebsite10.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>White Printed T-shirt </h5>
                        <p>GSM 190</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.1800</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>
                <div class="pro">
                    <img src="images/forWebsite11.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Bronze Baggy T-shirt</h5>
                        <p>GSM 190</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.1900</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></div>
                </div>
                <div class="pro">
                    <img src="images/forWebsite4.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>White Normal T-shirt</h5>
                        <p>GSM 190</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.1700</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>
                <div class="pro">
                    <img src="images/forWebsite2.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Silver Printed(Special)</h5>
                        <p>Polyester - GSM 180</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.2000</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>
                <div class="pro">
                    <img src="images/forWebsite9.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Salmon-Baggy-Fullkit</h5>
                        <p>GSM 190</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.3500</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>
                <div class="pro">
                    <img src="images/forWebsite6.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Back printed T-shirt</h5>
                        <p>GSM 190</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>Rs.1800</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>
                <div class="pro">
                    <img src="images/forWebsite1.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>White Collar T-shirt</h5>
                        <p>GSM 200 - 220</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.2200</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>
                <div class="pro">
                    <img src="images/forWebsite3.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Red Collar T-shirt</h5>
                        <p>GSM 200 - 220</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.2200</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>



                <div class="pro">
                    <img src="images/forWebsite16.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Cyan Collar T-shirt</h5>
                        <p>GSM 200 - 220</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.2200</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>

                <div class="pro">
                    <img src="images/forWebsite13.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Back Printed T-shirt</h5>
                        <p>GSM 190</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.1800</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>

                <div class="pro">
                    <img src="images/forWebsite14.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Charcoal T-shirt</h5>
                        <p>Polyester - GSM 180</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.1800</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>

                <div class="pro">
                    <img src="images/forWebsite15.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Light-Gray-Gym</h5>
                        <p>GSM 180</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.1800</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>

                <div class="pro">
                    <img src="images/forWebsite17.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Brenze-Baggy-Fullkit</h5>
                        <p>GSM 190</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.3500</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>

                <div class="pro">
                    <img src="images/forWebsite18.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Gray-Baggy-Fullkit</h5>
                        <p>GSM 190</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.3500</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>

                <div class="pro">
                    <img src="images/forWebsite19.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Wheat-Baggy-Fullkit</h5>
                        <p>GSM 190</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.3500</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>

                <div class="pro">
                    <img src="images/forWebsite20.png" alt="">
                    <div class="des">
                        <span>NATURE</span>
                        <h5>Spring Green T-shirt</h5>
                        <p>GSM 190</p>
                        <div class="star">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <h4>LKR.1800</h4>
                    </div>
                    <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i></a></div>
                </div>

            </div>
        </section>
        <div class="pro-container">
            <?php while ($product = $result->fetch_assoc()): ?>
                <div class="pro">
                    <div class="upload-pro">
                        <img src="<?php echo htmlspecialchars($product['image_path']); ?>"
                            alt="<?php echo htmlspecialchars($product['product_name']); ?>">
                        <div class="des">
                            <span><?php echo htmlspecialchars($product['category']); ?></span>
                            <h5><?php echo htmlspecialchars($product['product_name']); ?></h5>
                            <p><?php echo htmlspecialchars($product['description']); ?></p>
                            <div class="star">
                                <!-- Add star rating logic if needed -->
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>
                            <h4>LKR.<?php echo number_format($product['price'], 2); ?></h4>
                        </div>
                        <div class="cart">
                            <a href="product_detail.php?id=<?php echo $product['product_id']; ?>">
                                <div class="cart"> <a href="#"><i class="fa-solid fa-bag-shopping"></i></a></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
        </div>
    </section>

    <br><br>
    <!-- Trending products section -->
    <section class="trending-products" id="trending">
        <div class="center-text">
            <h2>OUR TRENDING <span>PRODUCTS</span></h2>
        </div>

        <div class="productsForTrend">
            <a href="#" class="linkToCart">
                <div class="card" style="width: 17rem;">
                    <img src="images/forWebsite2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fast Running Suit</h5>
                        <p class="card-text"> Our premium t-shirts are made from the softest, ensuring all-day comfort.
                        </p>

                        <div class="ratting">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <div class="price">
                            <p>LKR.1600 - 2000</p>
                        </div>

                    </div>

                </div>

                <div class="card" style="width: 17rem;">
                    <img src="images/forWebsite8.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hot</h5>
                        <p class="card-text">The lightweight material wicks away moisture, keeping you cool, even on the
                            hottest days.</p>
                        <div class="ratting">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <div class="price">
                            <p>LKR.1600 - 2000</p>
                        </div>

                    </div>
                </div>

                <div class="card" style="width: 17rem;">
                    <img src="images/forWebsite4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Comfort</h5>
                        <p class="card-text">Indulge in the luxury of our premium t-shirts. Made with meticulous
                            attention to detail.</p>
                        <div class="ratting">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <div class="price">
                            <p>LKR.1600 - 2000</p>
                        </div>

                    </div>
                </div>

                <div class="card" style="width: 17rem;">
                    <img src="images/forWebsite5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Minimalist Tees</h5>
                        <p class="card-text">From classic designs to bold prints, we offer a wide range of options to
                            suit every taste.</p>
                        <div class="ratting">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <div class="price">
                            <p>LKR.1600 - 2000</p>
                        </div>

                    </div>
                </div>
            </a>
            <a href="Customization.php" class="seemore-btn">SeeOther<i class='bx bx-right-arrow-alt'></i></a>

        </div>
    </section>
    <br><br>
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
        <p class="copyright"> 2024 © NATURE Clothing | All rights reserved</p>
    </footer>


    <script src="script.js"></script>
</body>

</html>