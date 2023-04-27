<!--?xml version = "1.0" encoding = "utf-8" ?-->
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> helloWorld.php </title>
  </head>
  <body>
    <p>
      <?php
     print 'Hello World! <br />\n ';
     echo "Hello World! <br />";
     // The above outputs the text "Hello World!" on two separate lines.
     // Notice they are identical in output!

     print ("Hello World! <br />");
     echo ("Hello World! <br />");
     // The above are just the same, with parenthesis.
     // Notice both can act like functions, but note they actually aren't.
     ?>
    </p>
  </body>
</html>