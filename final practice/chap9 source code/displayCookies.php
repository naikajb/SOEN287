<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- Test Cookie Functions
     -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> PHP cookies </title>
        
  </head>
  <body>
     <h1> Cookies: </h1>
     <?php
          //echo "Cookie name = user, value = ";
          echo $_COOKIE["user"];
          echo "<p> all cookies for this site: <p/>";
          // A way to view all cookies
          print_r($_COOKIE);    
     ?>
  </body>
</html>

