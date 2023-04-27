<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- popcorn3.php - Processes the form described in
     popcorn3.html
     -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> Process the popcorn3.html form </title>
  </head>
  <body>
    <?php

// Get form data values

      //$name = $_GET["name"];
      
      $name = $_POST["name"];
      if ($name == "") 
         echo "<h2>What is your name?</h2>";
      else
         echo "<h2>Hello, $name!<h2>";
         
     ?>
  </body>
</html>

