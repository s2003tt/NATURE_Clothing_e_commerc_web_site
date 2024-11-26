<?php
session_start();
include 'db_connection.php';

// Strict admin authentication
if (!isset($_SESSION['admin_id']) && (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin')) {
    // Redirect to login if not an admin
    header("Location: admin_login.php");
    exit();
}

// Handle product upload
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $product_name = trim($_POST['product_name']);
    $description = trim($_POST['description']);
    $category = $_POST['category'];
    $price = floatval($_POST['price']);
    $stock_quantity = intval($_POST['stock_quantity']);
    $size = $_POST['size'];
    $color = trim($_POST['color']);

    // Validate required fields
    $errors = [];
    if (empty($product_name))
        $errors[] = "Product name is required.";
    if (empty($category))
        $errors[] = "Category is required.";
    if ($price <= 0)
        $errors[] = "Invalid price.";
    if ($stock_quantity < 0)
        $errors[] = "Invalid stock quantity.";

    // Image upload handling
    $image_path = '';
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == 0) {
        $target_dir = "uploads/products/";

        // Create directory if it doesn't exist
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // Generate unique filename
        $filename = uniqid() . '_' . basename($_FILES['product_image']['name']);
        $target_file = $target_dir . $filename;

        // Check file type
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($imageFileType, $allowed_types)) {
            $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }

        // Check file size (limit to 5MB)
        if ($_FILES['product_image']['size'] > 5000000) {
            $errors[] = "Sorry, your file is too large.";
        }

        // If no errors, move the uploaded file
        if (empty($errors)) {
            if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file)) {
                $image_path = $target_file;
            } else {
                $errors[] = "Sorry, there was an error uploading your file.";
            }
        }
    }

    // If no errors, proceed with database insertion
    if (empty($errors)) {
        try {
            $sql = "INSERT INTO products (
                product_name, 
                description, 
                category, 
                price, 
                stock_quantity, 
                image_path, 
                size, 
                color
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param(
                "sssdisss",
                $product_name,
                $description,
                $category,
                $price,
                $stock_quantity,
                $image_path,
                $size,
                $color
            );

            if ($stmt->execute()) {
                $success_message = "Product added successfully!";
            } else {
                $errors[] = "Error adding product: " . $stmt->error;
            }
        } catch (Exception $e) {
            $errors[] = "Database error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload Product</title>
    <style>
        /* Basic styling for form */
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
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
    </style>
</head>

<body>
    <h2>Upload New Product</h2>

    <!-- Display Errors -->
    <?php
    if (!empty($errors)) {
        echo "<div class='error'>";
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo "</div>";
    }

    // Display Success Message
    if (isset($success_message)) {
        echo "<div class='success'>$success_message</div>";
    }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <label>Product Name *</label>
        <input type="text" name="product_name" required
            value="<?php echo isset($product_name) ? htmlspecialchars($product_name) : ''; ?>">

        <label>Description</label>
        <textarea name="description"><?php echo isset($description) ? htmlspecialchars($description) : ''; ?></textarea>

        <label>Category *</label>
        <select name="category" required>
            <option value="">Select Category</option>
            <option value="t-shirt" <?php echo (isset($category) && $category == 't-shirt') ? 'selected' : ''; ?>>T-Shirt
            </option>
            <option value="sport" <?php echo (isset($category) && $category == 'sport') ? 'selected' : ''; ?>>Sport Wear
            </option>
            <option value="casual" <?php echo (isset($category) && $category == 'casual') ? 'selected' : ''; ?>>Casual
            </option>
        </select>

        <label>Price * (LKR)</label>
        <input type="number" name="price" step="0.01" required
            value="<?php echo isset($price) ? htmlspecialchars($price) : ''; ?>">

        <label>Stock Quantity *</label>
        <input type="number" name="stock_quantity" required
            value="<?php echo isset($stock_quantity) ? htmlspecialchars($stock_quantity) : ''; ?>">

        <label>Size *</label>
        <select name="size" required>
            <option value="">Select Size</option>
            <option value="S" <?php echo (isset($size) && $size == 'S') ? 'selected' : ''; ?>>S</option>
            <option value="M" <?php echo (isset($size) && $size == 'M') ? 'selected' : ''; ?>>M</option>
            <option value="L" <?php echo (isset($size) && $size == 'L') ? 'selected' : ''; ?>>L</option>
            <option value="XL" <?php echo (isset($size) && $size == 'XL') ? 'selected' : ''; ?>>XL</option>
            <option value="XXL" <?php echo (isset($size) && $size == 'XXL') ? 'selected' : ' ```php
'; ?>>XXL</option>
        </select>

        <label>Color</label>
        <input type="text" name="color" value="<?php echo isset($color) ? htmlspecialchars($color) : ''; ?>">

        <label>Product Image *</label>
        <input type="file" name="product_image" accept="image/*" required>

        <button type="submit">Upload Product</button>
    </form>
    <br>
    <a href="admin_dashboard_upload.php">Back to Dashboard</a>
</body>

</html>