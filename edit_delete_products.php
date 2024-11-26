<?php
session_start();
include 'db_connection.php';

// Check if the user is an admin
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit and Delete Products</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Header Styles */
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        /* Row Hover Effect */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Action Links Styles */
        a {
            text-decoration: none;
            color: #4CAF50;
            padding: 8px 12px;
            border: 1px solid #4CAF50;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #4CAF50;
            color: white;
        }

        /* Back to Dashboard Button */
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        /* Heading Styles */
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h2>Edit and Delete Products</h2>
    <table>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock Quantity</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['product_id']); ?></td>
                <td><?php echo htmlspecialchars($row['product_name']); ?></td>
                <td><?php echo htmlspecialchars($row['description']); ?></td>
                <td>LKR.<?php echo number_format($row['price'], 2); ?></td>
                <td><?php echo htmlspecialchars($row['stock_quantity']); ?></td>
                <td>
                    <a href="edit_product.php?id=<?php echo $row['product_id']; ?>">Edit</a>
                    <a href="delete_product.php?id=<?php echo $row['product_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="admin_dashboard_upload.php">Back to Dashboard</a>
</body>

</html>