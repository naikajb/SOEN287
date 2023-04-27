<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- popcorn3.php - Processes the form described in
     popcorn3.html
     -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> Process the popcorn3.html form </title>
  </head>
  <body>
	   <h2> You need to buy </h2>
  
	  <?php
	
	     // Get form data values
	
	      $list = $_GET["groceries"];
	      //echo $list;
	      foreach($list as $item)
		      echo $item."<br/>"; 
	     
	      
	         
	     ?>
  </body>
</html>

