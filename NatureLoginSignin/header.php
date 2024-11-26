<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign in</title>
    <!-- css link -->
    <link rel="stylesheet" href="style2.css">
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
</head>

<body>
    <nav>
        <div class="logo">
            <a href="# " class="logo-img"><img src="images2/NATURE WHITE LOGO.png"></a>
        </div>
        <ul id="menuList">
            <li><a href="index.php" class="active">H O M E</a></li>
            <li><a href="unisex.php">P R O D U C T S</a></li>
            <li><a href="Customization.php">C U S T O M I Z A T I O N</a></li>
            <li><a href="offers.php">O F F E R S</a></li>
            <li><a href="about.php">A B O U T</a></li>

            <div class="nav-icon">
                <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="login.php" class="usernameShow">
                    <?php
                    if (isset($_SESSION["username"])) {
                        echo $_SESSION["username"] . ' !';
                    } else {
                        echo 'user !';
                    }
                    ?>
                    <i class="fa-solid fa-user"></i></a>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </ul>

        <div class="menu-icon">
            <i class="fa-solid fa-bars" id="menuIcon" onclick="toggleMenu()"></i>
        </div>

    </nav>

</body>

</html>