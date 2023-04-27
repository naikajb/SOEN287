<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> testString2.php </title>
  </head>
  <body>
    <p>
      <?php
	   $str = '5.1';
	   printf("This is how I print: %10s !", $str);
	   echo "<br/>";
	   printf("This is how I print: %5.2f !", $str);
	   echo "<br/>";
	   $str = 1234567890123456;
	   printf("This is how I print: %10s !", $str);
	   echo "<br/>";
	   printf("This is how I print: %5.2f !", $str);
     ?>
    </p>
  </body>
</html>