<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Search functionality
$searchResults = [];
if (isset($_GET['search'])) {
    $searchTerm = $conn->real_escape_string($_GET['search']);

    // Search query across multiple columns
    $sql = "SELECT * FROM products WHERE 
            product_name LIKE '%$searchTerm%' OR 
            product_category LIKE '%$searchTerm%' OR 
            product_description LIKE '%$searchTerm%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $searchResults[] = $row;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... (previous head content) ... -->
</head>

<body>
    <nav>
        <!-- ... (previous nav content) ... -->
        <div class="search">
            <form action="" method="GET">
                <input type="text" name="search" class="input" placeholder="Search products..."
                    value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit" class="btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- ... (rest of the nav content) ... -->
    </nav>

    <!-- Search Results Section -->
    <?php if (isset($_GET['search']) && !empty($searchResults)): ?>
        <section class="search-results">
            <div class="container">
                <h2>Search Results for "<?php echo htmlspecialchars($_GET['search']); ?>"</h2>
                <div class="product-grid">
                    <?php foreach ($searchResults as $product): ?>
                        <div class="showcase">
                            <div class="showcase-banner">
                                <img src="<?php echo htmlspecialchars($product['product_image']); ?>"
                                    alt="<?php echo htmlspecialchars($product['product_name']); ?>" class="product-img default">
                            </div>
                            <div class="showcase-content">
                                <a href="#" class="showcase-category">
                                    <?php echo htmlspecialchars($product['product_category']); ?>
                                </a>
                                <a href="#">
                                    <h3 class="showcase-title">
                                        <?php echo htmlspecialchars($product['product_name']); ?>
                                    </h3>
                                </a>
                                <div class="price-box">
                                    <p class="price">
                                        LKR.<?php echo number_format($product['product_price'], 2); ?>
                                    </p>
                                </div>
                                <div class="cartForOffers">
                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php elseif (isset($_GET['search']) && empty($searchResults)): ?>
        <section class="no-results">
            <div class="container">
                <h2>No results found for "<?php echo htmlspecialchars($_GET['search']); ?>"</h2>
                <p>Try searching with different keywords or product names.</p>
            </div>
        </section>
    <?php endif; ?>

    <!-- Rest of your existing HTML content -->

    <script>
        // Optional: JavaScript to enhance search functionality
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.querySelector('input[name="search"]');
            const searchBtn = document.querySelector('.search .btn');

            // Optional: Add autocomplete or real-time search suggestions
            searchInput.addEventListener('input', function () {
                // You could implement AJAX autocomplete here
            });

            // Optional: Clear search input
            searchBtn.addEventListener('click', function (e) {
                if (searchInput.value.trim() === '') {
                    e.preventDefault(); // Prevent form submission if empty
                }
            });
        });
    </script>

</body>

</html>