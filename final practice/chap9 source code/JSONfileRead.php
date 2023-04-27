<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> Process the popcorn3.html form </title>
  </head>
  <body>

<?php

    $string = file_get_contents("test.json");
    $json_a = json_decode($string, true);

    echo $json_a['John']['status']."<br/>";
    echo $json_a['Jennifer']['status']."<br/>";
    //echo $json_a['James']."<br/>"; 
      
      
    
      
    foreach ($json_a as $key => $val) {
        if(is_array($val)) {
            echo "$key:\n <br/>";
            foreach($val as $kkey =>$vval)
                echo "$kkey => $vval\n <br/>";
        } else {
            echo "$key => $val\n <br/>";
        }
    }
      
    $user1 = array("name" => "peppa pig", "address" =>"800 street ABC");
    $json_a["ID#100"] = $user1;
    $jason_str = json_encode($json_a);
    file_put_contents("test2.json", $jason_str);
      
    /*
    $jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator($json_a),
    RecursiveIteratorIterator::SELF_FIRST);

    foreach ($jsonIterator as $key => $val) {
        if(is_array($val)) {
            echo "$key:\n <br/>";
        } else {
            echo "$key => $val\n <br/>";
        }
    }
    */

 ?>
  </body>
</html>