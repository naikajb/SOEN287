<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> helloWorld.php </title>
  </head>
  <body>
    <p>
      <?php
     $trees = array("oak", "pine", "binary");
     list($hardwood, $softwood,$data_structure) = $trees;
     echo $hardwood." ".$softwood." ".$data_structure;
     echo "<br/>";
     
     unset($trees[1]);
     echo sizeof($trees);

     ?>
    </p>
  </body>
</html>