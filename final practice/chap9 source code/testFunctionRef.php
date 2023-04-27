<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- array.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> array.php </title>
  </head>
  <body>
    <p>   
      <?php
      class Fruit {
            private $color = "red";

            public function getColor() {
                return $this->color;
            }

            public function &getColorByRef() {
                return $this->color;
        }
      }
      echo "TEST RUN 1:<br>";
$fruit = new Fruit;
$color = $fruit->getColor();
echo "Fruit's color is $color<br>"; 
$color = "green"; // does nothing, but bear with me
$color = $fruit->getColor();
echo "Fruit's color is $color<br>"; 

echo "TEST RUN 2:<br>";
$fruit = new Fruit;
$color = &$fruit->getColorByRef(); // also need to put & here
echo "Fruit's color is $color<br>"; 
$color = "green"; // now this changes the actual property of $fruit
$color = $fruit->getColor();
echo "Fruit's color is $color<br>"; 
     
    ?>


    </p>
  </body>
</html>