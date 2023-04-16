<?php
    session_start();

if (isset($_POST['submit'])) {
    $_SESSION['counter'] += 1;
    $file = fopen('../files/availablePetInformation.txt', 'a');
    if ($_POST["breed"] !== "DoesntMatter") {
        $text = $_SESSION["counter"] . ":" . $_SESSION["username"] . ":" . $_POST["type"] . ":" . $_POST["sex"] . ":" . $_POST["breed"] . ":" . $_POST["age"] . "\n";
    } else {
        $text = $_SESSION["counter"] . ":" . $_SESSION["username"] . ":" . $_POST["type"] . ":" . $_POST["sex"] . ":" . $_POST["breed"] . ":" . $_POST["age"] . "\n";
    }
    fwrite($file, $text);
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <Title> A Cat and Dog for All</Title>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <Title> A Cat and Dog for All</Title>
    <link rel = "stylesheet" href = "CSS/style.css">
    <script type = "text/javascript" src="JS/adopt.js"></script>
</head>

<body>
<!--header with logo-->
<header>
   <?php include 'header.php';?>
</header>

<!-- Navigation bar of website-->
<div class = "sidebar">
 <?php include 'sidebar.php';?>
</div>
<!-- Main content of the page-->
<div class="main">
    <div class = "content">

        <H3>Register a pet to give away by filling out this form!</H3>
        <div class = "form">
            <form class = "animalInfo" onsubmit = "validate()">
                <fieldset class = "infoForm">
                    <label>Cat or dog?
                        <select name ="type"  required>
                            <option value ="" disabled selected> Select...</option>
                            <option value = "cat">Cat</option>
                            <option value = "dog">Dog</option>
                        </select>
                    </label>

                    <p></br>What's the breed of the pet?
                        <input type = "text" name ="breed" placeholder = "write something" required>
                        <label></label>
                    </p></br>
                    <p>How old is your animal?
                        <label><select name = "age" required>
                                <option value = "" disabled selected> Select... </option>
                                <option value = "3m">0-3 months</option>
                                <option value = "6m"> 4-6 months</option>
                                <option value = "11m"> 7-11 months</option>
                                <option value = "2y"> 1-2 years</option>
                                <option value = "5y"> 3-5years</option>
                                <option value = "6y">5+ years</option>
                            </select></label>
                    </p></br>
                    <p>Animal gender?</p>
                    <label><input type="radio" name="sex" value="male"> Male</label>
                    <label><input type="radio" name="sex" value="female"> Female</label>
                    </br></br>
                    <p>Gets along with other animals?</p>
                    <label><input type="radio" name="suitableAnim" value="yes"> Yes</label>
                    <label><input type="radio" name="suitableAnim" value="no"> No</label></p></br>
                    <p>Suitable for a family with small children?</p>
                    <label><input type="radio" name="suitableKids" value="yes" > Yes</label>
                    <label><input type="radio" name="suitableKids" value="no"> No</label></br></br>

                    <p>
                        <label>Comments about the animal (this is your place to brag about some special skills your pet may have!)
                            <input id = "comments" type="text" name="comments" placeholder="write something" required ></label>
                    </p></br>
                    <p>Current owner's name</p>
                    <label><input type="text" name="fname" id = "fname" placeholder="first name" required></label>
                    <label><input type="text" name="lname" id = "lname" placeholder="last name" required></label>
                    </br>
                    <p>current owner's email
                        <label><input type ="email" name="email" placeholder ="example@example.com" required></label>
                    </p></br>
                    <p>
                        <label><input type ="submit"></label>
                        <label><input type="reset"></label>
                    </p>

                </fieldset>
            </form>
        </div>
    </div>
</div>
<footer>
   <?php include 'footer.php';?>
</footer>
</body>
</html>
