<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> testString2.php </title>
  </head>
  <body>
    <p>
      <?php
      
		
		$str = 'Look at the sea';
		$str[strlen($str)-1] = 'e';
		
       echo $str;  
    
     ?>
    </p>
  </body>
</html>