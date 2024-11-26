<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Insert new admin user into the database
    $sql = "INSERT INTO admin_users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        $success_message = "Admin account created successfully!";
    } else {
        $error_message = "Error creating account: " . $stmt->error;
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
        }

        /* Signup Container */
        .signup-container {
            width: 100%;
            max-width: 400px;
            background: white;
            border: lightgreen solid;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            /* display: flex; */
            justify-content: center;
            /* align-items: center; */
            margin-top: 120px;

        }

        .signup-column {
            padding: 40px 30px;
        }

        /* Form Styles */


        .input-group {
            margin-bottom: 20px;
            /* position: relative; */
        }

        .input-group input {
            /* width: 100%; */
            display: block;
            margin-bottom: 8px;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s ease;
        }


        /* Icons for inputs */
        .input-group i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        /* Signup Button */
        .signup-btn {
            width: 70%;
            padding: 15px;
            background: lightgreen;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .signup-btn:hover {
            background: linear-gradient(to right, #764ba2, #667eea);
        }

        /* Login Link */
        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 14px;
        }

        .login-link a {
            color: #764ba2;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Message Styles */
        .success-message {
            color: #28a745;
            text-align: center;
            margin-bottom: 20px;
            background-color: #d4edda;
            padding: 10px;
            border-radius: 5px;
        }

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
            .signup-container {
                width: 90%;
                margin: 20px auto;
            }

            .signup-column {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <br>
    <center>
        <h1>Admin Signup</h1>
    </center>

    <?php
    if (isset($success_message))
        echo "<p style='color:green'>$success_message</p>";
    if (isset($error_message))
        echo "<p style='color:red'>$error_message</p>";
    ?>
    <form action="" method="POST">
        <br>
        <center>
            <div class="signup-container">
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class="fas fa-user"></i>
                </div>

                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class="fas fa-envelope"></i>
                </div>

                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fas fa-lock"></i>
                </div>
                <button type="submit" class="signup-btn">Sign Up</button>
            </div>
    </form>
    <br><br>
    <p>Already have an account? <a href="admin_login.php">Login here</a></p>
    </center>

</body>

</html>