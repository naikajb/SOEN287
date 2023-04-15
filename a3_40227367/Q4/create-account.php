<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <link rel = "stylesheet" href = "CSS/style.css">
        <script type = "text/javascript" src="JS/adopt.js"></script>
        <Title> A Cat and Dog for All</Title>
    </head>

    <body>
        <header>
            <?php include 'header.php';?>
        </header>

        <div class = "sidebar">
            <?php include 'sidebar.php'; ?>
        </div>

        <div class = "main">
            <div class = "content">
                <h2>SIGN UP</h2></br>
                <p> Please fill in this form to create an account</p></br>
                <hr>

                <form action = "accounts.txt" method = "post" class = "createAccount">
                    <div class = "signUpInputs">
                        <label style = "font-size: 15px;font-weight: bold;">USERNAME</label>
                        <input type = "text" name = "username" placeholder="type in your username" required>
                        <p class = "requirements" >
                            <li style = "opacity: 70%;font-size: 10px;">Username must have only digits and letters</li>
                        </p></br>

                        <label style = "font-size: 15px;font-weight: bold;"> PASSWORD </label>
                        <input type = "password" name = "password" placeholder="type in your password" required>
                    </div>

                    <p class = requirements >
                        <ul style = "opacity: 70%;font-size: 10px;">
                            <li>At least 4 characters</li>
                            <li>Must only contain digits and letters</li>
                        </ul>
                    </p>

                    <div class = "submission">
                        <button type="button" id="cancelbtn" class = "button" >Cancel</button>
                        <button type="submit" id="signupbtn" class = "button">Sign Up</button>
                    </div>


                </form>
            </div>
        </div>

        <footer>
            <?php include 'footer.php';?>
        </footer>
    </body>
</html>

<?php
    require 'signup.php';
?>
