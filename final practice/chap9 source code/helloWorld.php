
<!DOCTYPE html>
<html lang="en">
  <head> <title> helloWorld.php </title>
      <meta charset="utf-8">
  </head>
  <body>
    <p>
      <?php
     print 'Hello World! <br>\n ';
     echo "Hello World! <br>";
     // The above outputs the text "Hello World!" on two separate lines.
     // Notice they are identical in output!

     print ("Hello World! <br>");
     echo ("Hello World! <br>");
     // The above are just the same, with parenthesis.
     // Notice both can act like functions, but note they actually aren't.
        
     print("first line \n");
     print("<br>");
     print("second line \n");

     ?>
    </p>
  </body>
</html>