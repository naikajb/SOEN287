<?php
          session_start();
?>

<!-- Test Session Functions
     -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> PHP sessions </title>
    
  </head>
  <body>
      <?php
         if(isset($_SESSION['views']))
			$_SESSION['views']=$_SESSION['views']+1;
		  else
			$_SESSION['views']=1;
		  echo "Views=". $_SESSION['views'];
		  echo "<p/>";
		  session_destroy();

     ?> 
  </body>
</html>

