<!--?xml version = "1.0" encoding = "utf-8" ?-->
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
               5 => 65);
       print array_push($highs, "Sat");
       print "<br />"; 
       while ($day = each($highs)){
          $k =  $day["key"];
          $v =  $day["value"];
          //print $day['value'];
          print "<br />"; 
          print (" $k  $v <br />");
        }    
      ?>

    </p>
  </body>
</html>