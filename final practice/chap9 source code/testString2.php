<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> testString2.php </title>
  </head>
  <body>
    <p>
      <?php
      
      $a = "This is my string";
      $b = "string"; 
      $c = "$a" ;
      $d = "string";
      $e = true;
      
      echo $e."<br/>";
     
     echo $a == $b;
     echo "<br/>";
     echo $b == $d;
     echo "<br/>";
     echo strpos($a, $b);
     echo "<br/>";
     
     echo '$a equals to $b?'.strcmp($a, $b);
     echo "<br/>";
     
     echo '$a === $c?'.($a === $c);
     echo "<br/>";
     
     //$e=false;
     echo '$e?'.$e;
     echo "<br/>";
    
     ?>
    </p>
  </body>
</html>