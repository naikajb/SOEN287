<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> string.php </title>
  </head>
  <body>
    <p>   
      <?php
	echo strpos("Hello world!","world");
        echo "<br/>";
        $str1 = 'a1';
        $str2 = 'a';
        echo strcmp($str1, $str2); 
      ?>

    </p>
  </body>
</html>