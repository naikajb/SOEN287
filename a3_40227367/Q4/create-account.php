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
                <div style = "border: 1px solid grey;"></div></br>

                <form action = "" method = "post" class = "createAccount">
                    <label style = "font-size: 15px;font-weight: bold;">USERNAME</label>
                    <input type = "text" name = "username" placeholder="type in your username" required>

                    <label style = "font-size: 15px;font-weight: bold;"> PASSWORD </label>
                    <input type = "password" name = "password" placeholder="type in your password" required>


                    <button type="button" id="cancelbtn" class = "button" >Cancel</button>
                    <button type="submit" id="signupbtn" class = "button">Sign Up</button>
                </form>
            </div>
        </div>

        <footer>
            <?php include 'footer.php';?>
        </footer>
    </body>
</html>

