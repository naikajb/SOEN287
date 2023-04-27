<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html lang = "en" xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> testString2.php </title>
  </head>
  <body>
    <p>
      <?php
        
        $a = true;
        print "\$a true? $a <br/>";
        $a = false;
        print "\$a false? $a <br/>";
        $a = null;
        print "$a null? $a <br/>";
        $a = NULL;
        print " $a NULL? $a <br/>";
         
        //print $b." b? <br/>";
        
	   $str = '5.1ee';
	   echo $str+1;  
       echo "<br/>";
	   
	   echo (int)$str;
	   echo "<br/>";
	   
	   echo intval($str);
	   echo "<br/>";
	   
	   settype($str, "double");
	   echo gettype($str)." value \$str is $str";
	   echo "<br/>";
	   
	   echo "is integer?".is_integer($str);
	   echo "<br/>";
	   
	   echo "is double?".is_double($str);
        echo "<br/>";
      
        
     ?>
    </p>
  </body>
</html>