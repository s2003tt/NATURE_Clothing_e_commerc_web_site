<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Y O U - C H O O S E D</title>
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
        .nav-icon p {
            position: relative;
            color: white;
            font-size: 11px;
            width: 10px;
            height: 16px;
            font-weight: 700;
            border-radius: 50%;
            padding: 2px;
            margin: -13px -10px 0px 95px;
            background: red;
        }
    </style>
</head>

<body class="show-cart">
    <nav>
        <div class="logo">
            <a href="# " class="logo-img"><img src="images/NATURE WHITE LOGO.png"></a>
        </div>
        <ul id="menuList">
            <li><a href="index.php" class="active">HOME</a></li>
            <li><a href="unisex.php">PRODUCTS</a></li>
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

                <a href="#" class="cart-icon"><i class="fa-solid fa-cart-shopping"></i>
                    <p if="cart-count">0</p>
                </a>
            </div>
        </ul>

        <div class="menu-icon">
            <i class="fa-solid fa-bars" id="menuIcon" onclick="toggleMenu()"></i>
        </div>

    </nav>


    <section id="prodetails" class="section-separate1">
        <a name="newArrivals1"></a>
        <div class="single-pro-image">
            <img src="images/offer5.png" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/offer5.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/offer5_back.png" width="100%" class="small-img" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> New Arrivals 4 - GymWear </h6>
            <h4>Printed T-Shirts</h4>
            <h2>LKR.2500/-</h2>
            <select>
                <option>Select size</option>
                <option>XS</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>Elevate your style game with our captivating sports-inspired graphics. Whether you're a die-hard fan
                or simply appreciate the aesthetic of athleticism, our bold and vibrant designs are sure to make a
                statement.</span>
        </div>
    </section>


    <section id="prodetails" class="section-separate1">
        <a name="newArrivals2"></a>
        <div class="single-pro-image">
            <img src="images/offer6.png" width="100%" id="MainImg1" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/offer6.png" width="100%" class="small-img1" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/offer6_back.png" width="100%" class="small-img1" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> New Arrivals 4 - Printed CropTop </h6>
            <h4>Printed T-Shirts</h4>
            <h2>LKR.2000/-</h2>
            <select>
                <option>Select size</option>
                <option>XS</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>Our t-shirts aren't just clothing; they're wearable works of art. The high-quality materials and
                innovative printing techniques ensure that your favorite design will remain vibrant and
                eye-catching</span>
        </div>
    </section>


    <section id="prodetails" class="section-separate1">
        <a name="newArrivals3"></a>
        <div class="single-pro-image">
            <img src="images/forIndex2.png" width="100%" id="MainImg2" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/forIndex2.png" width="100%" class="small-img2" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/forIndex2_back.png" width="100%" class="small-img2" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> New Arrivals 4 - Oversize Latest </h6>
            <h4>Printed T-Shirts</h4>
            <h2>LKR.2200/-</h2>
            <select>
                <option>Select size</option>
                <option>XS</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>Our high-quality cotton t-shirts offer a perfect blend of comfort and style. With a regular fit and
                short sleeves, they're ideal for everyday wear.</span>
        </div>
    </section>



    <section id="prodetails" class="section-separate1">
        <a name="newArrivals4"></a>
        <div class="single-pro-image">
            <img src="images/forIndex3_back.png" width="100%" id="MainImg3" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/forIndex3_back.png" width="100%" class="small-img3" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/forIndex3.png" width="100%" class="small-img3" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> New Arrivals 4 - GymWear </h6>
            <h4>Printed Shorts</h4>
            <h2>LKR.2300/-</h2>
            <select>
                <option>Select size</option>
                <option>XS</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>So, whether you're cheering from the sidelines, hitting the gym, or simply going about your day, our
                sports-inspired shorts will help you showcase your unique personality and athletic spirit.</span>
        </div>
    </section>

    <!-- gym wear product -->
    <section id="prodetails" class="section-separate1">
        <a name="gymwear1"></a>
        <div class="single-pro-image">

            <img src="images/sportWear1.png" width="100%" id="MainImg4" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/sportWear1.png" width="100%" class="small-img4" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/sportWear1_back.png" width="100%" class="small-img4" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> Gym Wear </h6>
            <h4>Printed Sport Trouser</h4>
            <h2>LKR.2900/-</h2>
            <select>
                <option>Select size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>Our sports-inspired designs are more than just clothing; they're a statement of your passion and
                athletic spirit.</span>
        </div>
    </section>

    <section id="prodetails" class="section-separate1">
        <a name="gymwear2"></a>
        <div class="single-pro-image">

            <img src="images/gymwear2.png" width="100%" id="MainImg5" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/gymwear2.png" width="100%" class="small-img5" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/gymwear_long sleev t shirt.png" width="100%" class="small-img5" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> Gym Wear </h6>
            <h4>Printed Leggings Men Tights</h4>
            <h2>LKR.6000/-</h2>
            <select>
                <option>Select size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>Our clothing isn't just about looking good; it's about feeling great. High-quality materials and
                innovative designs ensure optimal comfort and performance.</span>
        </div>
    </section>

    <section id="prodetails" class="section-separate1">
        <a name="gymwear3"></a>
        <div class="single-pro-image">

            <img src="images/sportWear3.png" width="100%" id="MainImg6" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/sportWear3.png" width="100%" class="small-img6" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/sportWear3_back.png" width="100%" class="small-img6" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> Gym Wear </h6>
            <h4>Men's Dri Fit Sports Pant</h4>
            <h2>LKR.2500/-</h2>
            <select>
                <option>Select size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>Whether you're a seasoned athlete or a casual fan, our sports-inspired apparel will fuel your passion
                and elevate your game.</span>
        </div>
    </section>


    <section id="prodetails" class="section-separate1">
        <a name="gymwear4"></a>
        <div class="single-pro-image">

            <img src="images/boxershorts4.png" width="100%" id="MainImg7" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/boxershorts4.png" width="100%" class="small-img7" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/boxershorts4_back.png" width="100%" class="small-img7" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> Gym Wear </h6>
            <h4>Boxer Shorts for Women</h4>
            <h2>LKR.2200/-</h2>
            <select>
                <option>Select size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>Our diverse range of designs allows you to express your individuality and showcase your love for
                sports.</span>
        </div>
    </section>

    <section id="prodetails" class="section-separate1">
        <a name="gymwear5"></a>
        <div class="single-pro-image">

            <img src="images/sportwear5.png" width="100%" id="MainImg8" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/sportwear5.png" width="100%" class="small-img8" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/sportwear5_back.png" width="100%" class="small-img8" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> Gym Wear </h6>
            <h4>Mens Running Dry Athletic Short with Liner</h4>
            <h2>LKR.3300/-</h2>
            <select>
                <option>Select size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>Our designs seamlessly transition from the field to the street, making them perfect for any
                occasion.</span>
        </div>
    </section>

    <section id="prodetails" class="section-separate1">
        <a name="gymwear6"></a>
        <div class="single-pro-image">

            <img src="images/sportwear6.png" width="100%" id="MainImg9" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/sportwear6.png" width="100%" class="small-img9" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/sportwear6_back.png" width="100%" class="small-img9" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> Gym Wear </h6>
            <h4>Cotton Unisex Bottom Trouser</h4>
            <h2>LKR.2500/-</h2>
            <select>
                <option>Select size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>Wear our sports-inspired clothing and feel the adrenaline rush.</span>
        </div>
    </section>

    <section id="prodetails" class="section-separate1">
        <a name="gymwear7"></a>
        <div class="single-pro-image">

            <img src="images/sportBra8.png" width="100%" id="MainImg10" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/sportBra8.png" width="100%" class="small-img10" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/sportBra8_back.png" width="100%" class="small-img10" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> Gym Wear </h6>
            <h4>Classic Sports Bras</h4>
            <h2>LKR.3000/-</h2>
            <select>
                <option>Select size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>Become part of a community of sports enthusiasts and fashion-forward individuals.</span>
        </div>
    </section>


    <section id="prodetails" class="section-separate1">
        <a name="gymwear8"></a>
        <div class="single-pro-image">

            <img src="images/sportBra7.png" width="100%" id="MainImg11" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/sportBra7.png" width="100%" class="small-img11" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/sportBra7_back.png" width="100%" class="small-img11" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6> Gym Wear </h6>
            <h4>Nature Special Sport Bras</h4>
            <h2>LKR.3500/-</h2>
            <select>
                <option>Select size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
            <input type="number" value="1">
            <button class="add-cart-btn">add to cart</button>
            <h4>Product Details</h4>
            <span>This high-quality athletic apparel, tailored for women, is a product of our company. Designed with
                comfort in mind, it offers exceptional performance and style.</span>
        </div>
    </section>










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
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <a href="http://Wa.me/+94783498886" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <i class="fab fa-pinterest"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright"> 2024 © NATURE Clothing | All rights reserved</p>
    </footer>
    </div>

    <script src="Single-pro-script.js"></script>
</body>

</html>