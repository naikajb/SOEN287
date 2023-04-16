<?php
if (isset($_POST['submitbtn'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $file = fopen('../files/accounts.txt', 'a+');
    $text = "$user:$pass";

    if (strpos(file_get_contents("../files/accounts.txt"), $text) !== false && empty($user) !== true && empty($pass) !== true) {
        echo "<script>alert(\"You have been successfully logged in!\")</script>";
        session_start();
        $_SESSION["user"] = $_POST["username"];
        $_SESSION["counter"] = 0;

        echo '<script> window.location.href = "../pet-giveaway.php";</script>';

    } else if (!strpos(file_get_contents("../files/accounts.txt"), $text) && empty($user) !== true && empty($pass) !== true) {
        echo "<script>alert(\"This account you are trying to log into does not exist.\")</script>";
    }

    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <script type="text/javascript" src="JS/adopt.js"></script>
    <Title> A Cat and Dog for All</Title>
</head>

<body>
<header>
    <?php include 'header.php';?>
</header>
<div class = sidebar>
    <?php include 'sidebar.php';?>
</div>
<div class="main">
    <div class="content">
        <h2>Login</h2></br>
        <p> Type in your username and password to long into your account</p></br>
        <hr>

        <form action="" method="post" class="createAccount">
            <div class="signUpInputs">
                <label style="font-size: 15px;font-weight: bold;">USERNAME</label>
                <input type="text" name="username" placeholder="type in your username" pattern="[a-zA-Z0-9]+" required>

                <label style="font-size: 15px;font-weight: bold;"> PASSWORD </label>
                <input type="password" name="password" placeholder="type in your password" required>
            </div>

            <div class="submission">
                <input type="submit" id="submitbtn" class="button" value="Log in"></input>
                <a href = "create-account.php" style = "text-decoration: none;color: black;"> Sign Up<!--</button>-->
            </div>

        </form>
    </div>
</div>

<footer>
    <?php include 'footer.php';?>
</footer>
</body>
</html>

