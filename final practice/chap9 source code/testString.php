<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> helloWorld.php </title>
  </head>
  <body>
    <p>
      <?php
      
      $a = "Guns N\' Roses";
      $b = "This is a newline \n"; //change line
      $c = "$a" ;
     
     echo "$a <br />";
     echo "$b <br />";
     echo "$c <br />";
     
      $a = 'Guns N" Roses';
      $b = 'This is a newline \n'; //change line
      $c = '$a' ;
      
      echo "$a <br />";
     echo "$b <br />";
     echo "$c <br />";
     
    
     ?>
    </p>
  </body>
</html>