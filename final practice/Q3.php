<!DOCTYPE html>
<html lang = "en">
    <!--
        This form requests the user's name and phone number and then an PHP script is used to
        validate the given number -->
    <header>
        <meta charset="UTF-8" >
        <title>Phone Number Validating</title>
    </header>

    <body>
        <form method="post" action="validate.php">
            <label for = "name">name:</label>
            <input type = "text" id = "name" name = "name">
            <br>
            <label for = "number">Phone Number: </label>
            <input type = "text" id = "number" name = "number">
            <br>
            <input type = "submit">
            <input type ="reset">
        </form>

    </body>
</html>

