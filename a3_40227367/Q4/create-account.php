<?php

if (isset($_POST['submitbtn'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $file = fopen('../files/accounts.txt', 'a+');
    $text = $user . ":" . $pass . "\n";

    if (strpos(file_get_contents("..files/accounts.txt"), $user) !== false && empty($user) !== true && empty($pass) !== true) {
        echo "<script>alert(\"This username cannot be used\")</script>)";
        exit();
    } else if (!strpos(file_get_contents("..files/accounts.txt"), $user) && empty($user) !== true && empty($pass) !== true) {
        fwrite($file, $text);
        echo "<script>alert(\"Your account has been created! You are ready to login\")</script>";
    }

    fclose($file);
   /* if(!empty($user) && !empty($pass)){
        if(preg_match("/[A-Za-z0-9]/", $user) && preg_match("/((?!\d*$)(?![a-z]*$)[a-z0-9]{4,10})$/", $pass)){
            extract($_REQUEST);
            $file=fopen("loginFile.txt", "a");

            $user_pass = file_get_contents("loginFile.txt");
            $user_pass = explode("\n",$user_pass);
            $userArray = array();
            foreach($user_pass as $value){
                $split = explode(':', $value);
                $userArray[$split[0]] = $split[0];
            }

            if (isset($userArray[$_POST['username']])) {
                echo '<script>alert("Username already exists");</script>';
            }

            else{
                fwrite($file, $user .":");
                fwrite($file, $pass . "\n");
                fclose($file);
                echo '<script>alert("You Have successfully created an Account. You are now ready to Log in");</script>';
            }

        }

        else{
            echo '<script>alert("NOT THE CORRECT FORMAT. PLEASE TRY AGAIN");</script>';
        }
    }

    else{
        echo '<script>alert("Username Field or Password Field was empty");</script>';
    }*/
}

?>

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

                <form action = "" method = "post" class = "createAccount">
                    <div class = "signUpInputs">
                        <label for = "username" style = "font-size: 15px;font-weight: bold;" >USERNAME</label>
                        <input type = "text" name = "username" placeholder="type in your username" pattern="[a-zA-Z0-9]+" required>
                        <p class = "requirements" >
                            <li style = "opacity: 70%;font-size: 10px;">Username must have only digits and letters</li>
                        </p></br>

                        <label style = "font-size: 15px;font-weight: bold;"> PASSWORD </label>
                        <input type = "password" name = "password" placeholder="type in your password" required>
                    </div>

                    <p class=requirements>
                    <ul style="opacity: 70%;font-size: 10px;">
                        <li>At least 4 characters</li>
                        <li>Must only contain digits and letters</li>
                    </ul>
                    </p>

                    <div class="submission">
                        <input type="submit" id="submitbtn" class="button" value="Sign Up!"></input>
                        <a href="Desktop/SOEN287other/a3_40227367/Q4/php/login.phpOEN287other/a3_40227367/Q4/php/login.php"
                           style="text-decoration: none;color: black;"> Login<!--</button>-->
                    </div>
                </form>
            </div>
        </div>


        <footer>
            <?php include 'footer.php';?>
        </footer>
    </body>
</html>
