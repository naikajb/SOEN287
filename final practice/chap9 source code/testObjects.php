<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!-- today.php - A trivial example to illustrate a php document -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> helloWorld.php </title>
  </head>
  <body>
    <p>
      <?php
     class Person {
	   public $first;
	   public $last;
	 
	   public function __construct($f, $l) {
	       $this->first = $f;
	       $this->last = $l;
	   }
	 
	   public function greeting() {
	       return "Hello, my name is {$this->first} {$this->last}.";
	   }
	 
	   static public function staticGreeting($first, $last) {
	       return "Hello, my name is {$first} {$last}.";
	   }
	}
 
	$him = new Person('John', 'Smith');
	$her = new Person('Sally', 'Davis');
	 
	echo $him->greeting(); // prints "Hello, my name is John Smith."
	echo '<br />';
	echo $her->greeting(); // prints "Hello, my name is Sally Davis."
	echo '<br />';
	echo Person::staticGreeting('Jane', 'Doe'); // prints "Hello, my name is Jane Doe."
     ?>
    </p>
  </body>
</html>