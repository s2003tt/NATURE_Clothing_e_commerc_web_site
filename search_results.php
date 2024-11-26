<?php
// Database connection
include 'db_connection.php';

// Get search query
$searchQuery = isset($_GET['query']) ? $conn->real_escape_string($_GET['query']) : '';

// Prepare SQL query to search products
$sql = "SELECT * FROM products 
        WHERE product_name LIKE '%$searchQuery%' 
        OR description LIKE '%$searchQuery%'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Search Results</title>
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
                    <a href="#" class="user-icon"><i class="fa-solid fa-user"></i></a>
                    <a href="#" class="cart-icon"><i class="fa-solid fa-cart-shopping"></i></a>

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

    <br><br>
    <section class="search-results">
        <center>
            <div>
                <h2>Search Results for "<?php echo htmlspecialchars($searchQuery); ?>"</h2>
        </center>

        <?php if ($result->num_rows > 0): ?>
            <div class="product-grid">
                <?php while ($product = $result->fetch_assoc()): ?>
                    <div class="showcase">
                        <div class="showcase-banner">
                            <img src="<?php echo htmlspecialchars($product['image_path']); ?>"
                                alt="<?php echo htmlspecialchars($product['product_name']); ?>" class="product-img default">
                        </div>
                        <div class="showcase-content">
                            <a href="#" class="showcase-category">
                                <?php echo htmlspecialchars($product['category']); ?>
                            </a>
                            <a href="#">
                                <h3 class="showcase-title">
                                    <?php echo htmlspecialchars($product['product_name']); ?>
                                </h3>
                            </a>
                            <div class="price-box">
                                <p class="price">
                                    LKR.<?php echo number_format($product['price'], 2); ?>
                                </p>
                            </div>
                            <div class="cartForOffers">
                                <a href="product_detail.php?id=<?php echo $product['product_id']; ?>">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="no-results">
                <p>No products found matching "<?php echo htmlspecialchars($searchQuery); ?>"</p>
                <p>Try searching with different keywords or product names.</p>
            </div>
        <?php endif; ?>
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
                    <li><a href="unisex.php">PRODUCTS</a></li>
                    <li><a href="Customization.php">CUSTOMIZATION</a></li>
                    <li><a href="offers.php">OFFERS</a></li>
                    <li><a href="#">ABOUT</a></li>
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
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-whatsapp"></i>
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

<?php
// Close the database connection
$conn->close();
?>