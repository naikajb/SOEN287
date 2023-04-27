<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- array.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> array.php </title>
  </head>
  <body>
    <p>   
      <?php
        
       $highs = array("Mon" => 74, "Tue" => 70,
               "Wed" => 67, "Thu" => 62,
               "Fri" => 65);
       $days = array_keys($highs);
       echo gettype($days)." <br/>";
       $temps = array_values($highs);
       echo gettype($temps)." <br/>";
       foreach($days as $key => $value)
           echo "$key $value <br/>";
       foreach($temps as $key => $value)
           echo "$key $value <br/>";
       echo array_key_exists("Wed", $highs)."<br/>";
       unset($days[4]);
       foreach($days as $key => $value)
           echo "$key $value <br/>";
        
        unset($highs[4]);
        foreach($highs as $key => $value)
           echo "$key $value <br/>";
        
        unset($highs["Mon"]);
        foreach($highs as $key => $value)
           echo "$key $value <br/>";
        

      ?>

    </p>
  </body>
</html>