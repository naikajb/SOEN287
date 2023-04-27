<?php    
    setcookie("user", "Harry Potter", time()+3600);       
?>
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> PHP cookies </title>    
  </head>
  <body>
     <h1> Cookie is set </h1>
     <h2> Click <a href = "displayCookies.php"> here </a> to display cookie info.</h2>
      <h2>Goto the page <a href=deleteCookies.php> to delete cookie User</a></h2>
  </body>
</html>

