<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
	<div> 
    <?php
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
