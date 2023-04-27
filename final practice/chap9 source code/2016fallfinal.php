<!--?xml version = "1.0" encoding = "utf-8" ?-->
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> helloWorld.php </title>
  </head>
  <body>
    <p>
     <?php 
     $list[3] = "cde";   $list[2] = "bcd";
     $list[1] = "abc";   unset($list[2]);
     foreach($list as $key => $value)
        echo "$key $value <br/>";   
        
    function test($a,$b,$c){
        return $a+$b*$c;
    }
        echo test(3,"a",4);
        echo test(false, true,false);
    ?>
    </p>
  </body>
</html>