<?php
          // set the expiration date to one hour ago
          setcookie("user", "", time()-3600);
?>
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> PHP cookies </title>
       
  </head>
  <body>
      <?php
          //echo "Cookie name = user, value = ";
          echo "isset(\$_COOOKIE[\"user\"])". isset($_COOKIE["user"]);
          echo "<p> all cookies for this site: <p/>";
          // A way to view all cookies
          print_r($_COOKIE);    
     ?> 

  </body>
</html>

