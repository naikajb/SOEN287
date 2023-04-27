<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> Read XML file demo </title>
  </head>
  <body>

<?php

  
    // xml file path
    $path = "movies.xml";

    // Read entire file into string
    $xmlfile = file_get_contents($path);
    
    //print "$xmlfile <br>\n";

    // Convert xml string into an object
    //check https://www.php.net/manual/en/book.simplexml.php
    $movies = simplexml_load_string($xmlfile);
    
    echo $movies->movie[0]->plot;
    //echo $movies->movie[0]->title;
    
    $character = $movies->movie[0]->characters->addChild('character');
    $character->addChild('name', 'Mr. Parser');
    $character->addChild('actor', 'John Doe');

    $rating = $movies->movie[0]->addChild('rating', 'PG');
    $rating->addAttribute('type', 'mpaa');

    echo $movies->asXML();
      
    
    file_put_contents("movies_output.xml", $movies->asXML());
      
    
    
  

 ?>
  </body>
</html>