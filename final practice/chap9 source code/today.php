<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> today.php </title>
  </head>
  <body>
    <p>
      <?php
        print "<b>Welcome to my home page <br /> <br />";
        print "Today is:</b> ";
        print date("l, F jS");
        print "<br />";

      $day = "Tuesday";
      $high = 79;
      printf("The high on %3.s was %2.d", $day, $high);
      ?>
    </p>
  </body>
</html>