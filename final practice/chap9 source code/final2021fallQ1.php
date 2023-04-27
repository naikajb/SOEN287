<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
	<div>
	<?php
	
	function findResults($arrayNum){
	  $sum = 0;
      $size = sizeof($arrayNum);
      sort($arrayNum);
      $middleval = floor(($size-1)/2); 
        if($size % 2) { 
            $second = $arrayNum[$middleval];
        } else {
            $low = $arrayNum[$middleval];
            $high = $arrayNum[$middleval+1];
            $second = (($low+$high)/2);
        }
	  foreach($arrayNum as $num){
		$sum = $sum + $num;
	  }
	  $first = $sum/$size;
      return array("first"=>$first, "second"=>$second);
	}
    ?>   
  
    <h3>Function findResults():</h3>
        
    <p>
        The first is _______. And the second is _______.
        </p>
	<?php
	$someNum = array(1,3,2,5);
	$results = findResults($someNum);
    echo "The first is ".$results["first"].". And the second is ".$results["second"].".";
	?>
	</div>
</body>
</html>
