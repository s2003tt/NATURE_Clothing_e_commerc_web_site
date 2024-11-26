<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C U S T O M I Z A T I O N</title>
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

        form .search-icon-hr {
            width: 10px;
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

    <section class="banner-wrapper">

        <br><br>

        <div class="banner-content">
            <!-- banner left -->
            <div class="banner-left">

                <h2><span>get t-shirt</span> of your selection</h2>
                <p>Stylish Fashionable and High Quality Unisex T Shirt Material- Single Jersey 190 gsm 8 Colors
                    Available</p>
                <a href="#" class="readMore-btn">ReadMore <i class='bx bx-right-arrow-alt'></i></a>


                <div class="color-content">
                    <h3>select color</h3>
                    <div class="color-groups">
                        <div class="color color-White active-color" onclick="selectColor('White')"></div>
                        <div class="color color-Black" onclick="selectColor('Black')"></div>
                        <div class="color color-Yellow" onclick="selectColor('Yellow')"></div>
                        <div class="color color-Blue" onclick="selectColor('Blue')"></div>
                        <div class="color color-Red" onclick="selectColor('Red')"></div>
                        <div class="color color-Pink" onclick="selectColor('Pink')"></div>
                        <div class="color color-Orange" onclick="selectColor('Orange')"></div>
                        <div class="color color-Green" onclick="selectColor('Green')"></div>
                    </div>
                </div>

                <div class="color-content">
                    <h3>Select Size</h3>
                    <div class="color-groups">
                        <div class="size size-S active-size" onclick="selectSize('S')">S</div>
                        <div class="size size-M" onclick="selectSize('M')">M</div>
                        <div class="size size-L" onclick="selectSize('L')">L</div>
                        <div class="size size-XL" onclick="selectSize('XL')">XL</div>
                        <div class="size size-XXL" onclick="selectSize('XXL')">XXL</div>
                    </div>
                    <div id="selected-size">Selected Size: S</div>
                </div>
            </div>

            <!-- banner right -->
            <div id="tshirt-div" class="banner-right">
                <img id="tshirt-backgroundpicture" src="images/tshirt_white.png">
            </div>
            <div id="drawingArea" class="drawing-area">
                <div class="canvas-container">
                    <canvas id="tshirt-canvas" width="300" height="350"></canvas>
                </div>
            </div>
        </div>
    </section>

    <div id="tshirt-color" class="design-c">
        <p><b>To remove a loaded picture on the T-Shirt select it and press the DEL key or (Ctrl + F5) keys ...</b></p>
        <br>
        <label for="tshirt-design">T-Shirt Design:</label>
        <select id="tshirt-print">
            <option value="">SELECT ONE OF OUR DESIGNS..</option>

            <option value="images/nature logo.png">Nature logo</option>
            <option value="images/dangerous_dog.png">Dog Face</option>
            <option value="images/elephant face with circle.png">Elephant Face1</option>
            <option value="images/elephant design2.png">Elephant Face2</option>
            <option value="images/tree_circle.png">Tree Circle</option>
            <option value="images/nature tree_design.png">Tree With Women Design </option>
            <option value="images/white tiger.png">White Tiger Design</option>
            <option value="images/bodybuilder.png">Bodibuilding Design</option>
        </select>

        <br><br>
        <label for="tshirt-custompicture">Upload your own design:</label>
        <input type="file" id="tshirt-custompicture" />


        <br><br>

    </div>

    <br><br>
    <!-- Customer Selection Table -->
    <!-- <div class="customer-selection">
             <h3>Selected Details</h3>
             <br>
             <table id="selection-table">
                 <thead>
                     <tr>
                         <th><center>Attribute</center></th>
                         <th><center>Selected</center></th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>Color</td>
                         <td id="selected-color">None</td>
                     </tr>
                     <tr>
                         <td>Size</td>
                         <td id="selected-size-value">S</td>
                     </tr>
                     <tr>
                         <td>Design</td>
                         <td id="selected-design">None 
                           <img id="custom-design-image"></td>
                     </tr>
                 </tbody>
             </table>
         </div> -->

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
        <p class="copyright"> 2024 © NATURE Clothing | All rights reserved</p>
    </footer>
    </header>






    <script src='https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.3/fabric.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js'></script>
    <script src="script.js"></script>
</body>

</html>