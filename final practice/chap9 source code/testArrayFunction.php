<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- array.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> array.php </title>
  </head>
  <body>
    <p>   
      <?php
        
       $colors = array("Blue", "red", "green",
                 "yellow");
        $color = current($colors);
        print("$color <br />");
        while ($color = next($colors))
           print ("$color <br />");     



      ?>

    </p>
  </body>
</html>