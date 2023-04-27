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
        //$result = 11+011+0x11;
     //print "$result";
        $a = true;
        print $a." true? <br/>";
        $a = false;
        print $a." false? <br/>";
        $a = null;
        print $a." null? <br/>";
        $a = NULL;
        print $a." NULL? <br/>";
        $b; 
        print $b." b? <br/>";
     echo "Hello World! <br />";
     // The above outputs the text "Hello World!" on two separate lines.
     // Notice they are identical in output!

     print ("Hello World! <br />");
     echo ("Hello World! <br />");
        echo "10.2 abc" < 20 ;
     ?>
    </p>
  </body>
</html>