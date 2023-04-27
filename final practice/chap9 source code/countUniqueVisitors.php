<?php
if(!isset($_COOKIE["visited"]))
    setcookie("visited","true",time()+3600);
?>
<html>
    <body>
        <?php
        $counter_name = "counter2.txt";
        // Check if a text file exists. If not create one and initialize it to zero.
        if (!file_exists($counter_name)) {
          $f = fopen($counter_name, "w");
          fwrite($f,"0");
          fclose($f);
        }
        // Read the current value of our counter file
        $f = fopen($counter_name,"r");
        $counterVal = fread($f, filesize($counter_name));
        fclose($f);
        // Has visitor been counted in this session?
        // If not, increase counter value by one
        if(!isset($_COOKIE['visited'])){
          $counterVal++;
          $f = fopen($counter_name, "w");
          fwrite($f, $counterVal);
          fclose($f); 
        }
        echo "<h2>You are visitor number $counterVal to this site</h2>";

?>


    </body>

</html>
