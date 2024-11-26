<?php
include_once 'header.php';
?>
<html>
<div class="login_form">
    <div class="login_h_img">
        <img src="images2/nature logo.png" alt="nature_logo">
    </div>
    <form action="Includes/login.inc.php" method="POST">
        <input type="text" id="nameOrEmail" name="uid" placeholder="Email / Username" required>
        <br>

        <input type="password" id="pswd" name="pwd" placeholder="Password" required>
        <br>

        <input type="reset" id="resetBtn" name="reset" value="Reset form">
        <br>
        <button type="submit" name="submit" id="loginBtn" value="Login">Login</button>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo '<div class="error">Fill in the all fields! </div>';
            } elseif ($_GET["error"] == "wronglogin") {
                echo '<div class="error">Invalid Details! </div>';
            } elseif ($_GET["error"] == "stmtfailed") {
                echo '<div class="error">Something went wrong!</div>';
            } elseif ($_GET["error"] == "none") {
                echo '<div class="error">Account Created</div>';
            }
        }
        ?>

        <div class="login_page">
            <p>New here? <a href="signup.php"><span>Register.</span></a></p>
        </div>
    </form>
</div>
<script src="../script.js"></script>

</html>