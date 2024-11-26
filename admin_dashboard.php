<?php
session_start();
include 'db_connection.php';

// Check admin authentication
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="admin-container">
        <div class="sidebar">
            <div class="logo">
                <img src="images/NATURE WHITE LOGO.png" alt="Logo">
                <h2>Admin Panel</h2>
            </div>
            <nav>
                <ul>
                    <li class="active">
                        <a href="admin_dashboard.php">
                            <i class="fas fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="product_management.php">
                            <i class="fas fa-box"></i> Product Management
                        </a>
                    </li>
                    <li>
                        <a href="order_management.php">
                            <i class="fas fa-shopping-cart"></i> Order Management
                        </a>
                    </li>
                    <li>
                        <a href="user_management.php">
                            <i class="fas fa-users"></i> User Management
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="main-content">
            <header>
                <div class="search-container">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="user-profile">
                    <img src="admin-profile.jpg" alt="Admin">
                    <span><?php echo $_SESSION['username']; ?></span>
                </div>
            </header>

            <div class="dashboard-cards">
                <div class="card">
                    <div class="card-content">
                        <h3>Total Products</h3>
                        <?php
                        $product_query = "SELECT COUNT(*) as total_products FROM products";
                        $product_result = $conn->query($product_query);
                        $product_count = $product_result->fetch_assoc()['total_products'];
                        ?>
                        <h1><?php echo $product_count; ?></h1>
                    </div>
                    <div class="card-icon">
                        <i class="fas fa-box"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h3>Total Orders</h3>
                        <?php
                        $order_query = "SELECT COUNT(*) as total_orders FROM orders";
                        $order_result = $conn->query($order_query);
                        $order_count = $order_result->fetch_assoc()['total_orders'];
                        ?>
                        <h1><?php echo $order_count; ?></h1>
                    </div>
                    <div class="card-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h3>Total Users</h3>
                        <?php
                        $user_query = "SELECT COUNT(*) as total_users FROM users";
                        $user_result = $conn->query($user_query);
                        $user_count = $user_result->fetch_assoc()['total_users'];
                        ?>
                        <h1><?php echo $user_count; ?></h1>
                    </div>
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <div class="recent-activities">
                <h2>Recent Activities</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Activity</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Populate with recent activities -->
                        <tr>
                            <td>New Product Added</td>
                            <td>2024-02-15</td>
                            <td><span class="status success">Success</span></td>
                        </tr>
                        <tr>
                            <td>Order Processed</td>
                            <td>2024-02-14</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>