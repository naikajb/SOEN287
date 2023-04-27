<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> helloWorld.php </title>
  </head>
  <body>
    <p>
      <?php
     $x = 5;
     print $x;
     $x = null;
     echo "This time $x <br/> \n";
     $x = 5;
     print "The unset function sets a variable to NULL <br/>\n";
     unset($x);
     $y = IsSet($x);
     echo "IsSet(\$x) = $y <br/>\n";
     $x = 5;
     $y = IsSet($x);
     echo "IsSet($x) = $y <br/>\n";
     
     
     print "<p> The IsSet function is used to determine whether a variable is NULL";
     // The above outputs the text "Hello World!" on two separate lines.
     // Notice they are identical in output!

     ?>
    </p>
  </body>
</html>