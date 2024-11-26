<?php
include_once 'header.php';
?>

<div>
    <div class="signup_page">
        <div class="login_h_img">
            <img src="images2/nature logo.png" alt="nature_logo">
        </div>
        <form action="Includes/signup.inc.php" method="POST">
            <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
            <br>

            <input type="email" id="Sign_email" name="email" placeholder="Enter Your Email" required>
            <br>

            <input type="text" id="Sign_username" name="uid" placeholder="Enter Your Username" required>
            <br>

            <input type="password" id="user_psw1" name="pwd" placeholder="Password" required>
            <br>

            <input type="password" id="user_psw2" name="pwdrepeat" placeholder="Reenter-Password" required>
            <br>

            <input type="reset" id="resetBtn" name="reset" value="Reset form">
            <br>
            <button type="submit" name="submit" id="signBtn" value="Login">Sign up</button>

            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo '<div class="error">Fill in the all fields! </div>';
                } elseif ($_GET["error"] == "invaliduid") {
                    echo '<div class="error">Invalid Username! </div>';
                } elseif ($_GET["error"] == "invalidemail") {
                    echo '<div class="error">Invalid Email! </div>';
                } elseif ($_GET["error"] == "passwordsdontmatch") {
                    echo '<div class="error">Passwords not matching! </div>';
                } elseif ($_GET["error"] == "stmtfailed") {
                    echo '<div class="error">Something went wrong!</div>';
                } elseif ($_GET["error"] == "none") {
                    echo '<div class="error">Account Created</div>';
                } elseif ($_GET["error"] == "usernametaken") {
                    echo '<div class="error">Username / Email already in use!</div>';
                }
            }
            ?>


            <div class="sign_up">
                <p>Already have an account? <a href="login.php"><span>Log in.</span></a></p>
            </div>
        </form>
        <script src="../script.js"></script>
    </div>

    </html>