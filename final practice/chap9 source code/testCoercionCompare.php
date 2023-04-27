<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> testString2.php </title>
  </head>
  <body>
    <p>
      <?php
	   $str1 = 'abc';
       $str2 = "abd";
	   echo "'$str1' < \"$str2\" is true/false:" ; 
       echo $str1 < $str2; 
       echo "<br/>\n";
        
       $str1 = 'abc';
       $str2 = "abcd";
	   echo "'$str1' < \"$str2\" is true/false:" ; 
       echo $str1 < $str2; 
       echo "<br/>\n";
        
       $str = '5.1ee';
       $num = 10;
	   echo "'$str' < $num is true/false:";
       echo $str < $num;
       echo "<br/>\n";
        
       $str = '10.1ee';
       $num = 10;
	   echo "'$str' < $num is true/false:";
       if ($str < $num) echo "1true";
        else echo "1false";
       echo "<br/>\n";
	   
	   $str = 'e5.1ee';
       $num = 4;
	   echo "'$str' < $num is true/false:" ; 
       echo $str < $num; 
       echo "<br/>";
        
       $str1 = '5.1ee';
       $str2 = "eee";
	   echo "'$str1' < \"$str2\" is true/false:" ; 
       echo $str1 < $str2; 
       echo "<br/>\n";
    
       $str1 = '5.1ee';
       $str2 = "5.12eee";
	   echo "'$str1' < \"$str2\" is true/false:" ; 
       echo $str1 < $str2; 
       echo "<br/>";
        
       $str1 = '5.1';
       $str2 = "5.12";
	   echo "'$str1' < \"$str2\" is true/false:" ; 
       echo $str1 < $str2; 
       echo "<br/>";
        
       $str1 = '5.1';
       $str2 = "5.12";
	   echo "strcmp('$str1', \"$str2\") is true/false:" ; 
       echo strcmp($str1, $str2); 
       echo "<br/>";
        
       $str1 = '5.1aa';
       $str2 = "5.12aa";
	   echo "strcmp('$str1', \"$str2\") is true/false:" ; 
       echo strcmp($str1, $str2); 
       echo "<br/>";
        
     ?>
    </p>
  </body>
</html>