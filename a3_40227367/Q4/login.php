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
<div class = sidebar>
    <?php include 'sidebar.php';?>
</div>
<div class = "main">
    <div class = "content">
        <?php
            if(isset($_POST['submit'])){
              $user = $_POST['username'];
              $pass =  $_POST['password'];

               if(!empty($user) && !empty($pass)){
                 if(preg_match("/[A-Za-z0-9]/", $user) && preg_match("/((?!\d*$)(?![a-z]*$)[a-z0-9]{4,10})$/", $pass)){
                  $file=fopen("loginFile.txt", "a");

                  $user_pass = file_get_contents("loginFile.txt");
                  $user_pass = explode("\n",$user_pass);

                  $auth = false;
                  foreach($user_pass as $value){
                    $split = explode(':', "$value:");
                    $username = $split[0];
                    $password = $split[1];
                    if($username == $user && $password == $pass){
                      $auth =true;
                      break;
                    }
                  }

                  if($auth){
                    session_start();
                    $_SESSION['username'] = $user;
                    if(isset($_SESSION['username'])){
                      header("Location: giveaway.php");
                    }
                  }

                  else{
                    echo '<script>alert("Invalid Username or Password. Please Try again!");</script>';
                  }
                 }
                 else{
                  echo '<script>alert("NOT THE CORRECT FORMAT. PLEASE TRY AGAIN");</script>';
                }
              }
              else{
                echo '<script>alert("Username Field or Password Field was empty");</script>';
              }
}
        ?>

        <h2>Login</h2></br>
        <p> Type in your username and password to long into your account</p></br>
        <hr>

        <form action = "accounts.txt" method = "post" class = "createAccount">
            <div class = "signUpInputs">
                <label style = "font-size: 15px;font-weight: bold;" >USERNAME</label>
                <input type = "text" name = "username" placeholder="type in your username" pattern="[a-zA-Z0-9]+" required>

                <label style = "font-size: 15px;font-weight: bold;"> PASSWORD </label>
                <input type = "password" name = "password" placeholder="type in your password" required>
            </div>

            <div class = "submission">
                <input type="submit" id="submitbtn" class = "button"  value = "Log in"></input>
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

