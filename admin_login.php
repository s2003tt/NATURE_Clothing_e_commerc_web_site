<?php
session_start();
include 'db_connection.php';

// Initialize the error message variable
$error = "";

if (isset($_SESSION['admin_id'])) {
    header("Location: admin_dashboard_upload.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use a prepared statement to prevent SQL injection
    $sql = "SELECT admin_id, password FROM admin_users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verify the password using password_verify
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_id'] = $row['admin_id'];
            header("Location: admin_dashboard_upload.php"); // Redirect to dashboard
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            background-color: #3d3d3d;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
        }

        /* Login Container */
        .login-container {
            width: 100%;
            max-width: 400px;
            background: black;
            border-radius: 10px;
            border: 5px black solid;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            padding: 20px;
        }

        .login-column {
            padding: 40px 30px;

        }

        /* Form Styles */


        .input-group {
            margin-bottom: 20px;

        }



        .input-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            outline: none;
            border-color: #764ba2;
            box-shadow: 0 0 5px rgba(118, 75, 162, 0.3);
        }

        /* Login Button */
        .login-btn {
            width: 100%;
            padding: 15px;
            background: lightgreen;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login-btn:hover {
            background: linear-gradient(to right, #764ba2, #667eea);
        }

        /* Signup Link */
        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-weight: 100;
            color: white;
            font-size: 14px;
        }

        .signup-link a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            text-decoration: underline;
            color: blue;
        }

        /* Error Message */
        .error-message {
            color: #dc3545;
            text-align: center;
            margin-bottom: 20px;
            background-color: #f8d7da;
            padding: 10px;
            border-radius: 5px;
        }

        center h1 {
            padding-top: 150px;
            font-size: 40px;
            color: chartreuse;
            text-shadow: 3px 4px 4px #000000;
        }


        /* Responsive Design */
        @media (max-width: 480px) {
            .login-container {
                width: 90%;
                margin: 20px auto;
            }

            .login-column {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>

    <center>
        <h1>Admin Login</h1>
    </center>
    <center>
        <div class="login-container">
            <form class="login-form" action="" method="POST">

                <?php if (!empty($error)): ?>
                    <p class="error-message"><?php echo htmlspecialchars($error); ?></p>
                <?php endif; ?>

                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit" class="login-btn">Login</button>

                <div class="signup-link">Don't have an account? <a href="admin_signup.php">Sign up here</a>
                </div>
            </form>
        </div>
    </center>


</body>

</html>