<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> Read XML file demo </title>
  </head>
  <body>

<?php

  
    // xml file path
    $path = "users2.xml";

    // Read entire file into string
    $xmlfile = file_get_contents($path);
    
    //print "$xmlfile <br>\n";

    // Convert xml string into an object
    //check https://www.php.net/manual/en/book.simplexml.php
    $new = simplexml_load_string($xmlfile);
      
    print gettype($new)." <br/>\n";

    // Convert into json
    $con = json_encode($new);
      
    print "$con <br/>\n";

    // Convert into associative array
    $newArr = json_decode($con, true);

    print_r($newArr);
      
    print("<p/>");
      
    print $newArr["user"][0]["name"];
      
    
  

 ?>
  </body>
</html>