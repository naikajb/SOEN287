<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- array.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> array.php </title>
  </head>
  <body>
    <p>   
      <?php
          $a = 1; $b = 2;
          function Sum()
          {
            global $a, $b;
            $b = $a + $b;
           } 
           Sum();
           echo $b;      
        ?>


    </p>
  </body>
</html>