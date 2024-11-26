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

    // Fetch the product details from the database
    $sql = "SELECT * FROM products WHERE product_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $product = $result->fetch_assoc();
    } else {
        echo "Product not found.";
        exit();
    }
} else {
    echo "No product ID provided.";
    exit();
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];

    // Image upload handling
    $image_path = $product['image_path']; // Keep existing image path by default

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

        $upload_error = "";
        if (!in_array($imageFileType, $allowed_types)) {
            $upload_error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }

        // Check file size (limit to 5MB)
        if ($_FILES['product_image']['size'] > 5000000) {
            $upload_error = "Sorry, your file is too large.";
        }

        // If no errors, move the uploaded file
        if (empty($upload_error)) {
            if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file)) {
                $image_path = $target_file;

                // Delete the old image if it exists and is different from the new one
                if (!empty($product['image_path']) && $product['image_path'] !== $image_path && file_exists($product['image_path'])) {
                    unlink($product['image_path']);
                }
            } else {
                $upload_error = "Sorry, there was an error uploading your file.";
            }
        }
    }

    // Update the product details in the database
    // Update the product details in the database
    $update_sql = "UPDATE products SET product_name = ?, description = ?, price = ?, stock_quantity = ?, image_path = ? WHERE product_id = ?";
    $update_stmt = $conn->prepare($update_sql);

    // Correctly bind the parameters
    $update_stmt->bind_param("ssdssi", $product_name, $description, $price, $stock_quantity, $image_path, $product_id);

    if ($update_stmt->execute()) {
        header("Location: edit_delete_products.php"); // Redirect to the product list page
        exit();
    } else {
        $error_message = "Error updating product: " . $update_stmt->error;
    }

    if ($update_stmt->execute()) {
        header("Location: edit_delete_products.php"); // Redirect to the product list page
        exit();
    } else {
        $error_message = "Error updating product: " . $update_stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            min-height: 100vh;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Container for the Edit Product Form */
        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 600px;
        }

        /* Title Styles */
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        /* Form Styles */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus {
            border-color: #764ba2;
            box-shadow: 0 0 5px rgba(118, 75, 162, 0.3);
            outline: none;
        }

        /* Button Styles */
        button {
            padding: 15px;
            background: lightgreen;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background: linear-gradient(to right, #764ba2, #667eea);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(118, 75, 162, 0.3);
        }

        /* Link Styles */
        a {
            text-align: center;
            display: block;
            margin-top: 20px;
            color: #764ba2;
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Error Message Styles */
        .error-message {
            color: #dc3545;
            text-align: center;
            margin-bottom: 20px;
            background-color: #f8d7da;
            padding: 10px;
            border-radius: 5px;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                padding: 20px;
                width: 90%;
            }
        }
    </style>
</head>

<body>

    <center>
        <h2>Edit Product</h2>
    </center>
    <div class="container">

        <?php
        if (!empty($error_message)) {
            echo "<p class='error-message'>" . htmlspecialchars($error_message) . "</p>";
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" value="<?php echo htmlspecialchars($product['product_name']); ?>"
                required>

            <label for="description">Description:</label>
            <textarea name="description" required><?php echo htmlspecialchars($product['description']); ?></textarea>

            <label for="price">Price:</label>
            <input type="number" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" step="0.01"
                required>

            <label for="stock_quantity">Stock Quantity:</label>
            <input type="number" name="stock_quantity"
                value="<?php echo htmlspecialchars($product['stock_quantity']); ?>" required>

            <label>Current Image:</label>
            <div class="image-preview-container">
                <?php if (!empty($product['image_path'])): ?>
                    <img src="<?php echo htmlspecialchars($product['image_path']); ?>" alt="Current Product Image"
                        class="current-image">
                <?php else: ?>
                    <p>No image uploaded</p>
                <?php endif; ?>

                <div class="image-upload-container">
                    <label for="product_image">Change Image:</label>
                    <input type="file" name="product_image" id="product_image" accept="image/*">
                    <img src="#" alt="Image Preview" class="image-preview" id="image-preview">
                </div>
            </div>

            <button type="submit">Update Product</button>
        </form>
        <a href="edit_delete_products.php">Back to Product List</a>
    </div>

    <script>
        // Image preview functionality
        document.addEventListener('DOMContentLoaded', function () {
            const imageInput = document.getElementById('product_image');
            const imagePreview = document.getElementById('image-preview');

            imageInput.addEventListener('change', function (event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        imagePreview.src = e.target.result;
                        imagePreview.style.display = 'block';
                    }

                    reader.readAsDataURL(file);
                } else {
                    imagePreview.style.display = 'none';
                }
            });

            // Optional: Validation for file upload
            imageInput.addEventListener('change', function (event) {
                const file = event.target.files[0];
                const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                const maxSize = 5 * 1024 * 1024; // 5MB

                if (file) {
                    // Check file type
                    if (!allowedTypes.includes(file.type)) {
                        alert('Please upload a valid image (JPEG, PNG, or GIF).');
                        event.target.value = ''; // Clear the file input
                        imagePreview.style.display = 'none';
                        return;
                    }

                    // Check file size
                    if (file.size > maxSize) {
                        alert('File is too large. Maximum size is 5MB.');
                        event.target.value = ''; // Clear the file input
                        imagePreview.style.display = 'none';
                        return;
                    }
                }
            });
        });
    </script>
</body>

</html>