<?php
session_start();
include 'db_connection.php';

// Check if the user is an admin
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

// Check if the product ID is set in the URL
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Prepare the delete statement
    $sql = "DELETE FROM products WHERE product_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);

    // Execute the delete statement
    if ($stmt->execute()) {
        // Redirect to the product list page after successful deletion
        header("Location: edit_delete_products.php?message=Product deleted successfully");
        exit();
    } else {
        echo "Error deleting product: " . $stmt->error;
    }
} else {
    echo "No product ID provided.";
}
?>