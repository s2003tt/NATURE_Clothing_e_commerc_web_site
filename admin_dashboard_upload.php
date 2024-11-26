<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connection.php';

$admin_id = $_SESSION['admin_id'];
$sql = "SELECT username FROM admin_users WHERE admin_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $admin_id);
$stmt->execute();
$result = $stmt->get_result();
$admin = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['fileToUpload'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if (!in_array($fileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            background: #111;
        }

        /* Heading Styles */
        h2 {
            color: lightgray;
            margin-bottom: 10px;
            font-size: 30px;
        }

        h3 {
            color: #4CAF50;
            margin-top: 20px;
        }

        /* Welcome Message */
        p {
            color: #eee;
        }

        /* Navigation Styles */
        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin: 10px 0;
        }

        ul li a {
            text-decoration: none;
            color: #4CAF50;
            padding: 10px 15px;
            background-color: white;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
        }

        ul li a:hover {
            background-color: #4CAF50;
            color: white;
        }

        /* File Upload Section */
        form {
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        form input[type="file"] {
            margin-bottom: 10px;
        }

        form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #45a049;
        }

        .admin-dash-logo img {
            width: 700px;
            height: auto;
            margin: -300px 0px 0px 450px;
        }

        /* Statistics Section */
        .statistics {
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <h2>Welcome to the Admin Dashboard </h2>
    <?php if (isset($admin['username'])): ?>
        <p>Hello, <?php echo htmlspecialchars($admin['username']); ?>!</p>
    <?php endif; ?>

    <h3>Admin Functions</h3>
    <ul>
        <li><a href="view_users.php">View Users</a></li>
        <li><a href="admin_upload_product.php">Manage Products</a></li>
        <li><a href="edit_delete_products.php">Edit and Delete products</a></li>
        <li><a href="admin_logout.php">Logout</a></li>

    </ul>
    <div class="admin-dash-logo">
        <img src="images/NATURE WHITE LOGO.png">
    </div>

    <!-- <h3>Upload File</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="fileToUpload">Select file to upload:</label>
        <input type="file" name="fileToUpload" required>
        <button type="submit">Upload</button>
    </form> -->
    <!-- 
    <h3>Statistics</h3>
    <p>Here you can add various statistics related to your application, such as user counts, product counts, etc.</p> -->

    <!-- Add more functionality as needed -->
</body>

</html>