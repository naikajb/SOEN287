<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> helloWorld.php </title>
  </head>
  <body>
    <p>
      <?php
      
      if(0 || 0.00 ||"" ||"0")
        echo "some are true";
      else
        echo "all are false";
     
      $y = true;
      echo "\$y = $y <br/>";
        
      $y = false;
      echo "\$y = $y <br/>"; 
    
     ?>
    </p>
  </body>
</html>