<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- array.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> array.php </title>
  </head>
  <body>
    <p>   
      <?php
        $list[4] = 1;
	    $list[1] = 17;
        $list[2] = 3;
        unset($list[2]);
        foreach($list as $key => $value)
           echo "$key $value <br/>"; 
        //echo "$list[0] $list[1] $list[2]";

        /*$list2 = array(1, 3, "abc", 91);
        foreach($list2 as $key => $value)
           echo "$key $value <br/>";*/

      


      ?>

    </p>
  </body>
</html>