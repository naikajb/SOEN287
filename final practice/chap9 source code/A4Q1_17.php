<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exercise 1</title>
</head>
<body>
	<div>
	<?php
        
    function findSummation($n){
        if($n<0) return false;
        $sum = 0;
        for($i=1;$i<$n;$i++){
            $sum = $sum+$i;
        }
        return $sum;
    }
	
	function uppercaseFirstandLast($wordString){
	  $wordArray = explode(" ", $wordString); 
	  $newString = "";
	  foreach ($wordArray as $word){
		  if ($word != ""){
		    $word[0] = strtoupper($word[0]); 
		    $word[strlen($word)-1] = strtoupper($word[strlen($word)-1]); 
		    $newString = $newString.$word." "; 
		  }
	  }
	  return $newString;
	}
	
	function findAverage_and_Median($arrayNum){
	  $sum = 0;
      $size = sizeof($arrayNum);
      sort($arrayNum);
      //$mediam;
      $middleval = floor(($size-1)/2); // find the middle value, or the lowest middle value
        if($size % 2) { // odd number, middle is the median
            $median = $arrayNum[$middleval];
        } else { // even number, calculate avg of 2 medians
            $low = $arrayNum[$middleval];
            $high = $arrayNum[$middleval+1];
            $median = (($low+$high)/2);
        }
	  foreach($arrayNum as $num){
		$sum = $sum + $num;
	  }
	  $average = $sum/$size;
      return array("average"=>$average, "median"=>$median);
	}
        
    function find4Digits($str){
        $size = strlen($str);
        $count = 0;
        
        for($i=0;$i<$size;$i++){
           $char = $str[$i];
           if($count<4){
               if(preg_match("/\d/",$char)){
                   $count++;
                   $results[$i]= $char;
                }
           }
             
        }
        return $results;            
     
    }
	?>
	
    <h3> findSummation </h3>
	<?php
		$result = findSummation(10);
        if($result) echo "findSummation(10) = $result <br/>";
        else echo "findSummation(10), input not correct <br/>";
        
        $result = findSummation(-10);
        if($result) echo "findSummation(-10) = $result <br/>";
        else echo "findSummation(-10), input not correct <br/>";
        
        $result = findSummation("ABC");
        if($result) echo "findSummation(\"ABC\") = $result <br/>";
        else echo "findSummation(\"ABC\"), input not correct <br/>";
        
        $result = findSummation("-10");
        if($result) echo "findSummation(\"-10\") = $result <br/>";
        else echo "findSummation(\"-10\"), input not correct <br/>";
        
		
	?>
    <h3> Function uppercaseFirstLast: </h3>
	<form method="post" action="">
	<input type="text" name="value" placeholder="Please enter a string here">
	<input type="submit"><br/>
	<input type="text" readonly value=
		" <?php
		//call the function uppercaseFirstandLast
		if (isset($_POST['value'])){
			echo uppercaseFirstandLast($_POST['value']);
		}
		else{
			echo "Input value first please";
		}
		?>">
	</form>
	
    <h3>Function findAverage_and_Median:</h3>
	<?php
	$someNum = array(1,3,2,5);
	$results = findAverage_and_Median($someNum);
    echo "The average is ".$results["average"]." And the median is ".$results["median"];
	?>
    
        <h3>Function find4Digits</h3>
	<?php
	$str = "12Apples 34are good for you";
    $results = find4Digits($str); 
    if($results){
        foreach($results as $key=>$value){
            echo "$key =>$value, ";
        }
    }else echo "no digits";
        
	?>
	
	</div>
</body>
</html>
